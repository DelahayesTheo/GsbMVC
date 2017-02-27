<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1c4361077c09092e57a8abc597a9a5f101d3a281655660f6ef5225d4120d77a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7004fd4b46e95b2aabaa134727dfb9b436e4776cf44fa3cfb6ffeecdda2c0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7004fd4b46e95b2aabaa134727dfb9b436e4776cf44fa3cfb6ffeecdda2c0e2->enter($__internal_a7004fd4b46e95b2aabaa134727dfb9b436e4776cf44fa3cfb6ffeecdda2c0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a7004fd4b46e95b2aabaa134727dfb9b436e4776cf44fa3cfb6ffeecdda2c0e2->leave($__internal_a7004fd4b46e95b2aabaa134727dfb9b436e4776cf44fa3cfb6ffeecdda2c0e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
