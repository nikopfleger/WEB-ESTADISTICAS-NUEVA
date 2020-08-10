<?php
namespace Bundles\WebEstadisticasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class otrosTrabajosController extends Controller {
	
	/**
	 * @Route("/otrosTrabajos", name="_otros_trabajos")
	 * @Template()
	 */
	
	public function otrosTrabajosAction() {
			
		$serializador = $this->get("Serializador");
		$em = $this->getDoctrine()->getManager();
		$query = $em->getRepository("WebEstadisticasBundle:TrabajoEspecial")->findAll();
		
		foreach ($query as $q) {
			
			$link = $this->container->get('templating.helper.assets')->getUrl($q->getLink());
			$descarga = $this->container->get('templating.helper.assets')->getUrl($q->getDescarga());
			
			$q->setAssetLink($link);
			$q->setAssetDescarga($descarga);			
		}
		
		$fecha = $em->createQuery("
				select uf.ulfeDia as fecha
				from WebEstadisticasBundle:UltimaFecha uf
				")->getResult();		
				
		$institucional = $em->createQuery("
				select it.link as link
				from WebEstadisticasBundle:Institucional it
				")->getResult();
		$institucional2 = $institucional[0]['link'];
	return $this->render(
	"WebEstadisticasBundle::otrosTrabajos.html.twig",
	array(
	"aaData" => $serializador->toJson($query),
	"fecha" => $fecha[0]['fecha'],
	"institucional" => $this->container->get('templating.helper.assets')->getUrl($institucional2)
	));		
	}
	
}