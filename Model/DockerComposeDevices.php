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

class DockerComposeDevices
{
    use DockerComposeList;

    /**
     * @var array
     */
    private $devices;

    /**
     * @param $device
     */
    public function addDevice($device)
    {
        $this->devices[$device] = '"' . $device . '"';
    }

    /**
     * Remove device from list.
     *
     * @param $device
     */
    public function removeDevice($device)
    {
        unset($this->devices[$device]);
    }

    /**
     * @return array
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFormattedList(
            'devices',
            $this->devices
        );
    }
}
