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

use Octante\DockerComposeBundle\Model\DockerComposeLabels;

class DockerComposeLabelsTest extends \PHPUnit_Framework_TestCase
{
    private $sut;

    public function setUp()
    {
        $this->sut = new DockerComposeLabels();
    }

    public function testAddLabel()
    {
        $this->sut->addLabel('com.example.description=Accounting webapp');
        $this->sut->addLabel('com.example.department=Finance');
        $expected = [
            'com.example.description=Accounting webapp' => '"com.example.description=Accounting webapp"',
            'com.example.department=Finance' => '"com.example.department=Finance"',
        ];

        $this->assertEquals($expected, $this->sut->getLabels());
    }

    public function testRemoveLabel()
    {
        $this->sut->addLabel('com.example.description=Accounting webapp');
        $this->sut->addLabel('com.example.department=Finance');
        $this->sut->removeLabel('com.example.description=Accounting webapp');
        $expected = ['com.example.department=Finance' => '"com.example.department=Finance"'];

        $this->assertEquals($expected, $this->sut->getLabels());
    }

    public function testToString()
    {
        $this->sut->addLabel('com.example.description=Accounting webapp');
        $this->sut->addLabel('com.example.department=Finance');
        $expected = "labels: \n" .
                    "    - \"com.example.description=Accounting webapp\"\n" .
                    '    - "com.example.department=Finance"';

        $this->assertEquals($expected, strval($this->sut));
    }
}
