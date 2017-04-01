<?php

namespace Acme\JobBundle\Entity;

use DateTime;

/**
 * @package Acme\JobBundle\Entity
 */
class Job
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $headline;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $description;

    /**
     * @var bool
     */
    private $experienceRequired;

    /**
     * @var int
     */
    private $yearsOfExperienceRequired;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * @param string $headline
     * @param string $url
     * @param string $description
     * @param bool   $experienceRequired
     * @param int    $yearsOfExperienceRequired
     */
    public function __construct(
        string $headline,
        string $url,
        string $description,
        bool $experienceRequired,
        int $yearsOfExperienceRequired
    ) {
        $this->headline = $headline;
        $this->url = $url;
        $this->description = $description;
        $this->experienceRequired = $experienceRequired;
        $this->yearsOfExperienceRequired = $yearsOfExperienceRequired;

        $this->createdAt = new DateTime();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getHeadline(): string
    {
        return $this->headline;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isExperienceRequired(): bool
    {
        return $this->experienceRequired;
    }

    /**
     * @return int
     */
    public function getYearsOfExperienceRequired(): int
    {
        return $this->yearsOfExperienceRequired;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}
