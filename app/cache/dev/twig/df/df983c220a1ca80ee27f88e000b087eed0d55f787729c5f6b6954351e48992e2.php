<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_1c7bc642b25988854595f89268266bfae8df5ddad38f89a89cbcd59e70984898 extends Twig_Template
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
        $__internal_5cf284728f84568fb4b7dc7b4d7709235fd275c7a17e17be568eb8d496159271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf284728f84568fb4b7dc7b4d7709235fd275c7a17e17be568eb8d496159271->enter($__internal_5cf284728f84568fb4b7dc7b4d7709235fd275c7a17e17be568eb8d496159271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5cf284728f84568fb4b7dc7b4d7709235fd275c7a17e17be568eb8d496159271->leave($__internal_5cf284728f84568fb4b7dc7b4d7709235fd275c7a17e17be568eb8d496159271_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6898d6842c62aad75de62a42eb24ecd8f8bc30e18bfa816672d268d903dd28e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6898d6842c62aad75de62a42eb24ecd8f8bc30e18bfa816672d268d903dd28e1->enter($__internal_6898d6842c62aad75de62a42eb24ecd8f8bc30e18bfa816672d268d903dd28e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_6898d6842c62aad75de62a42eb24ecd8f8bc30e18bfa816672d268d903dd28e1->leave($__internal_6898d6842c62aad75de62a42eb24ecd8f8bc30e18bfa816672d268d903dd28e1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2d9519ab50332ec787a50aa480ca5a0bec2507d249162688522f6473d323066b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9519ab50332ec787a50aa480ca5a0bec2507d249162688522f6473d323066b->enter($__internal_2d9519ab50332ec787a50aa480ca5a0bec2507d249162688522f6473d323066b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2d9519ab50332ec787a50aa480ca5a0bec2507d249162688522f6473d323066b->leave($__internal_2d9519ab50332ec787a50aa480ca5a0bec2507d249162688522f6473d323066b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_12ff4fdfa710a7a7a490af206c517e66488b25824398a860a7d2811e28c0eba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ff4fdfa710a7a7a490af206c517e66488b25824398a860a7d2811e28c0eba9->enter($__internal_12ff4fdfa710a7a7a490af206c517e66488b25824398a860a7d2811e28c0eba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        
        $__internal_12ff4fdfa710a7a7a490af206c517e66488b25824398a860a7d2811e28c0eba9->leave($__internal_12ff4fdfa710a7a7a490af206c517e66488b25824398a860a7d2811e28c0eba9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
