<?php

namespace GV\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GVForumBundle:Commentaire:Liste.html.twig');
    }
}
