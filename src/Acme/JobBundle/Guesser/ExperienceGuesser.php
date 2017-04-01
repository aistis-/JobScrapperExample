<?php

namespace Acme\JobBundle\Guesser;

/**
 * @package Acme\JobBundle\Guesser
 */
class ExperienceGuesser
{
    /**
     * @var array|string[]
     */
    private $experienceKeywords = ['years of experience', 'years of relevant experience'];

    /**
     * @var array|string[]
     */
    private $experienceRegexps = ['/(\d)+(\+)? years of (relevant )?experience/'];

    /**
     * @param string $content
     *
     * @return bool
     */
    public function isExperienceNeeded(string $content): bool
    {
        foreach ($this->experienceKeywords as $keyword) {
            if (false !== strpos($this->tokenize($content), $keyword)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param string $content
     *
     * @return int
     */
    public function getNeededExperience(string $content): int
    {
        if (false === $this->isExperienceNeeded($content)) {
            // Do not guess if experience is not needed.
            return 0;
        }

        foreach ($this->experienceRegexps as $regexp) {
            $matches = [];

            // Execute the search.
            preg_match($regexp, $this->tokenize($content), $matches);

            if (empty($matches)) {
                return 0;
            }

            // Parse integer.
            return (int)$matches[0];
        }

        return 0;
    }

    /**
     * @param string $content
     *
     * @return string
     */
    private function tokenize(string $content): string
    {
        return mb_strtolower($content);
    }
}
