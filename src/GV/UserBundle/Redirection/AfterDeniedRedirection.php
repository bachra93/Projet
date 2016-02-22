<?php
namespace GV\UserBundle\Redirection;

use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;

class AfterDeniedRedirection implements AccessDeniedHandlerInterface
{   /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;
    
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
      
    }
    

    public function handle(Request $request, AccessDeniedException $accessDeniedException)
    {
         $redirection = new RedirectResponse($this->router->generate('erreur'));
            return $redirection;
        
    }
}