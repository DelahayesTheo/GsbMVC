<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6a206e719b2d0e1f268c4914cce8fcd5e3e4cdadcd556f3851b1b0242e5c1088 extends Twig_Template
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
        $__internal_ad601d46c5c05ba88d4b968dd52d43a73d697994b5b3cb175bff612d7d4958e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad601d46c5c05ba88d4b968dd52d43a73d697994b5b3cb175bff612d7d4958e2->enter($__internal_ad601d46c5c05ba88d4b968dd52d43a73d697994b5b3cb175bff612d7d4958e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ad601d46c5c05ba88d4b968dd52d43a73d697994b5b3cb175bff612d7d4958e2->leave($__internal_ad601d46c5c05ba88d4b968dd52d43a73d697994b5b3cb175bff612d7d4958e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
