<?php

namespace Acme\JobBundle\Command;

use Acme\JobBundle\Fetcher\Fetcher;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @package Acme\JobBundle\Command
 */
class FetchCommand extends Command
{
    /**
     * @var Fetcher
     *
     * TODO: would be nice to use fetchers registry
     */
    private $fetcher;

    /**
     * @param Fetcher $fetcher
     */
    public function __construct(Fetcher $fetcher)
    {
        parent::__construct();

        $this->fetcher = $fetcher;
    }

    /**
     * {@inheritdoc}
     */
    public function configure()
    {
        $this->setName('acme:job:fetch');
    }

    /**
     * {@inheritdoc}
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('Crawling...'));

        $this->fetcher->fetch();

        $output->writeln('<info>Done</info>');
    }
}
