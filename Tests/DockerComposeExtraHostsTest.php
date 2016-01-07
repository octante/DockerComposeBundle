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

use Octante\DockerComposeBundle\Model\DockerComposeExtraHosts;

class DockerComposeExtraHostsTest extends \PHPUnit_Framework_TestCase
{
    private $sut;

    public function setUp()
    {
        $this->sut = new DockerComposeExtraHosts();
    }

    public function testAddExtraHost()
    {
        $this->sut->addExtraHost('somehost:162.242.195.82');
        $this->sut->addExtraHost('otherhost:50.31.209.229');
        $expected = [
            'somehost:162.242.195.82' => '"somehost:162.242.195.82"',
            'otherhost:50.31.209.229' => '"otherhost:50.31.209.229"',
        ];

        $this->assertEquals($expected, $this->sut->getExtraHosts());
    }

    public function testRemoveExtraHost()
    {
        $this->sut->addExtraHost('somehost:162.242.195.82');
        $this->sut->addExtraHost('otherhost:50.31.209.229');
        $this->sut->removeExtraHost('otherhost:50.31.209.229');
        $expected = ['somehost:162.242.195.82' => '"somehost:162.242.195.82"'];

        $this->assertEquals($expected, $this->sut->getExtraHosts());
    }

    public function testToString()
    {
        $this->sut->addExtraHost('somehost:162.242.195.82');
        $this->sut->addExtraHost('otherhost:50.31.209.229');
        $expected = "extra_hosts: \n" .
                    "    - \"somehost:162.242.195.82\"\n" .
                    '    - "otherhost:50.31.209.229"';

        $this->assertEquals($expected, strval($this->sut));
    }
}
