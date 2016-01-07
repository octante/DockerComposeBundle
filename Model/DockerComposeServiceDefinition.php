<?php
/*
 * This file is part of the DockerComposeBundle package.
 *
 * (c) Issel Guberna <issel.guberna@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octante\DockerComposeBundle\Model;

class DockerComposeServiceDefinition
{
    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $build;

    /**
     * @var string
     */
    private $dockerFile;

    /**
     * @var string
     */
    private $command;

    /**
     * @var DockerComposeLinks
     */
    private $links;

    /**
     * @var DockerComposeLogDriver
     */
    private $logDriver;

    /**
     * @var DockerComposeExternalLinks
     */
    private $externalLinks;

    /**
     * @var DockerComposeExtraHosts
     */
    private $extraHosts;

    /**
     * @var DockerComposePorts
     */
    private $ports;

    /**
     * @var DockerComposeExposedPorts
     */
    private $expose;

    /**
     * @var DockerComposeVolumes
     */
    private $volumes;

    /**
     * @var DockerComposeVolumesFrom
     */
    private $volumesFrom;

    /**
     * @var DockerComposeEnvironment
     */
    private $environment;

    /**
     * @var DockerComposeEnvironmentFile
     */
    private $environmentFile;

    /**
     * @var DockerComposeExtends
     */
    private $extends;

    /**
     * @var DockerComposeLabels
     */
    private $labels;

    /**
     * @var string
     */
    private $containerName;

    /**
     * @var string
     */
    private $net;

    /**
     * @var string
     */
    private $pid;

    /**
     * @var DockerComposeDNS
     */
    private $dns;

    /**
     * @var DockerComposeCapabilityAdd
     */
    private $capabilityAdd;

    /**
     * @var DockerComposeCapabilityDrop
     */
    private $capabilityDrop;

    /**
     * @var DockerComposeDNSSearch
     */
    private $dnsSearch;

    /**
     * @var DockerComposeDevices
     */
    private $devices;

    /**
     * @var DockerComposeSecurityOption
     */
    private $securityOption;

    /**
     * @var string
     */
    private $working_dir;

    /**
     * @var string
     */
    private $entryPoint;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $hostName;

    /**
     * @var string
     */
    private $domainName;

    /**
     * @var string
     */
    private $macAddress;

    /**
     * @var string
     */
    private $memLimit;

    /**
     * @var string
     */
    private $memSwapLimit;

    /**
     * @var string
     */
    private $privileged;

    /**
     * @var string
     */
    private $restart;

    /**
     * @var string
     */
    private $stdInOpen;

    /**
     * @var string
     */
    private $tty;

    /**
     * @var string
     */
    private $cpuShares;

    /**
     * @var string
     */
    private $cpuSet;

    /**
     * @var string
     */
    private $readOnly;

    /**
     * @var string
     */
    private $volumeDriver;

    /**
     * @param string $build
     */
    public function setBuild($build)
    {
        $this->build = $build;
    }

    /**
     * @return string
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * @return string
     */
    public function getPlainBuild()
    {
        return 'build: ' . $this->build;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeCapabilityAdd $capabilityAdd
     *
     * @return $this
     */
    public function setCapabilityAdd($capabilityAdd)
    {
        $this->capabilityAdd = $capabilityAdd;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeCapabilityAdd
     */
    public function getCapabilityAdd()
    {
        return $this->capabilityAdd;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeCapabilityDrop $capabilityDrop
     *
     * @return $this
     */
    public function setCapabilityDrop($capabilityDrop)
    {
        $this->capabilityDrop = $capabilityDrop;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeCapabilityDrop
     */
    public function getCapabilityDrop()
    {
        return $this->capabilityDrop;
    }

    /**
     * @param string $command
     *
     * @return $this
     */
    public function setCommand($command)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @return string
     */
    public function getPlainCommand()
    {
        return 'command: ' . $this->command;
    }

    /**
     * @param string $containerName
     *
     * @return $this
     */
    public function setContainerName($containerName)
    {
        $this->containerName = $containerName;

        return $this;
    }

    /**
     * @return string
     */
    public function getContainerName()
    {
        return $this->containerName;
    }

    /**
     * @return string
     */
    public function getPlainContainerName()
    {
        return 'container_name: ' . $this->containerName;
    }

    /**
     * @param string $cpuSet
     *
     * @return $this
     */
    public function setCpuSet($cpuSet)
    {
        $this->cpuSet = $cpuSet;

        return $this;
    }

    /**
     * @return string
     */
    public function getCpuSet()
    {
        return $this->cpuSet;
    }

    /**
     * @return string
     */
    public function getPlainCpuSet()
    {
        return 'cpuset: ' . $this->cpuSet;
    }

    /**
     * @param string $cpuShares
     *
     * @return $this
     */
    public function setCpuShares($cpuShares)
    {
        $this->cpuShares = $cpuShares;

        return $this;
    }

    /**
     * @return string
     */
    public function getCpuShares()
    {
        return $this->cpuShares;
    }

    /**
     * @return string
     */
    public function getPlainCpuShares()
    {
        return 'cpu_shares: ' . $this->cpuShares;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeDevices $devices
     *
     * @return $this
     */
    public function setDevices($devices)
    {
        $this->devices = $devices;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeDevices
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeDNS $dns
     *
     * @return $this
     */
    public function setDns($dns)
    {
        $this->dns = $dns;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeDNS
     */
    public function getDns()
    {
        return $this->dns;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeDNSSearch $dnsSearch
     *
     * @return $this
     */
    public function setDnsSearch($dnsSearch)
    {
        $this->dnsSearch = $dnsSearch;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeDNSSearch
     */
    public function getDnsSearch()
    {
        return $this->dnsSearch;
    }

    /**
     * @param string $dockerFile
     *
     * @return $this
     */
    public function setDockerFile($dockerFile)
    {
        $this->dockerFile = $dockerFile;

        return $this;
    }

    /**
     * @return string
     */
    public function getDockerFile()
    {
        return $this->dockerFile;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->domainName = $domainName;

        return $this;
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * @return string
     */
    public function getPlainDomainName()
    {
        return 'domainname: ' . $this->domainName;
    }

    /**
     * @param string $entryPoint
     *
     * @return $this
     */
    public function setEntryPoint($entryPoint)
    {
        $this->entryPoint = $entryPoint;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntryPoint()
    {
        return $this->entryPoint;
    }

    /**
     * @return string
     */
    public function getPlainEntryPoint()
    {
        return 'entrypoint:' . $this->entryPoint;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeEnvironment $environment
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeEnvironment
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeEnvironmentFile $environmentFile
     *
     * @return $this
     */
    public function setEnvironmentFile($environmentFile)
    {
        $this->environmentFile = $environmentFile;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeEnvironmentFile
     */
    public function getEnvironmentFile()
    {
        return $this->environmentFile;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeExposedPorts $expose
     *
     * @return $this
     */
    public function setExpose($expose)
    {
        $this->expose = $expose;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeExposedPorts
     */
    public function getExpose()
    {
        return $this->expose;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeExtends $extends
     *
     * @return $this
     */
    public function setExtends($extends)
    {
        $this->extends = $extends;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeExtends
     */
    public function getExtends()
    {
        return $this->extends;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeExternalLinks $externalLinks
     *
     * @return $this
     */
    public function setExternalLinks($externalLinks)
    {
        $this->externalLinks = $externalLinks;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeExternalLinks
     */
    public function getExternalLinks()
    {
        return $this->externalLinks;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeExtraHosts $extraHosts
     *
     * @return $this
     */
    public function setExtraHosts($extraHosts)
    {
        $this->extraHosts = $extraHosts;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeExtraHosts
     */
    public function getExtraHosts()
    {
        return $this->extraHosts;
    }

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        $this->hostName = $hostName;

        return $this;
    }

    /**
     * @return string
     */
    public function getHostName()
    {
        return $this->hostName;
    }

    /**
     * @return string
     */
    public function getPlainHostName()
    {
        return 'hostname: ' . $this->hostName;
    }

    /**
     * @param string $image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getPlainImage()
    {
        return 'image: ' . $this->image;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeLabels $labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeLabels
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeLinks $links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeLinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param $logDriver
     */
    public function setLogDriver($logDriver)
    {
        $this->logDriver = $logDriver;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeLogDriver
     */
    public function getLogDriver()
    {
        return $this->logDriver;
    }

    /**
     * @param string $macAddress
     *
     * @return $this
     */
    public function setMacAddress($macAddress)
    {
        $this->macAddress = $macAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }

    /**
     * @return string
     */
    public function getPlainMacAddress()
    {
        return 'mac_address: ' . $this->macAddress;
    }

    /**
     * @param string $memLimit
     *
     * @return $this
     */
    public function setMemLimit($memLimit)
    {
        $this->memLimit = $memLimit;

        return $this;
    }

    /**
     * @return string
     */
    public function getMemLimit()
    {
        return $this->memLimit;
    }

    /**
     * @return string
     */
    public function getPlainMemLimit()
    {
        return 'mem_limit: ' . $this->memLimit;
    }

    /**
     * @param string $memSwapLimit
     *
     * @return $this
     */
    public function setMemSwapLimit($memSwapLimit)
    {
        $this->memSwapLimit = $memSwapLimit;

        return $this;
    }

    /**
     * @return string
     */
    public function getMemSwapLimit()
    {
        return $this->memSwapLimit;
    }

    /**
     * @return string
     */
    public function getPlainMemSwapLimit()
    {
        return 'memswap_limit: ' . $this->memSwapLimit;
    }

    /**
     * @param string $net
     *
     * @return $this
     */
    public function setNet($net)
    {
        $this->net = $net;

        return $this;
    }

    /**
     * @return string
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * @return string
     */
    public function getPlainNet()
    {
        return 'net: ' . $this->net;
    }

    /**
     * @param string $pid
     *
     * @return $this
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * @return string
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @return string
     */
    public function getPlainPid()
    {
        return 'pid: ' . $this->pid;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposePorts $ports
     *
     * @return $this
     */
    public function setPorts($ports)
    {
        $this->ports = $ports;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposePorts
     */
    public function getPorts()
    {
        return $this->ports;
    }

    /**
     * @param string $privileged
     *
     * @return $this
     */
    public function setPrivileged($privileged)
    {
        $this->privileged = $privileged;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrivileged()
    {
        return $this->privileged;
    }

    /**
     * @return string
     */
    public function getPlainPrivileged()
    {
        return 'privileged: ' . $this->privileged;
    }

    /**
     * @param string $readOnly
     *
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * @return string
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * @return string
     */
    public function getPlainReadOnly()
    {
        return 'read_only: ' . $this->readOnly;
    }

    /**
     * @param string $restart
     *
     * @return $this
     */
    public function setRestart($restart)
    {
        $this->restart = $restart;

        return $this;
    }

    /**
     * @return string
     */
    public function getRestart()
    {
        return $this->restart;
    }

    /**
     * @return string
     */
    public function getPlainRestart()
    {
        return 'restart: ' . $this->restart;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeSecurityOption $securityOption
     *
     * @return $this
     */
    public function setSecurityOption($securityOption)
    {
        $this->securityOption = $securityOption;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeSecurityOption
     */
    public function getSecurityOption()
    {
        return $this->securityOption;
    }

    /**
     * @param string $stdInOpen
     *
     * @return $this
     */
    public function setStdInOpen($stdInOpen)
    {
        $this->stdInOpen = $stdInOpen;

        return $this;
    }

    /**
     * @return string
     */
    public function getStdInOpen()
    {
        return $this->stdInOpen;
    }

    /**
     * @return string
     */
    public function getPlainStdInOpen()
    {
        return 'stdin_open: ' . $this->stdInOpen;
    }

    /**
     * @param string $tty
     *
     * @return $this
     */
    public function setTty($tty)
    {
        $this->tty = $tty;

        return $this;
    }

    /**
     * @return string
     */
    public function getTty()
    {
        return $this->tty;
    }

    /**
     * @return string
     */
    public function getPlainTty()
    {
        return 'tty: ' . $this->tty;
    }

    /**
     * @param string $user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getPlainUser()
    {
        return 'user: ' . $this->user;
    }

    /**
     * @param string $volumeDriver
     *
     * @return $this
     */
    public function setVolumeDriver($volumeDriver)
    {
        $this->volumeDriver = $volumeDriver;

        return $this;
    }

    /**
     * @return string
     */
    public function getVolumeDriver()
    {
        return $this->volumeDriver;
    }

    /**
     * @return string
     */
    public function getPlainVolumeDriver()
    {
        return 'volume_driver: ' . $this->volumeDriver;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeVolumes $volumes
     *
     * @return $this
     */
    public function setVolumes($volumes)
    {
        $this->volumes = $volumes;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeVolumes
     */
    public function getVolumes()
    {
        return $this->volumes;
    }

    /**
     * @param \Octante\DockerComposeBundle\Model\DockerComposeVolumesFrom $volumesFrom
     *
     * @return $this
     */
    public function setVolumesFrom($volumesFrom)
    {
        $this->volumesFrom = $volumesFrom;

        return $this;
    }

    /**
     * @return \Octante\DockerComposeBundle\Model\DockerComposeVolumesFrom
     */
    public function getVolumesFrom()
    {
        return $this->volumesFrom;
    }

    /**
     * @param string $working_dir
     *
     * @return $this
     */
    public function setWorkingDir($working_dir)
    {
        $this->working_dir = $working_dir;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkingDir()
    {
        return $this->working_dir;
    }

    /**
     * @return string
     */
    public function getPlainWorkingDir()
    {
        return 'working_dir: ' . $this->working_dir;
    }
}
