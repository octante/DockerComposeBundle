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


use Octante\DockerComposeBundle\Model\DockerComposeCapabilityDrop;

class DockerComposeCapabilityDropTest extends \PHPUnit_Framework_TestCase
{
    private $sut;

    public function setUp()
    {
        $this->sut = new DockerComposeCapabilityDrop();
    }

    public function testAddCapabilityDrop()
    {
        $this->sut->addcapabilityDrop('ALL');
        $expected = array('ALL' => 'ALL');

        $this->assertEquals($expected, $this->sut->getCapabilityDrop());
    }

    public function testRemoveCapabilityDrop()
    {
        $this->sut->addcapabilityDrop('ALL');
        $this->sut->addcapabilityDrop('ALL2');
        $this->sut->removecapabilityDrop('ALL2');
        $expected = array('ALL' => 'ALL');

        $this->assertEquals($expected, $this->sut->getCapabilityDrop());
    }

    public function testToString()
    {
        $this->sut->addcapabilityDrop('ALL');
        $this->sut->addcapabilityDrop('ALL2');
        $expected = "cap_drop: \n" .
                    "    - ALL\n" .
                    "    - ALL2";

        $this->assertEquals($expected, strval($this->sut));

    }
}