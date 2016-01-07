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

use Octante\DockerComposeBundle\Model\DockerComposeVolumes;

class DockerComposeVolumesTest extends \PHPUnit_Framework_TestCase
{
    private $sut;

    public function setUp()
    {
        $this->sut = new DockerComposeVolumes();
    }

    public function testAddVolumes()
    {
        $this->sut->addVolume('/var/lib/mysql');
        $this->sut->addVolume('./cache:/tmp/cache');
        $expected = [
            '/var/lib/mysql' => '/var/lib/mysql',
            './cache:/tmp/cache' => './cache:/tmp/cache',
        ];

        $this->assertEquals($expected, $this->sut->getVolumes());
    }

    public function testRemoveVolumes()
    {
        $this->sut->addVolume('/var/lib/mysql');
        $this->sut->addVolume('./cache:/tmp/cache');
        $this->sut->removeVolume('/var/lib/mysql');
        $expected = ['./cache:/tmp/cache' => './cache:/tmp/cache'];

        $this->assertEquals($expected, $this->sut->getVolumes());
    }

    public function testToString()
    {
        $this->sut->addVolume('/var/lib/mysql');
        $this->sut->addVolume('./cache:/tmp/cache');
        $expected = "volumes: \n" .
                    "    - /var/lib/mysql\n" .
                    '    - ./cache:/tmp/cache';

        $this->assertEquals($expected, strval($this->sut));
    }
}
