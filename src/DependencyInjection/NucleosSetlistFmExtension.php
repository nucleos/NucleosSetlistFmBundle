<?php

declare(strict_types=1);

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nucleos\SetlistFmBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

final class NucleosSetlistFmExtension extends Extension
{
    public function getAlias()
    {
        return 'nucleos_setlistfm';
    }

    /**
     * @param array<mixed> $configs
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $configuration = new Configuration();
        $config        = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $this->configureApi($container, $config);
        $this->configureHttpClient($container, $config);
    }

    /**
     * @param array<mixed> $config
     */
    private function configureApi(ContainerBuilder $container, array $config): void
    {
        $container->setParameter('nucleos_setlistfm.api.key', $config['api']['key']);
        $container->setParameter('nucleos_setlistfm.api.endpoint', $config['api']['endpoint']);
    }

    /**
     * @param array<mixed> $config
     */
    private function configureHttpClient(ContainerBuilder $container, array $config): void
    {
        $container->setAlias('nucleos_setlistfm.http.client', $config['http']['client']);
        $container->setAlias('nucleos_setlistfm.http.message_factory', $config['http']['message_factory']);
    }
}
