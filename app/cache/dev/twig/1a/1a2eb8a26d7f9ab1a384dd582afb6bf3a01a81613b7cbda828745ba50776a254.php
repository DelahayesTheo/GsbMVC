<?php

/* FraisApiBundle:Default:index.html.twig */
class __TwigTemplate_f7993aa9b045ff923143a40bcea293e63c959e410293e63487f80caa8ee5c3ed extends Twig_Template
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
        $__internal_d99a501c1c40c4ff6721bf35bfdbc8f9a13862d51a920e18c6cb357c95e1656d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99a501c1c40c4ff6721bf35bfdbc8f9a13862d51a920e18c6cb357c95e1656d->enter($__internal_d99a501c1c40c4ff6721bf35bfdbc8f9a13862d51a920e18c6cb357c95e1656d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FraisApiBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d99a501c1c40c4ff6721bf35bfdbc8f9a13862d51a920e18c6cb357c95e1656d->leave($__internal_d99a501c1c40c4ff6721bf35bfdbc8f9a13862d51a920e18c6cb357c95e1656d_prof);

    }

    public function getTemplateName()
    {
        return "FraisApiBundle:Default:index.html.twig";
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
", "FraisApiBundle:Default:index.html.twig", "D:\\wamp64\\www\\apiFrais\\src\\FraisApiBundle/Resources/views/Default/index.html.twig");
    }
}
