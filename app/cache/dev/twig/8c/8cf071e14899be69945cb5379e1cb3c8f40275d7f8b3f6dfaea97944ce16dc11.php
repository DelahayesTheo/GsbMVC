<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7b7bfce2031acd6a1c0cd1fda7dacdab91158958d14f6ac516ae6ca076e9f929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_bf1998ff1bcd537033ef249ce446fcc6fe924466bbe2c10394dd359afdc5ff20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1998ff1bcd537033ef249ce446fcc6fe924466bbe2c10394dd359afdc5ff20->enter($__internal_bf1998ff1bcd537033ef249ce446fcc6fe924466bbe2c10394dd359afdc5ff20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf1998ff1bcd537033ef249ce446fcc6fe924466bbe2c10394dd359afdc5ff20->leave($__internal_bf1998ff1bcd537033ef249ce446fcc6fe924466bbe2c10394dd359afdc5ff20_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_972947908feea773003dc137ce3b62b99df620bd6bb3a03e2e2c0001790bcbb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972947908feea773003dc137ce3b62b99df620bd6bb3a03e2e2c0001790bcbb9->enter($__internal_972947908feea773003dc137ce3b62b99df620bd6bb3a03e2e2c0001790bcbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_972947908feea773003dc137ce3b62b99df620bd6bb3a03e2e2c0001790bcbb9->leave($__internal_972947908feea773003dc137ce3b62b99df620bd6bb3a03e2e2c0001790bcbb9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
