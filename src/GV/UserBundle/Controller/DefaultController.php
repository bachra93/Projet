<?php

namespace GV\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GVUserBundle:Default:index.html.twig', array('name' => $name));
    }

     public function loginAction(Request $request) {


        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('GVUserBundle:Default:index.html.twig', array(
                    'last_username' => $authenticationUtils->getLastUsername(),
                    'error' => $authenticationUtils->getLastAuthenticationError(),
        ));
    }
     public function afficherAction(){
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository('GVUserBundle:User')->findT();
        return $this->render('GVUserBundle:user:liste_abonne.html.twig', array('modeles'=>$modeles));
    }
        
    public function detailAbonneAction(){
        $em = $this->getDoctrine()->getManager();
        $security = $this->get('security.context');
        $token = $security->getToken();
        $user = $token->getUser();
       $modeles = $em->getRepository('GVUserBundle:User')
                     ->find($user->getId());
        return $this->render('GVUserBundle:user:detail_abonne.html.twig', array('modeles'=>$modeles));
}
        public function modifieraAbonneAction($id){
        $em = $this->getDoctrine()->getManager();
        $Request=$this->getRequest();
        $client=$em->getRepository("GVUserBundle:User")->find($id);
        if($Request->getMethod()=='POST'){
                $client->setNom($Request->get("nom"));
                $client->setPrenom($Request->get("prenom"));
                $em=$this->getDoctrine()->getManager();
                $em->persist($client);
                $em->flush();
            }
        return $this->render('GVUserBundle:user:modifier.html.twig', array());
    }
    public function erreurAction() {
        return $this->render('GVUserBundle::erreur.html.twig', array());
    }
    public function accueilAction(){
        return $this->render('GVUserBundle:user:accueil.html.twig', array());
    }
    
}


