<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_04c498ea8d54e2178e80eaa14ce7f376f7c0eac55fcd83cafc32c2849a76869b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8a6ece3e0c96c19c03ba157f5a18cb22aa6c74cf20e88d5f3558abd592c24d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a6ece3e0c96c19c03ba157f5a18cb22aa6c74cf20e88d5f3558abd592c24d3->enter($__internal_f8a6ece3e0c96c19c03ba157f5a18cb22aa6c74cf20e88d5f3558abd592c24d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a6ece3e0c96c19c03ba157f5a18cb22aa6c74cf20e88d5f3558abd592c24d3->leave($__internal_f8a6ece3e0c96c19c03ba157f5a18cb22aa6c74cf20e88d5f3558abd592c24d3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_510cd4cbee273e4393c4f8a20907b24df42b600ca47da817d971cad91053618a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510cd4cbee273e4393c4f8a20907b24df42b600ca47da817d971cad91053618a->enter($__internal_510cd4cbee273e4393c4f8a20907b24df42b600ca47da817d971cad91053618a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "NelmioApiDocBundle::resource.html.twig"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_510cd4cbee273e4393c4f8a20907b24df42b600ca47da817d971cad91053618a->leave($__internal_510cd4cbee273e4393c4f8a20907b24df42b600ca47da817d971cad91053618a_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    {% include 'NelmioApiDocBundle::method.html.twig' %}
                </ul>
            </li>
        </ul>
    </li>
{% endblock content %}
", "NelmioApiDocBundle::resource.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\nelmio\\api-doc-bundle\\Nelmio\\ApiDocBundle/Resources/views/resource.html.twig");
    }
}
