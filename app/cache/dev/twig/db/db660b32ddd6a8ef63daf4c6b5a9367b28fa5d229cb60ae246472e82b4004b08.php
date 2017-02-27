<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3c831e7290e9dc1befcc9124a69fab12edabf80d44cbb41dcb2c6ebb28d345ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_0260a2d6f94d17f01d954bc57ccece3d4fb22b41ed82b625923c3db7ec36ec42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0260a2d6f94d17f01d954bc57ccece3d4fb22b41ed82b625923c3db7ec36ec42->enter($__internal_0260a2d6f94d17f01d954bc57ccece3d4fb22b41ed82b625923c3db7ec36ec42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0260a2d6f94d17f01d954bc57ccece3d4fb22b41ed82b625923c3db7ec36ec42->leave($__internal_0260a2d6f94d17f01d954bc57ccece3d4fb22b41ed82b625923c3db7ec36ec42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efad0a06497ff1dac1c88ca8d77423548e27fe36c67c84902da254e26720ec87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efad0a06497ff1dac1c88ca8d77423548e27fe36c67c84902da254e26720ec87->enter($__internal_efad0a06497ff1dac1c88ca8d77423548e27fe36c67c84902da254e26720ec87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_efad0a06497ff1dac1c88ca8d77423548e27fe36c67c84902da254e26720ec87->leave($__internal_efad0a06497ff1dac1c88ca8d77423548e27fe36c67c84902da254e26720ec87_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
