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

class DockerComposeExternalLinks
{
    use DockerComposeList;

    /**
     * @var array
     */
    private $externalLinks;

    /**
     * @param string $externalLink
     */
    public function addExternalLink($externalLink)
    {
        $this->externalLinks[$externalLink] = $externalLink;
    }

    /**
     * Remove link from external links.
     *
     * @param $externalLink
     */
    public function removeExternalLink($externalLink)
    {
        unset($this->externalLinks[$externalLink]);
    }

    /**
     * @return array
     */
    public function getExternalLinks()
    {
        return $this->externalLinks;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFormattedList(
            'external_links',
            $this->externalLinks
        );
    }
}
