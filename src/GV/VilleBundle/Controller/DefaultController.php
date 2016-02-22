<?php

namespace GV\VilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GVVilleBundle:Default:index.html.twig', array('name' => $name));
    }
}
