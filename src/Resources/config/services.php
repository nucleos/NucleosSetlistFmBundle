<?php

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Nucleos\SetlistFm\Connection\PsrClientConnection;
use Nucleos\SetlistFm\Service\ArtistService;
use Nucleos\SetlistFm\Service\CityService;
use Nucleos\SetlistFm\Service\CountryService;
use Nucleos\SetlistFm\Service\SetlistService;
use Nucleos\SetlistFm\Service\UserService;
use Nucleos\SetlistFm\Service\VenueService;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\Reference;

return static function (ContainerConfigurator $container): void {
    $container->services()

        ->set('nucleos_setlistfm.connection', PsrClientConnection::class)
            ->args([
                new Reference('nucleos_setlistfm.http.client'),
                new Reference('nucleos_setlistfm.http.message_factory'),
                new Parameter('nucleos_setlistfm.api.key'),
                new Parameter('nucleos_setlistfm.api.endpoint'),
            ])

        ->set('nucleos_setlistfm.service.artist', ArtistService::class)
            ->args([
                new Reference('nucleos_setlistfm.connection'),
            ])

        ->set('nucleos_setlistfm.service.country', CountryService::class)
            ->args([
                new Reference('nucleos_setlistfm.connection'),
            ])

        ->set('nucleos_setlistfm.service.city', CityService::class)
            ->args([
                new Reference('nucleos_setlistfm.connection'),
            ])

        ->set('nucleos_setlistfm.service.user', UserService::class)
            ->args([
                new Reference('nucleos_setlistfm.connection'),
            ])

        ->set('nucleos_setlistfm.service.setlist', SetlistService::class)
            ->args([
                new Reference('nucleos_setlistfm.connection'),
            ])

        ->set('nucleos_setlistfm.service.venue', VenueService::class)
            ->args([
                new Reference('nucleos_setlistfm.connection'),
            ])

        ->alias(ArtistService::class, 'nucleos_setlistfm.service.artist')
            ->public()

        ->alias(CountryService::class, 'nucleos_setlistfm.service.country')
            ->public()

        ->alias(CityService::class, 'nucleos_setlistfm.service.city')
            ->public()

        ->alias(UserService::class, 'nucleos_setlistfm.service.user')
            ->public()

        ->alias(SetlistService::class, 'nucleos_setlistfm.service.setlist')
            ->public()

        ->alias(VenueService::class, 'nucleos_setlistfm.service.venue')
            ->public()
    ;
};
