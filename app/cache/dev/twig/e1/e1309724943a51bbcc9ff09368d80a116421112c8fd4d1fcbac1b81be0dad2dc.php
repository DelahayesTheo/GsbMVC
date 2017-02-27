<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_52bb8321d9623056ee4940f2eb85fefd4dfc6847c19d8b411a4641b544fca4bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_4ab4e5725c73d0f270198a03262124de784c478085a444a8de708995540cc76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab4e5725c73d0f270198a03262124de784c478085a444a8de708995540cc76c->enter($__internal_4ab4e5725c73d0f270198a03262124de784c478085a444a8de708995540cc76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ab4e5725c73d0f270198a03262124de784c478085a444a8de708995540cc76c->leave($__internal_4ab4e5725c73d0f270198a03262124de784c478085a444a8de708995540cc76c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7e26d3160b297834af9431a325c3b443bf44f65ba1c8f32ff6329fad4c87f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e26d3160b297834af9431a325c3b443bf44f65ba1c8f32ff6329fad4c87f41->enter($__internal_b7e26d3160b297834af9431a325c3b443bf44f65ba1c8f32ff6329fad4c87f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_b7e26d3160b297834af9431a325c3b443bf44f65ba1c8f32ff6329fad4c87f41->leave($__internal_b7e26d3160b297834af9431a325c3b443bf44f65ba1c8f32ff6329fad4c87f41_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
