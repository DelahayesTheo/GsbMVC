<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_21cc55f347f49c6308a08258ec5e02d009316bc680788dfd57a60805230d086e extends Twig_Template
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
        $__internal_ad7b5ff9bfe8b3d68360374e1aad6ddb0d5b22bb0098a68b67e64b604e6c7ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7b5ff9bfe8b3d68360374e1aad6ddb0d5b22bb0098a68b67e64b604e6c7ee0->enter($__internal_ad7b5ff9bfe8b3d68360374e1aad6ddb0d5b22bb0098a68b67e64b604e6c7ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ad7b5ff9bfe8b3d68360374e1aad6ddb0d5b22bb0098a68b67e64b604e6c7ee0->leave($__internal_ad7b5ff9bfe8b3d68360374e1aad6ddb0d5b22bb0098a68b67e64b604e6c7ee0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
