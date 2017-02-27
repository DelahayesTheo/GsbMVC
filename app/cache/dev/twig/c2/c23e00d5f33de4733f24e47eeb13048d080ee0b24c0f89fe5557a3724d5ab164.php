<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8bff246129040ff99473e385708760864dbbc9e7c2972a79d0c3c24adf317741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_fb3b53ba0d3b219812a1e800d7c5c89c4655213f7d3d1badd63a388b1e33bc6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb3b53ba0d3b219812a1e800d7c5c89c4655213f7d3d1badd63a388b1e33bc6c->enter($__internal_fb3b53ba0d3b219812a1e800d7c5c89c4655213f7d3d1badd63a388b1e33bc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb3b53ba0d3b219812a1e800d7c5c89c4655213f7d3d1badd63a388b1e33bc6c->leave($__internal_fb3b53ba0d3b219812a1e800d7c5c89c4655213f7d3d1badd63a388b1e33bc6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d477469b095604df8effc7d0dc11e530aabd0c5964e30d29c715b0c524d46149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d477469b095604df8effc7d0dc11e530aabd0c5964e30d29c715b0c524d46149->enter($__internal_d477469b095604df8effc7d0dc11e530aabd0c5964e30d29c715b0c524d46149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d477469b095604df8effc7d0dc11e530aabd0c5964e30d29c715b0c524d46149->leave($__internal_d477469b095604df8effc7d0dc11e530aabd0c5964e30d29c715b0c524d46149_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
