<?php

/* abmBundle::layout.html.twig */
class __TwigTemplate_5774afb14002d298dbee700d8ae86b25385449d54621324dbc95a0adfa5f9f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'jss' => array($this, 'block_jss'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>


<head>
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "?v=2\" />
";
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('jss', $context, $blocks);
        // line 33
        echo "
</head>

<title>ABM Estadísticas</title>

<body> 
<meta http-equiv=\"Content-Type\" content=\"text/html\">

";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "

  
\t";
        // line 48
        $this->displayBlock('javascript', $context, $blocks);
        // line 51
        echo "
  

</body>

</html>
";
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "536aaf2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_536aaf2_0") : $this->env->getExtension('assets')->getAssetUrl("css/layout_bootstrap_1.css");
            // line 12
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
  \t";
        } else {
            // asset "536aaf2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_536aaf2") : $this->env->getExtension('assets')->getAssetUrl("css/layout.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
  \t";
        }
        unset($context["asset_url"]);
        // line 14
        echo "  \t
  \t";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "41075a7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41075a7_0") : $this->env->getExtension('assets')->getAssetUrl("css/41075a7_glyphicons-halflings-regular_1.css");
            // asset "41075a7_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41075a7_1") : $this->env->getExtension('assets')->getAssetUrl("css/41075a7_SourceSansPro-Bold_2.css");
            // asset "41075a7_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41075a7_2") : $this->env->getExtension('assets')->getAssetUrl("css/41075a7_SourceSansPro-Light_3.css");
            // asset "41075a7_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41075a7_3") : $this->env->getExtension('assets')->getAssetUrl("css/41075a7_SourceSansPro-Regular_4.css");
            // asset "41075a7_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41075a7_4") : $this->env->getExtension('assets')->getAssetUrl("css/41075a7_SourceSansPro-Black_5.css");
        } else {
            // asset "41075a7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_41075a7") : $this->env->getExtension('assets')->getAssetUrl("css/41075a7.css");
        }
        unset($context["asset_url"]);
    }

    // line 25
    public function block_jss($context, array $blocks = array())
    {
        // line 26
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "046b614_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_046b614_0") : $this->env->getExtension('assets')->getAssetUrl("js/layout_jquery-1.11.2.min_1.js");
            // line 30
            echo "  \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
 \t";
            // asset "046b614_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_046b614_1") : $this->env->getExtension('assets')->getAssetUrl("js/layout_bootstrap_2.js");
            echo "  \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
 \t";
        } else {
            // asset "046b614"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_046b614") : $this->env->getExtension('assets')->getAssetUrl("js/layout.js");
            echo "  \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
 \t";
        }
        unset($context["asset_url"]);
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "

";
    }

    // line 48
    public function block_javascript($context, array $blocks = array())
    {
        // line 49
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "abmBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 49,  153 => 48,  147 => 42,  144 => 41,  122 => 30,  117 => 26,  114 => 25,  95 => 15,  92 => 14,  78 => 12,  73 => 8,  70 => 7,  60 => 51,  58 => 48,  53 => 45,  51 => 41,  41 => 33,  39 => 25,  36 => 24,  34 => 7,  30 => 6,  23 => 1,);
    }
}
