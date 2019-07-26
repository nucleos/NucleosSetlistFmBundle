<?php

declare(strict_types=1);

/*
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core23\SetlistFmBundle;

use Core23\SetlistFmBundle\DependencyInjection\Core23SetlistFmExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class Core23SetlistFmBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new Core23SetlistFmExtension();
        }

        return $this->extension;
    }
}
