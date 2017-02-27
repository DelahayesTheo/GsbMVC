<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_0d3510f3c562675eb3d7439ab986b008cb141b4d022ef6c33716f405f080ec12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_6b6534f5ac80b34d5ab25c5cdafedf3495ad7256f04ef62b964d2081a9342c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6534f5ac80b34d5ab25c5cdafedf3495ad7256f04ef62b964d2081a9342c09->enter($__internal_6b6534f5ac80b34d5ab25c5cdafedf3495ad7256f04ef62b964d2081a9342c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b6534f5ac80b34d5ab25c5cdafedf3495ad7256f04ef62b964d2081a9342c09->leave($__internal_6b6534f5ac80b34d5ab25c5cdafedf3495ad7256f04ef62b964d2081a9342c09_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f50b7374ae17665272488007e3ea49a2c47ae5c3787d43c853ea3714e3a98a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50b7374ae17665272488007e3ea49a2c47ae5c3787d43c853ea3714e3a98a20->enter($__internal_f50b7374ae17665272488007e3ea49a2c47ae5c3787d43c853ea3714e3a98a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/ChangePassword/change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_f50b7374ae17665272488007e3ea49a2c47ae5c3787d43c853ea3714e3a98a20->leave($__internal_f50b7374ae17665272488007e3ea49a2c47ae5c3787d43c853ea3714e3a98a20_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
