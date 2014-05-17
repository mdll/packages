<?php

namespace Terramar\Packages\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="packages")
 */
class Package
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @ORM\Column(name="external_id", type="string")
     */
    private $externalId;

    /**
     * @ORM\Column(name="description", type="string")
     */
    private $description;

    /**
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled = false;

    /**
     * @ORM\Column(name="ssh_url", type="string")
     */
    private $sshUrl;

    /**
     * @ORM\Column(name="web_url", type="string")
     */
    private $webUrl;

    /**
     * @ORM\Column(name="fqn", type="string")
     */
    private $fqn;

    /**
     * @ORM\ManyToOne(targetEntity="Terramar\Packages\Entity\Configuration")
     * @ORM\JoinColumn(name="configuration_id", referencedColumnName="id")
     */
    private $configuration;

    /**
     * @param mixed $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = (bool) $enabled;
    }

    /**
     * @return boolean
     */
    public function isEnabled()
    {
        return $this->enabled;
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = (string) $description;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = (string) $name;
    }

    /**
     * @return Configuration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param Configuration $configuration
     */
    public function setConfiguration(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return mixed
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @param mixed $externalId
     */
    public function setExternalId($externalId)
    {
        $this->externalId = (string) $externalId;
    }

    /**
     * @return mixed
     */
    public function getFqn()
    {
        return $this->fqn;
    }

    /**
     * @param mixed $fqn
     */
    public function setFqn($fqn)
    {
        $this->fqn = (string) $fqn;
    }

    /**
     * @return mixed
     */
    public function getSshUrl()
    {
        return $this->sshUrl;
    }

    /**
     * @param mixed $sshUrl
     */
    public function setSshUrl($sshUrl)
    {
        $this->sshUrl = (string) $sshUrl;
    }

    /**
     * @return mixed
     */
    public function getWebUrl()
    {
        return $this->webUrl;
    }

    /**
     * @param mixed $webUrl
     */
    public function setWebUrl($webUrl)
    {
        $this->webUrl = (string) $webUrl;
    }
}