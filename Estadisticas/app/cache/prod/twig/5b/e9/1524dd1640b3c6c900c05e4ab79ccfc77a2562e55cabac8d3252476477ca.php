<?php

/* WebEstadisticasBundle::mapa.html.twig */
class __TwigTemplate_5be91524dd1640b3c6c900c05e4ab79ccfc77a2562e55cabac8d3252476477ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("WebEstadisticasBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'Settings' => array($this, 'block_Settings'),
            'css' => array($this, 'block_css'),
            'jss' => array($this, 'block_jss'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebEstadisticasBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_Settings($context, array $blocks = array())
    {
        $this->displayParentBlock("Settings", $context, $blocks);
    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        // line 5
        echo "
\t\t";
        // line 6
        $this->displayParentBlock("css", $context, $blocks);
        echo "
\t\t";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f317411_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f317411_0") : $this->env->getExtension('assets')->getAssetUrl("css/mapa_mapa_1.css");
            // line 9
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
        } else {
            // asset "f317411"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f317411") : $this->env->getExtension('assets')->getAssetUrl("css/mapa.css");
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 11
        echo "\t
";
    }

    // line 14
    public function block_jss($context, array $blocks = array())
    {
        // line 15
        echo "  \t\t";
        $this->displayParentBlock("jss", $context, $blocks);
        echo "
  \t\t<script src=\"https://maps.googleapis.com/maps/api/js\"></script>
  \t\t";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "53e4398_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_53e4398_0") : $this->env->getExtension('assets')->getAssetUrl("js/mapa_mapa_1.js");
            // line 20
            echo "  \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
 \t\t";
        } else {
            // asset "53e4398"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_53e4398") : $this->env->getExtension('assets')->getAssetUrl("js/mapa.js");
            echo "  \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
 \t\t";
        }
        unset($context["asset_url"]);
    }

    // line 24
    public function block_head($context, array $blocks = array())
    {
        // line 25
        echo "
 <div id='cssmenu'>
\t<ul>
   \t\t<li><a href='";
        // line 28
        echo $this->env->getExtension('routing')->getPath("index");
        echo "'><span>Principal</span></a></li>
   \t\t<li><a href='";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["institucional"]) ? $context["institucional"] : null), "html", null, true);
        echo "' target=\"_blank\"><span>Institucional</span></a></li>
   \t\t<li class='has-sub active'><a href='javascript:void(0)'><span>Anuarios</span></a>
     \t<ul>
        \t <li><a href='";
        // line 32
        echo $this->env->getExtension('routing')->getPath("_estad_mapa");
        echo "' id='mapa'><span>Mapa</span></a></li>
         \t <li><a href='javascript:void(0)' id='porano'><span>Por año</span></a></li>
         \t <li><a href='javascript:void(0)' id='porfuerjuris'><span>Por fuero o jurisdicción</span></a>
         \t <li class='last'><a href='javascript:void(0)' id='lugConsulta'><span>Lugares de consulta de los libros de estadísticas</span></a></li>
        </ul>
   \t\t</li>
   \t\t<li class='has-sub'><a href='javascript:void(0)'><span>Trabajos Especiales</span></a>
   \t\t<ul>
   \t\t\t<li><a href='javascript:void(0)' id='indicadoresMenu'><span>Indicadores</span></a></li>
   \t\t\t<li><a href='javascript:void(0)' id='evolucionMenu'><span>Evolución</span></a></li>
   \t\t\t<li><a href='javascript:void(0)' id='fallosMenu'><span>Fallos</span></a></li>
   \t\t\t<li class='last'><a href='";
        // line 43
        echo $this->env->getExtension('routing')->getPath("_otros_trabajos");
        echo "' id='otrosTrabajosMenu'><span>Otros Trabajos</span></a>\t
   \t\t</ul>
   \t\t</li>
   \t\t<li class='last'><a href='javascript:void(0)' id='contact'><span>Contáctenos</span></a></li>
\t</ul>
 </div>
";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "  \t<div id=\"seleccionMapa\">
  \t\t<div id=\"tooltipDiv\"><p class=\"bg-info\" id=\"tooltipSelMapa\">Haga click sobre la jurisdiccion en el mapa para seleccionar una jurisdicción o selecciónela desde el menú. <button type=\"button\" class=\"close\" id=\"tooltipSelMapaButton\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button></p></div>
  \t       \t\t\t<div id=\"map_canvas\"></div>
           \t\t\t<form class=\"form-horizontal\" role=\"form\" id=\"formMapa\" action=\"javascript:void(0)\" method=\"POST\" target=\"_blank\">
           \t\t\t";
        // line 57
        echo "\t\t\t\t\t\t\t<div class=\"form-group selects\">
 \t\t\t\t\t\t\t\t<label for=\"select\">Jurisdicción:</label>
 \t\t\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all\" id=\"JurisdiccionesMapa\" attribute=\"autofocus\">
  \t\t\t\t\t\t\t\t\t<option value=\"default\">Seleccione Jurisdicción/Resetear mapa</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 64
        echo "\t\t\t\t\t\t\t<div class=\"form-group selects\">
\t\t\t\t\t\t\t\t<label for=\"select\" id=\"aniosLabel\">Año:</label>
\t\t\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all\" id=\"AniosMapa\" disabled='disabled'>
  \t\t\t\t\t\t\t\t\t<option value=\"default\">Seleccione Año</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
        // line 72
        echo "\t\t\t\t\t\t\t<div class=\"form-group selects\">
\t\t\t\t\t\t\t\t<label for=\"select\" id=\"divisionesLabel\">Título:</label>
\t\t\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all\" id=\"DivisionesMapa\" disabled='disabled'>
  \t\t\t\t\t\t\t\t\t<option value=\"default\">Seleccione Título</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 79
        echo "\t\t\t\t\t\t\t<div class=\"form-group selects\">
\t\t\t\t\t\t\t\t<label for=\"select\" id=\"subtitulosLabel\">Subtítulo:</label>
\t\t\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all\" id=\"SubtitulosMapa\" disabled='disabled'>
\t\t\t\t\t\t\t\t\t<option value=\"default\">Seleccione Subtítulo</option>
\t\t\t\t\t\t\t\t</select>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 86
        echo "\t\t\t\t\t\t\t<div class=\"form-group selects\">
\t\t\t\t\t\t\t\t<label for=\"select\" id=\"archivosLabel\">Archivo:</label>
\t\t\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all\" id=\"ArchivosMapa\" name=\"listadoArchivosJuris\" disabled='disabled'>
  \t\t\t\t\t\t\t\t\t<option value=\"default\">Seleccione Archivo</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 92
        echo "\t
\t\t\t\t\t\t\t<div class=\"form-group selects\">
\t\t\t\t\t\t\t\t<label for=\"select\" id=\"archivosLabel\">Descripcion:</label>
\t\t\t\t\t\t\t\t<textarea id=\"descripcionMapa\" class=\"textAreaMap\" rows=\"6\" cols=\"70\" wrap='off' readonly>Descripción del archivo a solicitar.
\t\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 99
        echo "\t\t\t\t\t\t\t<div class=\"form-group selects\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\" id=\"abrirJurisMapa\"><span class=\"ui-button-text\">Abrir</span></button> 
\t\t\t\t   \t\t\t\t\t\t\t<a id='descargarJurisMapa' class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\" download><span class=\"ui-button-text\">Descargar</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</form>
\t</div>
\t";
        // line 106
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 110
    public function block_javascript($context, array $blocks = array())
    {
        // line 111
        echo "\t
\t\$(document).ready(function() {
\t
\t\tvar mapObject = new Mapa();
\t\t
\t\tmapObject.anioUrl = \"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("_getanio");
        echo "\" ;
\t\tmapObject.CapitulosUrl = \"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("_getCapitulos");
        echo "\" ;
\t\tmapObject.ArchivosFallosUrl= '";
        // line 118
        echo $this->env->getExtension('routing')->getPath("_getArchivosFallos");
        echo "';
\t\tmapObject.getUrlDescargaFallos= \"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("_getUrlDescargaFallos");
        echo "\";
\t\tmapObject.periodosUrl = \"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("_getPeriodos");
        echo "\";
\t\tmapObject.archivosEvoUrl = \"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("_getArchivosEvo");
        echo "\";
\t\tmapObject.indiCapUrl = \"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("_getCapitulosIndicadores");
        echo "\";
\t\tmapObject.archivosIndicadoresUrl = \"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("_getArchivosIndicadores");
        echo "\";
\t\tmapObject.getUrlDescargaIndicadores = \"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("_getUrlDescargaIndicadores");
        echo "\";
\t\tmapObject.getUrlDescargaEvolucion = \"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("_getUrlDescargaEvolucion");
        echo "\";
\t\tmapObject.SubtitulosUrl = \"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("_getSubtitulos");
        echo "\"
\t\t
\t\t
\t\tmapObject.getJurisUrl = \"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("_getJurisdicciones");
        echo "\";
\t\tmapObject.getAnioJurisdiccionesUrl =\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("_getAnioJurisdicciones");
        echo "\";
\t\tmapObject.DivisionesUrl = \"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("_getDivisiones");
        echo "\";
\t\tmapObject.ArchivosUrl= \"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("_getArchivos");
        echo "\";
\t\tmapObject.getUrlDescarga= \"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("_getUrlDescarga");
        echo "\";
\t\tmapObject.obtenerCoordenadasUrl = \"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("_obtenerCoordenadas");
        echo "\";
\t\tmapObject.src = \"https://sites.google.com/site/nicolaspfleger/estadisticas-1/Jurisdicciones.kml\";
\t\tgoogle.maps.event.addDomListener(window, 'load', mapObject.initialize());
\t\tmapObject.init();
\t\t
\t
\t
\t});


";
    }

    // line 146
    public function block_footer($context, array $blocks = array())
    {
        // line 147
        echo " ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "WebEstadisticasBundle::mapa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 147,  317 => 146,  302 => 134,  298 => 133,  294 => 132,  290 => 131,  286 => 130,  282 => 129,  276 => 126,  272 => 125,  268 => 124,  264 => 123,  260 => 122,  256 => 121,  252 => 120,  248 => 119,  244 => 118,  240 => 117,  236 => 116,  229 => 111,  226 => 110,  220 => 106,  211 => 99,  203 => 92,  195 => 86,  187 => 79,  179 => 72,  170 => 64,  162 => 57,  156 => 52,  153 => 51,  142 => 43,  128 => 32,  122 => 29,  118 => 28,  113 => 25,  110 => 24,  94 => 20,  90 => 17,  84 => 15,  81 => 14,  76 => 11,  62 => 9,  58 => 7,  54 => 6,  51 => 5,  48 => 4,  42 => 2,  11 => 1,);
    }
}
