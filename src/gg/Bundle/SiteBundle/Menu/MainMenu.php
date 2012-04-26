<?php // src/MyVendor/MyBundle/Menu/MainMenu.php

namespace gg\Bundle\SiteBundle\Menu;

use Knp\Bundle\MenuBundle\Menu;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\SecurityContext;

class MainMenu extends Menu
{
    /**
     * @param Request $request
     * @param Router $router
     * @param SecurityContext $security
     */
    public function __construct(Request $request, Router $router,SecurityContext $security)
    {
        parent::__construct();        
              
        $this->setCurrentUri($request->getRequestUri());        
        $this->addChild('Info', $router->generate('homepage')); 
    }
}