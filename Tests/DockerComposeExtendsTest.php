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

use Octante\DockerComposeBundle\Model\DockerComposeExtends;

class DockerComposeExtendsTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->sut = new DockerComposeExtends();
    }

    public function testAddExtend()
    {
        $this->sut->addExtendFileName('common.yml');
        $this->sut->addExtendServiceName('webapp');
        $expectedFileName = 'common.yml';
        $expectedServiceName = 'webapp';

        $this->assertEquals($expectedFileName, $this->sut->getExtendFileName());
        $this->assertEquals($expectedServiceName, $this->sut->getExtendServiceName());
    }

    public function testRemoveExtend()
    {
        $this->sut->addExtendFileName('common.yml');
        $this->sut->addExtendServiceName('webapp');
        $this->sut->removeExtendFileName('common.yml');
        $this->sut->removeExtendServiceName('webapp');

        $this->assertNull($this->sut->getExtendFileName());
        $this->assertNull($this->sut->getExtendServiceName());
    }

    public function testToString()
    {
        $this->sut->addExtendFileName('common.yml');
        $this->sut->addExtendServiceName('webapp');
        $expected = "extends: \n" .
                    "    file: common.yml\n" .
                    "    service: webapp";

        $this->assertEquals($expected, strval($this->sut));
    }
}
 