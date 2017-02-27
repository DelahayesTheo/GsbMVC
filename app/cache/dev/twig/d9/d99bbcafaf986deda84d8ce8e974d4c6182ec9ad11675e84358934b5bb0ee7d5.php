<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_487bea7f9eead67f5b2899bb21acc0ab064ac5e1392187e6db1b81ff3d21a6e0 extends Twig_Template
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
        $__internal_32af22ccab0fad351b9441700d38cc00073fd0c94232f027f9bbbb963a35cbcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32af22ccab0fad351b9441700d38cc00073fd0c94232f027f9bbbb963a35cbcd->enter($__internal_32af22ccab0fad351b9441700d38cc00073fd0c94232f027f9bbbb963a35cbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32af22ccab0fad351b9441700d38cc00073fd0c94232f027f9bbbb963a35cbcd->leave($__internal_32af22ccab0fad351b9441700d38cc00073fd0c94232f027f9bbbb963a35cbcd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c906535a26c2fe5cb17fb0ea7014670973328d76a8969bfa3653ad9e3e1eb97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c906535a26c2fe5cb17fb0ea7014670973328d76a8969bfa3653ad9e3e1eb97a->enter($__internal_c906535a26c2fe5cb17fb0ea7014670973328d76a8969bfa3653ad9e3e1eb97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c906535a26c2fe5cb17fb0ea7014670973328d76a8969bfa3653ad9e3e1eb97a->leave($__internal_c906535a26c2fe5cb17fb0ea7014670973328d76a8969bfa3653ad9e3e1eb97a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_460f7af0ab83925bb60086a402db7f726ead18778825cf80eaba4a867362d12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460f7af0ab83925bb60086a402db7f726ead18778825cf80eaba4a867362d12e->enter($__internal_460f7af0ab83925bb60086a402db7f726ead18778825cf80eaba4a867362d12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_460f7af0ab83925bb60086a402db7f726ead18778825cf80eaba4a867362d12e->leave($__internal_460f7af0ab83925bb60086a402db7f726ead18778825cf80eaba4a867362d12e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4388b7ede466115c49b8f239cfdd0e1b2e8f59e7ece2c678a67facaddef3f2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4388b7ede466115c49b8f239cfdd0e1b2e8f59e7ece2c678a67facaddef3f2ee->enter($__internal_4388b7ede466115c49b8f239cfdd0e1b2e8f59e7ece2c678a67facaddef3f2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4388b7ede466115c49b8f239cfdd0e1b2e8f59e7ece2c678a67facaddef3f2ee->leave($__internal_4388b7ede466115c49b8f239cfdd0e1b2e8f59e7ece2c678a67facaddef3f2ee_prof);

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
