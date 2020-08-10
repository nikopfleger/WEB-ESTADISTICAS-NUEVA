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

        if (0 === strpos($pathinfo, '/css/index')) {
            // _assetic_00c0e5f
            if ($pathinfo === '/css/index.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '00c0e5f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_00c0e5f',);
            }

            // _assetic_00c0e5f_0
            if ($pathinfo === '/css/index_index_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '00c0e5f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_00c0e5f_0',);
            }

        }

        if (0 === strpos($pathinfo, '/images/15beeb5')) {
            // _assetic_15beeb5
            if ($pathinfo === '/images/15beeb5.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '15beeb5',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_15beeb5',);
            }

            // _assetic_15beeb5_0
            if ($pathinfo === '/images/15beeb5_download_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '15beeb5',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_15beeb5_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/institucional')) {
                // _assetic_d804580
                if ($pathinfo === '/css/institucional.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd804580',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d804580',);
                }

                // _assetic_d804580_0
                if ($pathinfo === '/css/institucional_institucional_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd804580',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d804580_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/main')) {
                // _assetic_11764be
                if ($pathinfo === '/css/main.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '11764be',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_11764be',);
                }

                if (0 === strpos($pathinfo, '/css/main_')) {
                    if (0 === strpos($pathinfo, '/css/main_bootstrap')) {
                        // _assetic_11764be_0
                        if ($pathinfo === '/css/main_bootstrap.min_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '11764be',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_11764be_0',);
                        }

                        // _assetic_11764be_1
                        if ($pathinfo === '/css/main_bootstrap-theme.min_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '11764be',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_11764be_1',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/css/main_jquery-ui.')) {
                        // _assetic_11764be_2
                        if ($pathinfo === '/css/main_jquery-ui.structure.min_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '11764be',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_11764be_2',);
                        }

                        // _assetic_11764be_3
                        if ($pathinfo === '/css/main_jquery-ui.theme_4.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '11764be',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_11764be_3',);
                        }

                    }

                    // _assetic_11764be_4
                    if ($pathinfo === '/css/main_layout_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '11764be',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_11764be_4',);
                    }

                    // _assetic_11764be_5
                    if ($pathinfo === '/css/main_jquery-ui.min_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '11764be',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_11764be_5',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/f5956ec')) {
                // _assetic_f5956ec
                if ($pathinfo === '/css/f5956ec.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f5956ec',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f5956ec',);
                }

                if (0 === strpos($pathinfo, '/css/f5956ec_')) {
                    // _assetic_f5956ec_0
                    if ($pathinfo === '/css/f5956ec_glyphicons-halflings-regular_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f5956ec',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f5956ec_0',);
                    }

                    if (0 === strpos($pathinfo, '/css/f5956ec_SourceSansPro-')) {
                        // _assetic_f5956ec_1
                        if ($pathinfo === '/css/f5956ec_SourceSansPro-Bold_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f5956ec',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_f5956ec_1',);
                        }

                        // _assetic_f5956ec_2
                        if ($pathinfo === '/css/f5956ec_SourceSansPro-Light_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f5956ec',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_f5956ec_2',);
                        }

                        // _assetic_f5956ec_3
                        if ($pathinfo === '/css/f5956ec_SourceSansPro-Regular_4.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f5956ec',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_f5956ec_3',);
                        }

                        // _assetic_f5956ec_4
                        if ($pathinfo === '/css/f5956ec_SourceSansPro-Black_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f5956ec',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_f5956ec_4',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/main')) {
            // _assetic_ffd2e5b
            if ($pathinfo === '/js/main.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ffd2e5b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ffd2e5b',);
            }

            if (0 === strpos($pathinfo, '/js/main_')) {
                // _assetic_ffd2e5b_0
                if ($pathinfo === '/js/main_jquery-1.11.1.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ffd2e5b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ffd2e5b_0',);
                }

                // _assetic_ffd2e5b_1
                if ($pathinfo === '/js/main_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ffd2e5b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_ffd2e5b_1',);
                }

                // _assetic_ffd2e5b_2
                if ($pathinfo === '/js/main_jquery-ui.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ffd2e5b',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_ffd2e5b_2',);
                }

                // _assetic_ffd2e5b_3
                if ($pathinfo === '/js/main_layout_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ffd2e5b',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_ffd2e5b_3',);
                }

                // _assetic_ffd2e5b_4
                if ($pathinfo === '/js/main_jquery.center_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ffd2e5b',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_ffd2e5b_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/061ef63')) {
            // _assetic_061ef63
            if ($pathinfo === '/images/061ef63.PNG') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '061ef63',  'pos' => NULL,  '_format' => 'PNG',  '_route' => '_assetic_061ef63',);
            }

            // _assetic_061ef63_0
            if ($pathinfo === '/images/061ef63_escudo_1.PNG') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '061ef63',  'pos' => 0,  '_format' => 'PNG',  '_route' => '_assetic_061ef63_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/mapa')) {
            // _assetic_f317411
            if ($pathinfo === '/css/mapa.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f317411',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f317411',);
            }

            // _assetic_f317411_0
            if ($pathinfo === '/css/mapa_mapa_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f317411',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f317411_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/mapa')) {
            // _assetic_53e4398
            if ($pathinfo === '/js/mapa.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '53e4398',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_53e4398',);
            }

            // _assetic_53e4398_0
            if ($pathinfo === '/js/mapa_mapa_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '53e4398',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_53e4398_0',);
            }

            // _assetic_41bfa38
            if ($pathinfo === '/js/mapa.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '41bfa38',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_41bfa38',);
            }

            // _assetic_41bfa38_0
            if ($pathinfo === '/js/mapa_mapaviejo_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '41bfa38',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_41bfa38_0',);
            }

        }

        if (0 === strpos($pathinfo, '/images')) {
            if (0 === strpos($pathinfo, '/images/179a618')) {
                // _assetic_179a618
                if ($pathinfo === '/images/179a618.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '179a618',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_179a618',);
                }

                // _assetic_179a618_0
                if ($pathinfo === '/images/179a618_MAPAArgentina_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '179a618',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_179a618_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/69aa604')) {
                // _assetic_69aa604
                if ($pathinfo === '/images/69aa604.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '69aa604',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_69aa604',);
                }

                // _assetic_69aa604_0
                if ($pathinfo === '/images/69aa604_mapacapital_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '69aa604',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_69aa604_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/otrosTrabajos')) {
            // _assetic_1eac389
            if ($pathinfo === '/css/otrosTrabajos.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1eac389',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_1eac389',);
            }

            if (0 === strpos($pathinfo, '/css/otrosTrabajos_')) {
                // _assetic_1eac389_0
                if ($pathinfo === '/css/otrosTrabajos_otrosTrabajos_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1eac389',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_1eac389_0',);
                }

                if (0 === strpos($pathinfo, '/css/otrosTrabajos_jquery.dataTables')) {
                    // _assetic_1eac389_1
                    if ($pathinfo === '/css/otrosTrabajos_jquery.dataTables.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1eac389',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_1eac389_1',);
                    }

                    // _assetic_1eac389_2
                    if ($pathinfo === '/css/otrosTrabajos_jquery.dataTables_themeroller_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '1eac389',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_1eac389_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/otros')) {
            // _assetic_a954e69
            if ($pathinfo === '/js/otros.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a954e69',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a954e69',);
            }

            if (0 === strpos($pathinfo, '/js/otros_')) {
                // _assetic_a954e69_0
                if ($pathinfo === '/js/otros_otrosTrabajos_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a954e69',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a954e69_0',);
                }

                // _assetic_a954e69_1
                if ($pathinfo === '/js/otros_jquery.dataTables.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a954e69',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a954e69_1',);
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
