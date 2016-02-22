<?php

namespace GV\VilleBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GV\VilleBundle\Entity\Ville;
use GV\VilleBundle\Form\VilleForm;

class VilleController extends Controller {
    
          public function ajouterVilleAction()
    {
        $ville=new Ville();
        $villeForm=new VilleForm();
        $form=$this->createForm($villeForm,$ville);
        
        $request= $this->get('request');
        if ( $form->handleRequest($request)->isValid())
        { 
            $em=$this->getDoctrine()->getManager();
            $em->persist($ville); //insert into table
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice',"L'operation c'est effectuer avec succees"); //si l'ajout avex succe on affiche un message 

           return $this->redirect($this->generateUrl('AjouterVille'));//exec
        }
        
      return $this->render('GVVilleBundle:Ville:ajouter.html.twig',
                array(
                    'f'=>$form->createView()) 
                );
    }
    
    
    public function afficherVilleAction(){
        $em=$this->getDoctrine()->getManager();
        $modeles= $em->getRepository('GVVilleBundle:Ville')->findAll(); //pointer sur une entire biendertermine
        //findall comme select*
        return $this->render('GVVilleBundle:Ville:afficher.html.twig',
                array(
                    'mods'=>$modeles) 
                );
    }
    
     public function SupprimerVilleAction($id){
        $em = $this->getDoctrine()->getManager();
        $model=$em->getRepository("GVVilleBundle:Ville")->find($id);
        $em->remove($model);
        $em->flush(); //execution
        
        return ($this->redirectToRoute("afficherVille"));
        
    }
    
    
    public function ModifierVilleAction($id){
        $em = $this->getDoctrine()->getManager();
        $model=$em->getRepository("GVVilleBundle:Ville")->find($id);
        $form= $this->createForm(new VilleForm, $model);
        $request=$this->get('request');
        $form->handleRequest($request);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($model);
            $em->flush();
           return ($this->redirectToRoute("afficherVille")); 
        }
                   
        return $this->render('GVVilleBundle:Ville:modifier.html.twig',
         array(
               'f'=>$form->createView()) 
                );
    }
    
    public function RechercherVilleAction()
    {
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository('GVVilleBundle:Ville')->findAll();
        $request = $this->getRequest();
        if ($request->getMethod()=="POST")
        {
        $search=$request->get('search');
        $modeles=$em->getRepository('GVVilleBundle:Ville')->findBy(array("id"=>$search));        
        }
        
        return $this->render('GVVilleBundle:Ville:rechercher.html.twig'
                ,array("modeles"=>$modeles));
    }
    
    
    public function afficherdetailsAction($id){
        $em=$this->get('doctrine')->getManager();
        $modeles= $em->getRepository('GVVilleBundle:Ville')->find($id);
        return $this->render('GVVilleBundle:Ville:afficherdetails.html.twig',
                array(
                    'modeles'=>$modeles) 
                );
}


    public function afficherVillefrontAction(){
        $em=$this->getDoctrine()->getManager();
        $modeles= $em->getRepository('GVVilleBundle:Ville')->findAll(); //pointer sur une entire biendertermine
        //findall comme select*
        return $this->render('GVVilleBundle:Ville:frontAffiche.html.twig',
                array(
                    'mods'=>$modeles) 
                );
    }
    
        public function afficherdetailsfrontAction($id){
        $em=$this->get('doctrine')->getManager();
        $modeles= $em->getRepository('GVVilleBundle:Ville')->find($id);
        return $this->render('GVVilleBundle:Ville:frontafficherdetail.html.twig',
                array(
                    'modeles'=>$modeles) 
                );
}

 public function frontRechercherVilleAction()
    {
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository('GVVilleBundle:Ville')->findAll();
        $request = $this->getRequest();
        if ($request->getMethod()=="POST")
        {
        $search=$request->get('search');
        $modeles=$em->getRepository('GVVilleBundle:Ville')->findBy(array("nom"=>$search));        
        }
        
        return $this->render('GVVilleBundle:Ville:frontAffiche.html.twig'
                ,array("mods"=>$modeles));
    }
    
}
