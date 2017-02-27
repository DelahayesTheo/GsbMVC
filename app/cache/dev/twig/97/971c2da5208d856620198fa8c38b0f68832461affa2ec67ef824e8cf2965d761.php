<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_a7b531fac1663bd41b95eed74434718510cc225fe3a8d9b6c93a728798fb4072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_71608ab5492540148c3945cd2737ac928085a1d945bf2317137905cd6cd55931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71608ab5492540148c3945cd2737ac928085a1d945bf2317137905cd6cd55931->enter($__internal_71608ab5492540148c3945cd2737ac928085a1d945bf2317137905cd6cd55931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71608ab5492540148c3945cd2737ac928085a1d945bf2317137905cd6cd55931->leave($__internal_71608ab5492540148c3945cd2737ac928085a1d945bf2317137905cd6cd55931_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c96d8b77fca07b998d49c4782cc9d1a4de94e1489521cad49f9d1dad2487aa60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96d8b77fca07b998d49c4782cc9d1a4de94e1489521cad49f9d1dad2487aa60->enter($__internal_c96d8b77fca07b998d49c4782cc9d1a4de94e1489521cad49f9d1dad2487aa60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_c96d8b77fca07b998d49c4782cc9d1a4de94e1489521cad49f9d1dad2487aa60->leave($__internal_c96d8b77fca07b998d49c4782cc9d1a4de94e1489521cad49f9d1dad2487aa60_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
