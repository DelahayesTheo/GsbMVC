<?php

/* @NelmioApiDoc/Components/version.html.twig */
class __TwigTemplate_c29fd70e260504be88a5fcafbc611f3fcb43803c26e95df049666029b211e3e8 extends Twig_Template
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
        $__internal_ddeb65742eb6a7923563caccdc8ab57263514be09a5c27a520fa0190a809d812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddeb65742eb6a7923563caccdc8ab57263514be09a5c27a520fa0190a809d812->enter($__internal_ddeb65742eb6a7923563caccdc8ab57263514be09a5c27a520fa0190a809d812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NelmioApiDoc/Components/version.html.twig"));

        // line 1
        if ((twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion"))) && twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion"))))) {
            // line 2
            echo "*
";
        } else {
            // line 4
            echo "    ";
            if ( !twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion")))) {
                echo "&gt;=";
                echo twig_escape_filter($this->env, (isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion")), "html", null, true);
            }
            // line 5
            echo "    ";
            if ( !twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion")))) {
                // line 6
                echo "        ";
                if ( !twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion")))) {
                    echo ",";
                }
                echo "&lt;=";
                echo twig_escape_filter($this->env, (isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion")), "html", null, true);
                echo "
    ";
            }
        }
        
        $__internal_ddeb65742eb6a7923563caccdc8ab57263514be09a5c27a520fa0190a809d812->leave($__internal_ddeb65742eb6a7923563caccdc8ab57263514be09a5c27a520fa0190a809d812_prof);

    }

    public function getTemplateName()
    {
        return "@NelmioApiDoc/Components/version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if sinceVersion is empty and untilVersion is empty %}
*
{% else %}
    {% if sinceVersion is not empty %}&gt;={{ sinceVersion }}{% endif %}
    {% if untilVersion is not empty %}
        {% if sinceVersion is not empty %},{% endif %}&lt;={{ untilVersion }}
    {% endif %}
{% endif %}
", "@NelmioApiDoc/Components/version.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\nelmio\\api-doc-bundle\\Nelmio\\ApiDocBundle\\Resources\\views\\Components\\version.html.twig");
    }
}
