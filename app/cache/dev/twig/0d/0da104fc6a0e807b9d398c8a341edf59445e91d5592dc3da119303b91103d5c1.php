<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ee25f7e20565fbc744d3eb0425dc2a5e5a2dec0d02ac3b2ed425325ee4b422a7 extends Twig_Template
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
        $__internal_f3757ab8062f24f52d0af0c105b2212bfa9a9d208a355d685cf038fd7ea9babf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3757ab8062f24f52d0af0c105b2212bfa9a9d208a355d685cf038fd7ea9babf->enter($__internal_f3757ab8062f24f52d0af0c105b2212bfa9a9d208a355d685cf038fd7ea9babf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f3757ab8062f24f52d0af0c105b2212bfa9a9d208a355d685cf038fd7ea9babf->leave($__internal_f3757ab8062f24f52d0af0c105b2212bfa9a9d208a355d685cf038fd7ea9babf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
