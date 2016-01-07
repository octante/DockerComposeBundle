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

use Doctrine\Common\Collections\ArrayCollection;

class DockerComposeYml
{
    /**
     * @var ArrayCollection
     */
    private $servicesDefinitions;

    /**
     * Initializes an empty set for services definitions.
     */
    public function __construct()
    {
        $this->servicesDefinitions = new ArrayCollection();
    }

    /**
     * @param DockerComposeServiceDefinition $serviceDefinition
     *
     * @return $this
     */
    public function addServiceDefinition(DockerComposeServiceDefinition $serviceDefinition)
    {
        $this->servicesDefinitions->add($serviceDefinition);

        return $this;
    }

    /**
     * @param DockerComposeServiceDefinition $serviceDefinitionName
     */
    public function removeServiceDefinition(DockerComposeServiceDefinition $serviceDefinitionName)
    {
        $this->servicesDefinitions->remove($serviceDefinitionName);
    }

    /**
     * @return ArrayCollection
     */
    public function getServicesDefinitions()
    {
        return $this->servicesDefinitions;
    }
}
