<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_a676e31fe987317156450fa853c64046b8bce3cdf847cefdf4cb0249dd0579e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4915b7d6c6593c5f023209a3acb2d3b30b44974e6e5e41ae7c91601a5208e02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4915b7d6c6593c5f023209a3acb2d3b30b44974e6e5e41ae7c91601a5208e02a->enter($__internal_4915b7d6c6593c5f023209a3acb2d3b30b44974e6e5e41ae7c91601a5208e02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4915b7d6c6593c5f023209a3acb2d3b30b44974e6e5e41ae7c91601a5208e02a->leave($__internal_4915b7d6c6593c5f023209a3acb2d3b30b44974e6e5e41ae7c91601a5208e02a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba485eca9b9d5528854719eedc2f99c3481082b5d8440dc6844b7c7e07d37c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba485eca9b9d5528854719eedc2f99c3481082b5d8440dc6844b7c7e07d37c47->enter($__internal_ba485eca9b9d5528854719eedc2f99c3481082b5d8440dc6844b7c7e07d37c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        echo "";
        
        $__internal_ba485eca9b9d5528854719eedc2f99c3481082b5d8440dc6844b7c7e07d37c47->leave($__internal_ba485eca9b9d5528854719eedc2f99c3481082b5d8440dc6844b7c7e07d37c47_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
