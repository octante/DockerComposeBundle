<?php
/*
 * This file is part of the DockerComposeBundle package.
 *
 * (c) Issel Guberna <issel.guberna@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octante\DockerComposeBundle\Tests;

use Octante\DockerComposeBundle\Model\DockerComposeExternalLinks;

class DockerComposeExternalLinksTest extends \PHPUnit_Framework_TestCase
{
    private $sut;

    public function setUp()
    {
        $this->sut = new DockerComposeExternalLinks();
    }

    public function testAddExternalLink()
    {
        $this->sut->addExternalLink('redis_1');
        $this->sut->addExternalLink('project_db_1:mysql');
        $expected = [
            'redis_1' => 'redis_1',
            'project_db_1:mysql' => 'project_db_1:mysql',
        ];

        $this->assertEquals($expected, $this->sut->getExternalLinks());
    }

    public function testRemoveExternalLink()
    {
        $this->sut->addExternalLink('redis_1');
        $this->sut->addExternalLink('project_db_1:mysql');
        $this->sut->removeExternalLink('redis_1');
        $expected = ['project_db_1:mysql' => 'project_db_1:mysql'];

        $this->assertEquals($expected, $this->sut->getExternalLinks());
    }

    public function testToString()
    {
        $this->sut->addExternalLink('redis_1');
        $this->sut->addExternalLink('project_db_1:mysql');
        $expected = "external_links: \n" .
                    "    - redis_1\n" .
                    '    - project_db_1:mysql';

        $this->assertEquals($expected, strval($this->sut));
    }
}
