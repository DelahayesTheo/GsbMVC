<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_dd2ce8aa8e7a7275f36dcf13d1e01518bd73535a8616bf29c2e7294939e9b232 extends Twig_Template
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
        $__internal_f1b3f1c81fe586f249d560a30521a3a7c7d3e6c80cb3fd713d82f4ddb44fd1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b3f1c81fe586f249d560a30521a3a7c7d3e6c80cb3fd713d82f4ddb44fd1d7->enter($__internal_f1b3f1c81fe586f249d560a30521a3a7c7d3e6c80cb3fd713d82f4ddb44fd1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f1b3f1c81fe586f249d560a30521a3a7c7d3e6c80cb3fd713d82f4ddb44fd1d7->leave($__internal_f1b3f1c81fe586f249d560a30521a3a7c7d3e6c80cb3fd713d82f4ddb44fd1d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
