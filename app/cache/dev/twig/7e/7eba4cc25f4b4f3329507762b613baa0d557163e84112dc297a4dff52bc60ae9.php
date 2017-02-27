<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_89d7aeb2b17f818ca95e636a4f79e9954a4a9b0ec2ef3f6e82f667100d96205e extends Twig_Template
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
        $__internal_27f8aa00157e2efdc23efab7f689701f01ceae6b5089aedcd5fb7f42f5a1f198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f8aa00157e2efdc23efab7f689701f01ceae6b5089aedcd5fb7f42f5a1f198->enter($__internal_27f8aa00157e2efdc23efab7f689701f01ceae6b5089aedcd5fb7f42f5a1f198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_27f8aa00157e2efdc23efab7f689701f01ceae6b5089aedcd5fb7f42f5a1f198->leave($__internal_27f8aa00157e2efdc23efab7f689701f01ceae6b5089aedcd5fb7f42f5a1f198_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
