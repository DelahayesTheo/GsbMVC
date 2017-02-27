<?php

/* @NelmioApiDoc/resource.html.twig */
class __TwigTemplate_6a81d3a08d81fae40c4123ec73a17314390c26143ed17b630d7e8be43676cf7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "@NelmioApiDoc/resource.html.twig", 1);
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
        $__internal_9a1f2b2293745e97290d5db6f25dbe6e4fe1784403c0874a1e54077bfa70bf92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1f2b2293745e97290d5db6f25dbe6e4fe1784403c0874a1e54077bfa70bf92->enter($__internal_9a1f2b2293745e97290d5db6f25dbe6e4fe1784403c0874a1e54077bfa70bf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NelmioApiDoc/resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a1f2b2293745e97290d5db6f25dbe6e4fe1784403c0874a1e54077bfa70bf92->leave($__internal_9a1f2b2293745e97290d5db6f25dbe6e4fe1784403c0874a1e54077bfa70bf92_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f8603eb3080b1f5a9a5d53b276bf75e747444adfd60b7b1e6c3543578823fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8603eb3080b1f5a9a5d53b276bf75e747444adfd60b7b1e6c3543578823fe3->enter($__internal_9f8603eb3080b1f5a9a5d53b276bf75e747444adfd60b7b1e6c3543578823fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@NelmioApiDoc/resource.html.twig"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "@NelmioApiDoc/resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_9f8603eb3080b1f5a9a5d53b276bf75e747444adfd60b7b1e6c3543578823fe3->leave($__internal_9f8603eb3080b1f5a9a5d53b276bf75e747444adfd60b7b1e6c3543578823fe3_prof);

    }

    public function getTemplateName()
    {
        return "@NelmioApiDoc/resource.html.twig";
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
", "@NelmioApiDoc/resource.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\nelmio\\api-doc-bundle\\Nelmio\\ApiDocBundle\\Resources\\views\\resource.html.twig");
    }
}
