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

use Octante\DockerComposeBundle\Model\DockerComposeDNS;

class DockerComposeDNSTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->sut = new DockerComposeDNS();
    }

    public function testSetDNS()
    {
        $this->sut->setDNS('8.8.8.8');
        $expected = '8.8.8.8';

        $this->assertEquals($expected, $this->sut->getDNS());
    }

    public function testRemoveDNS()
    {
        $this->sut->removeDNS('8.8.8.8');
        $this->assertNull($this->sut->getDNS());
    }

    public function testAddDNS()
    {
        $this->sut->addDNS('8.8.8.8');
        $this->sut->addDNS('8.8.8.9');
        $expected = array('8.8.8.8' => '8.8.8.8', '8.8.8.9' => '8.8.8.9');

        $this->assertEquals($expected, $this->sut->getDNSList());
    }

    public function testRemoveDNSItem()
    {
        $this->sut->addDNS('8.8.8.8');
        $this->sut->addDNS('8.8.8.9');
        $this->sut->removeDNSItem('8.8.8.8');
        $expected = array('8.8.8.9' => '8.8.8.9');

        $this->assertEquals($expected, $this->sut->getDNSList());
    }

    public function testToString()
    {
        $this->sut->addDNS('8.8.8.8');
        $this->sut->addDNS('8.8.8.9');
        $expected = "dns: \n" .
                    "    - 8.8.8.8\n" .
                    "    - 8.8.8.9";

        $this->assertEquals($expected, strval($this->sut));
    }
}
 