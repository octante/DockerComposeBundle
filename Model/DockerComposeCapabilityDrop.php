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

class DockerComposeCapabilityDrop
{
    use DockerComposeList;

    /**
     * @var array
     */
    private $capabilityDrop;

    /**
     * @param $capability
     */
    public function addCapabilityDrop($capability)
    {
        // @todo List of capabilities
        $this->capabilityDrop[$capability] = $capability;
    }

    /**
     * Remove capability from list
     *
     * @param $capability
     */
    public function removeCapabilityDrop($capability)
    {
        unset($this->capabilityDrop[$capability]);
    }

    /**
     * @return array
     */
    public function getCapabilityDrop()
    {
        return $this->capabilityDrop;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFormattedList(
            'cap_drop',
            $this->capabilityDrop
        );
    }
}