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

use Octante\DockerComposeBundle\Model\DockerComposeExposedPorts;

class DockerComposeExposedPortsTest extends \PHPUnit_Framework_TestCase
{
    private $sut;

    public function setUp()
    {
        $this->sut = new DockerComposeExposedPorts();
    }

    public function testAddExposedPorts()
    {
        $this->sut->addExposedPort('3000');
        $this->sut->addExposedPort('8000');
        $expected = ['3000' => '"3000"', '8000' => '"8000"'];

        $this->assertEquals($expected, $this->sut->getExposedPorts());
    }

    public function testRemoveExposedPorts()
    {
        $this->sut->addExposedPort('3000');
        $this->sut->addExposedPort('8000');
        $this->sut->removeExposedPort('8000');
        $expected = ['3000' => '"3000"'];

        $this->assertEquals($expected, $this->sut->getExposedPorts());
    }

    public function testToString()
    {
        $this->sut->addExposedPort('3000');
        $this->sut->addExposedPort('8000');
        $expected = "expose: \n" .
                    "    - \"3000\"\n" .
                    '    - "8000"';

        $this->assertEquals($expected, strval($this->sut));
    }
}
