<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_227cc12add88cbfc0705992823d5edcd5d95e162afd8ac473e005887a52b70ae extends Twig_Template
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
        $__internal_c9f294c0811b356446e7f1522ddb28676e7b90a2fb81738c9b8b6d352e162028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f294c0811b356446e7f1522ddb28676e7b90a2fb81738c9b8b6d352e162028->enter($__internal_c9f294c0811b356446e7f1522ddb28676e7b90a2fb81738c9b8b6d352e162028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c9f294c0811b356446e7f1522ddb28676e7b90a2fb81738c9b8b6d352e162028->leave($__internal_c9f294c0811b356446e7f1522ddb28676e7b90a2fb81738c9b8b6d352e162028_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
