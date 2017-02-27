<?php

/* base.html.twig */
class __TwigTemplate_c0d5e5957cb789ac92eeae8ce3161a69b34706f6d8fed7f775548ada70a855f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fd9ebb9fb0c2761b8900f1d979b91102a544c73dbfbdd9696703e97727bd494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd9ebb9fb0c2761b8900f1d979b91102a544c73dbfbdd9696703e97727bd494->enter($__internal_8fd9ebb9fb0c2761b8900f1d979b91102a544c73dbfbdd9696703e97727bd494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8fd9ebb9fb0c2761b8900f1d979b91102a544c73dbfbdd9696703e97727bd494->leave($__internal_8fd9ebb9fb0c2761b8900f1d979b91102a544c73dbfbdd9696703e97727bd494_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6cf3c9469c41a50c7573d28a4dace6abb1327b482d76544adbc7937707bfc94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cf3c9469c41a50c7573d28a4dace6abb1327b482d76544adbc7937707bfc94->enter($__internal_e6cf3c9469c41a50c7573d28a4dace6abb1327b482d76544adbc7937707bfc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_e6cf3c9469c41a50c7573d28a4dace6abb1327b482d76544adbc7937707bfc94->leave($__internal_e6cf3c9469c41a50c7573d28a4dace6abb1327b482d76544adbc7937707bfc94_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8b5c37471e10d0c7317bc0de1951b1baaf21245ecf5ed2d41f473c2989f243fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5c37471e10d0c7317bc0de1951b1baaf21245ecf5ed2d41f473c2989f243fa->enter($__internal_8b5c37471e10d0c7317bc0de1951b1baaf21245ecf5ed2d41f473c2989f243fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_8b5c37471e10d0c7317bc0de1951b1baaf21245ecf5ed2d41f473c2989f243fa->leave($__internal_8b5c37471e10d0c7317bc0de1951b1baaf21245ecf5ed2d41f473c2989f243fa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_941880e4d2ad7d441c69b801fff27353e9abed9c821a995685a966c591251c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941880e4d2ad7d441c69b801fff27353e9abed9c821a995685a966c591251c3a->enter($__internal_941880e4d2ad7d441c69b801fff27353e9abed9c821a995685a966c591251c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_941880e4d2ad7d441c69b801fff27353e9abed9c821a995685a966c591251c3a->leave($__internal_941880e4d2ad7d441c69b801fff27353e9abed9c821a995685a966c591251c3a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c92e594ac907eba8b4ef054969633c44e9bd20eea7cf074b801a7bb036b27b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92e594ac907eba8b4ef054969633c44e9bd20eea7cf074b801a7bb036b27b19->enter($__internal_c92e594ac907eba8b4ef054969633c44e9bd20eea7cf074b801a7bb036b27b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_c92e594ac907eba8b4ef054969633c44e9bd20eea7cf074b801a7bb036b27b19->leave($__internal_c92e594ac907eba8b4ef054969633c44e9bd20eea7cf074b801a7bb036b27b19_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\wamp64\\www\\apiFrais\\app\\Resources\\views\\base.html.twig");
    }
}
