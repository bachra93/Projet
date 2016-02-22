<?php

namespace GV\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 */
class  Commentaire {
    /**
     *@ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;
    
    /**
     *@ORM\Column(type="string",length=250)
     */
    public $Body;
    /**
     *@ORM\Column(type="datetime")
     */
    public $date_p;
    /**
     * @ORM\ManyToOne(targetEntity="Poste")
     *  @ORM\JoinColumn(name="Poste_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
     */
    public $poste;
    
    function getId() {
        return $this->id;
    }

    function getBody() {
        return $this->Body;
    }

    function getDate_p() {
        return $this->date_p;
    }

    function getPoste() {
        return $this->poste;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setBody($Body) {
        $this->Body = $Body;
    }

    function setDate_p($date_p) {
        $this->date_p = $date_p;
    }

    function setPoste($poste) {
        $this->poste = $poste;
    }

      
    function __construct() {
        $this->date_p = new \DateTime();
    }

}
