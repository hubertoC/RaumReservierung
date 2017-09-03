<?php

/* :raum:edit.html.twig */
class __TwigTemplate_c29e3c388caacd98026a075c50c092f03ee641d440e82fe371c5ee8d3ea12b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":raum:edit.html.twig", 1);
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
        $__internal_81bb45b2e0912a06621cb2df9eeaa7a57e0a922937d565e7da8cfa07593ae9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bb45b2e0912a06621cb2df9eeaa7a57e0a922937d565e7da8cfa07593ae9c4->enter($__internal_81bb45b2e0912a06621cb2df9eeaa7a57e0a922937d565e7da8cfa07593ae9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:edit.html.twig"));

        $__internal_c9db650b7ae3de46d91c3c5b095e4673d63d3db615e5de66a1001f40380c9ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9db650b7ae3de46d91c3c5b095e4673d63d3db615e5de66a1001f40380c9ff6->enter($__internal_c9db650b7ae3de46d91c3c5b095e4673d63d3db615e5de66a1001f40380c9ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81bb45b2e0912a06621cb2df9eeaa7a57e0a922937d565e7da8cfa07593ae9c4->leave($__internal_81bb45b2e0912a06621cb2df9eeaa7a57e0a922937d565e7da8cfa07593ae9c4_prof);

        
        $__internal_c9db650b7ae3de46d91c3c5b095e4673d63d3db615e5de66a1001f40380c9ff6->leave($__internal_c9db650b7ae3de46d91c3c5b095e4673d63d3db615e5de66a1001f40380c9ff6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc26019e80a1ecda07e77591d8d65a663a1064ef2d5367180ad5dad66be1d81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc26019e80a1ecda07e77591d8d65a663a1064ef2d5367180ad5dad66be1d81d->enter($__internal_bc26019e80a1ecda07e77591d8d65a663a1064ef2d5367180ad5dad66be1d81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ac1320e170875962818bb5f576cf80142e3bc566f4988b674208e3fd8b0f5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac1320e170875962818bb5f576cf80142e3bc566f4988b674208e3fd8b0f5f9->enter($__internal_3ac1320e170875962818bb5f576cf80142e3bc566f4988b674208e3fd8b0f5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Raum edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3ac1320e170875962818bb5f576cf80142e3bc566f4988b674208e3fd8b0f5f9->leave($__internal_3ac1320e170875962818bb5f576cf80142e3bc566f4988b674208e3fd8b0f5f9_prof);

        
        $__internal_bc26019e80a1ecda07e77591d8d65a663a1064ef2d5367180ad5dad66be1d81d->leave($__internal_bc26019e80a1ecda07e77591d8d65a663a1064ef2d5367180ad5dad66be1d81d_prof);

    }

    public function getTemplateName()
    {
        return ":raum:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Raum edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminRaum_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":raum:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/edit.html.twig");
    }
}
