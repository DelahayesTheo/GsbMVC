<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ae2412f7534175b0deb70d0189a6172531ca724091d5f097fb9fd24f45fc6159 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_e81ee70c649c16e68a6496dc23619a331c7042d82162de970ef7d007fbfe2399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81ee70c649c16e68a6496dc23619a331c7042d82162de970ef7d007fbfe2399->enter($__internal_e81ee70c649c16e68a6496dc23619a331c7042d82162de970ef7d007fbfe2399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e81ee70c649c16e68a6496dc23619a331c7042d82162de970ef7d007fbfe2399->leave($__internal_e81ee70c649c16e68a6496dc23619a331c7042d82162de970ef7d007fbfe2399_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b69e94ffd7f341fd9a64fc43ae0d8e59365b87394d0dbe57a49b3fb52551d84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69e94ffd7f341fd9a64fc43ae0d8e59365b87394d0dbe57a49b3fb52551d84e->enter($__internal_b69e94ffd7f341fd9a64fc43ae0d8e59365b87394d0dbe57a49b3fb52551d84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b69e94ffd7f341fd9a64fc43ae0d8e59365b87394d0dbe57a49b3fb52551d84e->leave($__internal_b69e94ffd7f341fd9a64fc43ae0d8e59365b87394d0dbe57a49b3fb52551d84e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e17a085f07325a76cb6b0f35c2f75d71670aa0244857b350f2b5ceb693b429b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17a085f07325a76cb6b0f35c2f75d71670aa0244857b350f2b5ceb693b429b1->enter($__internal_e17a085f07325a76cb6b0f35c2f75d71670aa0244857b350f2b5ceb693b429b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e17a085f07325a76cb6b0f35c2f75d71670aa0244857b350f2b5ceb693b429b1->leave($__internal_e17a085f07325a76cb6b0f35c2f75d71670aa0244857b350f2b5ceb693b429b1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b56f8ad8d93afe3db951d95ddc6a30920fe7a305db7971789098c540130efc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56f8ad8d93afe3db951d95ddc6a30920fe7a305db7971789098c540130efc29->enter($__internal_b56f8ad8d93afe3db951d95ddc6a30920fe7a305db7971789098c540130efc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b56f8ad8d93afe3db951d95ddc6a30920fe7a305db7971789098c540130efc29->leave($__internal_b56f8ad8d93afe3db951d95ddc6a30920fe7a305db7971789098c540130efc29_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
