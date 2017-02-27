<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d8426c40ce40e921fb416ec6d3677fe12e893cc846e3d31dbaa75f13ab95cffb extends Twig_Template
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
        $__internal_11f0dedb2eacd89c84c61393b43ea19a5a85e0c61976fffeb044315c2166ac17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f0dedb2eacd89c84c61393b43ea19a5a85e0c61976fffeb044315c2166ac17->enter($__internal_11f0dedb2eacd89c84c61393b43ea19a5a85e0c61976fffeb044315c2166ac17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_11f0dedb2eacd89c84c61393b43ea19a5a85e0c61976fffeb044315c2166ac17->leave($__internal_11f0dedb2eacd89c84c61393b43ea19a5a85e0c61976fffeb044315c2166ac17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
