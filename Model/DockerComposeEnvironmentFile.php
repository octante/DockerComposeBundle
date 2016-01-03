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

class DockerComposeEnvironmentFile
{
    use DockerComposeList;

    /**
     * @var string
     */
    private $environmentFile;

    /**
     * @var array
     */
    private $environmentFiles;

    /**
     * Sets an environment file
     *
     * @param string $environmentFile
     */
    public function setEnvironmentFile($environmentFile)
    {
        $this->environmentFile = $environmentFile;
    }

    /**
     * Add new environment file
     *
     * @param $environmentFile
     */
    public function addEnvironmentFile($environmentFile)
    {
        $this->environmentFiles[$environmentFile] = $environmentFile;
    }

    /**
     * Remove an item from environment files
     */
    public function removeEnvironmentFile()
    {
        $this->environmentFile = null;
    }

    /**
     * @param $environmentFile
     */
    public function removeEnvironmentFileItem($environmentFile)
    {
        unset($this->environmentFiles[$environmentFile]);
    }

    /**
     * @return array
     */
    public function getEnvironmentFile()
    {
        return $this->environmentFile;
    }

    /**
     * @return array
     */
    public function getEnvironmentFiles()
    {
        return $this->environmentFiles;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $value = '';
        if ($this->environmentFile != null) {
            $value .= "env_file: " . $this->environmentFile;
        } else {
            $value .= $this->getFormattedList(
                'env_file',
                $this->getEnvironmentFiles()
            );
        }

        return $value;
    }
}