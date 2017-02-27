<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_f463ff4729ff857e2ea28fa05bdcd745f96141bc62515cd5a2b0b920fce5ee09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_759fb691d51fe81c5507e84bf4136f1501f15ac7faa8d5c69338fb2044152018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759fb691d51fe81c5507e84bf4136f1501f15ac7faa8d5c69338fb2044152018->enter($__internal_759fb691d51fe81c5507e84bf4136f1501f15ac7faa8d5c69338fb2044152018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_759fb691d51fe81c5507e84bf4136f1501f15ac7faa8d5c69338fb2044152018->leave($__internal_759fb691d51fe81c5507e84bf4136f1501f15ac7faa8d5c69338fb2044152018_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4eb9e366127dbcd3d22b06a3baaf5b22328911823b30d8143c278ffe3e26ef74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb9e366127dbcd3d22b06a3baaf5b22328911823b30d8143c278ffe3e26ef74->enter($__internal_4eb9e366127dbcd3d22b06a3baaf5b22328911823b30d8143c278ffe3e26ef74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_4eb9e366127dbcd3d22b06a3baaf5b22328911823b30d8143c278ffe3e26ef74->leave($__internal_4eb9e366127dbcd3d22b06a3baaf5b22328911823b30d8143c278ffe3e26ef74_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
