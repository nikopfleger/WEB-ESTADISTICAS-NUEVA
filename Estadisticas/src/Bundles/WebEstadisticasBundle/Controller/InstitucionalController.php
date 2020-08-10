<?php

namespace Bundles\WebEstadisticasBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class InstitucionalController extends Controller {
	
	/**
	 * @Route("/institucional", name="_institucional")
	 * @Template()
	 */
	public function institucionalAction() {
	
/*
		$em = $this->getDoctrine()->getManager();
	
   		$fecha = $em->createQuery("
				select uf.ulfeDia as fecha
				from WebEstadisticasBundle:UltimaFecha uf
				")->getResult();

		
		return $this->render("WebEstadisticasBundle:institucional:institucional.html.twig",array(
 				"fecha" => $fecha[0]['fecha']
 		));*/
		
		
		$em = $this->getDoctrine()->getManager();

		$institucional = $em->createQuery("
				select it.link as link
				from WebEstadisticasBundle:Institucional it
				")->getResult();
		

		die(json_encode(array('error' => realpath($institucional[0]['link']))));

		return new BinaryFileResponse(realpath($institucional[0]['link']));
	}

	
	
	/**
	 * @Route("/estadMapa", name="_estad_mapa")
	 * @Template()
	 *
	 */
	
	public function estadMapaAction() {
		return $this->forward("WebEstadisticasBundle:Mapa:mapa");
	}
	
	
	
}