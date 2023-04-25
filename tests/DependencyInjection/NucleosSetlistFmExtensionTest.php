<?php

declare(strict_types=1);

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nucleos\SetlistFmBundle\Tests\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Nucleos\SetlistFmBundle\DependencyInjection\NucleosSetlistFmExtension;

final class NucleosSetlistFmExtensionTest extends AbstractExtensionTestCase
{
    public function testLoadDefault(): void
    {
        $this->load([
            'api'  => [
                'key' => '0815',
            ],
            'http' => [
                'client'          => 'acme.client',
                'message_factory' => 'acme.message_factory',
            ],
        ]);

        $this->assertContainerBuilderHasParameter('nucleos_setlistfm.api.endpoint', 'https://api.setlist.fm/rest/1.0/');
        $this->assertContainerBuilderHasParameter('nucleos_setlistfm.api.key', '0815');

        $this->assertContainerBuilderHasAlias('nucleos_setlistfm.http.client', 'acme.client');
        $this->assertContainerBuilderHasAlias('nucleos_setlistfm.http.message_factory', 'acme.message_factory');
    }

    protected function getContainerExtensions(): array
    {
        return [
            new NucleosSetlistFmExtension(),
        ];
    }
}
