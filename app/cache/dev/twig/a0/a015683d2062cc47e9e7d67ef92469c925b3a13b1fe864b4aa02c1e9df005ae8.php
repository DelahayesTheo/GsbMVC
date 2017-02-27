<?php

/* @NelmioApiDoc/Components/motd.html.twig */
class __TwigTemplate_448a396a57b6bafcc7d0c17c0727cfb3f3339cb26409e7f3480af386f7926acc extends Twig_Template
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
        $__internal_4d8beedc278a88ac69ad9294b589586f00763c7fa2570d52cb24ce8cab27d448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8beedc278a88ac69ad9294b589586f00763c7fa2570d52cb24ce8cab27d448->enter($__internal_4d8beedc278a88ac69ad9294b589586f00763c7fa2570d52cb24ce8cab27d448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NelmioApiDoc/Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_4d8beedc278a88ac69ad9294b589586f00763c7fa2570d52cb24ce8cab27d448->leave($__internal_4d8beedc278a88ac69ad9294b589586f00763c7fa2570d52cb24ce8cab27d448_prof);

    }

    public function getTemplateName()
    {
        return "@NelmioApiDoc/Components/motd.html.twig";
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
        return new Twig_Source("<div class=\"motd\"></div>
", "@NelmioApiDoc/Components/motd.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\nelmio\\api-doc-bundle\\Nelmio\\ApiDocBundle\\Resources\\views\\Components\\motd.html.twig");
    }
}
