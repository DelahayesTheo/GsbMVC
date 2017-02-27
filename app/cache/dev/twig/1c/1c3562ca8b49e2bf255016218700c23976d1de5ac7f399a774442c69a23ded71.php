<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_aece60dfd89a9d8b6d16b04a123aad6997fb27e42045bbf9bf0c0b55fdbf9e30 extends Twig_Template
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
        $__internal_ffd2f2ca09f47a518722c6e21ba68e3a90503101216f8c892d5d281b82b40a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd2f2ca09f47a518722c6e21ba68e3a90503101216f8c892d5d281b82b40a6b->enter($__internal_ffd2f2ca09f47a518722c6e21ba68e3a90503101216f8c892d5d281b82b40a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_ffd2f2ca09f47a518722c6e21ba68e3a90503101216f8c892d5d281b82b40a6b->leave($__internal_ffd2f2ca09f47a518722c6e21ba68e3a90503101216f8c892d5d281b82b40a6b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
