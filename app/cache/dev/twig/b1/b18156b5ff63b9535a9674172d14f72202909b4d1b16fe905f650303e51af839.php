<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_4deda87585fed356ae78b4e7948d4e074741044938abecfa597447b3276847c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_73b42caf7c5f750593eab03fc88dbfefbe9879384b90dec6e6f577cba4b1e5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b42caf7c5f750593eab03fc88dbfefbe9879384b90dec6e6f577cba4b1e5bb->enter($__internal_73b42caf7c5f750593eab03fc88dbfefbe9879384b90dec6e6f577cba4b1e5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73b42caf7c5f750593eab03fc88dbfefbe9879384b90dec6e6f577cba4b1e5bb->leave($__internal_73b42caf7c5f750593eab03fc88dbfefbe9879384b90dec6e6f577cba4b1e5bb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9517460a6932fff631688229c4f00433bcebd7da5aa2cb19e5412c0aa4651d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9517460a6932fff631688229c4f00433bcebd7da5aa2cb19e5412c0aa4651d90->enter($__internal_9517460a6932fff631688229c4f00433bcebd7da5aa2cb19e5412c0aa4651d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9517460a6932fff631688229c4f00433bcebd7da5aa2cb19e5412c0aa4651d90->leave($__internal_9517460a6932fff631688229c4f00433bcebd7da5aa2cb19e5412c0aa4651d90_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
