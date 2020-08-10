<?php

/* WebEstadisticasBundle:institucional:institucional.html.twig */
class __TwigTemplate_c2af6bd0d42f07fcce3baacd4c297ee957c9809f0dbe721f8a2dddadc93af397 extends Twig_Template
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

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $this->displayParentBlock("css", $context, $blocks);
        echo "
\t";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d804580_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d804580_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/institucional_institucional_1.css");
            // line 9
            echo "\t  <link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
        } else {
            // asset "d804580"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d804580") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/institucional.css");
            echo "\t  <link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
\t";
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
        echo "
\t";
        // line 16
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
   \t\t<li><a href='";
        // line 23
        echo $this->env->getExtension('routing')->getPath("index");
        echo "'><span>Principal</span></a></li>
   \t\t<li class='active'><a href='";
        // line 24
        echo $this->env->getExtension('routing')->getPath("_menu_institucional");
        echo "'><span>Institucional</span></a></li>
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
        echo "' id='otrosTrabajosMenu'><span>Otros Trabajos</span></a>\t\t\t
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
        echo "
 ";
        // line 55
        $this->env->loadTemplate("WebEstadisticasBundle:institucional:texto.html.twig")->display($context);
        // line 56
        echo "

 \t";
        // line 58
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 61
    public function block_javascript($context, array $blocks = array())
    {
        // line 62
        echo "\t";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
        // line 66
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebEstadisticasBundle:institucional:institucional.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 66,  176 => 65,  169 => 62,  166 => 61,  160 => 58,  156 => 56,  154 => 55,  151 => 54,  148 => 53,  141 => 49,  138 => 48,  131 => 44,  122 => 38,  108 => 27,  102 => 24,  98 => 23,  93 => 20,  90 => 19,  84 => 16,  81 => 15,  78 => 14,  73 => 11,  59 => 9,  55 => 6,  49 => 5,  43 => 2,  11 => 1,);
    }
}
