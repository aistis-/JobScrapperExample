<?php

namespace Acme\JobBundle\Scrapper;

use Acme\JobBundle\Exception\UnreachableSource;
use Acme\JobBundle\Extractor\SpotifyJobExtractor;
use Acme\JobBundle\Factory\JobFactory;
use Generator;
use GuzzleHttp\Client;
use DOMElement as Node;
use GuzzleHttp\Exception\GuzzleException;

/**
 * @package Acme\JobBundle\Scrapper
 */
class SpotifyScrapper implements JobsScrapper
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var JobFactory
     */
    private $factory;

    /**
     * @var string
     */
    private $url;

    /**
     * @param Client     $client
     * @param JobFactory $factory
     * @param string     $url
     */
    public function __construct(Client $client, JobFactory $factory, string $url)
    {
        $this->client = $client;
        $this->factory = $factory;
        $this->url = $url;
    }

    /**
     * {@inheritdoc}
     */
    public function get(): Generator
    {
        try {
            $response = $this->client->request('GET', $this->url);
        } catch (GuzzleException $e) {
            throw new UnreachableSource(sprintf('Error trying to access the URL. Error: %s', $e->getMessage()));
        }

        /** @var Node $node */
        foreach (SpotifyJobExtractor::extractJobNodes($response->getBody()->getContents()) as $node) {
            $url = SpotifyJobExtractor::extractJobUrl($node);

            try {
                $response = $this->client->request('GET', 'https://www.spotify.com' . $url);
            } catch (GuzzleException $e) {
                // Let's ignore. TODO: log an error.
                continue;
            }

            [$title, $description] = SpotifyJobExtractor::extractDetails($response->getBody()->getContents());

            yield $this->factory->create($title, $url, $description);
        }
    }
}
