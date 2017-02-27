<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_8e6d39058dbac48204efb02fffe2f3a24efe5cc2bc56d41427115f3c948b447b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_ea673f3af5380d9f0edbd1bd1dae3c1c793c11eb852e89f8f5fb272208bb8aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea673f3af5380d9f0edbd1bd1dae3c1c793c11eb852e89f8f5fb272208bb8aab->enter($__internal_ea673f3af5380d9f0edbd1bd1dae3c1c793c11eb852e89f8f5fb272208bb8aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea673f3af5380d9f0edbd1bd1dae3c1c793c11eb852e89f8f5fb272208bb8aab->leave($__internal_ea673f3af5380d9f0edbd1bd1dae3c1c793c11eb852e89f8f5fb272208bb8aab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac869511df1cd17cac28736da756352aba2ae1235244e1a6b94e88f13953c9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac869511df1cd17cac28736da756352aba2ae1235244e1a6b94e88f13953c9ca->enter($__internal_ac869511df1cd17cac28736da756352aba2ae1235244e1a6b94e88f13953c9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ac869511df1cd17cac28736da756352aba2ae1235244e1a6b94e88f13953c9ca->leave($__internal_ac869511df1cd17cac28736da756352aba2ae1235244e1a6b94e88f13953c9ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
