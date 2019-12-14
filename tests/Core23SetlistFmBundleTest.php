<?php

declare(strict_types=1);

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\SetlistFmBundle\Tests;

use Core23\SetlistFmBundle\Core23SetlistFmBundle;
use Core23\SetlistFmBundle\DependencyInjection\Core23SetlistFmExtension;
use PHPUnit\Framework\TestCase;

final class Core23SetlistFmBundleTest extends TestCase
{
    public function testGetContainerExtension(): void
    {
        $bundle = new Core23SetlistFmBundle();

        static::assertInstanceOf(Core23SetlistFmExtension::class, $bundle->getContainerExtension());
    }
}
