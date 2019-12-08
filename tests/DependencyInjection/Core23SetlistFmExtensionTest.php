<?php

declare(strict_types=1);

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\SetlistFmBundle\Tests\DependencyInjection;

use Core23\SetlistFmBundle\DependencyInjection\Core23SetlistFmExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

final class Core23SetlistFmExtensionTest extends AbstractExtensionTestCase
{
    public function testLoadDefault(): void
    {
        $this->load([
            'api' => [
                'key' => '0815',
            ],
            'http' => [
                'client'          => 'acme.client',
                'message_factory' => 'acme.message_factory',
            ],
        ]);

        $this->assertContainerBuilderHasParameter('core23_setlistfm.api.endpoint', 'https://api.setlist.fm/rest/1.0/');
        $this->assertContainerBuilderHasParameter('core23_setlistfm.api.key', '0815');

        $this->assertContainerBuilderHasAlias('core23_setlistfm.http.client', 'acme.client');
        $this->assertContainerBuilderHasAlias('core23_setlistfm.http.message_factory', 'acme.message_factory');
    }

    protected function getContainerExtensions(): array
    {
        return [
            new Core23SetlistFmExtension(),
        ];
    }
}
