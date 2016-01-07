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

class DockerComposeVolumes
{
    use DockerComposeList;

    /**
     * @var array
     */
    private $volumes;

    /**
     * @param string $volume
     */
    public function addVolume($volume)
    {
        $this->volumes[$volume] = $volume;
    }

    /**
     * Remove a volume from the list.
     *
     * @param $volume
     */
    public function removeVolume($volume)
    {
        unset($this->volumes[$volume]);
    }

    /**
     * @return array
     */
    public function getVolumes()
    {
        return $this->volumes;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFormattedList(
            'volumes',
            $this->volumes
        );
    }
}
