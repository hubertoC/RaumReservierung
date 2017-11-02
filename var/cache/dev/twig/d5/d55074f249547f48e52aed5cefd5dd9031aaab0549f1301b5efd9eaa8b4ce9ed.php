<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4c7b4289cb995b3ff6737044ed96bea61bb61f1d03ffc7d47b94b73dc8002b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b138d9f9a506f6e8726ac14114ca9e87ec6b17695e9a82bcd7c12568f62cbb11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b138d9f9a506f6e8726ac14114ca9e87ec6b17695e9a82bcd7c12568f62cbb11->enter($__internal_b138d9f9a506f6e8726ac14114ca9e87ec6b17695e9a82bcd7c12568f62cbb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cc1e924682ad8d70b8c072cc28d2940c4a288a73b1de00d9f7fae3b4b0629725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1e924682ad8d70b8c072cc28d2940c4a288a73b1de00d9f7fae3b4b0629725->enter($__internal_cc1e924682ad8d70b8c072cc28d2940c4a288a73b1de00d9f7fae3b4b0629725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b138d9f9a506f6e8726ac14114ca9e87ec6b17695e9a82bcd7c12568f62cbb11->leave($__internal_b138d9f9a506f6e8726ac14114ca9e87ec6b17695e9a82bcd7c12568f62cbb11_prof);

        
        $__internal_cc1e924682ad8d70b8c072cc28d2940c4a288a73b1de00d9f7fae3b4b0629725->leave($__internal_cc1e924682ad8d70b8c072cc28d2940c4a288a73b1de00d9f7fae3b4b0629725_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6b25a889fe27367767d8200435cea98c56affb9889de48cd445223d89bdb973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b25a889fe27367767d8200435cea98c56affb9889de48cd445223d89bdb973->enter($__internal_b6b25a889fe27367767d8200435cea98c56affb9889de48cd445223d89bdb973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b63c128385bea43cc0033a3ec3db876ee8f2aae819c78dd3808f97be76c505f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63c128385bea43cc0033a3ec3db876ee8f2aae819c78dd3808f97be76c505f1->enter($__internal_b63c128385bea43cc0033a3ec3db876ee8f2aae819c78dd3808f97be76c505f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b63c128385bea43cc0033a3ec3db876ee8f2aae819c78dd3808f97be76c505f1->leave($__internal_b63c128385bea43cc0033a3ec3db876ee8f2aae819c78dd3808f97be76c505f1_prof);

        
        $__internal_b6b25a889fe27367767d8200435cea98c56affb9889de48cd445223d89bdb973->leave($__internal_b6b25a889fe27367767d8200435cea98c56affb9889de48cd445223d89bdb973_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2595d1879e83cf89d852a705bb0ff8bb020b66fb8dbd663c49b3ec276202309f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2595d1879e83cf89d852a705bb0ff8bb020b66fb8dbd663c49b3ec276202309f->enter($__internal_2595d1879e83cf89d852a705bb0ff8bb020b66fb8dbd663c49b3ec276202309f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ac26266632bd99f0beb285838f807a7944545a603c2b39803e6b0e8187fd56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac26266632bd99f0beb285838f807a7944545a603c2b39803e6b0e8187fd56f->enter($__internal_7ac26266632bd99f0beb285838f807a7944545a603c2b39803e6b0e8187fd56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7ac26266632bd99f0beb285838f807a7944545a603c2b39803e6b0e8187fd56f->leave($__internal_7ac26266632bd99f0beb285838f807a7944545a603c2b39803e6b0e8187fd56f_prof);

        
        $__internal_2595d1879e83cf89d852a705bb0ff8bb020b66fb8dbd663c49b3ec276202309f->leave($__internal_2595d1879e83cf89d852a705bb0ff8bb020b66fb8dbd663c49b3ec276202309f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bffb28dc727cda0c7e6ccaaf047a2d6c60a5c952292cb28c4b2644e07275503e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bffb28dc727cda0c7e6ccaaf047a2d6c60a5c952292cb28c4b2644e07275503e->enter($__internal_bffb28dc727cda0c7e6ccaaf047a2d6c60a5c952292cb28c4b2644e07275503e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9517e3d481898e84320640ad7f5598d9caae2b1ccb688fbca920bcc400a29176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9517e3d481898e84320640ad7f5598d9caae2b1ccb688fbca920bcc400a29176->enter($__internal_9517e3d481898e84320640ad7f5598d9caae2b1ccb688fbca920bcc400a29176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9517e3d481898e84320640ad7f5598d9caae2b1ccb688fbca920bcc400a29176->leave($__internal_9517e3d481898e84320640ad7f5598d9caae2b1ccb688fbca920bcc400a29176_prof);

        
        $__internal_bffb28dc727cda0c7e6ccaaf047a2d6c60a5c952292cb28c4b2644e07275503e->leave($__internal_bffb28dc727cda0c7e6ccaaf047a2d6c60a5c952292cb28c4b2644e07275503e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
