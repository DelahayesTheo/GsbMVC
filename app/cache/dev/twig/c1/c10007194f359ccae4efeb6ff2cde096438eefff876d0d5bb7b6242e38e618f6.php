<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_cf42a2dd360dfcce2db69e77f19be788fb76733b81cdd4949365e73792f2e7a3 extends Twig_Template
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
        $__internal_d510317d1b009f0c8a5341af6b1fb10062135e8ea78368d86bd57ec5dc01485b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d510317d1b009f0c8a5341af6b1fb10062135e8ea78368d86bd57ec5dc01485b->enter($__internal_d510317d1b009f0c8a5341af6b1fb10062135e8ea78368d86bd57ec5dc01485b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d510317d1b009f0c8a5341af6b1fb10062135e8ea78368d86bd57ec5dc01485b->leave($__internal_d510317d1b009f0c8a5341af6b1fb10062135e8ea78368d86bd57ec5dc01485b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
