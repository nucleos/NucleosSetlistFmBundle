<?php

declare(strict_types=1);

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nucleos\SetlistFmBundle\Tests;

use Nucleos\SetlistFmBundle\DependencyInjection\NucleosSetlistFmExtension;
use Nucleos\SetlistFmBundle\NucleosSetlistFmBundle;
use PHPUnit\Framework\TestCase;

final class NucleosSetlistFmBundleTest extends TestCase
{
    public function testGetContainerExtension(): void
    {
        $bundle = new NucleosSetlistFmBundle();

        static::assertInstanceOf(NucleosSetlistFmExtension::class, $bundle->getContainerExtension());
    }
}
