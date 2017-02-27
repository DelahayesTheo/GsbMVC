<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_b83403e3178b0dd967e09672298bb6f4187e0f8ea0b6aef3027fd80fc21e3aea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_42a63798873d6763bd6b542820d91fc732dcdf91c626c0a234b7468eb67a6227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a63798873d6763bd6b542820d91fc732dcdf91c626c0a234b7468eb67a6227->enter($__internal_42a63798873d6763bd6b542820d91fc732dcdf91c626c0a234b7468eb67a6227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42a63798873d6763bd6b542820d91fc732dcdf91c626c0a234b7468eb67a6227->leave($__internal_42a63798873d6763bd6b542820d91fc732dcdf91c626c0a234b7468eb67a6227_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75a0e4d12475b2a04bae638136ac55bcb70795b25d88139a7f9c1e14d924ce68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a0e4d12475b2a04bae638136ac55bcb70795b25d88139a7f9c1e14d924ce68->enter($__internal_75a0e4d12475b2a04bae638136ac55bcb70795b25d88139a7f9c1e14d924ce68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_75a0e4d12475b2a04bae638136ac55bcb70795b25d88139a7f9c1e14d924ce68->leave($__internal_75a0e4d12475b2a04bae638136ac55bcb70795b25d88139a7f9c1e14d924ce68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
