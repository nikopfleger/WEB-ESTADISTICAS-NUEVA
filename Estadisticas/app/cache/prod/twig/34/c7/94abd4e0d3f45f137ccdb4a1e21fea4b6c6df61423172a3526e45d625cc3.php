<?php

/* WebEstadisticasBundle::otrosTrabajos.html.twig */
class __TwigTemplate_34c794abd4e0d3f45f137ccdb4a1e21fea4b6c6df61423172a3526e45d625cc3 extends Twig_Template
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
            'titulo' => array($this, 'block_titulo'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
            'layoutObject' => array($this, 'block_layoutObject'),
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

    // line 6
    public function block_css($context, array $blocks = array())
    {
        // line 7
        echo "\t\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
\t  ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1eac389_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1eac389_0") : $this->env->getExtension('assets')->getAssetUrl("css/otrosTrabajos_otrosTrabajos_1.css");
            // line 14
            echo "\t  <link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t  ";
            // asset "1eac389_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1eac389_1") : $this->env->getExtension('assets')->getAssetUrl("css/otrosTrabajos_jquery.dataTables.min_2.css");
            echo "\t  <link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t  ";
            // asset "1eac389_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1eac389_2") : $this->env->getExtension('assets')->getAssetUrl("css/otrosTrabajos_jquery.dataTables_themeroller_3.css");
            echo "\t  <link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t  ";
        } else {
            // asset "1eac389"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1eac389") : $this->env->getExtension('assets')->getAssetUrl("css/otrosTrabajos.css");
            echo "\t  <link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t  ";
        }
        unset($context["asset_url"]);
    }

    // line 18
    public function block_jss($context, array $blocks = array())
    {
        // line 19
        echo "\t";
        $this->displayParentBlock("jss", $context, $blocks);
        echo "
\t";
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a954e69_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a954e69_0") : $this->env->getExtension('assets')->getAssetUrl("js/otros_otrosTrabajos_1.js");
            // line 25
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "a954e69_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a954e69_1") : $this->env->getExtension('assets')->getAssetUrl("js/otros_jquery.dataTables.min_2.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "a954e69"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a954e69") : $this->env->getExtension('assets')->getAssetUrl("js/otros.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
    }

    // line 29
    public function block_head($context, array $blocks = array())
    {
        // line 30
        echo "
 <div id='cssmenu'>
\t<ul>
   \t\t<li><a href='";
        // line 33
        echo $this->env->getExtension('routing')->getPath("index");
        echo "'><span>Principal</span></a></li>
   \t\t<li><a href='";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["institucional"]) ? $context["institucional"] : null), "html", null, true);
        echo "' target=\"_blank\"><span>Institucional</span></a></li>
   \t\t<li class='has-sub'><a href='javascript:void(0)'><span>Anuarios</span></a>
     \t<ul>
        \t <li><a href='";
        // line 37
        echo $this->env->getExtension('routing')->getPath("_estad_mapa");
        echo "' id='mapa'><span>Mapa</span></a></li>
         \t <li><a href='javascript:void(0)' id='porano'><span>Por año</span></a></li>
         \t <li><a href='javascript:void(0)' id='porfuerjuris'><span>Por fuero o jurisdicción</span></a>
         \t <li class='last'><a href='javascript:void(0)' id='lugConsulta'><span>Lugares de consulta de los libros de estadísticas</span></a></li>
        </ul>
   \t\t</li>
   \t\t<li class='has-sub active'><a href='javascript:void(0)'><span>Trabajos Especiales</span></a>
   \t\t<ul>
   \t\t\t<li><a href='javascript:void(0)' id='indicadoresMenu'><span>Indicadores</span></a></li>
   \t\t\t<li><a href='javascript:void(0)' id='evolucionMenu'><span>Evolución</span></a></li>
   \t\t\t<li><a href='javascript:void(0)' id='fallosMenu'><span>Fallos</span></a></li>
   \t\t\t<li class='last'><a href='";
        // line 48
        echo $this->env->getExtension('routing')->getPath("_otros_trabajos");
        echo "' id='otrosTrabajosMenu'><span>Otros Trabajos</span></a>\t  
   \t\t</ul>
   \t\t</li>
   \t\t<li class='last'><a href='javascript:void(0)' id='contact'><span>Contáctenos</span></a></li>
\t</ul>
 </div>
 
 ";
        // line 55
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t
";
    }

    // line 59
    public function block_titulo($context, array $blocks = array())
    {
        // line 60
        echo "\t";
        $this->displayParentBlock("titulo", $context, $blocks);
        echo "
";
    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        // line 64
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<br>
<h4 id=\"tesptit\">Trabajos Especiales Realizados por la Oficina</h4>
<div id=\"otrosTrabajosDiv\">

\t<table id=\"otrosTrabajos\" class=\"compact display\">
\t\t<thead>
\t\t</thead>
\t\t<tbody>
\t\t</tbody>
\t</table>


</div>

 ";
    }

    // line 82
    public function block_javascript($context, array $blocks = array())
    {
        // line 83
        echo "  \t\$(document).ready(function() {
\t\t
 
 \t\t";
        // line 86
        $this->displayBlock('layoutObject', $context, $blocks);
        // line 89
        echo " \t\t
\t\t
\t\totrosObject = new Otros();
 \t\totrosObject.aaData = ";
        // line 92
        echo (isset($context["aaData"]) ? $context["aaData"] : null);
        echo ";
 \t\totrosObject.imagenDescarga = \"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webestadisticas/images/download.png"), "html", null, true);
        echo "\"
 \t\totrosObject.init();

 \t 
 
 \t });
 \t 
 ";
    }

    // line 86
    public function block_layoutObject($context, array $blocks = array())
    {
        // line 87
        echo "\t\t";
        $this->displayParentBlock("layoutObject", $context, $blocks);
        echo "
\t\t";
    }

    // line 102
    public function block_footer($context, array $blocks = array())
    {
        // line 103
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "WebEstadisticasBundle::otrosTrabajos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 103,  247 => 102,  240 => 87,  237 => 86,  225 => 93,  221 => 92,  216 => 89,  214 => 86,  209 => 83,  206 => 82,  186 => 64,  183 => 63,  176 => 60,  173 => 59,  166 => 55,  156 => 48,  142 => 37,  136 => 34,  132 => 33,  127 => 30,  124 => 29,  102 => 25,  98 => 20,  93 => 19,  90 => 18,  62 => 14,  58 => 8,  53 => 7,  50 => 6,  44 => 2,  11 => 1,);
    }
}
