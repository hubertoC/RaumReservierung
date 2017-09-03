<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_01f51919ce56e22c3d95ec38d6d0b067f66d7a28a249c0157031c603493cf748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a05247488db7365304717699577d063afe02f36edcba7522be467ec6c4d209e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a05247488db7365304717699577d063afe02f36edcba7522be467ec6c4d209e->enter($__internal_8a05247488db7365304717699577d063afe02f36edcba7522be467ec6c4d209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f3342bffb980807799c151889f4f81c0284d299e01b36dac9eaf821f37c8bb0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3342bffb980807799c151889f4f81c0284d299e01b36dac9eaf821f37c8bb0c->enter($__internal_f3342bffb980807799c151889f4f81c0284d299e01b36dac9eaf821f37c8bb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a05247488db7365304717699577d063afe02f36edcba7522be467ec6c4d209e->leave($__internal_8a05247488db7365304717699577d063afe02f36edcba7522be467ec6c4d209e_prof);

        
        $__internal_f3342bffb980807799c151889f4f81c0284d299e01b36dac9eaf821f37c8bb0c->leave($__internal_f3342bffb980807799c151889f4f81c0284d299e01b36dac9eaf821f37c8bb0c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb21bc2130b870dd3c65da2b31d99ee9c8b48cc2b0cdf19fe03d066ec32714ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb21bc2130b870dd3c65da2b31d99ee9c8b48cc2b0cdf19fe03d066ec32714ad->enter($__internal_bb21bc2130b870dd3c65da2b31d99ee9c8b48cc2b0cdf19fe03d066ec32714ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4473da7925c7dc3aa411f2a3c174dbb9e951d9a17186cb3d2a92a8de80f80a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4473da7925c7dc3aa411f2a3c174dbb9e951d9a17186cb3d2a92a8de80f80a1a->enter($__internal_4473da7925c7dc3aa411f2a3c174dbb9e951d9a17186cb3d2a92a8de80f80a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4473da7925c7dc3aa411f2a3c174dbb9e951d9a17186cb3d2a92a8de80f80a1a->leave($__internal_4473da7925c7dc3aa411f2a3c174dbb9e951d9a17186cb3d2a92a8de80f80a1a_prof);

        
        $__internal_bb21bc2130b870dd3c65da2b31d99ee9c8b48cc2b0cdf19fe03d066ec32714ad->leave($__internal_bb21bc2130b870dd3c65da2b31d99ee9c8b48cc2b0cdf19fe03d066ec32714ad_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
