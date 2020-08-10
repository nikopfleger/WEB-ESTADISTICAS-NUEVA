<?php

/* WebEstadisticasBundle:index:index.html.twig */
class __TwigTemplate_9d755dad3c6d8103112f65b39930357d40343dfeffa9cf2abc677ae21aa96929 extends Twig_Template
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
        echo "\t\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
\t\t
\t\t";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "00c0e5f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_00c0e5f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/index_index_1.css");
            // line 10
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  \t\t";
        } else {
            // asset "00c0e5f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_00c0e5f") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/index.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
  \t\t";
        }
        unset($context["asset_url"]);
    }

    // line 14
    public function block_jss($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        $this->displayParentBlock("jss", $context, $blocks);
        echo "

";
    }

    // line 19
    public function block_head($context, array $blocks = array())
    {
        // line 20
        echo "
<div id='cssmenu'>
\t<ul>
   \t\t<li class='active'><a href='";
        // line 23
        echo $this->env->getExtension('routing')->getPath("index");
        echo "'><span>Principal</span></a></li>
   \t\t<li><a href='";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["institucional"]) ? $context["institucional"] : $this->getContext($context, "institucional")), "html", null, true);
        echo "' target=\"_blank\"><span>Institucional</span></a></li>
   \t\t<li class='has-sub'><a href='javascript:void(0)'><span>Anuarios</span></a>
     \t<ul>
        \t <li><a href='";
        // line 27
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
        // line 38
        echo $this->env->getExtension('routing')->getPath("_otros_trabajos");
        echo "' id='otrosTrabajosMenu'><span>Otros Trabajos</span></a>\t  
   \t\t</ul>
   \t\t</li>
   \t\t<li class='last'><a href='javascript:void(0)' id='contact'><span>Contáctenos</span></a></li>
\t</ul>
 </div>
\t";
        // line 44
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t
";
    }

    // line 48
    public function block_titulo($context, array $blocks = array())
    {
        // line 49
        echo "\t";
        $this->displayParentBlock("titulo", $context, $blocks);
        echo "
";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo " ";
        $context["i"] = 0;
        // line 55
        echo "

<div class=\"bodyIndex\">
\t<div id=\"boxNovedades\">
\t\t<div id=\"news\">Novedades</div>

\t\t<table id=\"novedades\">
\t\t\t<thead>
\t\t\t\t<th>Título (Click en el nombre para abrir)</th>
\t\t\t\t<th>Descarga</th>\t
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["news"]) ? $context["news"] : $this->getContext($context, "news"))) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 68
            echo "\t\t\t\t\t";
            $context["novedad"] = $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), $context["i"], array(), "array");
            // line 69
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["novedad"]) ? $context["novedad"] : $this->getContext($context, "novedad")), "assetLink", array()), "html", null, true);
            echo "\" class=\"assetDescarga\" target=\"_blank\">
\t\t\t\t\t\t\t\t";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["novedad"]) ? $context["novedad"] : $this->getContext($context, "novedad")), "detalle", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["novedad"]) ? $context["novedad"] : $this->getContext($context, "novedad")), "assetDescarga", array()), "html", null, true);
            echo "\" download>
\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t";
            // line 80
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "15beeb5_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_15beeb5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/15beeb5_download_1.png");
                // line 81
                echo "   \t\t\t\t \t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" alt=\"Example\" />
\t\t\t\t\t\t\t\t\t";
            } else {
                // asset "15beeb5"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_15beeb5") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/15beeb5.png");
                echo "   \t\t\t\t \t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" alt=\"Example\" />
\t\t\t\t\t\t\t\t\t";
            }
            unset($context["asset_url"]);
            // line 83
            echo "\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "\t \t\t</tbody>
\t \t</table>
\t </div>

\t<div id=\"objetivos\">
 \t\t<div id=\"titleObjetivos\">Objetivos de las Estadísticas</div>
 \t\t<div id=\"textObjetivos\">
 \t\t\t<ul>
 \t\t\t\t<li>
 \t\t\t\t\t<p>Dentro del Poder Judicial de la Nación, proveer información confiable a todos los sectores para el control de gestión y toma de decisiones.</p>
 \t\t\t\t</li>
 \t\t\t\t<li>
 \t\t\t\t\t<p>Al público en general, brindar un panorama del estado de situación de la Institución y datos para estudio e investigación.</p>
 \t\t\t\t</li>
 \t\t\t</ul>
 \t\t</div>
\t</div>
</div>
 

 \t";
        // line 108
        $this->displayParentBlock("body", $context, $blocks);
        echo "
 ";
    }

    // line 112
    public function block_javascript($context, array $blocks = array())
    {
        // line 113
        echo " ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
 \t 
 ";
    }

    // line 117
    public function block_footer($context, array $blocks = array())
    {
        // line 118
        echo " ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "WebEstadisticasBundle:index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 118,  263 => 117,  255 => 113,  252 => 112,  246 => 108,  224 => 88,  214 => 83,  200 => 81,  196 => 80,  191 => 78,  183 => 73,  179 => 72,  174 => 69,  171 => 68,  167 => 67,  153 => 55,  150 => 54,  147 => 53,  140 => 49,  137 => 48,  130 => 44,  121 => 38,  107 => 27,  101 => 24,  97 => 23,  92 => 20,  89 => 19,  81 => 15,  78 => 14,  62 => 10,  58 => 7,  52 => 5,  49 => 4,  43 => 2,  11 => 1,);
    }
}
