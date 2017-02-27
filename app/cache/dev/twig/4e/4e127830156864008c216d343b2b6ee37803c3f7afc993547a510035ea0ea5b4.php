<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_677505b941539600680e7e06f94850384ff83704ce9c78dcd15e6d88ff3680c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_35945df1293d2152bca66df00f30b07d19d25be63f2a925881bcf88ea87426d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35945df1293d2152bca66df00f30b07d19d25be63f2a925881bcf88ea87426d3->enter($__internal_35945df1293d2152bca66df00f30b07d19d25be63f2a925881bcf88ea87426d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35945df1293d2152bca66df00f30b07d19d25be63f2a925881bcf88ea87426d3->leave($__internal_35945df1293d2152bca66df00f30b07d19d25be63f2a925881bcf88ea87426d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efce99d2e96e023a3e821f59d581217b2be0409949b6d662a79effbd83868f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efce99d2e96e023a3e821f59d581217b2be0409949b6d662a79effbd83868f10->enter($__internal_efce99d2e96e023a3e821f59d581217b2be0409949b6d662a79effbd83868f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_efce99d2e96e023a3e821f59d581217b2be0409949b6d662a79effbd83868f10->leave($__internal_efce99d2e96e023a3e821f59d581217b2be0409949b6d662a79effbd83868f10_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
