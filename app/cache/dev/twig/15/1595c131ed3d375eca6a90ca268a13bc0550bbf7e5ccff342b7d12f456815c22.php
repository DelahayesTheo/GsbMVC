<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4e0396b2f457644f8df1459824d0a5eb54f16de6cd37754fd260e92f9a5837cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_bdc08570085e5d4e9133b51a08f3669c5266b08d5f94920d7cadf63a5c678696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc08570085e5d4e9133b51a08f3669c5266b08d5f94920d7cadf63a5c678696->enter($__internal_bdc08570085e5d4e9133b51a08f3669c5266b08d5f94920d7cadf63a5c678696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdc08570085e5d4e9133b51a08f3669c5266b08d5f94920d7cadf63a5c678696->leave($__internal_bdc08570085e5d4e9133b51a08f3669c5266b08d5f94920d7cadf63a5c678696_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2937552af000b4b160c41b68ea084b867f7725080fa66a05bc80edb051580d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2937552af000b4b160c41b68ea084b867f7725080fa66a05bc80edb051580d1a->enter($__internal_2937552af000b4b160c41b68ea084b867f7725080fa66a05bc80edb051580d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_2937552af000b4b160c41b68ea084b867f7725080fa66a05bc80edb051580d1a->leave($__internal_2937552af000b4b160c41b68ea084b867f7725080fa66a05bc80edb051580d1a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3341e0c527ccaf8d29cd2b1ac6793576c12d9b2b6338ee8aa85efd4918af0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3341e0c527ccaf8d29cd2b1ac6793576c12d9b2b6338ee8aa85efd4918af0dc->enter($__internal_b3341e0c527ccaf8d29cd2b1ac6793576c12d9b2b6338ee8aa85efd4918af0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b3341e0c527ccaf8d29cd2b1ac6793576c12d9b2b6338ee8aa85efd4918af0dc->leave($__internal_b3341e0c527ccaf8d29cd2b1ac6793576c12d9b2b6338ee8aa85efd4918af0dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf791cb9438bfe11cce5b6f93baa4cefd46480c2b46f47d0b2882e589a212147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf791cb9438bfe11cce5b6f93baa4cefd46480c2b46f47d0b2882e589a212147->enter($__internal_bf791cb9438bfe11cce5b6f93baa4cefd46480c2b46f47d0b2882e589a212147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bf791cb9438bfe11cce5b6f93baa4cefd46480c2b46f47d0b2882e589a212147->leave($__internal_bf791cb9438bfe11cce5b6f93baa4cefd46480c2b46f47d0b2882e589a212147_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
