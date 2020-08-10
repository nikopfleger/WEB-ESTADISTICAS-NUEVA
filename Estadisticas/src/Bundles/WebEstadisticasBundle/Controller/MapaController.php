<?php
namespace Bundles\WebEstadisticasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class MapaController extends Controller {
	
	/**
	 * @Route("/mapa",name="mapa")
	 * @Template()
	 */

	public function mapaAction() {
	

		$em = $this->getDoctrine()->getManager();
		$fecha = $em->createQuery("
				select uf.ulfeDia as fecha
				from WebEstadisticasBundle:UltimaFecha uf
				")->getResult();
				
		$em->flush();
		$em = $this->getDoctrine()->getManager();

		$institucional = $em->createQuery("
				select it.link as link
				from WebEstadisticasBundle:Institucional it
				")->getResult();
		
// 		return $this->render("WebEstadisticasBundle::mapa.html.twig");
		return $this->render("WebEstadisticasBundle::mapaviejo.html.twig",array(
 				"fecha" => $fecha[0]['fecha'], "institucional" => $this->container->get('templating.helper.assets')->getUrl($institucional[0]['link'])
 		));
	}
	
	/**
	 * @Route("/obtenerCoordenadas",name="_obtenerCoordenadas")
	 * 
	 */
	public function obtenerCoordenadasAction(Request $petition) {
		$em = $this->getDoctrine()->getManager();
		$query = $em->getRepository("WebEstadisticasBundle:Jurisdiccion")->findOneBy(array("capitulo" => $petition->request->get("id")));
		
		return new JsonResponse( array("zoom" => $query->getZoom(), "latitud" => $query->getLatitud(), "longitud" => $query->getLongitud() ));
	}
	
}