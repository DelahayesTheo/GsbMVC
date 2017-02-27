<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_250fdc0a0a538151d6bbe589712d98532f60cf65d8aeebef21c1479d8ca99e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_245816ebc1574f62b7637c76276528b3ad28474b8aab44ec72688ab22993816b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245816ebc1574f62b7637c76276528b3ad28474b8aab44ec72688ab22993816b->enter($__internal_245816ebc1574f62b7637c76276528b3ad28474b8aab44ec72688ab22993816b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_245816ebc1574f62b7637c76276528b3ad28474b8aab44ec72688ab22993816b->leave($__internal_245816ebc1574f62b7637c76276528b3ad28474b8aab44ec72688ab22993816b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_142775e711dc4b036d6b8688a7b4257a11bd55cd7ce8484594b27537a8812605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142775e711dc4b036d6b8688a7b4257a11bd55cd7ce8484594b27537a8812605->enter($__internal_142775e711dc4b036d6b8688a7b4257a11bd55cd7ce8484594b27537a8812605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_142775e711dc4b036d6b8688a7b4257a11bd55cd7ce8484594b27537a8812605->leave($__internal_142775e711dc4b036d6b8688a7b4257a11bd55cd7ce8484594b27537a8812605_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
