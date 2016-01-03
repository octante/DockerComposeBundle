<?php
/*
 * This file is part of the DockerComposeBundle package.
 *
 * (c) Issel Guberna <issel.guberna@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octante\DockerComposeBundle\Model;

use Octante\DockerComposeBundle\Traits\DockerComposeList;

class DockerComposePorts
{
    use DockerComposeList;

    /**
     * @var array
     */
    private $ports;

    /**
     * @param string $port
     */
    public function addPort($port)
    {
        $this->ports[$port] = "\"".$port."\"";
    }

    /**
     * Remove a port from list
     *
     * @param $port
     */
    public function removePort($port)
    {
        unset($this->ports[$port]);
    }

    /**
     * @return array
     */
    public function getPorts()
    {
        return $this->ports;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFormattedList(
            'ports',
            $this->ports
        );
    }
}