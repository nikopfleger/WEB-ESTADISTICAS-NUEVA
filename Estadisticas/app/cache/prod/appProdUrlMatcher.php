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

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\IndexController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/institucional')) {
            // _institucional
            if ($pathinfo === '/institucional') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\InstitucionalController::institucionalAction',  '_route' => '_institucional',);
            }

            // _menu_institucional
            if ($pathinfo === '/institucional') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::institucionalAction',  '_route' => '_menu_institucional',);
            }

        }

        // _estad_mapa
        if ($pathinfo === '/estadMapa') {
            return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::estadMapaAction',  '_route' => '_estad_mapa',);
        }

        if (0 === strpos($pathinfo, '/get')) {
            if (0 === strpos($pathinfo, '/getanio')) {
                // _getanio
                if ($pathinfo === '/getanio') {
                    return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getanioAction',  '_route' => '_getanio',);
                }

                // _getanioFallos
                if ($pathinfo === '/getanioFallos') {
                    return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getanioFallosAction',  '_route' => '_getanioFallos',);
                }

            }

            // _getCapitulos
            if ($pathinfo === '/getCapitulos') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getcapitulosAction',  '_route' => '_getCapitulos',);
            }

            // _getDivisiones
            if ($pathinfo === '/getDivisiones') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getdivisionesAction',  '_route' => '_getDivisiones',);
            }

            // _getArchivos
            if ($pathinfo === '/getArchivos') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getarchivosAction',  '_route' => '_getArchivos',);
            }

            // _getDivisionesJuris
            if ($pathinfo === '/getDivisionesJuris') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getdivisionesJurisAction',  '_route' => '_getDivisionesJuris',);
            }

            // _getArchivosJuris
            if ($pathinfo === '/getArchivosJuris') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getarchivosJurisAction',  '_route' => '_getArchivosJuris',);
            }

            // _getUrlDescarga
            if ($pathinfo === '/getUrlDescarga') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getUrlDescargaAction',  '_route' => '_getUrlDescarga',);
            }

            // _getJurisdicciones
            if ($pathinfo === '/getJurisdicciones') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getJurisdiccionesAction',  '_route' => '_getJurisdicciones',);
            }

            if (0 === strpos($pathinfo, '/getA')) {
                // _getAnioJurisdicciones
                if ($pathinfo === '/getAnioJurisdicciones') {
                    return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getAnioJurisdiccionesAction',  '_route' => '_getAnioJurisdicciones',);
                }

                // _getArchivosFallos
                if ($pathinfo === '/getArchivosFallos') {
                    return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getArchivosFallosAction',  '_route' => '_getArchivosFallos',);
                }

            }

            // _getUrlDescargaFallos
            if ($pathinfo === '/getUrlDescargaFallos') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getUrlDescargaFallosAction',  '_route' => '_getUrlDescargaFallos',);
            }

            // _getPeriodos
            if ($pathinfo === '/getPeriodos') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getPeriodosAction',  '_route' => '_getPeriodos',);
            }

        }

        // _getArchivosEvo
        if ($pathinfo === '/obtenerArchivosEvo') {
            return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getArchivosEvoAction',  '_route' => '_getArchivosEvo',);
        }

        if (0 === strpos($pathinfo, '/get')) {
            // _getUrlDescargaEvolucion
            if ($pathinfo === '/getUrlDescargaEvolucion') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getUrlDescargaEvolucionAction',  '_route' => '_getUrlDescargaEvolucion',);
            }

            // _getAniosIndicadores
            if ($pathinfo === '/getAniosIndicadores') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getAniosIndicadoresAction',  '_route' => '_getAniosIndicadores',);
            }

            // _getCapitulosIndicadores
            if ($pathinfo === '/getCapitulosIndicadores') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getCapitulosIndicadoresAction',  '_route' => '_getCapitulosIndicadores',);
            }

            // _getUrlDescargaIndicadores
            if ($pathinfo === '/getUrlDescargaIndicadores') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getUrlDescargaIndicadoresAction',  '_route' => '_getUrlDescargaIndicadores',);
            }

            // _getArchivosIndicadores
            if ($pathinfo === '/getArchivosIndicadores') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getArchivosIndicadoresAction',  '_route' => '_getArchivosIndicadores',);
            }

            if (0 === strpos($pathinfo, '/getSubt')) {
                // _getSubtitulos
                if ($pathinfo === '/getSubtitulos') {
                    return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getSubtitulosAction',  '_route' => '_getSubtitulos',);
                }

                // _getSubtJuris
                if ($pathinfo === '/getSubtJuris') {
                    return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getSubtitulosJurisAction',  '_route' => '_getSubtJuris',);
                }

            }

        }

        // mapa
        if ($pathinfo === '/mapa') {
            return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\MapaController::mapaAction',  '_route' => 'mapa',);
        }

        if (0 === strpos($pathinfo, '/o')) {
            // _obtenerCoordenadas
            if ($pathinfo === '/obtenerCoordenadas') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\MapaController::obtenerCoordenadasAction',  '_route' => '_obtenerCoordenadas',);
            }

            // _otros_trabajos
            if ($pathinfo === '/otrosTrabajos') {
                return array (  '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\otrosTrabajosController::otrosTrabajosAction',  '_route' => '_otros_trabajos',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
