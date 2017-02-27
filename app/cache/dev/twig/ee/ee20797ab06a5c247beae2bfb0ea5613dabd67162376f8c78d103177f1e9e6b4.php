<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_ca06f5c92c163ebc0bc30071490da4282e730e6d4e0a0f92650e798db4cc2667 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_bd288d41b36da8875fec7b9d34d086daeca82ffc5abc6cc31d7c2806826a5d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd288d41b36da8875fec7b9d34d086daeca82ffc5abc6cc31d7c2806826a5d47->enter($__internal_bd288d41b36da8875fec7b9d34d086daeca82ffc5abc6cc31d7c2806826a5d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd288d41b36da8875fec7b9d34d086daeca82ffc5abc6cc31d7c2806826a5d47->leave($__internal_bd288d41b36da8875fec7b9d34d086daeca82ffc5abc6cc31d7c2806826a5d47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5b7147e92bd96ab25c90f99696f00f52025dd11207fbdd63859daedabe9557f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b7147e92bd96ab25c90f99696f00f52025dd11207fbdd63859daedabe9557f->enter($__internal_a5b7147e92bd96ab25c90f99696f00f52025dd11207fbdd63859daedabe9557f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_a5b7147e92bd96ab25c90f99696f00f52025dd11207fbdd63859daedabe9557f->leave($__internal_a5b7147e92bd96ab25c90f99696f00f52025dd11207fbdd63859daedabe9557f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
