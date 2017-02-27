<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_6d4689744cd081a10f54642c8cf31f93a8978b0e8df8fd0a272e676d181d728a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_f1b6c4cb15197ad5be5e773cb53d1afae2ef3b067364aae249fd572167f1dbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b6c4cb15197ad5be5e773cb53d1afae2ef3b067364aae249fd572167f1dbee->enter($__internal_f1b6c4cb15197ad5be5e773cb53d1afae2ef3b067364aae249fd572167f1dbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1b6c4cb15197ad5be5e773cb53d1afae2ef3b067364aae249fd572167f1dbee->leave($__internal_f1b6c4cb15197ad5be5e773cb53d1afae2ef3b067364aae249fd572167f1dbee_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b1c5942970d714c82544bc4fa8b9aec1e83b64dfff6e62eeb78721ed2ab2038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1c5942970d714c82544bc4fa8b9aec1e83b64dfff6e62eeb78721ed2ab2038->enter($__internal_0b1c5942970d714c82544bc4fa8b9aec1e83b64dfff6e62eeb78721ed2ab2038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0b1c5942970d714c82544bc4fa8b9aec1e83b64dfff6e62eeb78721ed2ab2038->leave($__internal_0b1c5942970d714c82544bc4fa8b9aec1e83b64dfff6e62eeb78721ed2ab2038_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
