<?php
namespace GV\UserBundle\Entity;
use Doctrine\ORM\EntityRepository;






class UserRepository {
     public function findT(){
        $query=$this->getEntityManager()
                ->createQuery("SELECT u FROM GVUserBundle :User u WHERE u.roles LIKE '%ROLE_Abonne%'");
        return $query->getResult();
    
}
}
