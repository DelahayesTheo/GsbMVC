<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_b01f997c8f8fdb18c942ba4c0d53efb2d2edc58f16f8a29a637a9884152d69ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_ea953a5ac8e56dc5db06376ff227d79b20f8c2f56e085ab624df202a0978c517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea953a5ac8e56dc5db06376ff227d79b20f8c2f56e085ab624df202a0978c517->enter($__internal_ea953a5ac8e56dc5db06376ff227d79b20f8c2f56e085ab624df202a0978c517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea953a5ac8e56dc5db06376ff227d79b20f8c2f56e085ab624df202a0978c517->leave($__internal_ea953a5ac8e56dc5db06376ff227d79b20f8c2f56e085ab624df202a0978c517_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27d3b10667783b1f77a9e78f90cfe8d573c8967364d5ea27bf1c01fa7a0643ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d3b10667783b1f77a9e78f90cfe8d573c8967364d5ea27bf1c01fa7a0643ef->enter($__internal_27d3b10667783b1f77a9e78f90cfe8d573c8967364d5ea27bf1c01fa7a0643ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_27d3b10667783b1f77a9e78f90cfe8d573c8967364d5ea27bf1c01fa7a0643ef->leave($__internal_27d3b10667783b1f77a9e78f90cfe8d573c8967364d5ea27bf1c01fa7a0643ef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
