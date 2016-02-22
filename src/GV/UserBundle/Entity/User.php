<?php
namespace GV\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="fos_user")
*/
class User extends BaseUser
{
 /**
 * @ORM\Id
 * @ORM\Column(type="integer")
 * @ORM\GeneratedValue(strategy="AUTO")
 */
 protected $id;
 /**
 * @ORM\Column(type="string",length=255)
 */
 private $nom;
  /**
 * @ORM\Column(type="string",length=255)
 */
 private $prenom;
 /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat="valide";
    function getEtat() {
        return $this->etat;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

     public function __construct()
 {
 parent::__construct();
 // your own logic
 }
 
 function getId() {
     return $this->id;
 }

 function setId($id) {
     $this->id = $id;
     
 }
 
 function getNom() {
     return $this->nom;
 }

 function getPrenom() {
     return $this->prenom;
 }

 function setNom($nom) {
     $this->nom = $nom;
 }

 function setPrenom($prenom) {
     $this->prenom = $prenom;
 }
 function getUrl() {
     return $this->url;
 }

 function setUrl($url) {
     $this->url = $url;
 }






 
}

