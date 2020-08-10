<?php

/* abmBundle:Form:forms.html.twig */
class __TwigTemplate_b654e220d030bbaf4f063134ee02e39462e015eef65ffa8e35bd248b75fcccc5 extends Twig_Template
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
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "number")) : ("number"));
        // line 4
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "abmBundle:Form:forms.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
