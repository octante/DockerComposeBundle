<?php

/*
 * This file is part of the DockerComposeBundle package.
 *
 * (c) Issel Guberna <issel.guberna@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octante\DockerComposeBundle\Services;

use Octante\DockerComposeBundle\Model\DockerComposeYml;

/**
 * DockerComposeYmlBuilder.
 *
 * @author Issel Guberna <issel.guberna@gmail.com>
 */
class DockerComposeYmlBuilder
{
    /**
     * @return DockerComposeYml
     */
    public function build()
    {
        return new DockerComposeYml();
    }
}
