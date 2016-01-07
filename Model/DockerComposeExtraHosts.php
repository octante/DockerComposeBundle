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

class DockerComposeExtraHosts
{
    use DockerComposeList;

    /**
     * @var array
     */
    private $extraHosts;

    /**
     * @param $extraHost
     */
    public function addExtraHost($extraHost)
    {
        $this->extraHosts[$extraHost] = '"' . $extraHost . '"';
    }

    /**
     * Remove extra host.
     */
    public function removeExtraHost($extraHost)
    {
        unset($this->extraHosts[$extraHost]);
    }

    /**
     * @return array
     */
    public function getExtraHosts()
    {
        return $this->extraHosts;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFormattedList(
            'extra_hosts',
            $this->extraHosts
        );
    }
}
