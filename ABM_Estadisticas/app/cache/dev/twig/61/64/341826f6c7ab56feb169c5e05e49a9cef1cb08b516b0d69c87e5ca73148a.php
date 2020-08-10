<?php

/* abmBundle:form:forms.html.twig */
class __TwigTemplate_6164341826f6c7ab56feb169c5e05e49a9cef1cb08b516b0d69c87e5ca73148a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'integer_widget' => array($this, 'block_integer_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('integer_widget', $context, $blocks);
    }

    public function block_integer_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"integer_widget\">
        ";
        // line 3
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 4
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "abmBundle:form:forms.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
