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

class DockerComposeExposedPorts
{
    use DockerComposeList;

    /**
     * @var array
     */
    private $exposedPorts;

    /**
     * @param string $exposedPort
     */
    public function addExposedPort($exposedPort)
    {
        $this->exposedPorts[$exposedPort] = "\"".$exposedPort."\"";
    }

    /**
     * Remove an exposed port of the list
     *
     * @param $exposedPort
     */
    public function removeExposedPort($exposedPort)
    {
        unset($this->exposedPorts[$exposedPort]);
    }

    /**
     * @return array
     */
    public function getExposedPorts()
    {
        return $this->exposedPorts;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFormattedList(
            'expose',
            $this->exposedPorts
        );
    }
}