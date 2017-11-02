<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8e5c82b447fdff23566d6eec0a9b1097112907d973983c6cb81700fa55772fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bfcd4bbb951791a23787c4b061c387cfd5b1c0284a99ca1c0a1b81cc149bf67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bfcd4bbb951791a23787c4b061c387cfd5b1c0284a99ca1c0a1b81cc149bf67->enter($__internal_4bfcd4bbb951791a23787c4b061c387cfd5b1c0284a99ca1c0a1b81cc149bf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0196e9f65120a77a4de5e2159f2865d7c76734479584f10a21dbd4dbae369fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0196e9f65120a77a4de5e2159f2865d7c76734479584f10a21dbd4dbae369fd5->enter($__internal_0196e9f65120a77a4de5e2159f2865d7c76734479584f10a21dbd4dbae369fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bfcd4bbb951791a23787c4b061c387cfd5b1c0284a99ca1c0a1b81cc149bf67->leave($__internal_4bfcd4bbb951791a23787c4b061c387cfd5b1c0284a99ca1c0a1b81cc149bf67_prof);

        
        $__internal_0196e9f65120a77a4de5e2159f2865d7c76734479584f10a21dbd4dbae369fd5->leave($__internal_0196e9f65120a77a4de5e2159f2865d7c76734479584f10a21dbd4dbae369fd5_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f6f0e3716c93b08dc92846d643ef8a6c8ce0a3b2841f9d9575080b11ea70b6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f0e3716c93b08dc92846d643ef8a6c8ce0a3b2841f9d9575080b11ea70b6fb->enter($__internal_f6f0e3716c93b08dc92846d643ef8a6c8ce0a3b2841f9d9575080b11ea70b6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f6352b9f961a8d92b8a1fe96ef490cd8f4006147335e367ab29b7d3bd5c3d162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6352b9f961a8d92b8a1fe96ef490cd8f4006147335e367ab29b7d3bd5c3d162->enter($__internal_f6352b9f961a8d92b8a1fe96ef490cd8f4006147335e367ab29b7d3bd5c3d162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_f6352b9f961a8d92b8a1fe96ef490cd8f4006147335e367ab29b7d3bd5c3d162->leave($__internal_f6352b9f961a8d92b8a1fe96ef490cd8f4006147335e367ab29b7d3bd5c3d162_prof);

        
        $__internal_f6f0e3716c93b08dc92846d643ef8a6c8ce0a3b2841f9d9575080b11ea70b6fb->leave($__internal_f6f0e3716c93b08dc92846d643ef8a6c8ce0a3b2841f9d9575080b11ea70b6fb_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_354df3fe8bf43849fe9d35d96411a2e5ff77139bc26a2af56b9570a874250790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_354df3fe8bf43849fe9d35d96411a2e5ff77139bc26a2af56b9570a874250790->enter($__internal_354df3fe8bf43849fe9d35d96411a2e5ff77139bc26a2af56b9570a874250790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9f5121973c226c639d5be1e0e7fc85c400f31eb10396eda30d09d33595e05fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5121973c226c639d5be1e0e7fc85c400f31eb10396eda30d09d33595e05fd9->enter($__internal_9f5121973c226c639d5be1e0e7fc85c400f31eb10396eda30d09d33595e05fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9f5121973c226c639d5be1e0e7fc85c400f31eb10396eda30d09d33595e05fd9->leave($__internal_9f5121973c226c639d5be1e0e7fc85c400f31eb10396eda30d09d33595e05fd9_prof);

        
        $__internal_354df3fe8bf43849fe9d35d96411a2e5ff77139bc26a2af56b9570a874250790->leave($__internal_354df3fe8bf43849fe9d35d96411a2e5ff77139bc26a2af56b9570a874250790_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
