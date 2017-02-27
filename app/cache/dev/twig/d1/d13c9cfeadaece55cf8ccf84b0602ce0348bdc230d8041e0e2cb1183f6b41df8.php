<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_f4ec2ba8214e2f32d3e444ef20628ce86c207d4449be16fbc27f97b1b69dd123 extends Twig_Template
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
        $__internal_5794f57d634c070615d0b53ec3ba7f6d0087e44abf737f061e4af21258fb1186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5794f57d634c070615d0b53ec3ba7f6d0087e44abf737f061e4af21258fb1186->enter($__internal_5794f57d634c070615d0b53ec3ba7f6d0087e44abf737f061e4af21258fb1186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5794f57d634c070615d0b53ec3ba7f6d0087e44abf737f061e4af21258fb1186->leave($__internal_5794f57d634c070615d0b53ec3ba7f6d0087e44abf737f061e4af21258fb1186_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5de60cb397155a38f3c5d4a25bd2385611f14e0a999d108383050f827c43b6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de60cb397155a38f3c5d4a25bd2385611f14e0a999d108383050f827c43b6c4->enter($__internal_5de60cb397155a38f3c5d4a25bd2385611f14e0a999d108383050f827c43b6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5de60cb397155a38f3c5d4a25bd2385611f14e0a999d108383050f827c43b6c4->leave($__internal_5de60cb397155a38f3c5d4a25bd2385611f14e0a999d108383050f827c43b6c4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8cb0b5c6dd98833755cdc7b3e8e810147acecb43fcce5812c4e4c30443b8c567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb0b5c6dd98833755cdc7b3e8e810147acecb43fcce5812c4e4c30443b8c567->enter($__internal_8cb0b5c6dd98833755cdc7b3e8e810147acecb43fcce5812c4e4c30443b8c567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8cb0b5c6dd98833755cdc7b3e8e810147acecb43fcce5812c4e4c30443b8c567->leave($__internal_8cb0b5c6dd98833755cdc7b3e8e810147acecb43fcce5812c4e4c30443b8c567_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d98835ab9ac17ca6740c9da7dff1729f68d4cabcc84bca02a9705339424326c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98835ab9ac17ca6740c9da7dff1729f68d4cabcc84bca02a9705339424326c7->enter($__internal_d98835ab9ac17ca6740c9da7dff1729f68d4cabcc84bca02a9705339424326c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_d98835ab9ac17ca6740c9da7dff1729f68d4cabcc84bca02a9705339424326c7->leave($__internal_d98835ab9ac17ca6740c9da7dff1729f68d4cabcc84bca02a9705339424326c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
