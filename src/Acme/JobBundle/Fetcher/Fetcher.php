<?php

namespace Acme\JobBundle\Fetcher;

use Acme\JobBundle\Scrapper\JobsScrapper;
use Doctrine\Common\Persistence\ObjectManager;
use Psr\Log\LoggerInterface;

/**
 * @package Acme\JobBundle\Fetcher
 */
class Fetcher
{
    /**
     * @var JobsScrapper
     */
    private $scrapper;

    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @param JobsScrapper  $scrapper
     * @param ObjectManager $om
     */
    public function __construct(JobsScrapper $scrapper, ObjectManager $om)
    {
        $this->scrapper = $scrapper;
        $this->om = $om;
    }

    /**
     * Fetch jobs using scrapper and persist to database.
     */
    public function fetch(): void
    {
        foreach ($this->scrapper->get() as $job) {
            echo sprintf("Fetched new job: %s\n", $job->getHeadline()); // TODO: use logger instead!

            $this->om->persist($job);

            // Flush immediately!
            $this->om->flush();
        }
    }
}
