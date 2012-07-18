<?php

namespace gg\Bundle\PartyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * gg\Bundle\PartyBundle\Entity\Party
 * 
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gg\Bundle\PartyBundle\Entity\PartyRepository")
 */
class Party {

    function __construct() {
        $this->gwhen = new \DateTime();
    }

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $gwho
     *
     * @ORM\Column(name="gwho", type="string", length=255)
     */
    private $gwho;

    /**
     * @var datetime $gwhen
     *
     * @ORM\Column(name="gwhen", type="datetime", length=255)
     */
    private $gwhen;

    /**
     * @var string $gwhere
     *
     * @ORM\Column(name="gwhere", type="string", length=255)
     */
    private $gwhere;

    /**
     * @var string $ghow
     *
     * @ORM\Column(name="ghow", type="string", length=255)
     */
    private $ghow;

    /**
     * @var string $gwhat
     *
     * @ORM\Column(name="gwhat", type="string", length=255)
     */
    private $gwhat;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;   

    /**
     * @var string $urlid
     *
     * @ORM\Column(name="urlid", type="string", length=32,nullable=true)
     */
    private $urlid;


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
     * Set gwho
     *
     * @param string $gwho
     */
    public function setGwho($gwho)
    {
        $this->gwho = $gwho;
    }

    /**
     * Get gwho
     *
     * @return string 
     */
    public function getGwho()
    {
        return $this->gwho;
    }

    /**
     * Set gwhen
     *
     * @param datetime $gwhen
     */
    public function setGwhen($gwhen)
    {
        $this->gwhen = new \DateTime($gwhen);
    }

    /**
     * Get gwhen
     *
     * @return datetime 
     */
    public function getGwhen()
    {
        return $this->gwhen->format('Y-m-d H:i:s');
    }    

    /**
     * Set gwhere
     *
     * @param string $gwhere
     */
    public function setGwhere($gwhere)
    {
        $this->gwhere = $gwhere;
    }

    /**
     * Get gwhere
     *
     * @return string 
     */
    public function getGwhere()
    {
        return $this->gwhere;
    }

    /**
     * Set ghow
     *
     * @param string $ghow
     */
    public function setGhow($ghow)
    {
        $this->ghow = $ghow;
    }

    /**
     * Get ghow
     *
     * @return string 
     */
    public function getGhow()
    {
        return $this->ghow;
    }

    /**
     * Set gwhat
     *
     * @param string $gwhat
     */
    public function setGwhat($gwhat)
    {
        $this->gwhat = $gwhat;
    }

    /**
     * Get gwhat
     *
     * @return string 
     */
    public function getGwhat()
    {
        return $this->gwhat;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set urlid
     *
     * @param string $urlid
     */
    public function setUrlid($urlid)
    {
        $this->urlid = $urlid;
    }

    /**
     * Get urlid
     *
     * @return string 
     */
    public function getUrlid()
    {
        return $this->urlid;
    }
}