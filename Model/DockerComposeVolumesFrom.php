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

class DockerComposeVolumesFrom
{
    use DockerComposeList;

    /**
     * @var array
     */
    private $volumesFrom;

    /**
     * @param string $volumeFrom
     */
    public function addVolumeFrom($volumeFrom)
    {
        $this->volumesFrom[$volumeFrom] = $volumeFrom;
    }

    /**
     * Remove a volume from from the list
     *
     * @param $volumesFrom
     */
    public function removeVolumeFrom($volumesFrom)
    {
        unset($this->volumesFrom[$volumesFrom]);
    }

    /**
     * @return array
     */
    public function getVolumesFrom()
    {
        return $this->volumesFrom;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFormattedList(
            'volumes_from',
            $this->volumesFrom
        );
    }
}