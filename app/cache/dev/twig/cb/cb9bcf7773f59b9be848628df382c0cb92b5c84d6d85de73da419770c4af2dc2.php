<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_ee4480a75172c6085b808f3c11069267d22ef40fd776d386d506ac2d01bdc1d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_3aafed9e180be4eb72917318664ca44e9afc314383e8de7dea696cf1b7971355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aafed9e180be4eb72917318664ca44e9afc314383e8de7dea696cf1b7971355->enter($__internal_3aafed9e180be4eb72917318664ca44e9afc314383e8de7dea696cf1b7971355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aafed9e180be4eb72917318664ca44e9afc314383e8de7dea696cf1b7971355->leave($__internal_3aafed9e180be4eb72917318664ca44e9afc314383e8de7dea696cf1b7971355_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68fc067256223c8ba70b116c9d2e7527a65d0f857202847bfcdb554ec2cad9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68fc067256223c8ba70b116c9d2e7527a65d0f857202847bfcdb554ec2cad9c8->enter($__internal_68fc067256223c8ba70b116c9d2e7527a65d0f857202847bfcdb554ec2cad9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_68fc067256223c8ba70b116c9d2e7527a65d0f857202847bfcdb554ec2cad9c8->leave($__internal_68fc067256223c8ba70b116c9d2e7527a65d0f857202847bfcdb554ec2cad9c8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
