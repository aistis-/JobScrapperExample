<?php

namespace Acme\JobBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * @package Acme\JobBundle\Command
 */
class AcmeJobExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('clients.yml');
        $loader->load('commands.yml');
        $loader->load('factories.yml');
        $loader->load('fetchers.yml');
        $loader->load('guessers.yml');
        $loader->load('scrappers.yml');
    }
}
