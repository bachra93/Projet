<?php
namespace GV\VilleBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Ville {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     *@ORM\Column(type="string",length=255)
     */
    private $nom;
    /**
     *@ORM\Column(type="string",length=255)
     */
    private $pays;   
    /**
     * @ORM\Column(type="float", precision=10, scale=0, nullable=false)
     */

    private $latitude;
    /**
     * @ORM\Column(type="float", precision=10, scale=0, nullable=false)
     */
    private $longitude;
    /**
     *@ORM\Column(type="string",length=255)
     */
    private $description;
    /**
     *@ORM\Column(type="string",length=25)
     */
    private $type;
    /**
     *@ORM\Column(type="string",length=25)
     */
    private $langue;

    /**
     *@ORM\Column(type="string",length=25)
     */
    private $image;

    
   
    public function getId() {
        return $this->id;
    }

   public function getNom() {
        return $this->nom;
    }

    public function getPays() {
        return $this->pays;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function getLongitude() {
        return $this->longitude;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getType() {
        return $this->type;
    }



    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPays($pays) {
        $this->pays = $pays;
    }

    public function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    public function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setType($type) {
        $this->type = $type;
    }


    function getLangue() {
        return $this->langue;
    }

    function getImage() {
        return $this->image;
    }

    function setLangue($langue) {
        $this->langue = $langue;
    }

    function setImage($image) {
        $this->image = $image;
    }


   



}
