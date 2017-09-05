<?php

/* raum/edit.html.twig */
class __TwigTemplate_c29e3c388caacd98026a075c50c092f03ee641d440e82fe371c5ee8d3ea12b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "raum/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_047b30c7a7ccd08131ffa05720142281a794c15d28e0b0ea315dc66e65f437f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_047b30c7a7ccd08131ffa05720142281a794c15d28e0b0ea315dc66e65f437f8->enter($__internal_047b30c7a7ccd08131ffa05720142281a794c15d28e0b0ea315dc66e65f437f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/edit.html.twig"));

        $__internal_528dfa29606ed543b0f6c875b22e37d50ca4f53b43fafffe8fd63e980730c480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528dfa29606ed543b0f6c875b22e37d50ca4f53b43fafffe8fd63e980730c480->enter($__internal_528dfa29606ed543b0f6c875b22e37d50ca4f53b43fafffe8fd63e980730c480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_047b30c7a7ccd08131ffa05720142281a794c15d28e0b0ea315dc66e65f437f8->leave($__internal_047b30c7a7ccd08131ffa05720142281a794c15d28e0b0ea315dc66e65f437f8_prof);

        
        $__internal_528dfa29606ed543b0f6c875b22e37d50ca4f53b43fafffe8fd63e980730c480->leave($__internal_528dfa29606ed543b0f6c875b22e37d50ca4f53b43fafffe8fd63e980730c480_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1755b3b37c59c06ccd5a9e61a7dd4fae07cfc8352405b42bddc98e8837b9021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1755b3b37c59c06ccd5a9e61a7dd4fae07cfc8352405b42bddc98e8837b9021->enter($__internal_a1755b3b37c59c06ccd5a9e61a7dd4fae07cfc8352405b42bddc98e8837b9021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d474a11ba285687d4ffc1b3650f01a5f05034e630791579da85da65d44b6d1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d474a11ba285687d4ffc1b3650f01a5f05034e630791579da85da65d44b6d1e1->enter($__internal_d474a11ba285687d4ffc1b3650f01a5f05034e630791579da85da65d44b6d1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Raum edit</h1>
    <div class= \"cration_artiste\">
          <div class=\"cration mdl-shadow--2dp\">
            <div class=\"form_creation\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nummer", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "gebaeude", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <div class=\"button_p_edit\">

        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\" />
    </div>
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
          <div class=\"retour\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_index");
        echo "\">Back to the list</a>
          </div>
</li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <div class=\"modifier\">

                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_d474a11ba285687d4ffc1b3650f01a5f05034e630791579da85da65d44b6d1e1->leave($__internal_d474a11ba285687d4ffc1b3650f01a5f05034e630791579da85da65d44b6d1e1_prof);

        
        $__internal_a1755b3b37c59c06ccd5a9e61a7dd4fae07cfc8352405b42bddc98e8837b9021->leave($__internal_a1755b3b37c59c06ccd5a9e61a7dd4fae07cfc8352405b42bddc98e8837b9021_prof);

    }

    public function getTemplateName()
    {
        return "raum/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  95 => 27,  88 => 23,  80 => 18,  72 => 13,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layoutAdmin.html.twig' %}

{% block body %}
    <h1>Raum edit</h1>
    <div class= \"cration_artiste\">
          <div class=\"cration mdl-shadow--2dp\">
            <div class=\"form_creation\">
    {{ form_start(edit_form) }}
    {{ form_row(edit_form.nummer, {'attr':{'class':'form-control'}})}}
    {{ form_row(edit_form.name, {'attr':{'class':'form-control'}})}}
    {{ form_row(edit_form.gebaeude, {'attr':{'class':'form-control'}})}}

        {{ form_widget(edit_form) }}
        <div class=\"button_p_edit\">

        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\" />
    </div>
    {{ form_end(edit_form) }}

    <ul>
        <li>
          <div class=\"retour\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminRaum_index') }}\">Back to the list</a>
          </div>
</li>
        <li>
            {{ form_start(delete_form) }}
            <div class=\"modifier\">

                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
{% endblock %}
", "raum/edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/edit.html.twig");
    }
}
