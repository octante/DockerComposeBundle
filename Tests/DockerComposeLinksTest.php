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

use Octante\DockerComposeBundle\Model\DockerComposeLinks;

class DockerComposeLinksTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->sut = new DockerComposeLinks();
    }

    public function testAddLink()
    {
        $this->sut->addLink('db');
        $this->sut->addLink('db:database');
        $expected = array(
            'db' => "db",
            'db:database' => "db:database"
        );

        $this->assertEquals($expected, $this->sut->getLinks());
    }

    public function testRemoveLink()
    {
        $this->sut->addLink('db');
        $this->sut->addLink('db:database');
        $this->sut->removeLink('db:database');
        $expected = array('db' => "db");

        $this->assertEquals($expected, $this->sut->getLinks());
    }

    public function testToString()
    {
        $this->sut->addLink('db');
        $this->sut->addLink('db:database');
        $expected = "links: \n" .
                    "    - db\n" .
                    "    - db:database";

        $this->assertEquals($expected, strval($this->sut));
    }
}
 