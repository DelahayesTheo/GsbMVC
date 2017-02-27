<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d1443f07b75811abb9763a50d7297c23428c6da64efd93b04c4acc52e58e4b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_523be3cc8f4f832541d228f98b7d9fa011f2c283d7b49cbf061575a795cf4822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523be3cc8f4f832541d228f98b7d9fa011f2c283d7b49cbf061575a795cf4822->enter($__internal_523be3cc8f4f832541d228f98b7d9fa011f2c283d7b49cbf061575a795cf4822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_523be3cc8f4f832541d228f98b7d9fa011f2c283d7b49cbf061575a795cf4822->leave($__internal_523be3cc8f4f832541d228f98b7d9fa011f2c283d7b49cbf061575a795cf4822_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fd0f5d2381b732fd9e266ea9db4aba2f05b49255f9f801c7c18e238b14bb576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd0f5d2381b732fd9e266ea9db4aba2f05b49255f9f801c7c18e238b14bb576->enter($__internal_2fd0f5d2381b732fd9e266ea9db4aba2f05b49255f9f801c7c18e238b14bb576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_2fd0f5d2381b732fd9e266ea9db4aba2f05b49255f9f801c7c18e238b14bb576->leave($__internal_2fd0f5d2381b732fd9e266ea9db4aba2f05b49255f9f801c7c18e238b14bb576_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bbf13b89e7c4465fefd02686d5d5ac9d76fd3839efced9740feac08433b14f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbf13b89e7c4465fefd02686d5d5ac9d76fd3839efced9740feac08433b14f2->enter($__internal_5bbf13b89e7c4465fefd02686d5d5ac9d76fd3839efced9740feac08433b14f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

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
        
        $__internal_5bbf13b89e7c4465fefd02686d5d5ac9d76fd3839efced9740feac08433b14f2->leave($__internal_5bbf13b89e7c4465fefd02686d5d5ac9d76fd3839efced9740feac08433b14f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
