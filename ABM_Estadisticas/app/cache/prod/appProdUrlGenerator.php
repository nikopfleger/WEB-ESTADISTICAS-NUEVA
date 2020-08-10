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
        'abmestadisticas_abm_admin_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_formNove' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formNoveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formNove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_formTres' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formTresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formTres',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_formEves' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formEvesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formEves',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_formPERI' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formPeriAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formPERI',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_formIndi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formIndiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formIndi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_formCI' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formCIAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formCI',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_formAE' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formAEAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formAE',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_formTitulo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formTituloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formTitulo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_formSubtitulo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formSubtituloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formSubtitulo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_formJurisdiccion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formJurisdiccionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formJurisdiccion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_formCapitulo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formCapituloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formCapitulo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_formAnio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formAnioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formAnio',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_getTabla' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::getTablaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/getTabla',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_habilitacionAnio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::habilitacionAnioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/habilitacionAnio',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_eliminarCapitulo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarCapituloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminarCapitulo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_eliminarAnio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarAnioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminarAnio',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_eliminarJuris' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarJurisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminarJuris',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_eliminarTitu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarTituAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminarTitu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_eliminarSubt' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarSubtAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminarSubt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_eliminarAres' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarAresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminarAres',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_eliminarCain' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarCainAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminarCain',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_eliminarIndi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarIndiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminarIndi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_eliminarPeri' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarPeriAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminarPeri',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_eliminarEves' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarEvesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminarEves',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_eliminarNove' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarNoveAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminarNove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_eliminarTres' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarTresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/eliminarTres',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abmestadisticas_abm_test_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'abmestadisticas\\abmBundle\\Controller\\TestController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
