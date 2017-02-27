<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3cff44e9498936c94d82aa70349393d53b64e9be18fa4c3047f3428da637f3e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f161e69208ccfc6a40164aa5745e6e2136769637e5dc98b0a5574b7c6bd90aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f161e69208ccfc6a40164aa5745e6e2136769637e5dc98b0a5574b7c6bd90aa->enter($__internal_7f161e69208ccfc6a40164aa5745e6e2136769637e5dc98b0a5574b7c6bd90aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f161e69208ccfc6a40164aa5745e6e2136769637e5dc98b0a5574b7c6bd90aa->leave($__internal_7f161e69208ccfc6a40164aa5745e6e2136769637e5dc98b0a5574b7c6bd90aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_026bf0d5cf0d0b992d9c41ae1847ccc987e6c4deddcf4575391ca583f2b80c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026bf0d5cf0d0b992d9c41ae1847ccc987e6c4deddcf4575391ca583f2b80c20->enter($__internal_026bf0d5cf0d0b992d9c41ae1847ccc987e6c4deddcf4575391ca583f2b80c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_026bf0d5cf0d0b992d9c41ae1847ccc987e6c4deddcf4575391ca583f2b80c20->leave($__internal_026bf0d5cf0d0b992d9c41ae1847ccc987e6c4deddcf4575391ca583f2b80c20_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_969eb9197617a8543dfd87044e3c071343af9e08352bc57f4e823d294a04e06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969eb9197617a8543dfd87044e3c071343af9e08352bc57f4e823d294a04e06e->enter($__internal_969eb9197617a8543dfd87044e3c071343af9e08352bc57f4e823d294a04e06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_969eb9197617a8543dfd87044e3c071343af9e08352bc57f4e823d294a04e06e->leave($__internal_969eb9197617a8543dfd87044e3c071343af9e08352bc57f4e823d294a04e06e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0304e09cc7aad4ff7c4ba5338f6575720fcb273b94a6624551c9f855ce0cdf13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0304e09cc7aad4ff7c4ba5338f6575720fcb273b94a6624551c9f855ce0cdf13->enter($__internal_0304e09cc7aad4ff7c4ba5338f6575720fcb273b94a6624551c9f855ce0cdf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0304e09cc7aad4ff7c4ba5338f6575720fcb273b94a6624551c9f855ce0cdf13->leave($__internal_0304e09cc7aad4ff7c4ba5338f6575720fcb273b94a6624551c9f855ce0cdf13_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
