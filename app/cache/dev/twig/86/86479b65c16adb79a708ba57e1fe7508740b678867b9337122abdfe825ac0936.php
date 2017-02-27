<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_e3daa2a7b2efe176d6b823472b6b90f3e75f93f644230b09107515b6ad0cd3a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ab844840e496ca46bf4cd83c447af51d3e0420f018df4e93e4b4e20777f763b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab844840e496ca46bf4cd83c447af51d3e0420f018df4e93e4b4e20777f763b9->enter($__internal_ab844840e496ca46bf4cd83c447af51d3e0420f018df4e93e4b4e20777f763b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab844840e496ca46bf4cd83c447af51d3e0420f018df4e93e4b4e20777f763b9->leave($__internal_ab844840e496ca46bf4cd83c447af51d3e0420f018df4e93e4b4e20777f763b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f747765cc5d75c7fcec74417b166029343467540aaf126dfede2845a4e29a452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f747765cc5d75c7fcec74417b166029343467540aaf126dfede2845a4e29a452->enter($__internal_f747765cc5d75c7fcec74417b166029343467540aaf126dfede2845a4e29a452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f747765cc5d75c7fcec74417b166029343467540aaf126dfede2845a4e29a452->leave($__internal_f747765cc5d75c7fcec74417b166029343467540aaf126dfede2845a4e29a452_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
