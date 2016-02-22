<?php
namespace GV\ForumBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Poste {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    public $id;
    /**
     *@ORM\Column(type="string",length=255)
     */
    public $Titre;
      /**
     *@ORM\Column(type="string",length=255)
     */
    public $Contenu;
     /**
     *@ORM\Column(type="datetime")
     */
    public $date_published;
    
    
   /**
     * @ORM\OneToOne(targetEntity="GV\ForumBundle\Entity\Image", cascade={"persist","remove"})
     */
    private $image;

    
    function getId() {
        return $this->id;
    }

    function getTitre() {
        return $this->Titre;
    }

    function getContenu() {
        return $this->Contenu;
    }

    function getDate_published() {
        return $this->date_published;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitre($Titre) {
        $this->Titre = $Titre;
    }

    function setContenu($Contenu) {
        $this->Contenu = $Contenu;
    }

    function setDate_published($date_published) {
        $this->date_published = $date_published;
    }
    
     /**
     * Set image
     *
     * @param \GV\ForumBundle\Entity\Image $image
     * @return Poste
     */
    public function setImage(\GV\ForumBundle\Entity\Image $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \GV\ForumBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }



    
    function __construct() {
        $this->date_published = new \DateTime;
    }


}
