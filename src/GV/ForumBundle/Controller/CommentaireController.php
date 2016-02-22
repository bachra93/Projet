<?php

namespace GV\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GV\ForumBundle\Entity\Poste;
use GV\ForumBundle\Entity\Commentaire;
use GV\ForumBundle\Form\CommentaireForm;

class CommentaireController extends Controller {

  
    
    
     public function ListeAction($id)
    {
        
       
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GVForumBundle:Poste')->find($id);
        $entities = $em->getRepository('GVForumBundle:Commentaire')->findByPoste($id);
        


        $entityComment = new Commentaire();
        $form = $this->createForm(new CommentaireForm(),$entityComment);


        return $this->render('GVForumBundle:Commentaire:Liste.html.twig', array(
            'entity'      => $entity,
            'entities' => $entities,
            'form' => $form->createView(),
            
        ));
        
    }
    
    
    
      public function AjouterAction($id)
    {
        $entity = new Commentaire();
        $form = $this->createCreateForm($entity);
         $request = $this->get('request');
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $entity->setPoste($em->getRepository('GVForumBundle:Poste')->find($id)) ;
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Liste_commentaire', array('id' => $id)));
        }

        return $this->render('GVForumBundle:Commentaire:Ajout.html.twig', array(
            'entity' => $entity,
            'f'   => $form->createView(),
        ));
    }
     private function createCreateForm(Commentaire $entity)
    {
        $form = $this->createForm(new CommentaireForm(), $entity);

      

        return $form;
    }
    
     public function ModifierAction($id)
     {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GVForumBundle:Commentaire')->find($id);

  
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comment entity.');
        }


        $editForm = $this->createEditForm($entity);
            $request = $this->get('request');
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('Liste_poste'));
        }

        return $this->render('GVForumBundle:Commentaire:Modifier.html.twig', array(
            'entity'      => $entity,
            'f'   => $editForm->createView()
            
        ));
    }

    /**
    * Creates a form to edit a Comment entity.
    *
    * @param Comment $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Commentaire $entity)
    {
        $form = $this->createForm(new CommentaireForm(), $entity, array(
            'action' => $this->generateUrl('Modifier_commentaire', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
     public function SuppAction ($id){
        $em=$this->getDoctrine()->getManager();
        $lo= $em->getRepository('GVForumBundle:Commentaire')->find($id);
        $em->remove($lo);
           $em->flush();
           return  $this->redirect($this->generateUrl("Liste_poste"));
           
           
           
   }
   
    

}

?>
