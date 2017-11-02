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
        $__internal_cb22989fd4d338dd0bf77bba07d53d9926b0f97a2efd559f9ce5d15c1edad40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb22989fd4d338dd0bf77bba07d53d9926b0f97a2efd559f9ce5d15c1edad40e->enter($__internal_cb22989fd4d338dd0bf77bba07d53d9926b0f97a2efd559f9ce5d15c1edad40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_94e133f721870580ba2e6d04642e5e794793cc2f585f954ad4eef1447b3fedfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e133f721870580ba2e6d04642e5e794793cc2f585f954ad4eef1447b3fedfd->enter($__internal_94e133f721870580ba2e6d04642e5e794793cc2f585f954ad4eef1447b3fedfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb22989fd4d338dd0bf77bba07d53d9926b0f97a2efd559f9ce5d15c1edad40e->leave($__internal_cb22989fd4d338dd0bf77bba07d53d9926b0f97a2efd559f9ce5d15c1edad40e_prof);

        
        $__internal_94e133f721870580ba2e6d04642e5e794793cc2f585f954ad4eef1447b3fedfd->leave($__internal_94e133f721870580ba2e6d04642e5e794793cc2f585f954ad4eef1447b3fedfd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ad1c37b333106526f5739cbc1cefd7d3dc2348bb658919097b7dd7d74a44910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad1c37b333106526f5739cbc1cefd7d3dc2348bb658919097b7dd7d74a44910->enter($__internal_1ad1c37b333106526f5739cbc1cefd7d3dc2348bb658919097b7dd7d74a44910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_287d6243b0eb7c594eba36141c5b0749694b3e7ae14037ae91185fb0620b111d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287d6243b0eb7c594eba36141c5b0749694b3e7ae14037ae91185fb0620b111d->enter($__internal_287d6243b0eb7c594eba36141c5b0749694b3e7ae14037ae91185fb0620b111d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_287d6243b0eb7c594eba36141c5b0749694b3e7ae14037ae91185fb0620b111d->leave($__internal_287d6243b0eb7c594eba36141c5b0749694b3e7ae14037ae91185fb0620b111d_prof);

        
        $__internal_1ad1c37b333106526f5739cbc1cefd7d3dc2348bb658919097b7dd7d74a44910->leave($__internal_1ad1c37b333106526f5739cbc1cefd7d3dc2348bb658919097b7dd7d74a44910_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a90220d4930453bf6eeb0373ecb97b6e70233b24c630a7deb9ea4ab13ce4c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a90220d4930453bf6eeb0373ecb97b6e70233b24c630a7deb9ea4ab13ce4c8c->enter($__internal_6a90220d4930453bf6eeb0373ecb97b6e70233b24c630a7deb9ea4ab13ce4c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd1b8888d58fef0a164b3d679b3d5d51cc4e1e651988a7b85a8d5518560c6183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1b8888d58fef0a164b3d679b3d5d51cc4e1e651988a7b85a8d5518560c6183->enter($__internal_bd1b8888d58fef0a164b3d679b3d5d51cc4e1e651988a7b85a8d5518560c6183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd1b8888d58fef0a164b3d679b3d5d51cc4e1e651988a7b85a8d5518560c6183->leave($__internal_bd1b8888d58fef0a164b3d679b3d5d51cc4e1e651988a7b85a8d5518560c6183_prof);

        
        $__internal_6a90220d4930453bf6eeb0373ecb97b6e70233b24c630a7deb9ea4ab13ce4c8c->leave($__internal_6a90220d4930453bf6eeb0373ecb97b6e70233b24c630a7deb9ea4ab13ce4c8c_prof);

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
