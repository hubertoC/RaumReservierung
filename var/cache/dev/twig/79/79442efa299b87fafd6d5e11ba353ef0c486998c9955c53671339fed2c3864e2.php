<?php

/* :raum:new.html.twig */
class __TwigTemplate_44be6311a754fef4e59b75056feb64902a1c2f87d889bbff550d5a898b42f973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":raum:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df299896e56e2b7c07709cd03698a3c4a98b22a3367a0f868da4731061adbb24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df299896e56e2b7c07709cd03698a3c4a98b22a3367a0f868da4731061adbb24->enter($__internal_df299896e56e2b7c07709cd03698a3c4a98b22a3367a0f868da4731061adbb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:new.html.twig"));

        $__internal_d0ecc4a0a9c34601fe46dda022e829cc18ce6d1ef549c92be42cd446ef9a8c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ecc4a0a9c34601fe46dda022e829cc18ce6d1ef549c92be42cd446ef9a8c30->enter($__internal_d0ecc4a0a9c34601fe46dda022e829cc18ce6d1ef549c92be42cd446ef9a8c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df299896e56e2b7c07709cd03698a3c4a98b22a3367a0f868da4731061adbb24->leave($__internal_df299896e56e2b7c07709cd03698a3c4a98b22a3367a0f868da4731061adbb24_prof);

        
        $__internal_d0ecc4a0a9c34601fe46dda022e829cc18ce6d1ef549c92be42cd446ef9a8c30->leave($__internal_d0ecc4a0a9c34601fe46dda022e829cc18ce6d1ef549c92be42cd446ef9a8c30_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cb907bd612d3735eb1c6e56e115175bf7af0190794626df0e468a20f3750a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb907bd612d3735eb1c6e56e115175bf7af0190794626df0e468a20f3750a22->enter($__internal_3cb907bd612d3735eb1c6e56e115175bf7af0190794626df0e468a20f3750a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a6abe5fb99ff6953b913395b7a8334c0796ada890b40cf7f0f145d376f3a5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6abe5fb99ff6953b913395b7a8334c0796ada890b40cf7f0f145d376f3a5ff->enter($__internal_3a6abe5fb99ff6953b913395b7a8334c0796ada890b40cf7f0f145d376f3a5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Raum creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3a6abe5fb99ff6953b913395b7a8334c0796ada890b40cf7f0f145d376f3a5ff->leave($__internal_3a6abe5fb99ff6953b913395b7a8334c0796ada890b40cf7f0f145d376f3a5ff_prof);

        
        $__internal_3cb907bd612d3735eb1c6e56e115175bf7af0190794626df0e468a20f3750a22->leave($__internal_3cb907bd612d3735eb1c6e56e115175bf7af0190794626df0e468a20f3750a22_prof);

    }

    public function getTemplateName()
    {
        return ":raum:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Raum creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminRaum_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":raum:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/new.html.twig");
    }
}
