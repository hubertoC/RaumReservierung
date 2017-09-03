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
        $__internal_79d29ceda98e47577f8a98763f39e0e51dff65770b39d4303a7eb4f1ae3cf5b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d29ceda98e47577f8a98763f39e0e51dff65770b39d4303a7eb4f1ae3cf5b5->enter($__internal_79d29ceda98e47577f8a98763f39e0e51dff65770b39d4303a7eb4f1ae3cf5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_cc5cca116aee2e53e02dcc759f16636af83ce40c15e845670993cf50da817fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5cca116aee2e53e02dcc759f16636af83ce40c15e845670993cf50da817fa9->enter($__internal_cc5cca116aee2e53e02dcc759f16636af83ce40c15e845670993cf50da817fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79d29ceda98e47577f8a98763f39e0e51dff65770b39d4303a7eb4f1ae3cf5b5->leave($__internal_79d29ceda98e47577f8a98763f39e0e51dff65770b39d4303a7eb4f1ae3cf5b5_prof);

        
        $__internal_cc5cca116aee2e53e02dcc759f16636af83ce40c15e845670993cf50da817fa9->leave($__internal_cc5cca116aee2e53e02dcc759f16636af83ce40c15e845670993cf50da817fa9_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e44430491322727d32262c8b5b05eecccc6f6aba931b6f4fe3114943d865e219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44430491322727d32262c8b5b05eecccc6f6aba931b6f4fe3114943d865e219->enter($__internal_e44430491322727d32262c8b5b05eecccc6f6aba931b6f4fe3114943d865e219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c998d3a8c55b719f2d90aa68e5b203cf84812519adb4c50aef1dc7e29055c3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c998d3a8c55b719f2d90aa68e5b203cf84812519adb4c50aef1dc7e29055c3a8->enter($__internal_c998d3a8c55b719f2d90aa68e5b203cf84812519adb4c50aef1dc7e29055c3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c998d3a8c55b719f2d90aa68e5b203cf84812519adb4c50aef1dc7e29055c3a8->leave($__internal_c998d3a8c55b719f2d90aa68e5b203cf84812519adb4c50aef1dc7e29055c3a8_prof);

        
        $__internal_e44430491322727d32262c8b5b05eecccc6f6aba931b6f4fe3114943d865e219->leave($__internal_e44430491322727d32262c8b5b05eecccc6f6aba931b6f4fe3114943d865e219_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48d928832c1e686697f2b7a0348e5d76c117ada6e969e3de76fa846bf81c84ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d928832c1e686697f2b7a0348e5d76c117ada6e969e3de76fa846bf81c84ae->enter($__internal_48d928832c1e686697f2b7a0348e5d76c117ada6e969e3de76fa846bf81c84ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a03d9ea11193e77be8b4ae9c71074b4977f1b47528c81f13ec57620d7c704589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03d9ea11193e77be8b4ae9c71074b4977f1b47528c81f13ec57620d7c704589->enter($__internal_a03d9ea11193e77be8b4ae9c71074b4977f1b47528c81f13ec57620d7c704589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a03d9ea11193e77be8b4ae9c71074b4977f1b47528c81f13ec57620d7c704589->leave($__internal_a03d9ea11193e77be8b4ae9c71074b4977f1b47528c81f13ec57620d7c704589_prof);

        
        $__internal_48d928832c1e686697f2b7a0348e5d76c117ada6e969e3de76fa846bf81c84ae->leave($__internal_48d928832c1e686697f2b7a0348e5d76c117ada6e969e3de76fa846bf81c84ae_prof);

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
