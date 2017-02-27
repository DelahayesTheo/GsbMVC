<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_31b9ef40cca7a018687c23bb4a625aa28d3d2cdedc7f572d2a7a1959ff66ed0b extends Twig_Template
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
        $__internal_3f1bd7cf1ac6ce38b72c1a65e1e5fac15467dea362f929a759013ee5c007c777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1bd7cf1ac6ce38b72c1a65e1e5fac15467dea362f929a759013ee5c007c777->enter($__internal_3f1bd7cf1ac6ce38b72c1a65e1e5fac15467dea362f929a759013ee5c007c777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3f1bd7cf1ac6ce38b72c1a65e1e5fac15467dea362f929a759013ee5c007c777->leave($__internal_3f1bd7cf1ac6ce38b72c1a65e1e5fac15467dea362f929a759013ee5c007c777_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
