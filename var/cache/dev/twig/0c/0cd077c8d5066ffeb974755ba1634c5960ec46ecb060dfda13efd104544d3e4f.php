<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_904f72b347b2e0b6567378e3d2660436a066a12f97bb8927c5077708092dc48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_983fc6c880fc32b21ab788e615e48319409ae0b41e4d3545726e1856f945e070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983fc6c880fc32b21ab788e615e48319409ae0b41e4d3545726e1856f945e070->enter($__internal_983fc6c880fc32b21ab788e615e48319409ae0b41e4d3545726e1856f945e070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e0e9b3430bb3feadd6f013d269ab555b5b7380b87fba3be43e8bf4df0e5b3fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e9b3430bb3feadd6f013d269ab555b5b7380b87fba3be43e8bf4df0e5b3fd7->enter($__internal_e0e9b3430bb3feadd6f013d269ab555b5b7380b87fba3be43e8bf4df0e5b3fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_983fc6c880fc32b21ab788e615e48319409ae0b41e4d3545726e1856f945e070->leave($__internal_983fc6c880fc32b21ab788e615e48319409ae0b41e4d3545726e1856f945e070_prof);

        
        $__internal_e0e9b3430bb3feadd6f013d269ab555b5b7380b87fba3be43e8bf4df0e5b3fd7->leave($__internal_e0e9b3430bb3feadd6f013d269ab555b5b7380b87fba3be43e8bf4df0e5b3fd7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb0c7e158b2c92cf73276046f869aee30d5e41ec62bce669ce83ae08d9c56645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0c7e158b2c92cf73276046f869aee30d5e41ec62bce669ce83ae08d9c56645->enter($__internal_cb0c7e158b2c92cf73276046f869aee30d5e41ec62bce669ce83ae08d9c56645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f17d17dbc3c970f665ea65dd4066b7085e3441c2f10c7c71ecf798576d87c2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17d17dbc3c970f665ea65dd4066b7085e3441c2f10c7c71ecf798576d87c2cb->enter($__internal_f17d17dbc3c970f665ea65dd4066b7085e3441c2f10c7c71ecf798576d87c2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f17d17dbc3c970f665ea65dd4066b7085e3441c2f10c7c71ecf798576d87c2cb->leave($__internal_f17d17dbc3c970f665ea65dd4066b7085e3441c2f10c7c71ecf798576d87c2cb_prof);

        
        $__internal_cb0c7e158b2c92cf73276046f869aee30d5e41ec62bce669ce83ae08d9c56645->leave($__internal_cb0c7e158b2c92cf73276046f869aee30d5e41ec62bce669ce83ae08d9c56645_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_87f34ffec5a661e496b58931d95b2f77357dda446800a0b271774836a1e424d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f34ffec5a661e496b58931d95b2f77357dda446800a0b271774836a1e424d3->enter($__internal_87f34ffec5a661e496b58931d95b2f77357dda446800a0b271774836a1e424d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_710828acf4b0dccee04fb5d7a486be6475b99528ea486e10cc751504091ef268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710828acf4b0dccee04fb5d7a486be6475b99528ea486e10cc751504091ef268->enter($__internal_710828acf4b0dccee04fb5d7a486be6475b99528ea486e10cc751504091ef268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_710828acf4b0dccee04fb5d7a486be6475b99528ea486e10cc751504091ef268->leave($__internal_710828acf4b0dccee04fb5d7a486be6475b99528ea486e10cc751504091ef268_prof);

        
        $__internal_87f34ffec5a661e496b58931d95b2f77357dda446800a0b271774836a1e424d3->leave($__internal_87f34ffec5a661e496b58931d95b2f77357dda446800a0b271774836a1e424d3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
