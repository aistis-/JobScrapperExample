<?php

namespace Acme\JobBundle\Scrapper;

use Acme\JobBundle\Entity\Job;
use Acme\JobBundle\Exception\UnreachableSource;
use Generator;

/**
 * @package Acme\JobBundle\Scrapper
 */
interface JobsScrapper
{
    /**
     * Get Job instances by scrapping remote source.
     *
     * @return Generator|Job[]
     * @throws UnreachableSource
     */
    public function get(): Generator;
}
