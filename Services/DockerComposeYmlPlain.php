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

use Octante\DockerComposeBundle\Model\DockerComposeYml;

class DockerComposeYmlPlain
{
    /**
     * @param $dockerComposeYml DockerComposeYml
     */
    public function getPlain($dockerComposeYml)
    {
        $plainComposerYml = '';
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainBuild());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getCapabilityAdd());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getCapabilityDrop());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainCommand());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainContainerName());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainCpuSet());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainCpuShares());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getDevices());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getDns());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getDnsSearch());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getDockerFile());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainDomainName());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainEntryPoint());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getEnvironment());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getEnvironmentFile());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getExpose());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getExtends());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getExternalLinks());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getExtraHosts());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainHostName());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainImage());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getLabels());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getLinks());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainMacAddress());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainMemLimit());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainMemSwapLimit());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainNet());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainPid());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPorts());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainPrivileged());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainReadOnly());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainRestart());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getSecurityOption());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainStdInOpen());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainTty());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainUser());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainVolumeDriver());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getVolumes());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getVolumesFrom());
        $plainComposerYml .= $this->addParameter($dockerComposeYml->getPlainWorkingDir());

        return $plainComposerYml;
    }

    /**
     * @param $parameter
     *
     * @return string
     */
    private function addParameter($parameter)
    {
        $value = '';
        if ($parameter != '') {
            $value = $parameter . "\n\n";
        }

        return $value;
    }
}
