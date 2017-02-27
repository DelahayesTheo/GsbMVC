<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_994a544934ef0cf064b9a4e83f98772318ad9558c7f766268743c65f6a329809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_080ab7f6ff1654afd9ae17ade5cd4ed5433c0fc6001e6d89f9bd26eda590f461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080ab7f6ff1654afd9ae17ade5cd4ed5433c0fc6001e6d89f9bd26eda590f461->enter($__internal_080ab7f6ff1654afd9ae17ade5cd4ed5433c0fc6001e6d89f9bd26eda590f461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_080ab7f6ff1654afd9ae17ade5cd4ed5433c0fc6001e6d89f9bd26eda590f461->leave($__internal_080ab7f6ff1654afd9ae17ade5cd4ed5433c0fc6001e6d89f9bd26eda590f461_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdfcb87a8e890fe6d40b24e8acc97d98bac5975c6d26e99844c6d17243e709b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfcb87a8e890fe6d40b24e8acc97d98bac5975c6d26e99844c6d17243e709b9->enter($__internal_bdfcb87a8e890fe6d40b24e8acc97d98bac5975c6d26e99844c6d17243e709b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_bdfcb87a8e890fe6d40b24e8acc97d98bac5975c6d26e99844c6d17243e709b9->leave($__internal_bdfcb87a8e890fe6d40b24e8acc97d98bac5975c6d26e99844c6d17243e709b9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
