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

use Octante\DockerComposeBundle\Model\DockerComposeLogDriver;

class DockerComposeLogDriverTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->sut = new DockerComposeLogDriver();
    }

    public function testSetLogDriver()
    {
        $this->sut->setLogDriver('json-file');
        $expected = "\"json-file\"";

        $this->assertEquals($expected, $this->sut->getLogDriver());
    }

    /**
     * @expectedException \Octante\DockerComposeBundle\Exceptions\DockerComposeInvalidLogDriverException
     */
    public function testSetLogDriverException()
    {
        $this->sut->setLogDriver('invalid-log-driver');
    }

    public function testAddLogOption()
    {
        $this->sut->addLogOption('address', 'tcp://192.168.0.42:123');
        $expected = array(
            'address' => "\"tcp://192.168.0.42:123\""
        );

        $this->assertEquals($expected, $this->sut->getLogOptions());
    }

    public function testRemoveLogDriver()
    {
        $this->sut->removeLogDriver();

        $this->assertNull($this->sut->getLogDriver());
    }

    public function testRemoveLogOption()
    {
        $this->sut->addLogOption('address', 'tcp://192.168.0.42:123');
        $this->sut->removeLogOption('address');

        $this->assertEquals(array(), $this->sut->getLogOptions());
    }

    public function testToString()
    {
        $this->sut->setLogDriver('syslog');
        $this->sut->addLogOption('address', 'tcp://192.168.0.42:123');
        $expected = "log_driver: \"syslog\"\n" .
                    "log_opt: \n" .
                    "    - address: \"tcp://192.168.0.42:123\"";

        $this->assertEquals($expected, strval($this->sut));
    }
}
 