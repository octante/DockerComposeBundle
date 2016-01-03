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

use Octante\DockerComposeBundle\Model\DockerComposeSecurityOption;

class DockerComposeSecurityOptionTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->sut = new DockerComposeSecurityOption();
    }

    public function testAddSecurityOption()
    {
        $this->sut->addSecurityOption('label:user:USER');
        $this->sut->addSecurityOption('label:role:ROLE');
        $expected = array(
            'label:user:USER' => "label:user:USER",
            'label:role:ROLE' => "label:role:ROLE"
        );

        $this->assertEquals($expected, $this->sut->getSecurityOptions());
    }

    public function testRemoveSecurityOption()
    {
        $this->sut->addSecurityOption('label:user:USER');
        $this->sut->addSecurityOption('label:role:ROLE');
        $this->sut->removeSecurityOption('label:user:USER');
        $expected = array('label:role:ROLE' => "label:role:ROLE");

        $this->assertEquals($expected, $this->sut->getSecurityOptions());
    }

    public function testToString()
    {
        $this->sut->addSecurityOption('label:user:USER');
        $this->sut->addSecurityOption('label:role:ROLE');
        $expected = "security_opt: \n" .
                    "    - label:user:USER\n" .
                    "    - label:role:ROLE";

        $this->assertEquals($expected, strval($this->sut));
    }
}
 