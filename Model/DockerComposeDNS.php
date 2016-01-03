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

class DockerComposeDNS
{
    use DockerComposeList;

    /**
     * @var string
     */
    private $dns;

    /**
     * @var array
     */
    private $dnsList;

    /**
     * @param $dns
     */
    public function setDNS($dns)
    {
        $this->dns = $dns;
    }

    /**
     * @param $dns
     */
    public function addDNS($dns)
    {
        $this->dnsList[$dns] = $dns;
    }

    /**
     * Remove dns value
     */
    public function removeDNS()
    {
        $this->dns = null;
    }

    /**
     * Remove dns from list
     *
     * @param $dns
     */
    public function removeDNSItem($dns)
    {
        unset($this->dnsList[$dns]);
    }

    /**
     * @return string
     */
    public function getDNS()
    {
        return $this->dns;
    }

    /**
     * @return array
     */
    public function getDNSList()
    {
        return $this->dnsList;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $value = "";
        if ($this->dns != null) {
            // Single value
            $value .= "dns: " . $this->dns;
        } elseif (!empty($this->dnsList)) {
            // List
            $value .= $this->getFormattedList(
                'dns',
                $this->dnsList
            );
        }

        return $value;
    }
}