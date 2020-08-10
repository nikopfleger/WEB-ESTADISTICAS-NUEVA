<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\IndexController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_institucional' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\InstitucionalController::institucionalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/institucional',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_menu_institucional' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::institucionalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/institucional',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_estad_mapa' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::estadMapaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estadMapa',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getanio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getanioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getanio',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getanioFallos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getanioFallosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getanioFallos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getCapitulos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getcapitulosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getCapitulos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getDivisiones' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getdivisionesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getDivisiones',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getArchivos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getarchivosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getArchivos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getDivisionesJuris' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getdivisionesJurisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getDivisionesJuris',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getArchivosJuris' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getarchivosJurisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getArchivosJuris',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getUrlDescarga' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getUrlDescargaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getUrlDescarga',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getJurisdicciones' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getJurisdiccionesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getJurisdicciones',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getAnioJurisdicciones' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getAnioJurisdiccionesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getAnioJurisdicciones',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getArchivosFallos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getArchivosFallosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getArchivosFallos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getUrlDescargaFallos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getUrlDescargaFallosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getUrlDescargaFallos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getPeriodos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getPeriodosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getPeriodos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getArchivosEvo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getArchivosEvoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/obtenerArchivosEvo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getUrlDescargaEvolucion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getUrlDescargaEvolucionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getUrlDescargaEvolucion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getAniosIndicadores' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getAniosIndicadoresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getAniosIndicadores',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getCapitulosIndicadores' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getCapitulosIndicadoresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getCapitulosIndicadores',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getUrlDescargaIndicadores' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getUrlDescargaIndicadoresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getUrlDescargaIndicadores',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getArchivosIndicadores' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getArchivosIndicadoresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getArchivosIndicadores',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getSubtitulos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getSubtitulosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getSubtitulos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getSubtJuris' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\LayoutController::getSubtitulosJurisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getSubtJuris',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mapa' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\MapaController::mapaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mapa',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_obtenerCoordenadas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\MapaController::obtenerCoordenadasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/obtenerCoordenadas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_otros_trabajos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Bundles\\WebEstadisticasBundle\\Controller\\otrosTrabajosController::otrosTrabajosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/otrosTrabajos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
