<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/admin')) {
            // _assetic_42cd147
            if ($pathinfo === '/css/admin.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '42cd147',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_42cd147',);
            }

            if (0 === strpos($pathinfo, '/css/admin_')) {
                // _assetic_42cd147_0
                if ($pathinfo === '/css/admin_admin_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '42cd147',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_42cd147_0',);
                }

                // _assetic_42cd147_1
                if ($pathinfo === '/css/admin_fontAwesomeDatatablesIntegration_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '42cd147',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_42cd147_1',);
                }

                if (0 === strpos($pathinfo, '/css/admin_jquery.dataTables_')) {
                    // _assetic_42cd147_2
                    if ($pathinfo === '/css/admin_jquery.dataTables_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '42cd147',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_42cd147_2',);
                    }

                    // _assetic_42cd147_3
                    if ($pathinfo === '/css/admin_jquery.dataTables_themeroller_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '42cd147',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_42cd147_3',);
                    }

                }

                // _assetic_42cd147_4
                if ($pathinfo === '/css/admin_font-awesome.min_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '42cd147',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_42cd147_4',);
                }

                if (0 === strpos($pathinfo, '/css/admin_jquery-ui')) {
                    // _assetic_42cd147_5
                    if ($pathinfo === '/css/admin_jquery-ui_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '42cd147',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_42cd147_5',);
                    }

                    if (0 === strpos($pathinfo, '/css/admin_jquery-ui.')) {
                        // _assetic_42cd147_6
                        if ($pathinfo === '/css/admin_jquery-ui.structure_7.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '42cd147',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_42cd147_6',);
                        }

                        // _assetic_42cd147_7
                        if ($pathinfo === '/css/admin_jquery-ui.theme_8.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '42cd147',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_42cd147_7',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/admin')) {
            // _assetic_17a4834
            if ($pathinfo === '/js/admin.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '17a4834',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_17a4834',);
            }

            if (0 === strpos($pathinfo, '/js/admin_')) {
                if (0 === strpos($pathinfo, '/js/admin_jquery')) {
                    // _assetic_17a4834_0
                    if ($pathinfo === '/js/admin_jquery-ui_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '17a4834',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_17a4834_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/admin_jquery.')) {
                        // _assetic_17a4834_1
                        if ($pathinfo === '/js/admin_jquery.dataTables.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '17a4834',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_17a4834_1',);
                        }

                        // _assetic_17a4834_2
                        if ($pathinfo === '/js/admin_jquery.center_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '17a4834',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_17a4834_2',);
                        }

                    }

                }

                // _assetic_17a4834_3
                if ($pathinfo === '/js/admin_admin_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '17a4834',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_17a4834_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/layout')) {
                // _assetic_536aaf2
                if ($pathinfo === '/css/layout.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '536aaf2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_536aaf2',);
                }

                // _assetic_536aaf2_0
                if ($pathinfo === '/css/layout_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '536aaf2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_536aaf2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/41075a7')) {
                // _assetic_41075a7
                if ($pathinfo === '/css/41075a7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '41075a7',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_41075a7',);
                }

                if (0 === strpos($pathinfo, '/css/41075a7_')) {
                    // _assetic_41075a7_0
                    if ($pathinfo === '/css/41075a7_glyphicons-halflings-regular_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '41075a7',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_41075a7_0',);
                    }

                    if (0 === strpos($pathinfo, '/css/41075a7_SourceSansPro-')) {
                        // _assetic_41075a7_1
                        if ($pathinfo === '/css/41075a7_SourceSansPro-Bold_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '41075a7',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_41075a7_1',);
                        }

                        // _assetic_41075a7_2
                        if ($pathinfo === '/css/41075a7_SourceSansPro-Light_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '41075a7',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_41075a7_2',);
                        }

                        // _assetic_41075a7_3
                        if ($pathinfo === '/css/41075a7_SourceSansPro-Regular_4.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '41075a7',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_41075a7_3',);
                        }

                        // _assetic_41075a7_4
                        if ($pathinfo === '/css/41075a7_SourceSansPro-Black_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '41075a7',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_41075a7_4',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/layout')) {
            // _assetic_046b614
            if ($pathinfo === '/js/layout.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '046b614',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_046b614',);
            }

            if (0 === strpos($pathinfo, '/js/layout_')) {
                // _assetic_046b614_0
                if ($pathinfo === '/js/layout_jquery-1.11.2.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '046b614',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_046b614_0',);
                }

                // _assetic_046b614_1
                if ($pathinfo === '/js/layout_bootstrap_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '046b614',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_046b614_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
