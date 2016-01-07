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

class DockerComposeLinks
{
    use DockerComposeList;

    /**
     * @var array
     */
    private $links;

    /**
     * @param string $link
     */
    public function addLink($link)
    {
        $this->links[$link] = $link;
    }

    /**
     * Remove link from list.
     *
     * @param $link
     */
    public function removeLink($link)
    {
        unset($this->links[$link]);
    }

    /**
     * @return array
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFormattedList(
            'links',
            $this->links
        );
    }
}
