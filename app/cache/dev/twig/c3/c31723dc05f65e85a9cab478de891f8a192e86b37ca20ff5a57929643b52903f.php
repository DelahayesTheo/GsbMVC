<?php

/* NelmioApiDocBundle:Components:motd.html.twig */
class __TwigTemplate_87325eeab46e3875ed008ba88823f24f804dcdaf03d49ffc8fc3f1b93842ab7c extends Twig_Template
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
        $__internal_95ad1133046e9b1541281afe0cfc8edc2f42f3d60ecfa48de1f58d85f4384be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ad1133046e9b1541281afe0cfc8edc2f42f3d60ecfa48de1f58d85f4384be2->enter($__internal_95ad1133046e9b1541281afe0cfc8edc2f42f3d60ecfa48de1f58d85f4384be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_95ad1133046e9b1541281afe0cfc8edc2f42f3d60ecfa48de1f58d85f4384be2->leave($__internal_95ad1133046e9b1541281afe0cfc8edc2f42f3d60ecfa48de1f58d85f4384be2_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:motd.html.twig";
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
", "NelmioApiDocBundle:Components:motd.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\nelmio\\api-doc-bundle\\Nelmio\\ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
