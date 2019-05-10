<?php

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
use Symfony\Component\HttpKernel\Bundle\BundleInterface;

class Core23SetlistFmBundleTest extends TestCase
{
    public function testItIsInstantiable(): void
    {
        $bundle = new Core23SetlistFmBundle();

        static::assertInstanceOf(BundleInterface::class, $bundle);
    }

    public function testGetContainerExtension(): void
    {
        $bundle = new Core23SetlistFmBundle();

        static::assertInstanceOf(Core23SetlistFmExtension::class, $bundle->getContainerExtension());
    }
}
