<?php

/* :student:edit.html.twig */
class __TwigTemplate_175571699487c5402367c76a7924b331ef70cad82aca9ae32a77ba2918856c5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":student:edit.html.twig", 1);
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
        $__internal_00ce7f3a0e3f68f18d56b9e4277355a52524a16aacd753f361a1b0b27d83fba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ce7f3a0e3f68f18d56b9e4277355a52524a16aacd753f361a1b0b27d83fba1->enter($__internal_00ce7f3a0e3f68f18d56b9e4277355a52524a16aacd753f361a1b0b27d83fba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:edit.html.twig"));

        $__internal_6660f0ab019fbb1a6e56605dbfc50526de9cd58f7a8fac558ddf75b73fb6d717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6660f0ab019fbb1a6e56605dbfc50526de9cd58f7a8fac558ddf75b73fb6d717->enter($__internal_6660f0ab019fbb1a6e56605dbfc50526de9cd58f7a8fac558ddf75b73fb6d717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00ce7f3a0e3f68f18d56b9e4277355a52524a16aacd753f361a1b0b27d83fba1->leave($__internal_00ce7f3a0e3f68f18d56b9e4277355a52524a16aacd753f361a1b0b27d83fba1_prof);

        
        $__internal_6660f0ab019fbb1a6e56605dbfc50526de9cd58f7a8fac558ddf75b73fb6d717->leave($__internal_6660f0ab019fbb1a6e56605dbfc50526de9cd58f7a8fac558ddf75b73fb6d717_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bd6291b376370ea822d8c4d02911fd6b62b650384104bde9ab7397bd55da1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd6291b376370ea822d8c4d02911fd6b62b650384104bde9ab7397bd55da1ff->enter($__internal_7bd6291b376370ea822d8c4d02911fd6b62b650384104bde9ab7397bd55da1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89ee07ebbc57f9c73486a9a7b1b6812ece079683b58fdc378cd42192c29e1ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ee07ebbc57f9c73486a9a7b1b6812ece079683b58fdc378cd42192c29e1ad4->enter($__internal_89ee07ebbc57f9c73486a9a7b1b6812ece079683b58fdc378cd42192c29e1ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_index");
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
        
        $__internal_89ee07ebbc57f9c73486a9a7b1b6812ece079683b58fdc378cd42192c29e1ad4->leave($__internal_89ee07ebbc57f9c73486a9a7b1b6812ece079683b58fdc378cd42192c29e1ad4_prof);

        
        $__internal_7bd6291b376370ea822d8c4d02911fd6b62b650384104bde9ab7397bd55da1ff->leave($__internal_7bd6291b376370ea822d8c4d02911fd6b62b650384104bde9ab7397bd55da1ff_prof);

    }

    public function getTemplateName()
    {
        return ":student:edit.html.twig";
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
    <h1>Student edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminStudent_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":student:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/student/edit.html.twig");
    }
}
