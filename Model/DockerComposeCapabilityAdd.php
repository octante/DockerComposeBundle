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

class DockerComposeCapabilityAdd
{
    use DockerComposeList;

    /**
     * @var array
     */
    private $capabilityAdd;

    /**
     * @param $capability
     */
    public function addCapabilityAdd($capability)
    {
        // @todo List of capabilities
        $this->capabilityAdd[$capability] = $capability;
    }

    /**
     * Remove capability from list
     *
     * @param $capability
     */
    public function removeCapabilityAdd($capability)
    {
        unset($this->capabilityAdd[$capability]);
    }

    /**
     * @return array
     */
    public function getCapabilityAdd()
    {
        return $this->capabilityAdd;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFormattedList(
            'cap_add',
            $this->capabilityAdd
        );
    }
}