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

        // abmestadisticas_abm_admin_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'abmestadisticas_abm_admin_index');
            }

            return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::indexAction',  '_route' => 'abmestadisticas_abm_admin_index',);
        }

        if (0 === strpos($pathinfo, '/form')) {
            // _formNove
            if ($pathinfo === '/formNove') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formNoveAction',  '_route' => '_formNove',);
            }

            // _formTres
            if ($pathinfo === '/formTres') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formTresAction',  '_route' => '_formTres',);
            }

            // _formEves
            if ($pathinfo === '/formEves') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formEvesAction',  '_route' => '_formEves',);
            }

            // _formPERI
            if ($pathinfo === '/formPERI') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formPeriAction',  '_route' => '_formPERI',);
            }

            // _formIndi
            if ($pathinfo === '/formIndi') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formIndiAction',  '_route' => '_formIndi',);
            }

            // _formCI
            if ($pathinfo === '/formCI') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formCIAction',  '_route' => '_formCI',);
            }

            // _formAE
            if ($pathinfo === '/formAE') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formAEAction',  '_route' => '_formAE',);
            }

            // _formTitulo
            if ($pathinfo === '/formTitulo') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formTituloAction',  '_route' => '_formTitulo',);
            }

            // _formSubtitulo
            if ($pathinfo === '/formSubtitulo') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formSubtituloAction',  '_route' => '_formSubtitulo',);
            }

            // _formJurisdiccion
            if ($pathinfo === '/formJurisdiccion') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formJurisdiccionAction',  '_route' => '_formJurisdiccion',);
            }

            // _formCapitulo
            if ($pathinfo === '/formCapitulo') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formCapituloAction',  '_route' => '_formCapitulo',);
            }

            // _formAnio
            if ($pathinfo === '/formAnio') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::formAnioAction',  '_route' => '_formAnio',);
            }

        }

        // _admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::adminAction',  '_route' => '_admin',);
        }

        // _getTabla
        if ($pathinfo === '/getTabla') {
            return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::getTablaAction',  '_route' => '_getTabla',);
        }

        // _habilitacionAnio
        if ($pathinfo === '/habilitacionAnio') {
            return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::habilitacionAnioAction',  '_route' => '_habilitacionAnio',);
        }

        if (0 === strpos($pathinfo, '/eliminar')) {
            // _eliminarCapitulo
            if ($pathinfo === '/eliminarCapitulo') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarCapituloAction',  '_route' => '_eliminarCapitulo',);
            }

            // _eliminarAnio
            if ($pathinfo === '/eliminarAnio') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarAnioAction',  '_route' => '_eliminarAnio',);
            }

            // _eliminarJuris
            if ($pathinfo === '/eliminarJuris') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarJurisAction',  '_route' => '_eliminarJuris',);
            }

            // _eliminarTitu
            if ($pathinfo === '/eliminarTitu') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarTituAction',  '_route' => '_eliminarTitu',);
            }

            // _eliminarSubt
            if ($pathinfo === '/eliminarSubt') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarSubtAction',  '_route' => '_eliminarSubt',);
            }

            // _eliminarAres
            if ($pathinfo === '/eliminarAres') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarAresAction',  '_route' => '_eliminarAres',);
            }

            // _eliminarCain
            if ($pathinfo === '/eliminarCain') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarCainAction',  '_route' => '_eliminarCain',);
            }

            // _eliminarIndi
            if ($pathinfo === '/eliminarIndi') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarIndiAction',  '_route' => '_eliminarIndi',);
            }

            // _eliminarPeri
            if ($pathinfo === '/eliminarPeri') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarPeriAction',  '_route' => '_eliminarPeri',);
            }

            // _eliminarEves
            if ($pathinfo === '/eliminarEves') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarEvesAction',  '_route' => '_eliminarEves',);
            }

            // _eliminarNove
            if ($pathinfo === '/eliminarNove') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarNoveAction',  '_route' => '_eliminarNove',);
            }

            // _eliminarTres
            if ($pathinfo === '/eliminarTres') {
                return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\AdminController::eliminarTresAction',  '_route' => '_eliminarTres',);
            }

        }

        // abmestadisticas_abm_test_index
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'abmestadisticas\\abmBundle\\Controller\\TestController::indexAction',  '_route' => 'abmestadisticas_abm_test_index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
