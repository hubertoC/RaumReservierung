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
        $__internal_c58e0ea4d662298eebbba85ab94bcbb207a4a498280ae5cdd79cd41441c58091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58e0ea4d662298eebbba85ab94bcbb207a4a498280ae5cdd79cd41441c58091->enter($__internal_c58e0ea4d662298eebbba85ab94bcbb207a4a498280ae5cdd79cd41441c58091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_782391590b68369851aa07932fb07e365fd40e063a4030fe79cffc748f912501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782391590b68369851aa07932fb07e365fd40e063a4030fe79cffc748f912501->enter($__internal_782391590b68369851aa07932fb07e365fd40e063a4030fe79cffc748f912501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c58e0ea4d662298eebbba85ab94bcbb207a4a498280ae5cdd79cd41441c58091->leave($__internal_c58e0ea4d662298eebbba85ab94bcbb207a4a498280ae5cdd79cd41441c58091_prof);

        
        $__internal_782391590b68369851aa07932fb07e365fd40e063a4030fe79cffc748f912501->leave($__internal_782391590b68369851aa07932fb07e365fd40e063a4030fe79cffc748f912501_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f1bba34de58c96c7b0ceb3b630157f3c75db1994ade91ada162c13a9288b3552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1bba34de58c96c7b0ceb3b630157f3c75db1994ade91ada162c13a9288b3552->enter($__internal_f1bba34de58c96c7b0ceb3b630157f3c75db1994ade91ada162c13a9288b3552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b811a41d733159a9157d8b9bda7b7d111e58e7bfcab7be4b71254af6fc27accc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b811a41d733159a9157d8b9bda7b7d111e58e7bfcab7be4b71254af6fc27accc->enter($__internal_b811a41d733159a9157d8b9bda7b7d111e58e7bfcab7be4b71254af6fc27accc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b811a41d733159a9157d8b9bda7b7d111e58e7bfcab7be4b71254af6fc27accc->leave($__internal_b811a41d733159a9157d8b9bda7b7d111e58e7bfcab7be4b71254af6fc27accc_prof);

        
        $__internal_f1bba34de58c96c7b0ceb3b630157f3c75db1994ade91ada162c13a9288b3552->leave($__internal_f1bba34de58c96c7b0ceb3b630157f3c75db1994ade91ada162c13a9288b3552_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d11b64cb4627e0201508645421fc702b1a74978bee2d33fc1db83fb44fbc3c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11b64cb4627e0201508645421fc702b1a74978bee2d33fc1db83fb44fbc3c70->enter($__internal_d11b64cb4627e0201508645421fc702b1a74978bee2d33fc1db83fb44fbc3c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1597e4be90a5c7380f3d6a7385d9d769fc1878b70b3413d85d1da980b27bc1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1597e4be90a5c7380f3d6a7385d9d769fc1878b70b3413d85d1da980b27bc1a4->enter($__internal_1597e4be90a5c7380f3d6a7385d9d769fc1878b70b3413d85d1da980b27bc1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1597e4be90a5c7380f3d6a7385d9d769fc1878b70b3413d85d1da980b27bc1a4->leave($__internal_1597e4be90a5c7380f3d6a7385d9d769fc1878b70b3413d85d1da980b27bc1a4_prof);

        
        $__internal_d11b64cb4627e0201508645421fc702b1a74978bee2d33fc1db83fb44fbc3c70->leave($__internal_d11b64cb4627e0201508645421fc702b1a74978bee2d33fc1db83fb44fbc3c70_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6531dd3ea02df04af7cdecabe18dfd52e4483e95cdfb59978aacc6228d51f960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6531dd3ea02df04af7cdecabe18dfd52e4483e95cdfb59978aacc6228d51f960->enter($__internal_6531dd3ea02df04af7cdecabe18dfd52e4483e95cdfb59978aacc6228d51f960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d4992d2d256fe412b45ab5dedf6be4730b48076e55364477e8458c24a5fdb69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4992d2d256fe412b45ab5dedf6be4730b48076e55364477e8458c24a5fdb69->enter($__internal_9d4992d2d256fe412b45ab5dedf6be4730b48076e55364477e8458c24a5fdb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d4992d2d256fe412b45ab5dedf6be4730b48076e55364477e8458c24a5fdb69->leave($__internal_9d4992d2d256fe412b45ab5dedf6be4730b48076e55364477e8458c24a5fdb69_prof);

        
        $__internal_6531dd3ea02df04af7cdecabe18dfd52e4483e95cdfb59978aacc6228d51f960->leave($__internal_6531dd3ea02df04af7cdecabe18dfd52e4483e95cdfb59978aacc6228d51f960_prof);

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
