<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6a43d8c76d1a2388f49a30c9a22c84e8b05c17473cfb80ba16b5f889d3ce48c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc722ec37752027e7a2dfa29efa437cbbf6d9e9b1f035deb0f216896c3c10500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc722ec37752027e7a2dfa29efa437cbbf6d9e9b1f035deb0f216896c3c10500->enter($__internal_dc722ec37752027e7a2dfa29efa437cbbf6d9e9b1f035deb0f216896c3c10500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc722ec37752027e7a2dfa29efa437cbbf6d9e9b1f035deb0f216896c3c10500->leave($__internal_dc722ec37752027e7a2dfa29efa437cbbf6d9e9b1f035deb0f216896c3c10500_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_974be1dcf9d380e5dd3f689172b6bd97727db0101295deba1c4b70158df155bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974be1dcf9d380e5dd3f689172b6bd97727db0101295deba1c4b70158df155bf->enter($__internal_974be1dcf9d380e5dd3f689172b6bd97727db0101295deba1c4b70158df155bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_974be1dcf9d380e5dd3f689172b6bd97727db0101295deba1c4b70158df155bf->leave($__internal_974be1dcf9d380e5dd3f689172b6bd97727db0101295deba1c4b70158df155bf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d2b653fdcf227ec5bb0c359af2dcacb4eb3551869fb33e7750a1fccb11868f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2b653fdcf227ec5bb0c359af2dcacb4eb3551869fb33e7750a1fccb11868f2->enter($__internal_2d2b653fdcf227ec5bb0c359af2dcacb4eb3551869fb33e7750a1fccb11868f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2d2b653fdcf227ec5bb0c359af2dcacb4eb3551869fb33e7750a1fccb11868f2->leave($__internal_2d2b653fdcf227ec5bb0c359af2dcacb4eb3551869fb33e7750a1fccb11868f2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
