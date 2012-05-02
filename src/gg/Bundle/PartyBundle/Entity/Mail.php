<?php

namespace gg\Bundle\PartyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * gg\Bundle\PartyBundle\Entity\Mail
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gg\Bundle\PartyBundle\Entity\MailRepository")
 */
class Mail
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
     * @var string $gto
     *
     * @ORM\Column(name="gto", type="string", length=255)
     */
    private $gto;

    /**
     * @var string $gfrom
     *
     * @ORM\Column(name="gfrom", type="string", length=255)
     */
    private $gfrom;

    /**
     * @var string $gsubject
     *
     * @ORM\Column(name="gsubject", type="string", length=255)
     */
    private $gsubject;

    /**
     * @var string $gcontent
     *
     * @ORM\Column(name="gcontent", type="string", length=255)
     */
    private $gcontent;


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
     * Set gto
     *
     * @param string $gto
     */
    public function setGto($gto)
    {
        $this->gto = $gto;
    }

    /**
     * Get gto
     *
     * @return string 
     */
    public function getGto()
    {
        return $this->gto;
    }

    /**
     * Set gfrom
     *
     * @param string $gfrom
     */
    public function setGfrom($gfrom)
    {
        $this->gfrom = $gfrom;
    }

    /**
     * Get gfrom
     *
     * @return string 
     */
    public function getGfrom()
    {
        return $this->gfrom;
    }

    /**
     * Set gsubject
     *
     * @param string $gsubject
     */
    public function setGsubject($gsubject)
    {
        $this->gsubject = $gsubject;
    }

    /**
     * Get gsubject
     *
     * @return string 
     */
    public function getGsubject()
    {
        return $this->gsubject;
    }

    /**
     * Set gcontent
     *
     * @param string $gcontent
     */
    public function setGcontent($gcontent)
    {
        $this->gcontent = $gcontent;
    }

    /**
     * Get gcontent
     *
     * @return string 
     */
    public function getGcontent()
    {
        return $this->gcontent;
    }
}