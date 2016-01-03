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

class DockerComposeSecurityOption
{
    use DockerComposeList;

    /**
     * @var array
     */
    private $securityOption;

    /**
     * @param $securityOption
     */
    public function addSecurityOption($securityOption)
    {
        $this->securityOption[$securityOption] = $securityOption;
    }

    /**
     * Remove security option from list
     *
     * @param $securityOption
     */
    public function removeSecurityOption($securityOption)
    {
        unset($this->securityOption[$securityOption]);
    }

    /**
     * @return array
     */
    public function getSecurityOptions()
    {
        return $this->securityOption;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFormattedList(
            'security_opt',
            $this->securityOption
        );
    }
}