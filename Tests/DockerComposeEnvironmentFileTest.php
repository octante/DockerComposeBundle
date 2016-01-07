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

use Octante\DockerComposeBundle\Model\DockerComposeEnvironmentFile;

class DockerComposeEnvironmentFileTest extends \PHPUnit_Framework_TestCase
{
    private $sut;

    public function setUp()
    {
        $this->sut = new DockerComposeEnvironmentFile();
    }

    public function testSetEnvironmentFile()
    {
        $this->sut->setEnvironmentFile('.env');
        $expected = '.env';

        $this->assertEquals($expected, $this->sut->getEnvironmentFile());
    }

    public function testRemoveEnvironmentFile()
    {
        $this->sut->removeEnvironmentFile('.env');
        $this->assertNull($this->sut->getEnvironmentFile());
    }

    public function testAddEnvironmentFile()
    {
        $this->sut->addEnvironmentFile('./common.env');
        $this->sut->addEnvironmentFile('./apps/web.env');
        $expected = [
            './common.env' => './common.env',
            './apps/web.env' => './apps/web.env',
        ];

        $this->assertEquals($expected, $this->sut->getEnvironmentFiles());
    }

    public function testRemoveEnvironmentFileItem()
    {
        $this->sut->addEnvironmentFile('./common.env');
        $this->sut->addEnvironmentFile('./apps/web.env');
        $this->sut->removeEnvironmentFileItem('./common.env');
        $expected = ['./apps/web.env' => './apps/web.env'];

        $this->assertEquals($expected, $this->sut->getEnvironmentFiles());
    }

    public function testToString()
    {
        $this->sut->setEnvironmentFile('.env');
        $expected = 'env_file: .env';

        $this->assertEquals($expected, strval($this->sut));
    }

    public function testToString2()
    {
        $this->sut->addEnvironmentFile('./common.env');
        $this->sut->addEnvironmentFile('./apps/web.env');
        $expected = "env_file: \n" .
                    "    - ./common.env\n" .
                    '    - ./apps/web.env';

        $this->assertEquals($expected, strval($this->sut));
    }
}
