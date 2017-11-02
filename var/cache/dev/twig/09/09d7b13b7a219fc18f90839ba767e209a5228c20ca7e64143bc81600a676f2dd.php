<?php

/* :raum:edit.html.twig */
class __TwigTemplate_c29e3c388caacd98026a075c50c092f03ee641d440e82fe371c5ee8d3ea12b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":raum:edit.html.twig", 1);
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
        $__internal_ee10273ba5f0cd8d39d30a4583def43b5ef201c99c4effc1ae80ae5e74d732c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee10273ba5f0cd8d39d30a4583def43b5ef201c99c4effc1ae80ae5e74d732c3->enter($__internal_ee10273ba5f0cd8d39d30a4583def43b5ef201c99c4effc1ae80ae5e74d732c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:edit.html.twig"));

        $__internal_25c9660f0a819878aebd7af56e5f2d5872dba675dced571996e04e3f355f2c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c9660f0a819878aebd7af56e5f2d5872dba675dced571996e04e3f355f2c42->enter($__internal_25c9660f0a819878aebd7af56e5f2d5872dba675dced571996e04e3f355f2c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee10273ba5f0cd8d39d30a4583def43b5ef201c99c4effc1ae80ae5e74d732c3->leave($__internal_ee10273ba5f0cd8d39d30a4583def43b5ef201c99c4effc1ae80ae5e74d732c3_prof);

        
        $__internal_25c9660f0a819878aebd7af56e5f2d5872dba675dced571996e04e3f355f2c42->leave($__internal_25c9660f0a819878aebd7af56e5f2d5872dba675dced571996e04e3f355f2c42_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea2b6fbad52815c05b4ba8c1c04d6cd7aedc0ffa9d38dc5ed0016b5dce5a2152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2b6fbad52815c05b4ba8c1c04d6cd7aedc0ffa9d38dc5ed0016b5dce5a2152->enter($__internal_ea2b6fbad52815c05b4ba8c1c04d6cd7aedc0ffa9d38dc5ed0016b5dce5a2152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b513e8e2ae4013abdbd7efb8c0c1d632089f9053c435cda6b494a71e46121e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b513e8e2ae4013abdbd7efb8c0c1d632089f9053c435cda6b494a71e46121e1->enter($__internal_5b513e8e2ae4013abdbd7efb8c0c1d632089f9053c435cda6b494a71e46121e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b513e8e2ae4013abdbd7efb8c0c1d632089f9053c435cda6b494a71e46121e1->leave($__internal_5b513e8e2ae4013abdbd7efb8c0c1d632089f9053c435cda6b494a71e46121e1_prof);

        
        $__internal_ea2b6fbad52815c05b4ba8c1c04d6cd7aedc0ffa9d38dc5ed0016b5dce5a2152->leave($__internal_ea2b6fbad52815c05b4ba8c1c04d6cd7aedc0ffa9d38dc5ed0016b5dce5a2152_prof);

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
", ":raum:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/edit.html.twig");
    }
}
