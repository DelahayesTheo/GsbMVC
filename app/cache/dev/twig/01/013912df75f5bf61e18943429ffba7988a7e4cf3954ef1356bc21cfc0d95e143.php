<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d672097ced64640ad8b769544127a3f7a5585ca35f70dc6839411e73af0fd0a8 extends Twig_Template
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
        $__internal_9f40f1fa8ba1dfb9c662cec958415b90092a6912fe83b9ae1b654c18b4a4b945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f40f1fa8ba1dfb9c662cec958415b90092a6912fe83b9ae1b654c18b4a4b945->enter($__internal_9f40f1fa8ba1dfb9c662cec958415b90092a6912fe83b9ae1b654c18b4a4b945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9f40f1fa8ba1dfb9c662cec958415b90092a6912fe83b9ae1b654c18b4a4b945->leave($__internal_9f40f1fa8ba1dfb9c662cec958415b90092a6912fe83b9ae1b654c18b4a4b945_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
