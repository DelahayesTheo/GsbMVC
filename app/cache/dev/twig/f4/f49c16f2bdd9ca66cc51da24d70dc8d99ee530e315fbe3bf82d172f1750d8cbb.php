<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_13615f11e3604026eb07f2bd3700b8103d538dc00722d29c0d868fe88b575e20 extends Twig_Template
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
        $__internal_aae1bb77d2a1f4a16a0e4bd8621967f40ecaed5bc4214261f247400516e2776d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae1bb77d2a1f4a16a0e4bd8621967f40ecaed5bc4214261f247400516e2776d->enter($__internal_aae1bb77d2a1f4a16a0e4bd8621967f40ecaed5bc4214261f247400516e2776d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_aae1bb77d2a1f4a16a0e4bd8621967f40ecaed5bc4214261f247400516e2776d->leave($__internal_aae1bb77d2a1f4a16a0e4bd8621967f40ecaed5bc4214261f247400516e2776d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\wamp64\\www\\apiFrais\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
