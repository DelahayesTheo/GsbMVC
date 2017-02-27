<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_1415360e9a97f7be2478b20d7516ffe844d8a878d5de2ed7f31c8f410d0a110d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43f0844550960202bbf8fabc131ca9313c9a22bccee71c3fdd91a12398e53774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f0844550960202bbf8fabc131ca9313c9a22bccee71c3fdd91a12398e53774->enter($__internal_43f0844550960202bbf8fabc131ca9313c9a22bccee71c3fdd91a12398e53774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43f0844550960202bbf8fabc131ca9313c9a22bccee71c3fdd91a12398e53774->leave($__internal_43f0844550960202bbf8fabc131ca9313c9a22bccee71c3fdd91a12398e53774_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36d4813df8c045c62000344b12836cc0040d3c72db25449923ff67885925e321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d4813df8c045c62000344b12836cc0040d3c72db25449923ff67885925e321->enter($__internal_36d4813df8c045c62000344b12836cc0040d3c72db25449923ff67885925e321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_36d4813df8c045c62000344b12836cc0040d3c72db25449923ff67885925e321->leave($__internal_36d4813df8c045c62000344b12836cc0040d3c72db25449923ff67885925e321_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
