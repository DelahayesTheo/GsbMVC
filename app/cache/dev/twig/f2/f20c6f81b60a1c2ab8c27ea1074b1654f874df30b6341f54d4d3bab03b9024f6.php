<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_b4fd4c9e94327af01f4df13750f78a1d16d1e0092270a184ea3cb7b2e14c46cc extends Twig_Template
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
        $__internal_5897bdd5f565f359846f99b544826f2205aa5e1fb91bf9c50c97279ef81e9c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5897bdd5f565f359846f99b544826f2205aa5e1fb91bf9c50c97279ef81e9c15->enter($__internal_5897bdd5f565f359846f99b544826f2205aa5e1fb91bf9c50c97279ef81e9c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5897bdd5f565f359846f99b544826f2205aa5e1fb91bf9c50c97279ef81e9c15->leave($__internal_5897bdd5f565f359846f99b544826f2205aa5e1fb91bf9c50c97279ef81e9c15_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3d20f5d60de2263196555cf8927b3ad8fa9ae8c3a72ce5f9fd4b4f7e5fc23dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d20f5d60de2263196555cf8927b3ad8fa9ae8c3a72ce5f9fd4b4f7e5fc23dd8->enter($__internal_3d20f5d60de2263196555cf8927b3ad8fa9ae8c3a72ce5f9fd4b4f7e5fc23dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3d20f5d60de2263196555cf8927b3ad8fa9ae8c3a72ce5f9fd4b4f7e5fc23dd8->leave($__internal_3d20f5d60de2263196555cf8927b3ad8fa9ae8c3a72ce5f9fd4b4f7e5fc23dd8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e9e798ab9f79e2bef1baae7820d285897c5bc8a8f1653f931ad6b9bfae6f0c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e798ab9f79e2bef1baae7820d285897c5bc8a8f1653f931ad6b9bfae6f0c1d->enter($__internal_e9e798ab9f79e2bef1baae7820d285897c5bc8a8f1653f931ad6b9bfae6f0c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e9e798ab9f79e2bef1baae7820d285897c5bc8a8f1653f931ad6b9bfae6f0c1d->leave($__internal_e9e798ab9f79e2bef1baae7820d285897c5bc8a8f1653f931ad6b9bfae6f0c1d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_373d0344eea39d1ca1cec4ec8feea66cfc0a7b6502495fa6c27d85e8c980cc64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373d0344eea39d1ca1cec4ec8feea66cfc0a7b6502495fa6c27d85e8c980cc64->enter($__internal_373d0344eea39d1ca1cec4ec8feea66cfc0a7b6502495fa6c27d85e8c980cc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        
        $__internal_373d0344eea39d1ca1cec4ec8feea66cfc0a7b6502495fa6c27d85e8c980cc64->leave($__internal_373d0344eea39d1ca1cec4ec8feea66cfc0a7b6502495fa6c27d85e8c980cc64_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
