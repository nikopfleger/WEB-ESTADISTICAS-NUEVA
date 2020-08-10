<?php

/* abmBundle:test:test.html.twig */
class __TwigTemplate_55897ddb195fc0b12814e14fc7f703b92fffd9edb724c48e9db06cb77dd26c04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Capitulo"]) ? $context["Capitulo"] : $this->getContext($context, "Capitulo")), 'form');
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Welcome to the Test:index page</h1>
";
    }

    public function getTemplateName()
    {
        return "abmBundle:test:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  24 => 2,  20 => 1,);
    }
}
