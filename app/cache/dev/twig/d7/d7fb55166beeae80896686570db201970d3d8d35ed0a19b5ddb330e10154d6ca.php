<?php

/* @FraisApi/Default/index.html.twig */
class __TwigTemplate_35c70af80f4dd005b94c0b14ba655698d3b9a88968612a946d5d1a16dd12f903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_017e1f8b1661d8bea5b2fda27275c9c22f2c3eff74b2ba40b97dc37bb629b622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017e1f8b1661d8bea5b2fda27275c9c22f2c3eff74b2ba40b97dc37bb629b622->enter($__internal_017e1f8b1661d8bea5b2fda27275c9c22f2c3eff74b2ba40b97dc37bb629b622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FraisApi/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_017e1f8b1661d8bea5b2fda27275c9c22f2c3eff74b2ba40b97dc37bb629b622->leave($__internal_017e1f8b1661d8bea5b2fda27275c9c22f2c3eff74b2ba40b97dc37bb629b622_prof);

    }

    public function getTemplateName()
    {
        return "@FraisApi/Default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "@FraisApi/Default/index.html.twig", "D:\\wamp64\\www\\apiFrais\\src\\FraisApiBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
