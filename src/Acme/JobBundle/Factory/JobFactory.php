<?php

namespace Acme\JobBundle\Factory;

use Acme\JobBundle\Entity\Job;
use Acme\JobBundle\Guesser\ExperienceGuesser;

/**
 * @package Acme\JobBundle\Factory
 */
class JobFactory
{
    /**
     * @var ExperienceGuesser
     */
    private $experienceGuesser;

    /**
     * @param ExperienceGuesser $experienceGuesser
     */
    public function __construct(ExperienceGuesser $experienceGuesser)
    {
        $this->experienceGuesser = $experienceGuesser;
    }

    /**
     * @param string $title
     * @param string $url
     * @param string $description
     *
     * @return Job
     */
    public function create(string $title, string $url, string $description): Job
    {
        return new Job(
            $title,
            $url,
            $description,
            $this->experienceGuesser->isExperienceNeeded($description),
            $this->experienceGuesser->getNeededExperience($description)
        );
    }
}
