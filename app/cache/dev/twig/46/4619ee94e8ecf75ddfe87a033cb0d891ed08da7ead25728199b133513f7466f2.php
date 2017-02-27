<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_326cd2a205ecb48ba3ff8581b44f58140ec8f925143c706083ab17951298b203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db7e9c6e06330b57d28114dbe6f49d83bd3f7645636b227954146cc1e1d3ad4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7e9c6e06330b57d28114dbe6f49d83bd3f7645636b227954146cc1e1d3ad4c->enter($__internal_db7e9c6e06330b57d28114dbe6f49d83bd3f7645636b227954146cc1e1d3ad4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_db7e9c6e06330b57d28114dbe6f49d83bd3f7645636b227954146cc1e1d3ad4c->leave($__internal_db7e9c6e06330b57d28114dbe6f49d83bd3f7645636b227954146cc1e1d3ad4c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_81c6a3e8affc874aec7df656333446d0d6effaf438b701274b715be0830dfdee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c6a3e8affc874aec7df656333446d0d6effaf438b701274b715be0830dfdee->enter($__internal_81c6a3e8affc874aec7df656333446d0d6effaf438b701274b715be0830dfdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_81c6a3e8affc874aec7df656333446d0d6effaf438b701274b715be0830dfdee->leave($__internal_81c6a3e8affc874aec7df656333446d0d6effaf438b701274b715be0830dfdee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
