<?php
namespace abmestadisticas\abmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use abmestadisticas\abmBundle\Entity\Anio;
use abmestadisticas\abmBundle\Entity\Capitulo;
use abmestadisticas\abmBundle\Form\FormAnio;
use abmestadisticas\abmBundle\Entity\ArchivoEstadistico;
use abmestadisticas\abmBundle\Entity\Indicador;
use abmestadisticas\abmBundle\Entity\Periodo;
use abmestadisticas\abmBundle\Form\CapituloType;
use Doctrine\DBAL\DBALException;
use abmestadisticas\abmBundle\Form\JurisdiccionType;
use abmestadisticas\abmBundle\Entity\Jurisdiccion;
use abmestadisticas\abmBundle\Form\TituloType;
use abmestadisticas\abmBundle\Entity\Titulo;
use abmestadisticas\abmBundle\Entity\Subtitulo;
use abmestadisticas\abmBundle\Form\SubtituloType;
use abmestadisticas\abmBundle\Form\ArchivoEstadisticoType;
use abmestadisticas\abmBundle\Entity\CapituloIndicador;
use abmestadisticas\abmBundle\Form\CapituloIndicadorType;
use abmestadisticas\abmBundle\Form\IndicadorType;
use abmestadisticas\abmBundle\Form\PeriodoType;
use abmestadisticas\abmBundle\Form\EvolucionEstadisticaType;
use abmestadisticas\abmBundle\Entity\EvolucionEstadistica;
use abmestadisticas\abmBundle\Form\NovedadesType;
use abmestadisticas\abmBundle\Form\TrabajoEspecialType;
use abmestadisticas\abmBundle\Entity\Novedades;
use abmestadisticas\abmBundle\Entity\TrabajoEspecial;

/**
 * @Route("/")
 * 
 * 
 */

class AdminController extends Controller {
	/** FORWARD A ADMIN ACTION
	 * @Route("/")
	 *
	 *
	 */
	public function indexAction() {
		return $this->forward("abmBundle:admin:admin");
	}
	

	/*
	 * FORM GENERATORS
	 * 
	 * 
	 */
	
	//GENERA EL FORM DE NOVEDADES
	
	public function generateFormNove($em,$request,&$nove) {
		return $this->createForm(new NovedadesType($this->generateUrl('_formNove')),$nove);
	}
	
	//GENERA EL FORM DE TRABAJOS ESPECIALES
	public function generateFormTres($em,$request,&$tres) {
		return $this->createForm(new TrabajoEspecialType($this->generateUrl('_formTres')),$tres);
	}
	
	//GENERA EL FORM DE EVOLUCIONESTADISTICA
	public function generateFormEves($em,$request,&$eves) {
		$choices = array();
	
	
		$query = $em->getRepository("abmBundle:Periodo")->findBy(array(),array('periId' => 'ASC'));
		$choices = array();
		foreach ($query as $q) {
			$choices[ $q->getPeriId() ] = $q->getPeriDetalle();
		}

	
		return $this->createForm(new EvolucionEstadisticaType($this->generateUrl('_formEves'), $choices),$eves);
	}
	
	//GENERA EL FORM DE PERIODOS
	public function generateFormPeri($em,$request,&$peri) {
		return $this->createForm(new PeriodoType($this->generateUrl('_formPERI') ),$peri);
	}
	
	//GENERA EL FORM DE INDICADORES
	public function generateFormIndi($em,$request,&$indi) {
		$choices = array();
		
		
		$query = $em->getRepository("abmBundle:Anio")->findBy(array(),array('anioId' => 'ASC'));
		$choices['anio'] = array();
		foreach ($query as $q) {
			$choices['anio'][ $q->getAnioId() ] = $q->getAnioId();
		}
		
		$query = $em->getRepository("abmBundle:CapituloIndicador")->findBy(array(),array('cainId' => 'ASC'));
		$choices['capitulo'] = array();
		foreach ($query as $q) {
			$choices['capitulo'][ $q->getCainId() ] = $q->getCainDetalle();
		}
		
		return $this->createForm(new IndicadorType($this->generateUrl('_formIndi'), $choices),$indi);
	}
	
	//GENERA EL FORM DE CAPITULOS INDICADORES
	
	public function generateFormCi($em,$request,&$ci) {
		return $this->createForm(new CapituloIndicadorType($this->generateUrl('_formCI') ),$ci);
	}
	
	//GENERA EL FORM DE ARCHIVOS ESTADISTICOS
	
