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

class DockerComposeEnvironment
{
    use DockerComposeList;

    /**
     * @var array
     */
    private $environment;

    /**
     * @param string $environment
     */
    public function addEnvironment($environment)
    {
        $this->environment[$environment] = $environment;
    }

    /**
     * Remove an environment from the list
     *
     * @param $environment
     */
    public function removeEnvironment($environment)
    {
        unset($this->environment[$environment]);
    }

    /**
     * @return array
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFormattedList(
            'environment',
            $this->getEnvironment(),
            false
        );
    }
}