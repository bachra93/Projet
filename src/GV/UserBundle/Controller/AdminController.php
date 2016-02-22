<?php


 namespace GV\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ob\HighchartsBundle\Highcharts\Highchart;
use GV\UserBundle\Entity\User;

class AdminController extends Controller {
     public function afficherCompteDashAction() {
        $em = $this->getDoctrine()->getManager();
        $comptes = array();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $login = $request->get('username');
            $comptes = $em->getRepository('GVUserBundle:User')->findBy(array('username' => $login));
        } else {
            $comptes = $em->getRepository('GVUserBundle:User')->findAll();
        }
        return $this->render('GVUserBundle:admin:afficherComptes.html.twig', array('comptes' => $comptes));
    }
    public function choixAdminCompteAction($choix, $id) {
        $em = $this->getDoctrine()->getManager();
        $compte = $em->getRepository('GVUserBundle:User')->find($id);
        if ($choix == 1) {
            $compte->setEtat('valide');
            $em->persist($compte);
        } else if ($choix == 2) {
            $compte->setEtat('masquer');
            $em->persist($compte);
        } else if ($choix == 3) {
            $compte->setEtat('valide');
            $em->persist($compte);
        }
    
   
}
   public function aficherDetailCompteAction($id) {

        $em = $this->getDoctrine()->getManager();

        $compte = $em->getRepository('GVUserBundle:User')
                ->find($id);
        return $this->render('GVUserBundle:admin:afficherDetailCompte.html.twig', array('compte' => $compte));
    }
     public function rechercheAction() {
        $request = $this->getRequest();
        $login = $request->get('login');
        $em = $this->getDoctrine()->getManager();
        if ($login != null) {
            $comptes = $em->getRepository("GVUserBundle:User")
                    ->findBy(
                    array('username' => $login)
            );
            return $this->render('GVUserBundle:admin:afficherComptes.html.twig', array('comptes' => $comptes));
        } else {
            $response = new RedirectResponse($this->generateUrl('afficher_compte_admin'));
            return $response;
        }
    }
}
