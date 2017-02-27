<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3072de65c28c51a5b0ff1f043ae315497a0d88965e36abce60d0288b8f5cdf4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_b0f1fca098f121258de97d1f308a1ab5946e9d439c63c9be100b6b48a2af030a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f1fca098f121258de97d1f308a1ab5946e9d439c63c9be100b6b48a2af030a->enter($__internal_b0f1fca098f121258de97d1f308a1ab5946e9d439c63c9be100b6b48a2af030a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0f1fca098f121258de97d1f308a1ab5946e9d439c63c9be100b6b48a2af030a->leave($__internal_b0f1fca098f121258de97d1f308a1ab5946e9d439c63c9be100b6b48a2af030a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6f603d9a9effe1187d7fdac18c69e4ad62ffd7f857e2e11660c1ba4b492cd64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f603d9a9effe1187d7fdac18c69e4ad62ffd7f857e2e11660c1ba4b492cd64->enter($__internal_d6f603d9a9effe1187d7fdac18c69e4ad62ffd7f857e2e11660c1ba4b492cd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_d6f603d9a9effe1187d7fdac18c69e4ad62ffd7f857e2e11660c1ba4b492cd64->leave($__internal_d6f603d9a9effe1187d7fdac18c69e4ad62ffd7f857e2e11660c1ba4b492cd64_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
