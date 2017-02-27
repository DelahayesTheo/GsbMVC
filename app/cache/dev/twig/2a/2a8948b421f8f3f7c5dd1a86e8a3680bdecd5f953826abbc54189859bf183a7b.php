<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_290d312a060e591d7cfbb4ac14cbed8eea835871e93154ae7077becc6553a10b extends Twig_Template
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
        $__internal_3952f8e8f61572279c46340a6a0b3c098d507e2585a0b3a43c702610c9d25c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3952f8e8f61572279c46340a6a0b3c098d507e2585a0b3a43c702610c9d25c21->enter($__internal_3952f8e8f61572279c46340a6a0b3c098d507e2585a0b3a43c702610c9d25c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_3952f8e8f61572279c46340a6a0b3c098d507e2585a0b3a43c702610c9d25c21->leave($__internal_3952f8e8f61572279c46340a6a0b3c098d507e2585a0b3a43c702610c9d25c21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
