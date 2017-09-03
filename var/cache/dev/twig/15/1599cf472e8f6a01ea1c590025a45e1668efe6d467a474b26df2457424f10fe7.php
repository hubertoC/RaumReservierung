<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7db6f492e97e61dbf64944fbcecd37bdda859fc6789e5bb4c8a68e9edb70f1d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_8f5fa263ca874a8aa63cab78ed3d879658780294ce1a02b33a419837a380cbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5fa263ca874a8aa63cab78ed3d879658780294ce1a02b33a419837a380cbcc->enter($__internal_8f5fa263ca874a8aa63cab78ed3d879658780294ce1a02b33a419837a380cbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d79788c1c497d88ad023bd1ef002c9decc8d87ef42b12af59b3c2acd4f9f2bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79788c1c497d88ad023bd1ef002c9decc8d87ef42b12af59b3c2acd4f9f2bd1->enter($__internal_d79788c1c497d88ad023bd1ef002c9decc8d87ef42b12af59b3c2acd4f9f2bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f5fa263ca874a8aa63cab78ed3d879658780294ce1a02b33a419837a380cbcc->leave($__internal_8f5fa263ca874a8aa63cab78ed3d879658780294ce1a02b33a419837a380cbcc_prof);

        
        $__internal_d79788c1c497d88ad023bd1ef002c9decc8d87ef42b12af59b3c2acd4f9f2bd1->leave($__internal_d79788c1c497d88ad023bd1ef002c9decc8d87ef42b12af59b3c2acd4f9f2bd1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6023903483064d26b7662184b66ca78fddc0f88fa53f8fa5bb228f5a71383d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6023903483064d26b7662184b66ca78fddc0f88fa53f8fa5bb228f5a71383d5->enter($__internal_d6023903483064d26b7662184b66ca78fddc0f88fa53f8fa5bb228f5a71383d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3931d1053569b7acdd344b7e06a25b2f9b8f5d1eeef2beedcc2fcb1c3ace7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3931d1053569b7acdd344b7e06a25b2f9b8f5d1eeef2beedcc2fcb1c3ace7ae->enter($__internal_d3931d1053569b7acdd344b7e06a25b2f9b8f5d1eeef2beedcc2fcb1c3ace7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d3931d1053569b7acdd344b7e06a25b2f9b8f5d1eeef2beedcc2fcb1c3ace7ae->leave($__internal_d3931d1053569b7acdd344b7e06a25b2f9b8f5d1eeef2beedcc2fcb1c3ace7ae_prof);

        
        $__internal_d6023903483064d26b7662184b66ca78fddc0f88fa53f8fa5bb228f5a71383d5->leave($__internal_d6023903483064d26b7662184b66ca78fddc0f88fa53f8fa5bb228f5a71383d5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bfc850b08fdb5caa7157dfe14e9df93aef13d40a6770468256d44884f4a9871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bfc850b08fdb5caa7157dfe14e9df93aef13d40a6770468256d44884f4a9871->enter($__internal_5bfc850b08fdb5caa7157dfe14e9df93aef13d40a6770468256d44884f4a9871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d45fad6915f4e2baaa4fa19dcf06ac645ebf2490ff76b8ec4f9cf6ad9f1b1745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45fad6915f4e2baaa4fa19dcf06ac645ebf2490ff76b8ec4f9cf6ad9f1b1745->enter($__internal_d45fad6915f4e2baaa4fa19dcf06ac645ebf2490ff76b8ec4f9cf6ad9f1b1745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d45fad6915f4e2baaa4fa19dcf06ac645ebf2490ff76b8ec4f9cf6ad9f1b1745->leave($__internal_d45fad6915f4e2baaa4fa19dcf06ac645ebf2490ff76b8ec4f9cf6ad9f1b1745_prof);

        
        $__internal_5bfc850b08fdb5caa7157dfe14e9df93aef13d40a6770468256d44884f4a9871->leave($__internal_5bfc850b08fdb5caa7157dfe14e9df93aef13d40a6770468256d44884f4a9871_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
