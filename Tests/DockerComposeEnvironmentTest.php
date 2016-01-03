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

use Octante\DockerComposeBundle\Model\DockerComposeEnvironment;

class DockerComposeEnvironmentTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->sut = new DockerComposeEnvironment();
    }

    public function testAddEnvironment()
    {
        $this->sut->addEnvironment('RACK_ENV=development');
        $this->sut->addEnvironment('SESSION_SECRET');
        $expected = array(
            'RACK_ENV=development' => 'RACK_ENV=development',
            'SESSION_SECRET' => 'SESSION_SECRET'
        );

        $this->assertEquals($expected, $this->sut->getEnvironment());
    }

    public function testRemoveEnvironment()
    {
        $this->sut->addEnvironment('RACK_ENV=development');
        $this->sut->addEnvironment('SESSION_SECRET');
        $this->sut->removeEnvironment('RACK_ENV=development');
        $expected = array('SESSION_SECRET' => 'SESSION_SECRET');

        $this->assertEquals($expected, $this->sut->getEnvironment());
    }

    public function testToString()
    {
        $this->sut->addEnvironment('RACK_ENV=development');
        $this->sut->addEnvironment('SESSION_SECRET');
        $expected = "environment: \n" .
                    "    - RACK_ENV=development\n" .
                    "    - SESSION_SECRET";

        $this->assertEquals($expected, strval($this->sut));
    }
}
 