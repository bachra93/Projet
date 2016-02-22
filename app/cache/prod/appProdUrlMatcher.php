<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // gv_forum_homepage
        if ($pathinfo === '/hello') {
            return array (  '_controller' => 'GV\\ForumBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gv_forum_homepage',);
        }

        // Liste_commentaire
        if (0 === strpos($pathinfo, '/liste') && preg_match('#^/liste/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Liste_commentaire')), array (  '_controller' => 'GV\\ForumBundle\\Controller\\CommentaireController::ajoutercAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
