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

use Octante\DockerComposeBundle\Model\DockerComposeDevices;

class DockerComposeDevicesTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->sut = new DockerComposeDevices();
    }

    public function testAddDevice()
    {
        $this->sut->addDevice('/dev/ttyUSB0:/dev/ttyUSB0');
        $expected = array('/dev/ttyUSB0:/dev/ttyUSB0' => "\"/dev/ttyUSB0:/dev/ttyUSB0\"");

        $this->assertEquals($expected, $this->sut->getDevices());
    }

    public function testRemoveDevice()
    {
        $this->sut->addDevice('/dev/ttyUSB0:/dev/ttyUSB0');
        $this->sut->addDevice('/dev/ttyUSB0:/dev/ttyUSB1');
        $this->sut->removeDevice('/dev/ttyUSB0:/dev/ttyUSB1');
        $expected = array('/dev/ttyUSB0:/dev/ttyUSB0' => "\"/dev/ttyUSB0:/dev/ttyUSB0\"");

        $this->assertEquals($expected, $this->sut->getDevices());
    }

    public function testToString()
    {
        $this->sut->addDevice('/dev/ttyUSB0:/dev/ttyUSB0');
        $expected = "devices: \n" .
                    "    - \"/dev/ttyUSB0:/dev/ttyUSB0\"";

        $this->assertEquals($expected, strval($this->sut));
    }
}
 