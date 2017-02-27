<?php

/* ::base.html.twig */
class __TwigTemplate_b097d813358a6c4e35d07acf26ea7f649fdbaa4daddfd76a8b666499081973eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a239859f4931d9171faa5753f3492dabf4717070f5f5ce8bf870da0f02495c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a239859f4931d9171faa5753f3492dabf4717070f5f5ce8bf870da0f02495c54->enter($__internal_a239859f4931d9171faa5753f3492dabf4717070f5f5ce8bf870da0f02495c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a239859f4931d9171faa5753f3492dabf4717070f5f5ce8bf870da0f02495c54->leave($__internal_a239859f4931d9171faa5753f3492dabf4717070f5f5ce8bf870da0f02495c54_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_88ea648b57086e7c392a8d2582dfc98ddeeccc5ecdaff5910a146f9952cadffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ea648b57086e7c392a8d2582dfc98ddeeccc5ecdaff5910a146f9952cadffa->enter($__internal_88ea648b57086e7c392a8d2582dfc98ddeeccc5ecdaff5910a146f9952cadffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_88ea648b57086e7c392a8d2582dfc98ddeeccc5ecdaff5910a146f9952cadffa->leave($__internal_88ea648b57086e7c392a8d2582dfc98ddeeccc5ecdaff5910a146f9952cadffa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f9f4b502609eadbd2c8dfe39ad26b2e062e95ec22c299e239ed57233b7d5a79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f4b502609eadbd2c8dfe39ad26b2e062e95ec22c299e239ed57233b7d5a79a->enter($__internal_f9f4b502609eadbd2c8dfe39ad26b2e062e95ec22c299e239ed57233b7d5a79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_f9f4b502609eadbd2c8dfe39ad26b2e062e95ec22c299e239ed57233b7d5a79a->leave($__internal_f9f4b502609eadbd2c8dfe39ad26b2e062e95ec22c299e239ed57233b7d5a79a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a29b3a001bef61e3c12d9b57ff88d22a7393c1754ac43ac04da5b856d1676853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29b3a001bef61e3c12d9b57ff88d22a7393c1754ac43ac04da5b856d1676853->enter($__internal_a29b3a001bef61e3c12d9b57ff88d22a7393c1754ac43ac04da5b856d1676853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_a29b3a001bef61e3c12d9b57ff88d22a7393c1754ac43ac04da5b856d1676853->leave($__internal_a29b3a001bef61e3c12d9b57ff88d22a7393c1754ac43ac04da5b856d1676853_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a555f4f040806410f033ebbe0cce349fb6da97f191082108354bafac004487ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a555f4f040806410f033ebbe0cce349fb6da97f191082108354bafac004487ec->enter($__internal_a555f4f040806410f033ebbe0cce349fb6da97f191082108354bafac004487ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_a555f4f040806410f033ebbe0cce349fb6da97f191082108354bafac004487ec->leave($__internal_a555f4f040806410f033ebbe0cce349fb6da97f191082108354bafac004487ec_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\wamp64\\www\\apiFrais\\app/Resources\\views/base.html.twig");
    }
}
