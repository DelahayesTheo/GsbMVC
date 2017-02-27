<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b89f1aa17c4ed380e7ef4804669b7f61419894d7c69aefa91014c6fa4102624a extends Twig_Template
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
        $__internal_c6bce7bc53d342306b010501b86851e63672bbff4183027b87a17b3e01668f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bce7bc53d342306b010501b86851e63672bbff4183027b87a17b3e01668f5e->enter($__internal_c6bce7bc53d342306b010501b86851e63672bbff4183027b87a17b3e01668f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6bce7bc53d342306b010501b86851e63672bbff4183027b87a17b3e01668f5e->leave($__internal_c6bce7bc53d342306b010501b86851e63672bbff4183027b87a17b3e01668f5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_65fb2f633f84571246d359ceb99a4447446e59507535890057e87b385adb22fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fb2f633f84571246d359ceb99a4447446e59507535890057e87b385adb22fd->enter($__internal_65fb2f633f84571246d359ceb99a4447446e59507535890057e87b385adb22fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_65fb2f633f84571246d359ceb99a4447446e59507535890057e87b385adb22fd->leave($__internal_65fb2f633f84571246d359ceb99a4447446e59507535890057e87b385adb22fd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc0cb8ec7088945e595619a7c421bd0b7ec644037352457ee756e4dd580b7ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0cb8ec7088945e595619a7c421bd0b7ec644037352457ee756e4dd580b7ed7->enter($__internal_bc0cb8ec7088945e595619a7c421bd0b7ec644037352457ee756e4dd580b7ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bc0cb8ec7088945e595619a7c421bd0b7ec644037352457ee756e4dd580b7ed7->leave($__internal_bc0cb8ec7088945e595619a7c421bd0b7ec644037352457ee756e4dd580b7ed7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28389bae0e6ae524a7ebc64c3e1be26402642309635be3ea46a5bf08b92c147d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28389bae0e6ae524a7ebc64c3e1be26402642309635be3ea46a5bf08b92c147d->enter($__internal_28389bae0e6ae524a7ebc64c3e1be26402642309635be3ea46a5bf08b92c147d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28389bae0e6ae524a7ebc64c3e1be26402642309635be3ea46a5bf08b92c147d->leave($__internal_28389bae0e6ae524a7ebc64c3e1be26402642309635be3ea46a5bf08b92c147d_prof);

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