	public function generateFormAe($em,$request,&$ae) {
		$choices = array();
		
		$query = $em->getRepository("abmBundle:Anio")->findBy(array(),array('anioId' => 'ASC'));
		$choices['anio'] = array();
		foreach ($query as $q) {
			$choices['anio'][ $q->getAnioId() ] = $q->getAnioId();
		}
		
		$query = $em->getRepository("abmBundle:Capitulo")->findBy(array(),array('capi_id' => 'ASC'));
		$choices['capitulo'] = array();
		foreach ($query as $q) {
			$choices['capitulo'][ $q->getCapiId() ] = $q->getCapiId() . '. ' . $q->getCapiDetalle();
		}
		
		$choices['titulo'] = array();
		$query = $em->getRepository("abmBundle:Titulo")->findBy(array('titu_habilitado' => 1),array('titu_detalle' => 'ASC'));
		$choices['titulo'][ -1 ] = "Ninguno";
		foreach ($query as $q) {
			$choices['titulo'][ $q->getTituId() ] = $q->getTituDetalle();
		}
		
				
		$choices['subtitulo'] = array();
		$query = $em->getRepository("abmBundle:Subtitulo")->findBy(array('subt_habilitado' => 1),array('subt_detalle' => 'ASC'));;
		$choices['subtitulo'][ -1 ] = "Ninguno";
		foreach ($query as $q) {
			$choices['subtitulo'][ $q->getSubtId() ] = $q->getSubtDetalle();
		}
			
		
		return $this->createForm(new ArchivoEstadisticoType($this->generateUrl('_formAE'), $choices),$ae);
		
	}
	
	//GENERA EL FORM DE AÑO
	public function generateFormAnio($em,$request,&$anio) {


		$query = $em->getRepository("abmBundle:Anio")->findAll();
		$choicesSelectAnio = array(-1 => "Seleccione Año",2000 => 2000,2001 => 2001,2002 => 2002,
		2003 => 2003,2004 => 2004,2005 => 2005,2006 => 2006,2007 => 2007,2008 => 2008,2009 => 2009,2010 => 2010,2011 => 2011,
		2012 => 2012,2013 => 2013,2014 => 2014,2015 => 2015,2016 => 2016,2017 => 2017,2018 => 2018,2019 => 2019,
		2020 => 2020,2021 => 2021,2022 => 2022,2023 => 2023,2024 => 2024,2025 => 2025,2026 => 2026,2027 => 2027,
		2028 => 2028,2029 => 2029,2030 => 2030);
		

		foreach ($query as $q)
			unset($choicesSelectAnio[array_search($q->getAnioId(),$choicesSelectAnio)]);

		return $this->createForm(new FormAnio($choicesSelectAnio,$this->generateUrl('_formAnio')), $anio);
	}
	
	//GENERA EL FORM DE CAPITULO
	public function generateFormCapitulo($em,$request,&$capitulo) {	
		return $this->createForm(new CapituloType($this->generateUrl('_formCapitulo')),$capitulo);
	}
	
	//GENERA EL FORM DE JURISDICCION
	public function generateFormJurisdiccion($em,$request,&$jurisdiccion) {
		$query = $em->getRepository("abmBundle:Capitulo")->findBy(array(),array('capi_id' => 'ASC'));
		$choices = array();
		foreach ($query as $q) {
			$choices[ $q->getCapiId() ] = $q->getCapiId() . ". " . $q->getCapiDetalle();
		}
		return $this->createForm(new JurisdiccionType($this->generateUrl('_formJurisdiccion'),$choices), $jurisdiccion);
		
	}
	
	//GENERA EL FORM DE TITULO
	public function generateFormTitulo($em,$request,&$titulo) {
		$query = $em->getRepository("abmBundle:Capitulo")->findBy(array(),array('capi_id' => 'ASC'));
		$choices = array();
		foreach ($query as $q) {
			$choices[ $q->getCapiId() ] = $q->getCapiId() . '. ' . $q->getCapiDetalle();
		}
		
		return $this->createForm(new TituloType($this->generateUrl('_formTitulo'),$choices),$titulo);
	}
	
	
	//GENERA EL FORM DE SUBTITULO
	public function generateFormSubtitulo($em,$request,&$subtitulo) {
		$query = $em->getRepository("abmBundle:Titulo")->findBy(array(),array('titu_id' => 'ASC'));
		$choices = array();
		foreach ($query as $q) {
			$choices[ $q->getTituId() ] = $q->getTituDetalle(); 
		}
		
		
		return $this->createForm(new SubtituloType($this->generateUrl('_formSubtitulo'),$choices),$subtitulo);
	}
	
	
	/*
	 * END FORM GENERATORS
	 * 
	 */
	
	/*
	 * FORM ACTIONS
	 * 
	 * 
	 */
	
	/** LOGICA DEL SUBMIT DEL FORM DE NOVEDADES
	 * 
	 * @Route("formNove",name="_formNove")
	 * 
	 */
	public function formNoveAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		
		$nove = new Novedades();
		
