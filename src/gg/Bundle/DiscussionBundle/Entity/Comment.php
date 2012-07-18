<?php

namespace gg\Bundle\DiscussionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * gg\Bundle\DiscussionBundle\Entity\Comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gg\Bundle\DiscussionBundle\Entity\CommentRepository")
 */
class Comment
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
     * @var string $content
     *
     * @ORM\Column(name="content", type="string", length=2048)
     */
    private $content;

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
     * @ORM\ManyToOne(targetEntity="Discussion")
     * @ORM\JoinColumn(name="discussion_id", referencedColumnName="id")
     */
    private $discussion;

    function __construct(){
        $this->datecrea = new \DateTime();
        $this->datemod = new \DateTime();
    }

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
     * Set content
     *
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
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
     * Set discussion
     *
     * @param gg\Bundle\DiscussionBundle\Entity\Discussion $discussion
     */
    public function setDiscussion(\gg\Bundle\DiscussionBundle\Entity\Discussion $discussion)
    {
        $this->discussion = $discussion;
    }

    /**
     * Get discussion
     *
     * @return gg\Bundle\DiscussionBundle\Entity\Discussion 
     */
    public function getDiscussion()
    {
        return $this->discussion;
    }
}