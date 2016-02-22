<?php
 namespace GV\ForumBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GV\ForumBundle\Entity\Poste;
use GV\ForumBundle\Entity\Commentaire;
use GV\ForumBundle\Form\PosteForm;
class PosteController extends Controller 
{
    public function ListeAction ()
    {
        $em = $this->container->get('doctrine')->getEntityManager();
        $postes = $em->getRepository('GVForumBundle:Poste')->findAll () ;
        return $this->render('GVForumBundle:Poste:Liste.html.twig',array('postes'=>$postes));
    }
     public function ajouterAction()
    {
       $model = new Poste();
        $modForm = new PosteForm() ;
        $form = $this->createForm($modForm,$model);
        $request=  $this->get('request');
        
        if($form->handleRequest($request)->isValid()) //handleRequest valide de formulaire //isValid relation avec les type de form base de donnéé
        {
            $em=  $this->getDoctrine()->getManager();
            $em->persist($model);
        $em->flush();
        return $this->redirect($this->generateUrl('Liste_poste'));
        }
 
    
        
        return $this->render('GVForumBundle:Poste:Ajout.html.twig',array('f'=>$form->createView()));
}
    public function SupprimerAction ($id){
        $em=$this->getDoctrine()->getManager();
        $lots= $em->getRepository('GVForumBundle:Poste')->find($id);
        $em->remove($lots);
           $em->flush();
           return  $this->redirect($this->generateUrl("Liste_poste"));
   }
   
}
?>
