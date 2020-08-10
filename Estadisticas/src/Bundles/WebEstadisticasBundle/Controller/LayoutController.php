<?php
namespace Bundles\WebEstadisticasBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


class LayoutController extends Controller {
	

	/**
	 *  @Route("/institucional", name="_menu_institucional")
	 *
	 *  @Template()
	 *
	 */
	public function institucionalAction() {
		return $this->forward("WebEstadisticasBundle:Institucional:institucional");
	}
	
	/**
	 * @Route("/estadMapa", name="_estad_mapa")
	 *
	 *
	 */
	
	public function estadMapaAction() {
		return $this->forward("WebEstadisticasBundle:Mapa:mapa");
	}
	/**
	 * @Route("/getanio",name="_getanio")
	 */
	public function getanioAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$query = $em->createQuery('
				 SELECT a.anioId as id, a.anioId as detalle
				 FROM WebEstadisticasBundle:Anio a where a.anioHabilitado = 1 order by a.anioId DESC')->getResult();
		return new JsonResponse($query);
	}
	
	/**
	 * @Route("/getanioFallos",name="_getanioFallos")
	 */
	public function getanioFallosAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$query = $em->createQuery(
				"select DISTINCT a.anioId as id, a.anioId as detalle FROM WebEstadisticasBundle:Anio a, WebEstadisticasBundle:Fallo f
				WHERE a.anioId = f.anio
				ORDER BY a.anioId DESC"
	
		)->getResult();

