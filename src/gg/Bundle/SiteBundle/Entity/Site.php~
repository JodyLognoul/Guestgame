<?php

namespace gg\Bundle\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * gg\Bundle\SiteBundle\Entity\Site
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gg\Bundle\SiteBundle\Entity\SiteRepository")
 */
class Site
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var date $date_create
     *
     * @ORM\Column(name="date_create", type="date")
     */
    private $date_create;

    /**
     * @var date $date_modif
     *
     * @ORM\Column(name="date_modif", type="date")
     */
    private $date_modif;

    /**
     * @var string $version
     *
     * @ORM\Column(name="version", type="string", length=255)
     */
    private $version;

    /**
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date_create
     *
     * @param date $dateCreate
     */
    public function setDateCreate($dateCreate)
    {
        $this->date_create = $dateCreate;
    }

    /**
     * Get date_create
     *
     * @return date 
     */
    public function getDateCreate()
    {
        return $this->date_create;
    }

    /**
     * Set date_modif
     *
     * @param date $dateModif
     */
    public function setDateModif($dateModif)
    {
        $this->date_modif = $dateModif;
    }

    /**
     * Get date_modif
     *
     * @return date 
     */
    public function getDateModif()
    {
        return $this->date_modif;
    }

    /**
     * Set version
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}