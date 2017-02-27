<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c41079d9f30bc1f603adfece4f07839397c99c3ef8bfc3429bd9b27fc666b8b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_e4e2bafdbf5f1fc715bd067b661632de5e41b31138d68eead2a1e46631d79d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e2bafdbf5f1fc715bd067b661632de5e41b31138d68eead2a1e46631d79d84->enter($__internal_e4e2bafdbf5f1fc715bd067b661632de5e41b31138d68eead2a1e46631d79d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e2bafdbf5f1fc715bd067b661632de5e41b31138d68eead2a1e46631d79d84->leave($__internal_e4e2bafdbf5f1fc715bd067b661632de5e41b31138d68eead2a1e46631d79d84_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1fe63d4c0fc38c87fe7172090e4ad36287112cc3f01e7cc1d93b6f48599e841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fe63d4c0fc38c87fe7172090e4ad36287112cc3f01e7cc1d93b6f48599e841->enter($__internal_f1fe63d4c0fc38c87fe7172090e4ad36287112cc3f01e7cc1d93b6f48599e841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Security/login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_f1fe63d4c0fc38c87fe7172090e4ad36287112cc3f01e7cc1d93b6f48599e841->leave($__internal_f1fe63d4c0fc38c87fe7172090e4ad36287112cc3f01e7cc1d93b6f48599e841_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
