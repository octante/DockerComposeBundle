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

use Octante\DockerComposeBundle\Exceptions\DockerComposeInvalidLogDriverException;
use Octante\DockerComposeBundle\Traits\DockerComposeList;
use Octante\DockerComposeBundle\ValueObject\LogDriverType;

class DockerComposeLogDriver
{
    use DockerComposeList;

    /**
     * @var string
     */
    private $logDriver;

    /**
     * @var array
     */
    private $logOptions;

    /**
     * @var array
     */
    private $logDriverTypes = array(
        "json-file",
        "syslog",
        "none"
    );

    /**
     * @param $logDriver
     *
     * @throws \Octante\DockerComposeBundle\Exceptions\DockerComposeInvalidLogDriverException
     */
    public function setLogDriver($logDriver)
    {
        if (!in_array($logDriver, $this->logDriverTypes)) {
            throw new DockerComposeInvalidLogDriverException();
        }

        $this->logDriver = "\"".$logDriver."\"";
    }

    /**
     * @param $logOptionKey
     * @param $logOptionValue
     */
    public function addLogOption($logOptionKey, $logOptionValue)
    {
        $this->logOptions[$logOptionKey] = "\"".$logOptionValue."\"";
    }

    /**
     * Remove log driver
     */
    public function removeLogDriver()
    {
        $this->logDriver = null;
    }

    /**
     * Remove a log option from list
     */
    public function removeLogOption($logOptionKey)
    {
        unset($this->logOptions[$logOptionKey]);
    }

    /**
     * @return string
     */
    public function getLogDriver()
    {
        return $this->logDriver;
    }

    /**
     * @return array
     */
    public function getLogOptions()
    {
        return $this->logOptions;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $value = '';
        if ($this->logDriver != null) {
            $value = "log_driver: " . $this->logDriver . "\n";
        }

        $value .= $this->getFormattedList('log_opt', $this->logOptions, true);

        return $value;
    }
}