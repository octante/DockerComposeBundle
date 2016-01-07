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

use Octante\DockerComposeBundle\Model\DockerComposePorts;

class DockerComposePortsTest extends \PHPUnit_Framework_TestCase
{
    private $sut;

    public function setUp()
    {
        $this->sut = new DockerComposePorts();
    }

    public function testAddPort()
    {
        $this->sut->addPort('3000');
        $this->sut->addPort('8000:8000');
        $expected = [
            '3000' => '"3000"',
            '8000:8000' => '"8000:8000"',
        ];

        $this->assertEquals($expected, $this->sut->getPorts());
    }

    public function testRemovePort()
    {
        $this->sut->addPort('3000');
        $this->sut->addPort('8000:8000');
        $this->sut->removePort('8000:8000');
        $expected = ['3000' => '"3000"'];

        $this->assertEquals($expected, $this->sut->getPorts());
    }

    public function testToString()
    {
        $this->sut->addPort('3000');
        $this->sut->addPort('8000:8000');
        $expected = "ports: \n" .
                    "    - \"3000\"\n" .
                    '    - "8000:8000"';

        $this->assertEquals($expected, strval($this->sut));
    }
}
