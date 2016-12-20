<?php

namespace Grc\ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

    
    /**
    * @ORM\ManyToOne(targetEntity="Grc\ReclamationBundle\Entity\Reclamation")
    * @ORM\JoinColumn(nullable=true)
    */
    private $reclamation;

 
   
    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;


    public function __construct()
    {
        $this->setCreated(new \DateTime());
        
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
     * Set user
     *
     * @param string $user
     * @return Commentaire
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set reclamation
     *
     * @param string $reclamation
     * @return Commentaire
     */
    public function setReclamation($reclamation)
    {
        $this->reclamation = $reclamation;

        return $this;
    }

    /**
     * Get reclamation
     *
     * @return string 
     */
    public function getReclamation()
    {
        return $this->reclamation;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Commentaire
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }
}
