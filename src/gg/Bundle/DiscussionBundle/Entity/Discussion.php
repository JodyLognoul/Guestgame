<?php

namespace gg\Bundle\DiscussionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * gg\Bundle\DiscussionBundle\Entity\Discussion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gg\Bundle\DiscussionBundle\Entity\DiscussionRepository")
 */
class Discussion
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    function __construct(){
        $this->datecrea = new \DateTime();
        $this->datemod = new \DateTime();
    }
    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var date $datemod
     *
     * @ORM\Column(name="datemod", type="date")
     */
    private $datemod;

    /**
     * @var date $datecrea
     *
     * @ORM\Column(name="datecrea", type="date")
     */
    private $datecrea;

    /**
     * @var string $authorpseudo
     *
     * @ORM\Column(name="authorpseudo", type="string", length=255)
     */
    private $authorpseudo;

    /**
     * @var string $authoremail
     *
     * @ORM\Column(name="authoremail", type="string", length=255)
     */
    private $authoremail;


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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set datemod
     *
     * @param date $datemod
     */
    public function setDatemod($datemod)
    {
        $this->datemod = $datemod;
    }

    /**
     * Get datemod
     *
     * @return date 
     */
    public function getDatemod()
    {
        return $this->datemod;
    }

    /**
     * Set datecrea
     *
     * @param date $datecrea
     */
    public function setDatecrea($datecrea)
    {
        $this->datecrea = $datecrea;
    }

    /**
     * Get datecrea
     *
     * @return date 
     */
    public function getDatecrea()
    {
        return $this->datecrea;
    }

    /**
     * Set authorpseudo
     *
     * @param string $authorpseudo
     */
    public function setAuthorpseudo($authorpseudo)
    {
        $this->authorpseudo = $authorpseudo;
    }

    /**
     * Get authorpseudo
     *
     * @return string 
     */
    public function getAuthorpseudo()
    {
        return $this->authorpseudo;
    }

    /**
     * Set authoremail
     *
     * @param string $authoremail
     */
    public function setAuthoremail($authoremail)
    {
        $this->authoremail = $authoremail;
    }

    /**
     * Get authoremail
     *
     * @return string 
     */
    public function getAuthoremail()
    {
        return $this->authoremail;
    }
}