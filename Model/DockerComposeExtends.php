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
use Octante\DockerComposeBundle\Exceptions\DockerComposeExtendsException;

class DockerComposeExtends
{
    use DockerComposeList;

    /**
     * @var string
     */
    private $extendsFileName;

    /**
     * @var string
     */
    private $extendsServiceName;

    /**
     * @param string $fileName
     */
    public function addExtendFileName($fileName)
    {
        $this->extendsFileName = $fileName;
    }

    /**
     * @param string $serviceName
     */
    public function addExtendServiceName($serviceName)
    {
        $this->extendsServiceName = $serviceName;
    }

    /**
     * Remove extend file name
     */
    public function removeExtendFileName()
    {
        $this->extendsFileName = null;
    }

    /**
     * Remove extend service name
     */
    public function removeExtendServiceName()
    {
        $this->extendsServiceName = null;
    }

    /**
     * @return array
     */
    public function getExtendFileName()
    {
        return $this->extendsFileName;
    }

    /**
     * @return array
     */
    public function getExtendServiceName()
    {
        return $this->extendsServiceName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $value = "extends: \n";
        $value .= "    file: " . $this->extendsFileName . "\n";
        $value .= "    service: " . $this->extendsServiceName;

        return $value;
    }
}