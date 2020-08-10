<?php
namespace Bundles\WebEstadisticasBundle\Controller;

use Bundles\WebEstadisticasBundle\Entity\ArchivoEstadistico;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
/**
 * 
 *  @Route("/") 
 * 
 */
class IndexController extends Controller {
	
	/**
	 *  @Route("/",name="index")
	 *  @Template()
	 * 
	 */
	public function indexAction() {
		
		$em = $this->getDoctrine()->getManager();
		
	
		$query = $em->getRepository("WebEstadisticasBundle:Novedades")->findAll();
		
		
		foreach ($query as $q) {

				$link = $this->container->get('templating.helper.assets')->getUrl($q->getLink());
				$descarga = $this->container->get('templating.helper.assets')->getUrl($q->getDescarga());
					
			$q->setAssetLink($link);
			$q->setAssetDescarga($descarga);
				
		}		
		
		$em->flush();
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
		

		
		if (!$link || !$descarga)
			throw new NotFoundHttpException('Error del servidor');
		
 		return $this->render("WebEstadisticasBundle:index:index.html.twig",array(
 				"news" => $query, "fecha" => $fecha[0]['fecha'], "institucional" => $this->container->get('templating.helper.assets')->getUrl($institucional[0]['link'])
 		));
	}

	
}