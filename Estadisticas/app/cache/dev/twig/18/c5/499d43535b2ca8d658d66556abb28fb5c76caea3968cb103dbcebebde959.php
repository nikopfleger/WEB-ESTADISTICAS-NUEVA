<?php

/* WebEstadisticasBundle::layout.html.twig */
class __TwigTemplate_18c5499d43535b2ca8d658d66556abb28fb5c76caea3968cb103dbcebebde959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Settings' => array($this, 'block_Settings'),
            'css' => array($this, 'block_css'),
            'jss' => array($this, 'block_jss'),
            'titulo' => array($this, 'block_titulo'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
            'layoutObject' => array($this, 'block_layoutObject'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿";
        $this->displayBlock('Settings', $context, $blocks);
        // line 5
        echo "
<head>

 ";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 31
        echo "

 ";
        // line 33
        $this->displayBlock('jss', $context, $blocks);
        // line 43
        echo "</head> 
 ";
        // line 44
        $this->displayBlock('titulo', $context, $blocks);
        // line 47
        echo " 
 <body id=body>
 <div id=\"wrapper\">
 <div id=\"content\">
  ";
        // line 51
        $this->displayBlock('head', $context, $blocks);
        // line 64
        echo "
 ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "  <script type=\"text/javascript\">

  ";
        // line 74
        $this->displayBlock('javascript', $context, $blocks);
        // line 107
        echo "


 </script>
 </div>
 <div id=\"footer\">
 ";
        // line 113
        $this->displayBlock('footer', $context, $blocks);
        // line 117
        echo "  </div>
  </div>
 </body>
 







</html>";
    }

    // line 1
    public function block_Settings($context, array $blocks = array())
    {
        // line 2
        echo "
\t<!DOCTYPE html>
<html>";
    }

    // line 8
    public function block_css($context, array $blocks = array())
    {
        // line 9
        echo " \t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "11764be_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_11764be_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_bootstrap.min_1.css");
            // line 18
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  \t";
            // asset "11764be_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_11764be_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_bootstrap-theme.min_2.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  \t";
            // asset "11764be_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_11764be_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_jquery-ui.structure.min_3.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  \t";
            // asset "11764be_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_11764be_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_jquery-ui.theme_4.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  \t";
            // asset "11764be_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_11764be_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_layout_5.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  \t";
            // asset "11764be_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_11764be_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main_jquery-ui.min_6.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  \t";
        } else {
            // asset "11764be"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_11764be") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/main.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  \t";
        }
        unset($context["asset_url"]);
        // line 20
        echo "  \t
  \t";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f5956ec_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5956ec_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f5956ec_glyphicons-halflings-regular_1.css");
            // asset "f5956ec_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5956ec_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f5956ec_SourceSansPro-Bold_2.css");
            // asset "f5956ec_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5956ec_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f5956ec_SourceSansPro-Light_3.css");
            // asset "f5956ec_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5956ec_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f5956ec_SourceSansPro-Regular_4.css");
            // asset "f5956ec_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5956ec_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f5956ec_SourceSansPro-Black_5.css");
        } else {
            // asset "f5956ec"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f5956ec") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/f5956ec.css");
        }
        unset($context["asset_url"]);
        // line 29
        echo "\t
 ";
    }

    // line 33
    public function block_jss($context, array $blocks = array())
    {
        // line 34
        echo " \t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ffd2e5b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ffd2e5b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_jquery-1.11.1.min_1.js");
            // line 40
            echo "  \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
 \t";
            // asset "ffd2e5b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ffd2e5b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_bootstrap.min_2.js");
            echo "  \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
 \t";
            // asset "ffd2e5b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ffd2e5b_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_jquery-ui.min_3.js");
            echo "  \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
 \t";
            // asset "ffd2e5b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ffd2e5b_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_layout_4.js");
            echo "  \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
 \t";
            // asset "ffd2e5b_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ffd2e5b_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main_jquery.center_5.js");
            echo "  \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
 \t";
        } else {
            // asset "ffd2e5b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ffd2e5b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/main.js");
            echo "  \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
 \t";
        }
        unset($context["asset_url"]);
        // line 42
        echo " ";
    }

    // line 44
    public function block_titulo($context, array $blocks = array())
    {
        // line 45
        echo " \t<title>Poder Judicial de la Nación Argentina</title>
 ";
    }

    // line 51
    public function block_head($context, array $blocks = array())
    {
        // line 52
        echo " <meta http-equiv=\"Content-Type\" content=\"text/html\">
 <div class=\"titulo\">
 <br>
\t <center>
\t ";
        // line 56
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "061ef63_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_061ef63_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/061ef63_escudo_1.PNG");
            // line 57
            echo "    <img border=0 id=\"escudo\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\"/>
