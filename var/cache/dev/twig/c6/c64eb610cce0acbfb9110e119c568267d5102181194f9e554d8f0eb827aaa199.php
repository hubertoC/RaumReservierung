<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_def24b86eef439c0b7d1501d3c742a9ead7ffaede47228e34080d20ed1416f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def24b86eef439c0b7d1501d3c742a9ead7ffaede47228e34080d20ed1416f3a->enter($__internal_def24b86eef439c0b7d1501d3c742a9ead7ffaede47228e34080d20ed1416f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_549f3f37e03a7daece9ffaa0369851b3072a9036535b4c2c281fdd8e4fc0eb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549f3f37e03a7daece9ffaa0369851b3072a9036535b4c2c281fdd8e4fc0eb34->enter($__internal_549f3f37e03a7daece9ffaa0369851b3072a9036535b4c2c281fdd8e4fc0eb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_def24b86eef439c0b7d1501d3c742a9ead7ffaede47228e34080d20ed1416f3a->leave($__internal_def24b86eef439c0b7d1501d3c742a9ead7ffaede47228e34080d20ed1416f3a_prof);

        
        $__internal_549f3f37e03a7daece9ffaa0369851b3072a9036535b4c2c281fdd8e4fc0eb34->leave($__internal_549f3f37e03a7daece9ffaa0369851b3072a9036535b4c2c281fdd8e4fc0eb34_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1762550696bced43f359ee94832d38da6c7a3f5529b3189e6fcf4f14fe64db1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1762550696bced43f359ee94832d38da6c7a3f5529b3189e6fcf4f14fe64db1e->enter($__internal_1762550696bced43f359ee94832d38da6c7a3f5529b3189e6fcf4f14fe64db1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1549a28b732e1f6010979e7710663be1ca784a56147996ec573395dc88e7257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1549a28b732e1f6010979e7710663be1ca784a56147996ec573395dc88e7257->enter($__internal_e1549a28b732e1f6010979e7710663be1ca784a56147996ec573395dc88e7257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e1549a28b732e1f6010979e7710663be1ca784a56147996ec573395dc88e7257->leave($__internal_e1549a28b732e1f6010979e7710663be1ca784a56147996ec573395dc88e7257_prof);

        
        $__internal_1762550696bced43f359ee94832d38da6c7a3f5529b3189e6fcf4f14fe64db1e->leave($__internal_1762550696bced43f359ee94832d38da6c7a3f5529b3189e6fcf4f14fe64db1e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7bb3774b32b26482f41e80e77ba72c5466fc6805aced6d9b94de3ffcb2fddde9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb3774b32b26482f41e80e77ba72c5466fc6805aced6d9b94de3ffcb2fddde9->enter($__internal_7bb3774b32b26482f41e80e77ba72c5466fc6805aced6d9b94de3ffcb2fddde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d6041a8e1ff6b8e6a040915ac492f6fcc5dffcbae10e05844cc3d78f1fa252af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6041a8e1ff6b8e6a040915ac492f6fcc5dffcbae10e05844cc3d78f1fa252af->enter($__internal_d6041a8e1ff6b8e6a040915ac492f6fcc5dffcbae10e05844cc3d78f1fa252af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d6041a8e1ff6b8e6a040915ac492f6fcc5dffcbae10e05844cc3d78f1fa252af->leave($__internal_d6041a8e1ff6b8e6a040915ac492f6fcc5dffcbae10e05844cc3d78f1fa252af_prof);

        
        $__internal_7bb3774b32b26482f41e80e77ba72c5466fc6805aced6d9b94de3ffcb2fddde9->leave($__internal_7bb3774b32b26482f41e80e77ba72c5466fc6805aced6d9b94de3ffcb2fddde9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26338cd208aa25bbe9a3da089ad953024c47f2aa62e0f328482c620f8d65af1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26338cd208aa25bbe9a3da089ad953024c47f2aa62e0f328482c620f8d65af1f->enter($__internal_26338cd208aa25bbe9a3da089ad953024c47f2aa62e0f328482c620f8d65af1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cdbd172a9e6534ac2deedd4227f0f8b7bc054ecd6bad4cf63f179e4170e53408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbd172a9e6534ac2deedd4227f0f8b7bc054ecd6bad4cf63f179e4170e53408->enter($__internal_cdbd172a9e6534ac2deedd4227f0f8b7bc054ecd6bad4cf63f179e4170e53408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cdbd172a9e6534ac2deedd4227f0f8b7bc054ecd6bad4cf63f179e4170e53408->leave($__internal_cdbd172a9e6534ac2deedd4227f0f8b7bc054ecd6bad4cf63f179e4170e53408_prof);

        
        $__internal_26338cd208aa25bbe9a3da089ad953024c47f2aa62e0f328482c620f8d65af1f->leave($__internal_26338cd208aa25bbe9a3da089ad953024c47f2aa62e0f328482c620f8d65af1f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
