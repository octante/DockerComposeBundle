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

use Octante\DockerComposeBundle\Model\DockerComposeCapabilityAdd;

class DockerComposeCapabilityAddTest extends \PHPUnit_Framework_TestCase
{
    private $sut;

    public function setUp()
    {
        $this->sut = new DockerComposeCapabilityAdd();
    }

    public function testAddCapabilityAdd()
    {
        $this->sut->addcapabilityAdd('ALL');
        $expected = ['ALL' => 'ALL'];

        $this->assertEquals($expected, $this->sut->getCapabilityAdd());
    }

    public function testRemoveCapabilityAdd()
    {
        $this->sut->addcapabilityAdd('ALL');
        $this->sut->addcapabilityAdd('ALL2');
        $this->sut->removecapabilityAdd('ALL2');
        $expected = ['ALL' => 'ALL'];

        $this->assertEquals($expected, $this->sut->getCapabilityAdd());
    }

    public function testToString()
    {
        $this->sut->addcapabilityAdd('ALL');
        $this->sut->addcapabilityAdd('ALL2');
        $expected = "cap_add: \n" .
                    "    - ALL\n" .
                    '    - ALL2';

        $this->assertEquals($expected, strval($this->sut));
    }
}
