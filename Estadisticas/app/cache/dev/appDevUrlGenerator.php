<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_assetic_00c0e5f' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '00c0e5f',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/index.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_00c0e5f_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '00c0e5f',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/index_index_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_15beeb5' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '15beeb5',    'pos' => NULL,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/15beeb5.png',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_15beeb5_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '15beeb5',    'pos' => 0,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/15beeb5_download_1.png',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_d804580' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd804580',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/institucional.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_d804580_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd804580',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/institucional_institucional_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_11764be' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '11764be',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/main.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_11764be_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '11764be',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/main_bootstrap.min_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_11764be_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '11764be',    'pos' => 1,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/main_bootstrap-theme.min_2.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_11764be_2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '11764be',    'pos' => 2,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/main_jquery-ui.structure.min_3.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_11764be_3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '11764be',    'pos' => 3,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/main_jquery-ui.theme_4.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_11764be_4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '11764be',    'pos' => 4,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/main_layout_5.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_11764be_5' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '11764be',    'pos' => 5,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/main_jquery-ui.min_6.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_f5956ec' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f5956ec',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/f5956ec.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_f5956ec_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f5956ec',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/f5956ec_glyphicons-halflings-regular_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_f5956ec_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f5956ec',    'pos' => 1,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/f5956ec_SourceSansPro-Bold_2.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_f5956ec_2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f5956ec',    'pos' => 2,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/f5956ec_SourceSansPro-Light_3.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_f5956ec_3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f5956ec',    'pos' => 3,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/f5956ec_SourceSansPro-Regular_4.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_f5956ec_4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f5956ec',    'pos' => 4,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/f5956ec_SourceSansPro-Black_5.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_ffd2e5b' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'ffd2e5b',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/main.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_ffd2e5b_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'ffd2e5b',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/main_jquery-1.11.1.min_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_ffd2e5b_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'ffd2e5b',    'pos' => 1,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/main_bootstrap.min_2.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_ffd2e5b_2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'ffd2e5b',    'pos' => 2,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/main_jquery-ui.min_3.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_ffd2e5b_3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'ffd2e5b',    'pos' => 3,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/main_layout_4.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_ffd2e5b_4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'ffd2e5b',    'pos' => 4,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/main_jquery.center_5.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_061ef63' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '061ef63',    'pos' => NULL,    '_format' => 'PNG',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/061ef63.PNG',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_061ef63_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '061ef63',    'pos' => 0,    '_format' => 'PNG',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/061ef63_escudo_1.PNG',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_f317411' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f317411',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/mapa.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_f317411_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'f317411',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/mapa_mapa_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_53e4398' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '53e4398',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/mapa.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_53e4398_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '53e4398',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/mapa_mapa_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_41bfa38' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '41bfa38',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/mapa.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_41bfa38_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '41bfa38',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/mapa_mapaviejo_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_179a618' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '179a618',    'pos' => NULL,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/179a618.jpg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_179a618_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '179a618',    'pos' => 0,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/179a618_MAPAArgentina_1.jpg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_69aa604' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '69aa604',    'pos' => NULL,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/69aa604.jpg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_69aa604_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '69aa604',    'pos' => 0,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/69aa604_mapacapital_1.jpg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_1eac389' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1eac389',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/otrosTrabajos.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_1eac389_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1eac389',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/otrosTrabajos_otrosTrabajos_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_1eac389_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1eac389',    'pos' => 1,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/otrosTrabajos_jquery.dataTables.min_2.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_1eac389_2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '1eac389',    'pos' => 2,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/otrosTrabajos_jquery.dataTables_themeroller_3.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_a954e69' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a954e69',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/otros.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_a954e69_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a954e69',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/otros_otrosTrabajos_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_a954e69_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a954e69',    'pos' => 1,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/otros_jquery.dataTables.min_2.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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