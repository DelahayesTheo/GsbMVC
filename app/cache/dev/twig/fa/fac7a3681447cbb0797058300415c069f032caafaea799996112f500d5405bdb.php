<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_1b33e15b3f3a716f0739babae4181cc2a284ffebbf2d5c26fe27756f03fa1945 extends Twig_Template
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
        $__internal_2bec222f678d7cdd2fbf47dcc8b5494e4d3fdba09132289ffaeac883ecfc3481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bec222f678d7cdd2fbf47dcc8b5494e4d3fdba09132289ffaeac883ecfc3481->enter($__internal_2bec222f678d7cdd2fbf47dcc8b5494e4d3fdba09132289ffaeac883ecfc3481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2bec222f678d7cdd2fbf47dcc8b5494e4d3fdba09132289ffaeac883ecfc3481->leave($__internal_2bec222f678d7cdd2fbf47dcc8b5494e4d3fdba09132289ffaeac883ecfc3481_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
