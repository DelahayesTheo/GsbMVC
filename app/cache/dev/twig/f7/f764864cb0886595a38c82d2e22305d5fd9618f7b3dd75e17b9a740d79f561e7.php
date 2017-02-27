<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_53f4114f99cd414ed04031e600bf95d036dcbf8e5b8d48567f6115f97a11ec45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_8814714f386b23c3252b9944303299501a022894ced671f58ea0edc4fcee590a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8814714f386b23c3252b9944303299501a022894ced671f58ea0edc4fcee590a->enter($__internal_8814714f386b23c3252b9944303299501a022894ced671f58ea0edc4fcee590a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8814714f386b23c3252b9944303299501a022894ced671f58ea0edc4fcee590a->leave($__internal_8814714f386b23c3252b9944303299501a022894ced671f58ea0edc4fcee590a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c7d9a62e416024610f8c1e032b0f4bc8df56e43bfe1eba32302f90652c38553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7d9a62e416024610f8c1e032b0f4bc8df56e43bfe1eba32302f90652c38553->enter($__internal_3c7d9a62e416024610f8c1e032b0f4bc8df56e43bfe1eba32302f90652c38553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_3c7d9a62e416024610f8c1e032b0f4bc8df56e43bfe1eba32302f90652c38553->leave($__internal_3c7d9a62e416024610f8c1e032b0f4bc8df56e43bfe1eba32302f90652c38553_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
