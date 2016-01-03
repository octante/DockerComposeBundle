<?php

/*
 * This file is part of the DockerComposeBundle package.
 *
 * (c) Issel Guberna <issel.guberna@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octante\DockerComposeBundle\Services;

use Octante\DockerComposeBundle\Model\DockerComposeCapabilityAdd;
use Octante\DockerComposeBundle\Model\DockerComposeCapabilityDrop;
use Octante\DockerComposeBundle\Model\DockerComposeDevices;
use Octante\DockerComposeBundle\Model\DockerComposeDNS;
use Octante\DockerComposeBundle\Model\DockerComposeDNSSearch;
use Octante\DockerComposeBundle\Model\DockerComposeEnvironment;
use Octante\DockerComposeBundle\Model\DockerComposeEnvironmentFile;
use Octante\DockerComposeBundle\Model\DockerComposeExposedPorts;
use Octante\DockerComposeBundle\Model\DockerComposeExtends;
use Octante\DockerComposeBundle\Model\DockerComposeExternalLinks;
use Octante\DockerComposeBundle\Model\DockerComposeExtraHosts;
use Octante\DockerComposeBundle\Model\DockerComposeLabels;
use Octante\DockerComposeBundle\Model\DockerComposeLinks;
use Octante\DockerComposeBundle\Model\DockerComposePorts;
use Octante\DockerComposeBundle\Model\DockerComposeSecurityOption;
use Octante\DockerComposeBundle\Model\DockerComposeVolumes;
use Octante\DockerComposeBundle\Model\DockerComposeVolumesFrom;
use Octante\DockerComposeBundle\Model\DockerComposeYml;

/**
 * DockerComposeYmlBuilder.
 *
 * @author Issel Guberna <issel.guberna@gmail.com>
 */
class DockerComposeYmlBuilder
{
    public function build()
    {
        $dockerComposeYml = new DockerComposeYml();
        $dockerComposeYml
            ->setCapabilityAdd(new DockerComposeCapabilityAdd())
            ->setCapabilityDrop(new DockerComposeCapabilityDrop())
            ->setDevices(new DockerComposeDevices())
            ->setDns(new DockerComposeDNS())
            ->setDnsSearch(new DockerComposeDNSSearch())
            ->setEnvironment(new DockerComposeEnvironment())
            ->setEnvironmentFile(new DockerComposeEnvironmentFile())
            ->setExpose(new DockerComposeExposedPorts())
            ->setExtends(new DockerComposeExtends())
            ->setExternalLinks(new DockerComposeExternalLinks())
            ->setExtraHosts(new DockerComposeExtraHosts())
            ->setLabels(new DockerComposeLabels())
            ->setLinks(new DockerComposeLinks())
            ->setPorts(new DockerComposePorts())
            ->setSecurityOption(new DockerComposeSecurityOption())
            ->setVolumes(new DockerComposeVolumes())
            ->setVolumesFrom(new DockerComposeVolumesFrom());

        return $dockerComposeYml;
    }
}