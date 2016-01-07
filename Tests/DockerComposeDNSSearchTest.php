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

use Octante\DockerComposeBundle\Model\DockerComposeDNSSearch;

class DockerComposeDNSSearchTest extends \PHPUnit_Framework_TestCase
{
    private $sut;

    public function setUp()
    {
        $this->sut = new DockerComposeDNSSearch();
    }

    public function testSetDNS()
    {
        $this->sut->setDNS('example.com');
        $expected = 'example.com';

        $this->assertEquals($expected, $this->sut->getDNS());
    }

    public function testRemoveDNS()
    {
        $this->sut->removeDNS('example.com');
        $this->assertNull($this->sut->getDNS());
    }

    public function testAddDNS()
    {
        $this->sut->addDNS('dc1.example.com');
        $this->sut->addDNS('dc2.example.com');
        $expected = [
            'dc1.example.com' => 'dc1.example.com',
            'dc2.example.com' => 'dc2.example.com',
        ];

        $this->assertEquals($expected, $this->sut->getDNSList());
    }

    public function testRemoveDNSItem()
    {
        $this->sut->addDNS('dc1.example.com');
        $this->sut->addDNS('dc2.example.com');
        $this->sut->removeDNSItem('dc1.example.com');
        $expected = ['dc2.example.com' => 'dc2.example.com'];

        $this->assertEquals($expected, $this->sut->getDNSList());
    }

    public function testToString()
    {
        $this->sut->addDNS('dc1.example.com');
        $this->sut->addDNS('dc2.example.com');
        $expected = "dns_search: \n" .
                    "    - dc1.example.com\n" .
                    '    - dc2.example.com';

        $this->assertEquals($expected, strval($this->sut));
    }

    public function testToString2()
    {
        $this->sut->setDNS('dc1.example.com');
        $expected = 'dns_search: dc1.example.com';

        $this->assertEquals($expected, strval($this->sut));
    }
}