\t";
        } else {
            // asset "061ef63"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_061ef63") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/061ef63.PNG");
            echo "    <img border=0 id=\"escudo\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\"/>
\t";
        }
        unset($context["asset_url"]);
        // line 59
        echo "\t </center>
 \t <div id=\"pjn\">Poder Judicial de la Nación</div>
\t <div id=\"oe\">Oficina de Estadísticas</div>
</div>
 ";
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo " ";
        $this->env->loadTemplate("WebEstadisticasBundle::dialog.html.twig")->display($context);
        // line 67
        echo " 
\t
  

 ";
    }

    // line 74
    public function block_javascript($context, array $blocks = array())
    {
        // line 75
        echo " \$( document ).ready(function() {
\t";
        // line 76
        $this->displayBlock('layoutObject', $context, $blocks);
        // line 102
        echo "\t 
 });


 ";
    }

    // line 76
    public function block_layoutObject($context, array $blocks = array())
    {
        // line 77
        echo "\tvar layoutObject = new Layout();
\tlayoutObject.init();
\tlayoutObject.anioUrl = \"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("_getanio");
        echo "\" ;
\tlayoutObject.anioFallosUrl = \"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("_getanioFallos");
        echo "\";
\tlayoutObject.CapitulosUrl = \"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("_getCapitulos");
        echo "\" ;
\tlayoutObject.DivisionesUrl = \"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("_getDivisiones");
        echo "\";
\tlayoutObject.DivJurisUrl = \"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("_getDivisionesJuris");
        echo "\";
\tlayoutObject.ArchJurisUrl = \"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("_getArchivosJuris");
        echo "\";
\tlayoutObject.ArchivosUrl= \"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("_getArchivos");
        echo "\";
\tlayoutObject.getUrlDescarga= \"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("_getUrlDescarga");
        echo "\";
\tlayoutObject.getJurisUrl = \"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("_getJurisdicciones");
        echo "\";
\tlayoutObject.getAnioJurisdiccionesUrl =\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("_getAnioJurisdicciones");
        echo "\";
\tlayoutObject.ArchivosFallosUrl= '";
        // line 89
        echo $this->env->getExtension('routing')->getPath("_getArchivosFallos");
        echo "';
\tlayoutObject.getUrlDescargaFallos= \"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("_getUrlDescargaFallos");
        echo "\";
\tlayoutObject.periodosUrl = \"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("_getPeriodos");
        echo "\";
\tlayoutObject.archivosEvoUrl = \"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("_getArchivosEvo");
        echo "\";
\tlayoutObject.indiCapUrl = \"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("_getCapitulosIndicadores");
        echo "\";
\tlayoutObject.archivosIndicadoresUrl = \"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("_getArchivosIndicadores");
        echo "\";
\tlayoutObject.getUrlDescargaIndicadores = \"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("_getUrlDescargaIndicadores");
        echo "\";
\tlayoutObject.getUrlDescargaEvolucion = \"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("_getUrlDescargaEvolucion");
        echo "\";
\tlayoutObject.SubtitulosUrl = \"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("_getSubtitulos");
        echo "\";
                  layoutObject.SubtJurisUrl = \"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("_getSubtJuris");
        echo "\";
\tlayoutObject.indiAnioUrl = \"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("_getAniosIndicadores");
        echo "\";


\t";
    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        // line 114
        echo "\t<div class=\"footerText\">Enviar correo electrónico a <a href=\"mailto:secretaria.estadisticas@pjn.gov.ar\">secretaria.estadisticas@pjn.gov.ar</a> con preguntas o comentarios sobre este sitio Web. 
    <br>Derechos reservados: Poder Judicial de la Nación 2014. Última actualización: ";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "html", null, true);
        echo ". </div>
 ";
    }

    public function getTemplateName()
    {
        return "WebEstadisticasBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  403 => 115,  400 => 114,  397 => 113,  389 => 99,  385 => 98,  381 => 97,  377 => 96,  373 => 95,  369 => 94,  365 => 93,  361 => 92,  357 => 91,  353 => 90,  349 => 89,  345 => 88,  341 => 87,  337 => 86,  333 => 85,  329 => 84,  325 => 83,  321 => 82,  317 => 81,  313 => 80,  309 => 79,  305 => 77,  302 => 76,  294 => 102,  292 => 76,  289 => 75,  286 => 74,  278 => 67,  275 => 66,  272 => 65,  264 => 59,  250 => 57,  246 => 56,  240 => 52,  237 => 51,  232 => 45,  229 => 44,  225 => 42,  187 => 40,  182 => 34,  179 => 33,  174 => 29,  157 => 21,  154 => 20,  110 => 18,  105 => 9,  102 => 8,  96 => 2,  93 => 1,  78 => 117,  76 => 113,  68 => 107,  66 => 74,  62 => 72,  60 => 65,  57 => 64,  55 => 51,  49 => 47,  47 => 44,  44 => 43,  42 => 33,  38 => 31,  36 => 8,  31 => 5,  28 => 1,);
    }
}