		$editarNOVE = $this->generateFormNove($em, $request, $nove);
		$editarNOVE->handleRequest($request);
		
		if ($editarNOVE['noveId']->getData())
			$nove = $em->getRepository('abmBundle:Novedades')->find($editarNOVE['noveId']->getData());
		
		$nove->setNoveDescarga($editarNOVE['noveDescarga']->getData());
		$nove->setNoveDetalle($editarNOVE['noveDetalle']->getData());
		$nove->setNoveLink($editarNOVE['noveLink']->getData());
		
		if ($editarNOVE->isValid()) {
			$em->persist($nove);
			$em->flush();
			unset($nove);
			return new JSONResponse(array(1=>1));
		}
		
		return array (
				'editarNOVE' => $editarNOVE->createView()
		);
	}
	
	/** LOGICA DEL SUBMIT DEL FORM DE TRABAJOS ESPECIALES
	 *
	 * @Route("formTres",name="_formTres")
	 *
	 */
	public function formTresAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
	
		$tres = new TrabajoEspecial();
	
		$editarTRES = $this->generateFormTres($em, $request, $nove);
		$editarTRES->handleRequest($request);
	
		if ($editarTRES['tresId']->getData())
			$tres = $em->getRepository('abmBundle:TrabajoEspecial')->find($editarTRES['tresId']->getData());
	
		$tres->setTresDescarga($editarTRES['tresDescarga']->getData());
		$tres->setTresDetalle($editarTRES['tresDetalle']->getData());
		$tres->setTresLink($editarTRES['tresLink']->getData());
	
		if ($editarTRES->isValid()) {
			$em->persist($tres);
			$em->flush();
			unset($tres);
			return new JSONResponse(array(1=>1));
		}
	
		return array (
				'editarTRES' => $editarTRES->createView()
		);
	}
	
	/** LOGICA DEL SUBMIT DEL FORM DE EVOLUCION ESTADISTICA
	 * 
	 * @Route("formEves",name="_formEves")
	 * 
	 */
	public function formEvesAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
	
		$eves = new EvolucionEstadistica();
	
		$editarEVES = $this->generateFormEves($em, $request, $eves);
		$editarEVES->handleRequest($request);
	
		if ($editarEVES['evesId']->getData())
			$eves = $em->getRepository('abmBundle:EvolucionEstadistica')->find($editarEVES['evesId']->getData());
	
		$eves->setEvesPeriodo($em->getRepository('abmBundle:Periodo')->find($editarEVES['evesPeriodo']->getData()));
		$eves->setEvesDetalle($editarEVES['evesDetalle']->getData());
		$eves->setEvesLink($editarEVES['evesLink']->getData());
	
		if ($editarEVES->isValid()) {
			$em->persist($eves);
			$em->flush();
			unset($eves);
			return new JSONResponse(array(1=>1));
		}
	
		return array (
				'editarEVES' => $editarEVES->createView()
		);
	}
	
	/** LOGICA DEL SUBMIT DEL FORM DE PERIODOS
	 * 
	 * @Route("formPERI",name="_formPERI")
	 * 
	 */
	
	public function formPeriAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		
		$peri = new Periodo();
		
		$editarPERI = $this->generateFormPeri($em, $request, $peri);
		
		$editarPERI->handleRequest($request);
		
		if ($editarPERI['periId']->getData())
			$peri = $em->getRepository('abmBundle:Periodo')->find($editarPERI['periId']->getData());
		
		$peri->setPeriDetalle($editarPERI['periDetalle']->getData());
		
		if($editarPERI->isValid()) {
			$em->persist($peri);
			$em->flush();
			unset($peri);
			return new JSONResponse(array(1 => 1));
		}
		
		return array (
				'editarPERI' => $editarPERI->createView()
		);
		
		
	}
	
	/** LOGICA DEL SUBMIT DEL FORM DE INDICADOR
	 * 
	 * @Route("formIndi",name="_formIndi")
	 */
	
	public function formIndiAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		
		$indi = new Indicador();
		
		$editarINDI = $this->generateFormIndi($em, $request, $indi);
		$editarINDI->handleRequest($request);

		if ($editarINDI['indiId']->getData())
			$indi = $em->getRepository('abmBundle:Indicador')->find($editarINDI['indiId']->getData());
		
		$indi->setIndiAnio($em->getRepository('abmBundle:Anio')->find($editarINDI['indiAnio']->getData()));
		$indi->setIndiCapitulo($em->getRepository('abmBundle:CapituloIndicador')->find($editarINDI['indiCapitulo']->getData()));
		$indi->setIndiDetalle($editarINDI['indiDetalle']->getData());
		$indi->setIndiLink($editarINDI['indiLink']->getData());
		$indi->setIndiDescarga($editarINDI['indiDescarga']->getData());

		if ($editarINDI->isValid()) {
			$em->persist($indi);
			$em->flush();
			unset($indi);
			return new JSONResponse(array(1=>1));
		}
		
		return array (
			'editarINDI' => $editarINDI->createView()
		);
	}
	
	/** LOGICA DEL SUBMIT DEL FORM DE CAPITULOINDICADOR
	 * 
	 * 
	 * @Route("formCI",name="_formCI")
	 */
	public function formCIAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		
		$ci = new CapituloIndicador();
		
		$editarCI = $this->generateFormCi($em, $request, $ci);
		
		$editarCI->handleRequest($request);
		
		if ($editarCI['cainId']->getData())
			$ci = $em->getRepository('abmBundle:CapituloIndicador')->find($editarCI['cainId']->getData());
		
		$ci->setCainDetalle($editarCI['cainDetalle']->getData());
		
		if($editarCI->isValid()) {
			$em->persist($ci);
			$em->flush();
			unset($ci);
			return new JSONResponse(array(1 => 1));
		}
		
		return array (
				'editarCI' => $editarCI->createView()
		);
	}
	
	/** LOGICA DEL SUBMIT DEL FORM DE ARCHIVOESTADISTICO
	 * 
	 * @Route("/formAE",name="_formAE")
	 * 
	 * 
	 */
	
	public function formAEAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		
		$ae = new ArchivoEstadistico();
		
		$editarAE = $this->generateFormAe($em, $request, $ae);
		
		$editarAE->handleRequest($request);
		if ($editarAE['aresId']->getData()) {
			$ae = $em->getRepository('abmBundle:ArchivoEstadistico')->find($editarAE['aresId']->getData());
		}

		//ANIO
		$ae->setAresAnio($em->getRepository('abmBundle:Anio')->find($editarAE['aresAnio']->getData()));
		//CAPITULO
		$ae->setAresCapitulo($em->getRepository('abmBundle:Capitulo')->find($editarAE['aresCapitulo']->getData()));
		//TITULO
		if ($request->request->get('aresTitulo') != -1)
			$ae->setAresTitulo($em->getRepository('abmBundle:Titulo')->find($editarAE['aresTitulo']->getData()));
		//SUBTITULO
		if ($request->request->get("aresSubtitulo") != -1)
			$ae->setAresSubtitulo($em->getRepository('abmBundle:Subtitulo')->find($editarAE['aresSubtitulo']->getData()));
		//LINK
		$ae->setAresLink($editarAE['aresLink']->getData());
		//DESCARGA
		$ae->setAresDescarga($editarAE['aresDescarga']->getData());
		//DETALLE
		$ae->setAresDetalle($editarAE['aresDetalle']->getData());
		//DESCRIPCION
		$ae->setAresDescripcion($editarAE['aresDescripcion']->getData());
		//COMENTARIO
		$ae->setAresComentario($editarAE['aresComentario']->getData());

		if($editarAE->isValid()) {			
			$em->persist($ae);
			$em->flush();
			unset($ae);
			return new JSONResponse(array(1 => 1));			
		}
		
		return array (
			'editarAE' => $editarAE->createView()
		);
		
	}
	
	/** LOGICA DEL SUBMIT DEL FORM DE TITULO
	 * 
	 * @Route("/formTitulo",name="_formTitulo")
	 * 
	 * 
	 */
	
	public function formTituloAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$titulo = new Titulo();
		
		$editarTitulo = $this->generateFormTitulo($em, $request, $titulo);
		
		$editarTitulo->handleRequest($request);
		
		if ($editarTitulo['titu_id']->getData())
			$titulo = $em->getRepository('abmBundle:Titulo')->find($editarTitulo['titu_id']->getData());
		
		$titulo->setTituCapitulo($em->getRepository('abmBundle:Capitulo')->find($editarTitulo['titu_capitulo']->getData()));
		$titulo->setTituDetalle($editarTitulo['titu_detalle']->getData());
		$titulo->setTituHabilitado($editarTitulo['titu_habilitado']->getData());
		
		if ($editarTitulo->isValid()) {
			$em->persist($titulo);
			$em->flush();
			unset($titulo);
			return new JSONResponse(array(1 => 1));
		}
		return array (
			'editarTitulo' => $editarTitulo->createView()
		);
	}
	
	/** LOGICA DEL SUBMIT DEL FORM DE SUBTITULO
	 *
	 * @Route("/formSubtitulo",name="_formSubtitulo")
	 *
	 *
	 */
	

	public function formSubtituloAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$subtitulo = new Subtitulo();
	
		$editarSubtitulo = $this->generateFormSubtitulo($em, $request, $subtitulo);
	
		$editarSubtitulo->handleRequest($request);
	
		if ($editarSubtitulo['subt_id']->getData())
			$subtitulo = $em->getRepository('abmBundle:Subtitulo')->find($editarSubtitulo['subt_id']->getData());
	
		$subtitulo->setSubtDetalle($editarSubtitulo['subt_detalle']->getData());
		$subtitulo->setSubtHabilitado($editarSubtitulo['subt_habilitado']->getData());
		$subtitulo->setSubtTitulo($em->getRepository('abmBundle:Titulo')->find($editarSubtitulo['subt_titulo']->getData()));
		
	
		if ($editarSubtitulo->isValid()) {
			$em->persist($subtitulo);
			$em->flush();
			unset($subtitulo);
			return new JSONResponse(array(1 => 1));
		}
		return array (
				'editarSubtitulo' => $editarSubtitulo->createView()
		);
	}
	
	
	/** LOGICA DEL SUBMIT DEL FORM DE JURISDICCION
	 *  @Route("/formJurisdiccion",name="_formJurisdiccion")
	 * 
	 * 
	 */
	
	public function formJurisdiccionAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$jurisdiccion = new Jurisdiccion();
		
		$editarJurisdiccion = $this->generateFormJurisdiccion($em, $request, $jurisdiccion);

		$editarJurisdiccion->handleRequest($request);
		if ($editarJurisdiccion['juriId']->getData()) 
			$jurisdiccion = $em->getRepository('abmBundle:Jurisdiccion')->find($editarJurisdiccion['juriId']->getData());
		
		$capQuery = $em->getRepository("abmBundle:Capitulo")->find($editarJurisdiccion['juriCapitulo']->getData());
		
		$jurisdiccion->setJuriCapitulo($capQuery);
		$jurisdiccion->setJuriDetalle($editarJurisdiccion['juriDetalle']->getData());
		
		if ($editarJurisdiccion->isValid()) {

			
			$em->persist($jurisdiccion);
			$em->flush();
			unset($jurisdiccion);
			return new JSONResponse(array(1 => 1));
		}
		return array(
				'editarJurisdiccion' => $editarJurisdiccion->createView()
		);
		
	}
	
	/** LOGICA DEL SUBMIT DEL FORM CAPITULO
	 * @Route("/formCapitulo",name="_formCapitulo")
	 *@Template()
	 * 
	 */
	
	public function formCapituloAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$capitulo = new Capitulo();
		
		$editarCapitulo = $this->generateFormCapitulo($em, $request, $capitulo);
		$editarCapitulo->handleRequest($request);
		

		if ($editarCapitulo->isValid()) {			
			try {
				//SI ES NUEVO ID
				if ($editarCapitulo['capi_editar']->getData() == 0) {
					$capitulo->setCapiId($editarCapitulo['capi_id']->getData());
					$capitulo->setCapiDetalle($editarCapitulo['capi_detalle']->getData());

					$em->persist($capitulo);
					$em->flush();
					unset($capitulo);
				}
				
				//SI EL ID NO CAMBIA
				else if ($editarCapitulo['capi_id']->getData() == $editarCapitulo['capi_id_original']->getData()) {
					$capitulo = $em->getRepository("abmBundle:Capitulo")->find($editarCapitulo['capi_id_original']->getData());
					$capitulo->setCapiDetalle($editarCapitulo['capi_detalle']->getData());
					$em->persist($capitulo);
					$em->flush();
					unset($capitulo);
						
				//SI EL ID CAMBIA
				} else {
					//CREO EL NUEVO
					$capitulo->setCapiId($editarCapitulo['capi_id']->getData());
					$capitulo->setCapiDetalle($editarCapitulo['capi_detalle']->getData());
					$em->persist($capitulo);
					$em->flush();
					
					
					//ACTUALIZO VALORES
					$query = $em->getRepository("abmBundle:ArchivoEstadistico")->findBy(array('aresCapitulo' => $editarCapitulo['capi_id_original']->getData()));
					foreach($query as $q) {
						$q->setAresCapitulo($editarCapitulo['capi_id']->getData());
						$em->persist($q);
					}
					
					$em->flush();
					
					$query = $em->getRepository("abmBundle:Jurisdiccion")->findBy(array('juriCapitulo' =>$editarCapitulo['capi_id_original']->getData()));
					
					foreach ($query as $q) {
						$q->setJuriCapitulo($editarCapitulo['capi_id']->getData());
						$em->persist($q);
					
					}
					
					$em->flush();
					
					//BORRO EL VIEJO
					$capitulo = $em->getRepository("abmBundle:Capitulo")->find($editarCapitulo['capi_id_original']->getData());
					$em->remove($capitulo);
					
					$em->flush();
					unset($capitulo);
				}
				
				
				
			} catch (DBALException $e) {
				if( $e->getCode() == '0' )
				{
					if( strpos($e->getMessage(), 'ORA-00001') )
						return new JSONResponse(array('message' => 'Clave duplicada, por favor seleccione otro número'), 419);
		
// 					else return new JSONResponse(array('message' => 'Error: Por favor intente de nuevo'),419);
				}
			}
			return new JSONResponse(array(1 => 1));
			
		}
		
		return array(
				'editarCapitulo' => $editarCapitulo->createView()
		);
	}
	
	
	/** LOGICA DEL SUBMIT DEL FORM DE AÑO
	 * @Route("/formAnio",name="_formAnio")
	 * @Template()
	 */
	
	public function formAnioAction(Request $request) {
		$anio = new Anio();		
		$em = $this->getDoctrine()->getManager();
		
		$agregarAnio = $this->generateformAnio($em,$request,$anio);
		$agregarAnio->handleRequest($request);
		if ($agregarAnio->isValid()) {
				
		
			$anio->setAnioId($agregarAnio['anioId']->getData());
			$anio->setAnioHabilitado($agregarAnio['anioHabilitado']->getData());
			$em->persist($anio);
			$em->flush();
			unset($anio);
		
			if (in_array('dupanio',$agregarAnio['anioOpciones']->getData())) {
				$ultimoAnio = $em->createQuery('select MAX(ae.aresAnio) from abmBundle:ArchivoEstadistico ae')->getResult()[0][1];
				$nuevoAnio = $agregarAnio['anioId']->getData();
		
		
				$ultimoAnioIndicadores = $em->createQuery('select MAX(i.indiAnio) from abmBundle:Indicador i')->getResult()[0][1];
				$query = $em->getRepository("abmBundle:Indicador")->findBy(array('indiAnio' => $ultimoAnioIndicadores));
		
		
				foreach ($query as $q) {
					$indicador = new Indicador();
						
					$indicador->setIndiAnio($nuevoAnio);
					$indicador->setIndiCapitulo($q->getIndiCapitulo());
					$indicador->setIndiDescarga(str_replace("_" . substr($ultimoAnioIndicadores,2),"_" . substr($nuevoAnio,2),$q->getIndiDescarga()));
					$indicador->setIndiDescarga(str_replace($ultimoAnioIndicadores,$nuevoAnio,$indicador->getIndiDescarga()));
					$indicador->setIndiDescarga(str_replace($ultimoAnioIndicadores+1,$nuevoAnio+1,$indicador->getIndiDescarga()));
					$indicador->setIndiDetalle($q->getIndiDetalle());
					$indicador->setIndiLink(str_replace("_" . substr($ultimoAnioIndicadores,2),"_" . substr($nuevoAnio,2),$q->getIndiLink()));
					$indicador->setIndiLink(str_replace($ultimoAnioIndicadores,$nuevoAnio,$indicador->getIndiLink()));
					$indicador->setIndiLink(str_replace($ultimoAnioIndicadores+1,$nuevoAnio+1,$indicador->getIndiLink()));
						
					$em->persist($indicador);
				}
		
					
		
				$query = $em->getRepository("abmBundle:ArchivoEstadistico")->findBy(array('aresAnio' => $ultimoAnio));
		
		
				foreach($query as $q) {
		
		
					$archivo = new ArchivoEstadistico();
		
					$archivo->setAresAnio($nuevoAnio);
					$archivo->setAresCapitulo($q->getAresCapitulo());
					$archivo->setAresComentario($q->getAresComentario());
					$archivo->setAresDescarga(str_replace("_" . substr($ultimoAnio,2),"_" . substr($nuevoAnio,2),$q->getAresDescarga()));
					$archivo->setAresDescarga(str_replace($ultimoAnio,$nuevoAnio,$archivo->getAresDescarga()));
					$archivo->setAresDescarga(str_replace($ultimoAnio+1,$nuevoAnio+1,$archivo->getAresDescarga()));
					$archivo->setAresDescripcion($q->getAresDescripcion());
					$archivo->setAresDetalle($q->getAresDetalle());
					$archivo->setAresLink(str_replace("_" . substr($ultimoAnio,2),"_" . substr($nuevoAnio,2),$q->getAresLink()));
					$archivo->setAresLink(str_replace($ultimoAnio,$nuevoAnio,$archivo->getAresLink()));
					$archivo->setAresLink(str_replace($ultimoAnio+1,$nuevoAnio+1,$archivo->getAresLink()));
					$archivo->setAresSubtitulo($q->getAresSubtitulo());
					$archivo->setAresTitulo($q->getAresTitulo());
		
		
					$em->persist($archivo);
		
		
				}
		
				$em->flush();
		
		
			}
				
			return new JSONResponse(array(1 => 1));
		}
		
		return array(
				'agregarAnio' => $agregarAnio->createView()
		);
	}
	
	/*
	 * END FORM ACTIONS
	 * 
	 * 
	 */

	
	
	
	/** GENERA PAGINA PRINCIPAL
	 * @Route("/admin",name="_admin")
	 * 
	 */
	public function adminAction(Request $request)
	{
		$anio = new Anio();
		$capitulo = new Capitulo();
		$jurisdiccion = new Jurisdiccion();
		$titulo = new Titulo();
		$subtitulo = new Subtitulo();
		$ae = new ArchivoEstadistico();
		$ci = new CapituloIndicador();
		$indi = new Indicador();
		$peri = new Periodo();
		$eves = new EvolucionEstadistica();
		$nove = new Novedades();
		$tres = new TrabajoEspecial();
		
		$serializador = $this->get("Serializador");
		$em = $this->getDoctrine()->getManager();

		$titulos = $em->getRepository('abmBundle:Titulo')->findBy(array('titu_habilitado' => 1),array('titu_detalle' => 'ASC'));
		$subtitulos = $em->getRepository('abmBundle:Subtitulo')->findBy(array('subt_habilitado' => 1),array('subt_detalle' => 'ASC'));
		$anios = $em->getRepository('abmBundle:Anio')->findAll();
			
		$agregarAnio = $this->generateFormAnio($em,$request,$anio);
		$editarCapitulo = $this->generateFormCapitulo($em,$request,$capitulo);
		$editarJurisdiccion = $this->generateFormJurisdiccion($em, $request, $jurisdiccion);
		$editarTitulo = $this->generateFormTitulo($em, $request, $titulo);
		$editarSubtitulo = $this->generateFormSubtitulo($em, $request, $subtitulo);
		$editarAE = $this->generateFormAe($em, $request, $ae);
		$editarCI = $this->generateFormCi($em, $request, $ci);
		$editarINDI = $this->generateFormIndi($em, $request, $indi);
		$editarPERI = $this->generateFormPeri($em, $request, $peri);
		$editarEVES = $this->generateFormEves($em, $request, $eves);
		$editarNOVE = $this->generateFormNove($em, $request, $nove);
		$editarTRES = $this->generateFormTres($em, $request, $tres);
		
		
			return $this->render("abmBundle:admin:admin.html.twig", array(
					'agregarAnio' => $agregarAnio->createView(),
					'editarCapitulo' => $editarCapitulo->createView(),
					'editarJurisdiccion' => $editarJurisdiccion->createView(),
					'editarTitulo' => $editarTitulo->createView(),
					'editarSubtitulo' => $editarSubtitulo->createView(),
					'editarAres' => $editarAE->createView(),
					'titulos' => $serializador->toJson($titulos),
					'subtitulos' => $serializador->toJson($subtitulos),
					'anios' => $serializador->toJson($anios),
					'editarCI' => $editarCI->createView(),
					'editarINDI' => $editarINDI->createView(),
					'editarPERI' => $editarPERI->createView(),
					'editarEVES' => $editarEVES->createView(),
					'editarNOVE' => $editarNOVE->createView(),
					'editarTRES' => $editarTRES->createView()
					
			));
	}

	
	
	/** OBTIENE CUALQUIER TABLA DE ACUERDO A REQUEST
	 * @Route("/getTabla", name="_getTabla")
	 * 
	 */
	public function getTablaAction(Request $request) {
		$serializador = $this->get("Serializador");
		$em = $this->getDoctrine()->getManager();
		$query = $em->getRepository("abmBundle:".$request->request->get("tabla","Fallo"))->findAll();
		
		return new JSONResponse($serializador->toJson($query));
	}
	
	/** HABILITA UN AÑO
	 * @Route("/habilitacionAnio",name="_habilitacionAnio")
	 * 
	 */
	
	public function habilitacionAnioAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$fila = $em->getRepository("abmBundle:Anio")->find($request->request->get("anioId",2012));
		($fila->getAnioHabilitado() == 1) ? $fila->setAnioHabilitado(0) : $fila->setAnioHabilitado(1);
		$em->flush();		
		return new JSONResponse(array("habilitado" => $fila->getAnioHabilitado()));
	}
	
	/** ELIMINA UN CAPITULO
	 * @Route("/eliminarCapitulo", name="_eliminarCapitulo")
	 * 
	 * 
	 */
	public function eliminarCapituloAction(Request $request) {
		$this->removeBy("abmBundle:Jurisdiccion", array('juriCapitulo' => $request->request->get('capitulo')));
		$this->removeBy("abmBundle:ArchivoEstadistico", array('aresCapitulo' => $request->request->get('capitulo')));
		$this->removeBy("abmBundle:Capitulo",array('capi_id' => $request->request->get('capitulo')));
		

		return new JSONResponse(array('ok' => 'ok'));
	}
	
	
	
	/** ELIMINA UN AÑO
	 * 
	 * @Route("/eliminarAnio",name="_eliminarAnio")
	 */
	
	public function eliminarAnioAction(Request $request) {
		//fallos archivos indicadores
		
		//ARCHIVOS
		
		$this->removeBy("abmBundle:ArchivoEstadistico", array('aresAnio' => $request->request->get('anioId',2030)));
		$this->removeBy("abmBundle:Fallo",array('fallAnio' => $request->request->get('anioId',2030)));
		$this->removeBy("abmBundle:Indicador", array('indiAnio' => $request->request->get('anioId',2030)));
		$this->removeBy("abmBundle:Anio",array('anioId' => $request->request->get('anioId',2030)));

		return new JSONResponse(array('ok' => 'ok'));

	}
	
	/** ELIMINA UNA JURISDICCION
	 * 
	 * @Route("/eliminarJuris",name="_eliminarJuris")
	 */
	public function eliminarJurisAction(Request $request)  {
		$this->removeBy("abmBundle:Jurisdiccion",array('juriId' => $request->request->get('juriId',20)));
		return new JSONResponse(array('ok' => 'ok'));
	}
	
	/** ELIMINA UN TITULO
	 * 
	 * @Route("/eliminarTitu",name="_eliminarTitu")
	 * 
	 */
	public function eliminarTituAction(Request $request) {
		$this->removeBy("abmBundle:Titulo", array('titu_id' => $request->get('tituId')));
		return new JSONResponse(array('ok' => 'ok'));
	}
	
	/** ELIMINA UN SUBTITULO
	 *
	 * @Route("/eliminarSubt",name="_eliminarSubt")
	 *
	 */
	public function eliminarSubtAction(Request $request) {
		$this->removeBy("abmBundle:Subtitulo", array('subt_id' => $request->get('subtId')));
		return new JSONResponse(array('ok' => 'ok'));
	}
	
	/** ELIMINA UN ARCHIVO ESTADISTICO
	 * 
	 * @Route("/eliminarAres",name="_eliminarAres")
	 */
	
	public function eliminarAresAction(Request $request) {
		$this->removeBy("abmBundle:ArchivoEstadistico", array('aresId' => $request->get('aresId',2163)));
		return new JSONResponse(array('ok' => 'ok'));
	}
	
	/** ELIMINA UN CAPITULO INDICADOR
	 * 
	 * @Route("/eliminarCain",name="_eliminarCain")
	 */
	public function eliminarCainAction(Request $request) {
		$this->removeBy('abmBundle:CapituloIndicador', array('cainId' => $request->get('cainId')));
		return new JSONResponse(array('ok' => 'ok'));
	}
	
	/** ELIMINA UN INDICADOR
	 * 
	 * @Route("/eliminarIndi",name="_eliminarIndi")
	 * 
	 */
	public function eliminarIndiAction(Request $request) {
		$this->removeBy('abmBundle:Indicador', array('indiId' => $request->get('indiId')));
		return new JSONResponse(array('ok'=>'ok'));
	}
	
	/** ELIMINA UN PERIODO
	 *
	 * @Route("/eliminarPeri",name="_eliminarPeri")
	 */
	public function eliminarPeriAction(Request $request) {
		$this->removeBy('abmBundle:Periodo', array('periId' => $request->get('periId')));
		return new JSONResponse(array('ok' => 'ok'));
	}
	
	/** ELIMINA UN EVES
	 *
	 * @Route("/eliminarEves",name="_eliminarEves")
	 *
	 */
	public function eliminarEvesAction(Request $request) {
		$this->removeBy('abmBundle:EvolucionEstadistica', array('evesId' => $request->get('evesId')));
		return new JSONResponse(array('ok'=>'ok'));
	}
	
	/** ELIMINA UNA NOVEDAD
	 * @Route("/eliminarNove", name="_eliminarNove")
	 * 
	 */
	public function eliminarNoveAction(Request $request) {
		$this->removeBy('abmBundle:Novedades', array('noveId' => $request->get('noveId')));
		return new JSONResponse(array('ok'=>'ok'));
	}
	
	/** ELIMINA UN TRABAJO ESPECIAL
	 * @Route("/eliminarTres", name="_eliminarTres")
	 *
	 */
	public function eliminarTresAction(Request $request) {
		$this->removeBy('abmBundle:TrabajoEspecial', array('tresId' => $request->get('tresId')));
		return new JSONResponse(array('ok'=>'ok'));
	}
	
	
	//REMUEVE CAMPOS DE UNA ENTIDAD POR CIERTA CONDICION
	//USAR array() para null
	public function removeBy($repo,$condition) {
		$em = $this->getDoctrine()->getManager();
		$query = $em->getRepository($repo)->findBy($condition);
		foreach($query as $q) {
			$em->remove($q);
		}
		$em->flush();
	}


	
}