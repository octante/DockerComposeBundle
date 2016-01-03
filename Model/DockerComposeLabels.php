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

class DockerComposeLabels
{
    use DockerComposeList;

    /**
     * @var array
     */
    private $labels;

    /**
     * @param $label
     */
    public function addLabel($label)
    {
        $this->labels[$label] = "\"$label\"";
    }

    /**
     * Remove link from list
     *
     * @param $label
     */
    public function removeLabel($label)
    {
        unset($this->labels[$label]);
    }

    /**
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFormattedList(
            'labels',
            $this->labels
        );
    }
}