		return new JsonResponse($query);
	}
	
	
	/**
	 * @Route("/getCapitulos",name="_getCapitulos")
	 * 
	 */
	public function getcapitulosAction(Request $request) {
 		$id = $request->request->get("id",2012);
		
		$em = $this->getDoctrine()->getManager();
		
		$query = $em->createQuery('
			select DISTINCT c.id as id,c.detalle as deta,c.numero as numero,(CASE WHEN c.numero is not null THEN CONCAT(c.id,:cadena,c.detalle) ELSE c.detalle END) as detalle 
			FROM WebEstadisticasBundle:ArchivoEstadistico ae,WebEstadisticasBundle:Capitulo c,WebEstadisticasBundle:Anio a
			where c.id = ae.aresCapitulo and a.anioId = ae.aresAnio and a.anioId = :anio
			order by numero,deta		
		')->setParameter('anio',$id)->setParameter('cadena','. ')->getResult();
		

		return new JsonResponse($query);
	}
	
	/**
	 * @Route("/getDivisiones",name="_getDivisiones") 
	 */
	
	public function getdivisionesAction(Request $petition) {
		$capituloID = $petition->request->get("capituloID",1);
		$anioID = $petition->request->get("anioID",2012);
		$em = $this->getDoctrine()->getManager();

		$query = $em->createQuery('
				select DISTINCT t.id as id, t.detalle as detalle
				from WebEstadisticasBundle:ArchivoEstadistico ae, WebEstadisticasBundle:Titulo t
				where ae.aresCapitulo = :capitulo and ae.aresAnio = :anio and t.id = ae.aresTitulo
				ORDER BY t.detalle ASC
				')->setParameter('capitulo',$capituloID)->setParameter('anio',$anioID)
			    ->getResult();

		return new JsonResponse($query);
	}
	/**
	 * @Route("/getArchivos",name="_getArchivos")
	 */
	public function getarchivosAction(Request $petition) {
		$sndArray= array();
		$capituloID = $petition->request->get("capituloID",36);
		$divisionID = $petition->request->get("divisionID");
		$subtituloID = $petition->request->get("subtituloID");
		$anioID = $petition->request->get("anioID",2014);
		$em = $this->getDoctrine()->getManager();
		$query = $em->getRepository("WebEstadisticasBundle:ArchivoEstadistico")->findBy(array("aresAnio" => $anioID,"aresCapitulo" => $capituloID, "aresTitulo" => $divisionID, "aresSubtitulo" => $subtituloID),array("aresTitulo" => "ASC", "aresDetalle" => "ASC"));
		foreach ($query as $q)
		{
			$arr = array (
				"id" => $q->getAresId(),
				"detalle" => $q->getAresDetalle()
			);
			$sndArray[] = $arr;
		}
		return new JsonResponse($sndArray);
		
	}

	
	
	
		
	/**
	 * @Route("/getDivisionesJuris",name="_getDivisionesJuris") 
	 */
	
	public function getdivisionesJurisAction(Request $petition) {
		$juriID = $petition->request->get("juriID",1);
		$anioID = $petition->request->get("anioID",2012);
		$em = $this->getDoctrine()->getManager();

		$query = $em->createQuery('
				select DISTINCT t.id as id, t.detalle as detalle
				from WebEstadisticasBundle:ArchivoEstadistico ae, WebEstadisticasBundle:Titulo t
				where ae.aresJurisdiccion = :juris and ae.aresAnio = :anio and t.id = ae.aresTitulo
				ORDER BY t.detalle ASC
				')->setParameter('juris',$juriID)->setParameter('anio',$anioID)
			    ->getResult();

		return new JsonResponse($query);
	}
	/**
	 * @Route("/getArchivosJuris",name="_getArchivosJuris")
	 */
	public function getarchivosJurisAction(Request $petition) {
		$sndArray= array();
		$juriID = $petition->request->get("juriID");
		$divisionID = $petition->request->get("divisionID");
		$subtituloID = $petition->request->get("subtituloID");
		$anioID = $petition->request->get("anioID");
		$em = $this->getDoctrine()->getManager();
		$query = $em->getRepository("WebEstadisticasBundle:ArchivoEstadistico")->findBy(array("aresAnio" => $anioID,"aresJurisdiccion" => $juriID, "aresTitulo" => $divisionID, "aresSubtitulo" => $subtituloID),array("aresTitulo" => "ASC", "aresDetalle" => "ASC"));
		foreach ($query as $q)
		{
			$arr = array (
				"id" => $q->getAresId(),
				"detalle" => $q->getAresDetalle()
			);
			$sndArray[] = $arr;
		}
		return new JsonResponse($sndArray);
		
	}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/**
	 * @Route("/getUrlDescarga", name="_getUrlDescarga")
	 */
	public function getUrlDescargaAction(Request $request) {
		$id = $request->get("id",150);
		
	
		$em = $this->getDoctrine()->getManager();
		$archivo = $em->getRepository("WebEstadisticasBundle:ArchivoEstadistico")->find($id);
	

		$link = $archivo->getAresLink() ? $this->container->get('templating.helper.assets')->getUrl($archivo->getAresLink()) : null ;
		$descarga = $archivo->getAresDescarga() ? $this->container->get('templating.helper.assets')->getUrl($archivo->getAresDescarga()) : null;
		
		return new JSONResponse(array("link" => $link,"descarga" => $descarga,"descripcion" => $archivo->getAresDescripcion(),"comentario" => $archivo->getAresComentario()) );
	}
	
	/**
	 * @Route("/getJurisdicciones",name="_getJurisdicciones")
	 * 
	 */
	public function getJurisdiccionesAction() {
		
		$em = $this->getDoctrine()->getManager();
		$sndArray = array();
		$query = $em->getRepository("WebEstadisticasBundle:Jurisdiccion")->findBy(array(),array("detalle" => "ASC"));
		foreach ($query as $q) {
			$arr = array(
				"id" => $q->getId(),
				"detalle" => $q->getDetalle()
			);
			$sndArray[] = $arr;
		}
		return new JsonResponse($sndArray);
	}
	
	/**
	 * @Route("/getAnioJurisdicciones",name="_getAnioJurisdicciones")
	 * 
	 */
	public function getAnioJurisdiccionesAction(Request $petition) {
		$id = $petition->get("id",1);
		
		$em = $this->getDoctrine()->getManager();
		$query = $em->createQuery('
				 SELECT DISTINCT a.anioId as id, a.anioId as detalle
				 FROM WebEstadisticasBundle:Anio a, WebEstadisticasBundle:ArchivoEstadistico ae 
				 where a.anioHabilitado = 1 
				 and ae.aresAnio = a.anioId and ae.aresJurisdiccion = :id
				 order by a.anioId DESC')->setParameter('id',$id)
				 ->getResult(); 		
				
		return new JsonResponse($query);
	}
	
	/**
	 * @Route("/getArchivosFallos",name="_getArchivosFallos")
	 * 
	 */
	
	public function getArchivosFallosAction(Request $petition) {
		$em = $this->getDoctrine()->getManager();
		$sndArray = array();
		
		$query = $em->getRepository("WebEstadisticasBundle:Fallo")
		->findBy( array(
				"anio" => $petition->request->get("anioID"),
				"division" => $petition->request->get("tipoID")),
				array("detalle" => "ASC")
		);
		foreach ($query as $q) {
			$arr = array(
				"id" => $q->getId(),
				"detalle" => $q->getDetalle()
			);
			$sndArray[] = $arr ;
		}		
		return new JsonResponse($sndArray);
	}
	
	/**
	 * @Route("/getUrlDescargaFallos",name="_getUrlDescargaFallos")
	 * 
	 */
	public function getUrlDescargaFallosAction(Request $petition) {
		$em = $this->getDoctrine()->getManager();
		$archivo = $em->getRepository("WebEstadisticasBundle:Fallo")->find($petition->request->get("id"));

		
		$response = $archivo->getLink() ? $this->container->get('templating.helper.assets')->getUrl($archivo->getLink()) : null ;
	
		
		
		return new JSONResponse(array("link" => $response));
	}
	
	/**
	 * @Route("/getPeriodos",name="_getPeriodos")
	 *  
	 */
	public function getPeriodosAction() {
		$sndArray = array();
		$em = $this->getDoctrine()->getManager();
		$query = $em->getRepository("WebEstadisticasBundle:Periodo")->findAll();
		foreach ($query as $q) {
			$sndArray[] = array(
				"id" => $q->getId(),
				"detalle" => $q->getDetalle()
			);			
		}		
		return new JSONResponse($sndArray);
	}
	
	/**
	 * @Route("/obtenerArchivosEvo",name="_getArchivosEvo")
	 * 
	 */
	public function getArchivosEvoAction(Request $request) {
		$sndArray = array();
		$em = $this->getDoctrine()->getManager();
		$query = $em->getRepository("WebEstadisticasBundle:EvolucionEstadistica")->findBy(array("periodo" => $request->request->get("id")),array("detalle" => "ASC"));
		
		foreach($query as $q) {
			$sndArray[] = array(
				"id" => $q->getId(),
				"detalle" => $q->getDetalle()					
			);			
		}
		
		return new JsonResponse($sndArray);
	}
	
	/**
	 * @Route("/getUrlDescargaEvolucion",name="_getUrlDescargaEvolucion")
	 * 
	 */
	
	public function getUrlDescargaEvolucionAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$archivo = $em->getRepository("WebEstadisticasBundle:EvolucionEstadistica")->find($request->request->get("id"));

		
		$response = $archivo->getLink() ? $this->container->get('templating.helper.assets')->getUrl($archivo->getLink()) : null ;
			
		return new JSONResponse(array("link" => $response));
	}
	
	/**
	 *  @Route("/otrosTrabajos",name="_otros_trabajos")
	 * 	@Template()
	 * 
	 */
	
	public function otrosTrabajosAction() {
		return $this->forward("WebEstadisticasBundle:otrosTrabajos:otrosTrabajos");
	}
	
	/**
	 * @Route("/getAniosIndicadores",name="_getAniosIndicadores")
	 * 
	 * 
	 */
	
	public function getAniosIndicadoresAction() {
		
		$em = $this->getDoctrine()->getManager();
		
		$query = $em->createQuery(
				'SELECT DISTINCT a.anioId as id, a.anioId as detalle FROM WebEstadisticasBundle:Indicador d, WebEstadisticasBundle:Anio a
			 WHERE d.anio = a.anioId
			 ORDER BY a.anioId DESC'
		)->getResult();

		return new JsonResponse($query);
	}
	
	/**
	 * @Route("/getCapitulosIndicadores",name="_getCapitulosIndicadores")
	 * 
	 * 
	 */
	
	public function getCapitulosIndicadoresAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		
		$query = $em->createQuery(
				'SELECT DISTINCT c.id as id, c.detalle as detalle FROM WebEstadisticasBundle:Indicador i, WebEstadisticasBundle:Capituloindicador c
			 WHERE i.anio = :id and c.id = i.capitulo
			 ORDER BY c.id ASC'
		)->setParameter('id',$request->get("id",13))->getResult();
		
		return new JSONResponse($query);
	}
	
	
	/**
	 * @Route("/getUrlDescargaIndicadores",name="_getUrlDescargaIndicadores")
	 *
	 */
	public function getUrlDescargaIndicadoresAction(Request $request) {
		$id = $request->get("id");
		
		$em = $this->getDoctrine()->getManager();
		$archivo = $em->getRepository("WebEstadisticasBundle:Indicador")->find($id);
		
		$link = $archivo->getLink() ? $this->container->get('templating.helper.assets')->getUrl($archivo->getLink()) : null ;
		$descarga = $archivo->getDescarga() ? $this->container->get('templating.helper.assets')->getUrl($archivo->getDescarga()) : null;
		
		return new JSONResponse(array("link" => $link, "descarga" => $descarga));
	
	
	}
	
	/**
	 * 
	 * @Route("/getArchivosIndicadores",name="_getArchivosIndicadores")
	 * 
	 */
	
	public function getArchivosIndicadoresAction(Request $request) {
		$sndArray = array();
		$em = $this->getDoctrine()->getManager();
		$query = $em->getRepository("WebEstadisticasBundle:Indicador")->findBy(array("capitulo" => $request->request->get("id"), "anio" => $request->request->get("anio")),array("detalle" => "ASC"));
		
		foreach($query as $q) {
			$sndArray[] = array(
					"id" => $q->getId(),
					"detalle" => $q->getDetalle()
			);
		}
		
		return new JsonResponse($sndArray);
	}
	
		
	/**
	 * @Route("/getSubtitulos", name="_getSubtitulos")
	 * 
	 */
	public function getSubtitulosAction(Request $request) {

		$capituloID = $request->request->get("capituloID",1);
		$divisionID = $request->request->get("divisionID",1);
		$anioID = $request->request->get("anioID",2012);
		$em = $this->getDoctrine()->getManager();
		
		
		$query = $em->createQuery(
			'SELECT DISTINCT s.id as id, s.detalle as detalle
			from WebEstadisticasBundle:ArchivoEstadistico ae, WebEstadisticasBundle:Subtitulo s
			where ae.aresCapitulo = :capitulo and ae.aresAnio = :anio and ae.aresTitulo = :titulo
			and s.id = ae.aresSubtitulo
		    ORDER BY s.detalle ASC'
		)->setParameter('capitulo',$capituloID)->setParameter('anio',$anioID)->setParameter('capitulo',$capituloID)->setParameter('titulo',$divisionID)->getResult();
		
	
		return new JsonResponse($query);
	}
	
	
		/**
	 * @Route("/getSubtJuris", name="_getSubtJuris")
	 * 
	 */
	public function getSubtitulosJurisAction(Request $request) {

		$juriID = $request->request->get("juriID",1);
		$divisionID = $request->request->get("divisionID",1);
		$anioID = $request->request->get("anioID",2012);
		$em = $this->getDoctrine()->getManager();
		
		
		$query = $em->createQuery(
			'SELECT DISTINCT s.id as id, s.detalle as detalle
			from WebEstadisticasBundle:ArchivoEstadistico ae, WebEstadisticasBundle:Subtitulo s
			where ae.aresJurisdiccion = :juris and ae.aresAnio = :anio and ae.aresTitulo = :titulo
			and s.id = ae.aresSubtitulo
		    ORDER BY s.detalle ASC'
		)->setParameter('juris',$juriID)->setParameter('anio',$anioID)->setParameter('juris',$juriID)->setParameter('titulo',$divisionID)->getResult();
		
	
		return new JsonResponse($query);
	}
}




