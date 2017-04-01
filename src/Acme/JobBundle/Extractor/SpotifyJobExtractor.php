<?php

namespace Acme\JobBundle\Extractor;

use DOMElement as Node;
use Symfony\Component\DomCrawler\Crawler;

/**
 * @package Acme\JobBundle\Extractor
 */
class SpotifyJobExtractor
{
    /**
     * @param string $content
     *
     * @return Crawler
     */
    public static function extractJobNodes(string $content): Crawler
    {
        return (new Crawler($content))->filter('.job-listing');
    }

    /**
     * @param Node $node
     *
     * @return string
     */
    public static function extractJobUrl(Node $node): string
    {
        return (new Crawler($node))->filter('.job-title a')->attr('href');
    }

    /**
     * @param string $content
     *
     * @return array
     */
    public static function extractDetails(string $content): array
    {
        $crawler = new Crawler($content);

        return [
            trim($crawler->filter('.job-title')->text()), // Title
            trim($crawler->filter('.job-description')->first()->text()), // Description
        ];
    }
}
