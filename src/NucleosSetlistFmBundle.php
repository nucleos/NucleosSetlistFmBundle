<?php

declare(strict_types=1);

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nucleos\SetlistFmBundle;

use Nucleos\SetlistFmBundle\DependencyInjection\NucleosSetlistFmExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class NucleosSetlistFmBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new NucleosSetlistFmExtension();
        }

        return $this->extension;
    }
}
