<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_01ccc64aa23995ae0d0a1742db13be05c09d5d3eb071da49f5831d442f9da884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_393c2d0a5e561aaa286d06a8514a0d71bab95b82e7d93488bbb9d43d68106c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393c2d0a5e561aaa286d06a8514a0d71bab95b82e7d93488bbb9d43d68106c5a->enter($__internal_393c2d0a5e561aaa286d06a8514a0d71bab95b82e7d93488bbb9d43d68106c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_393c2d0a5e561aaa286d06a8514a0d71bab95b82e7d93488bbb9d43d68106c5a->leave($__internal_393c2d0a5e561aaa286d06a8514a0d71bab95b82e7d93488bbb9d43d68106c5a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5921d77b6e49955b7cb316046999c2387349507a0dfd51b05f9fc0f2f172893c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5921d77b6e49955b7cb316046999c2387349507a0dfd51b05f9fc0f2f172893c->enter($__internal_5921d77b6e49955b7cb316046999c2387349507a0dfd51b05f9fc0f2f172893c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:check_email.html.twig"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_5921d77b6e49955b7cb316046999c2387349507a0dfd51b05f9fc0f2f172893c->leave($__internal_5921d77b6e49955b7cb316046999c2387349507a0dfd51b05f9fc0f2f172893c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
