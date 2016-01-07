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

use Octante\DockerComposeBundle\Model\DockerComposeVolumesFrom;

class DockerComposeVolumesFromTest extends \PHPUnit_Framework_TestCase
{
    private $sut;

    public function setUp()
    {
        $this->sut = new DockerComposeVolumesFrom();
    }

    public function testAddVolumesFrom()
    {
        $this->sut->addVolumeFrom('service_name');
        $this->sut->addVolumeFrom('container_name');
        $expected = [
            'service_name' => 'service_name',
            'container_name' => 'container_name',
        ];

        $this->assertEquals($expected, $this->sut->getVolumesFrom());
    }

    public function testRemoveVolumesFrom()
    {
        $this->sut->addVolumeFrom('service_name');
        $this->sut->addVolumeFrom('container_name');
        $this->sut->removeVolumeFrom('service_name');
        $expected = ['container_name' => 'container_name'];

        $this->assertEquals($expected, $this->sut->getVolumesFrom());
    }

    public function testToString()
    {
        $this->sut->addVolumeFrom('service_name');
        $this->sut->addVolumeFrom('container_name');
        $expected = "volumes_from: \n" .
                    "    - service_name\n" .
                    '    - container_name';

        $this->assertEquals($expected, strval($this->sut));
    }
}
