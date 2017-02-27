<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_63cf2b21bd60a3e4ef9a02955fde68f49cb6f6fc15ecfbfe6af26b6ccdeb1ba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e5db3308a20bbbb2371a9180900e07308d8347c912b84f24cade7cb153fabba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5db3308a20bbbb2371a9180900e07308d8347c912b84f24cade7cb153fabba5->enter($__internal_e5db3308a20bbbb2371a9180900e07308d8347c912b84f24cade7cb153fabba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5db3308a20bbbb2371a9180900e07308d8347c912b84f24cade7cb153fabba5->leave($__internal_e5db3308a20bbbb2371a9180900e07308d8347c912b84f24cade7cb153fabba5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a25c0927b26476ff64d96eb6c8e6b48054b560381f50af8eccebc721005ab449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25c0927b26476ff64d96eb6c8e6b48054b560381f50af8eccebc721005ab449->enter($__internal_a25c0927b26476ff64d96eb6c8e6b48054b560381f50af8eccebc721005ab449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a25c0927b26476ff64d96eb6c8e6b48054b560381f50af8eccebc721005ab449->leave($__internal_a25c0927b26476ff64d96eb6c8e6b48054b560381f50af8eccebc721005ab449_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
