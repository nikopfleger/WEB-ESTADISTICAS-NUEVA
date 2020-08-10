<?php

namespace abmestadisticas\abmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use abmestadisticas\abmBundle\Controller\CapituloController;

class TestController extends Controller
{
    /**
     * @Route("/test")
     * @Template()
     */
    public function indexAction()
    {
    	$controller = new CapituloController();
        return $this->render("abmBundle:test:test.html.twig",$controller->editAction(25))   ;
    }

}
