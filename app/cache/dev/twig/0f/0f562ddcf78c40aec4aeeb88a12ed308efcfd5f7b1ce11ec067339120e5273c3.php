<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_941ee00c2674a68aa69d4a24202348be99129fe34e1db61af520c43c0f7409e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a660b49c79ef05808b7acaa237c26bfdb25dcba795fe8e5b1c19eaa8db56b853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a660b49c79ef05808b7acaa237c26bfdb25dcba795fe8e5b1c19eaa8db56b853->enter($__internal_a660b49c79ef05808b7acaa237c26bfdb25dcba795fe8e5b1c19eaa8db56b853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a660b49c79ef05808b7acaa237c26bfdb25dcba795fe8e5b1c19eaa8db56b853->leave($__internal_a660b49c79ef05808b7acaa237c26bfdb25dcba795fe8e5b1c19eaa8db56b853_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_50652f4d9e7be93417e3315459d89a9216c9eb18ea615996fa2d2ad94f80eda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50652f4d9e7be93417e3315459d89a9216c9eb18ea615996fa2d2ad94f80eda0->enter($__internal_50652f4d9e7be93417e3315459d89a9216c9eb18ea615996fa2d2ad94f80eda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_50652f4d9e7be93417e3315459d89a9216c9eb18ea615996fa2d2ad94f80eda0->leave($__internal_50652f4d9e7be93417e3315459d89a9216c9eb18ea615996fa2d2ad94f80eda0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e36b2cd34bfa1810941967ab3ec7c6a603933154accec87b18563921f63a0a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36b2cd34bfa1810941967ab3ec7c6a603933154accec87b18563921f63a0a63->enter($__internal_e36b2cd34bfa1810941967ab3ec7c6a603933154accec87b18563921f63a0a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e36b2cd34bfa1810941967ab3ec7c6a603933154accec87b18563921f63a0a63->leave($__internal_e36b2cd34bfa1810941967ab3ec7c6a603933154accec87b18563921f63a0a63_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_62447dbc609c06eee425fe16d5f82128f3fed6b2f6ce6eb6a410fccad88261e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62447dbc609c06eee425fe16d5f82128f3fed6b2f6ce6eb6a410fccad88261e7->enter($__internal_62447dbc609c06eee425fe16d5f82128f3fed6b2f6ce6eb6a410fccad88261e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_62447dbc609c06eee425fe16d5f82128f3fed6b2f6ce6eb6a410fccad88261e7->leave($__internal_62447dbc609c06eee425fe16d5f82128f3fed6b2f6ce6eb6a410fccad88261e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
