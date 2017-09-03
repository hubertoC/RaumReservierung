<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c33b950663953c7a88f65267bd06af3dff236c91b5d3966ec3c27aa3c748432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c33b950663953c7a88f65267bd06af3dff236c91b5d3966ec3c27aa3c748432->enter($__internal_0c33b950663953c7a88f65267bd06af3dff236c91b5d3966ec3c27aa3c748432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f9f04e373105da2a47328cdc7ed989c0cd43805775d40b30a8589a39e68cb041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f04e373105da2a47328cdc7ed989c0cd43805775d40b30a8589a39e68cb041->enter($__internal_f9f04e373105da2a47328cdc7ed989c0cd43805775d40b30a8589a39e68cb041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c33b950663953c7a88f65267bd06af3dff236c91b5d3966ec3c27aa3c748432->leave($__internal_0c33b950663953c7a88f65267bd06af3dff236c91b5d3966ec3c27aa3c748432_prof);

        
        $__internal_f9f04e373105da2a47328cdc7ed989c0cd43805775d40b30a8589a39e68cb041->leave($__internal_f9f04e373105da2a47328cdc7ed989c0cd43805775d40b30a8589a39e68cb041_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_99f66bb0d21dd4bfbbe409bf0eb3a7e205238369e89c23e8b93469e051849d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f66bb0d21dd4bfbbe409bf0eb3a7e205238369e89c23e8b93469e051849d28->enter($__internal_99f66bb0d21dd4bfbbe409bf0eb3a7e205238369e89c23e8b93469e051849d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_92cea0e09d4b45a28baada270f41e9aa4e8dd91bfaeb8ecf396e0c9b1f0b23e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92cea0e09d4b45a28baada270f41e9aa4e8dd91bfaeb8ecf396e0c9b1f0b23e5->enter($__internal_92cea0e09d4b45a28baada270f41e9aa4e8dd91bfaeb8ecf396e0c9b1f0b23e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_92cea0e09d4b45a28baada270f41e9aa4e8dd91bfaeb8ecf396e0c9b1f0b23e5->leave($__internal_92cea0e09d4b45a28baada270f41e9aa4e8dd91bfaeb8ecf396e0c9b1f0b23e5_prof);

        
        $__internal_99f66bb0d21dd4bfbbe409bf0eb3a7e205238369e89c23e8b93469e051849d28->leave($__internal_99f66bb0d21dd4bfbbe409bf0eb3a7e205238369e89c23e8b93469e051849d28_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_156874a620f12587c8f1f66113f0c2e3478a70cecb0083caa4c81d1e818f4471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156874a620f12587c8f1f66113f0c2e3478a70cecb0083caa4c81d1e818f4471->enter($__internal_156874a620f12587c8f1f66113f0c2e3478a70cecb0083caa4c81d1e818f4471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ab700a38a972d6927b5ab715126d26d880412fcb04b99ddbfd64b35218eabc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab700a38a972d6927b5ab715126d26d880412fcb04b99ddbfd64b35218eabc65->enter($__internal_ab700a38a972d6927b5ab715126d26d880412fcb04b99ddbfd64b35218eabc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab700a38a972d6927b5ab715126d26d880412fcb04b99ddbfd64b35218eabc65->leave($__internal_ab700a38a972d6927b5ab715126d26d880412fcb04b99ddbfd64b35218eabc65_prof);

        
        $__internal_156874a620f12587c8f1f66113f0c2e3478a70cecb0083caa4c81d1e818f4471->leave($__internal_156874a620f12587c8f1f66113f0c2e3478a70cecb0083caa4c81d1e818f4471_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_196f30212ab0686aa269aa6967c480239fc5363a47e38fc4f925ee1fa9332f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196f30212ab0686aa269aa6967c480239fc5363a47e38fc4f925ee1fa9332f81->enter($__internal_196f30212ab0686aa269aa6967c480239fc5363a47e38fc4f925ee1fa9332f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f21e2400be1be5fc6a61ff4600eba4434e25e0efea05ac66ee3b5e76ce042b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21e2400be1be5fc6a61ff4600eba4434e25e0efea05ac66ee3b5e76ce042b79->enter($__internal_f21e2400be1be5fc6a61ff4600eba4434e25e0efea05ac66ee3b5e76ce042b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f21e2400be1be5fc6a61ff4600eba4434e25e0efea05ac66ee3b5e76ce042b79->leave($__internal_f21e2400be1be5fc6a61ff4600eba4434e25e0efea05ac66ee3b5e76ce042b79_prof);

        
        $__internal_196f30212ab0686aa269aa6967c480239fc5363a47e38fc4f925ee1fa9332f81->leave($__internal_196f30212ab0686aa269aa6967c480239fc5363a47e38fc4f925ee1fa9332f81_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
