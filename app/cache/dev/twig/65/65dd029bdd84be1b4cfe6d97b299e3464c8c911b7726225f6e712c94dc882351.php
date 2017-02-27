<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b3f7875d46a14c2ef56a04b5ccc7d8e037f99dd375504f70dda835ef60104db0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b3f10fa5bcb92beb2779b76d52ebafcd82dd5783f2f81029ad042addd22fe688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f10fa5bcb92beb2779b76d52ebafcd82dd5783f2f81029ad042addd22fe688->enter($__internal_b3f10fa5bcb92beb2779b76d52ebafcd82dd5783f2f81029ad042addd22fe688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3f10fa5bcb92beb2779b76d52ebafcd82dd5783f2f81029ad042addd22fe688->leave($__internal_b3f10fa5bcb92beb2779b76d52ebafcd82dd5783f2f81029ad042addd22fe688_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6aa69d23d966fac3b9e6ce3aefcf656707f68153ce21054405f7acd8a65272b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6aa69d23d966fac3b9e6ce3aefcf656707f68153ce21054405f7acd8a65272b->enter($__internal_c6aa69d23d966fac3b9e6ce3aefcf656707f68153ce21054405f7acd8a65272b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c6aa69d23d966fac3b9e6ce3aefcf656707f68153ce21054405f7acd8a65272b->leave($__internal_c6aa69d23d966fac3b9e6ce3aefcf656707f68153ce21054405f7acd8a65272b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_918ffbf2a679ff1db06e9d56253fea1b2d2caa9999f6da173a5f568f35159c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918ffbf2a679ff1db06e9d56253fea1b2d2caa9999f6da173a5f568f35159c4b->enter($__internal_918ffbf2a679ff1db06e9d56253fea1b2d2caa9999f6da173a5f568f35159c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_918ffbf2a679ff1db06e9d56253fea1b2d2caa9999f6da173a5f568f35159c4b->leave($__internal_918ffbf2a679ff1db06e9d56253fea1b2d2caa9999f6da173a5f568f35159c4b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e525f21a3a8cf420574ceeb24fb7726d4717b054dcbc87132eeb034204a8fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e525f21a3a8cf420574ceeb24fb7726d4717b054dcbc87132eeb034204a8fe3->enter($__internal_6e525f21a3a8cf420574ceeb24fb7726d4717b054dcbc87132eeb034204a8fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6e525f21a3a8cf420574ceeb24fb7726d4717b054dcbc87132eeb034204a8fe3->leave($__internal_6e525f21a3a8cf420574ceeb24fb7726d4717b054dcbc87132eeb034204a8fe3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
