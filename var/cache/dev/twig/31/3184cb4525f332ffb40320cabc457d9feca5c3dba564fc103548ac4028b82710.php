<?php

/* :reservierung:edit.html.twig */
class __TwigTemplate_8c815588df2c7fe353ba4314b7b5789b9bb50f92256df5f2aeff182c482ccc22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":reservierung:edit.html.twig", 1);
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
        $__internal_63982753550e9b826ec8ccd6cf06d497e24d3b5ed2661fb16d6a0cab7f9ca74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63982753550e9b826ec8ccd6cf06d497e24d3b5ed2661fb16d6a0cab7f9ca74f->enter($__internal_63982753550e9b826ec8ccd6cf06d497e24d3b5ed2661fb16d6a0cab7f9ca74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:edit.html.twig"));

        $__internal_6469dfd0886aac170b0c53998398eee93fab1a402b31ead02eec61119c760684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6469dfd0886aac170b0c53998398eee93fab1a402b31ead02eec61119c760684->enter($__internal_6469dfd0886aac170b0c53998398eee93fab1a402b31ead02eec61119c760684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63982753550e9b826ec8ccd6cf06d497e24d3b5ed2661fb16d6a0cab7f9ca74f->leave($__internal_63982753550e9b826ec8ccd6cf06d497e24d3b5ed2661fb16d6a0cab7f9ca74f_prof);

        
        $__internal_6469dfd0886aac170b0c53998398eee93fab1a402b31ead02eec61119c760684->leave($__internal_6469dfd0886aac170b0c53998398eee93fab1a402b31ead02eec61119c760684_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9157922e5bc4de77e6aa94b57ed3e70dd781c1df80822d55e22b4ba7937d9469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9157922e5bc4de77e6aa94b57ed3e70dd781c1df80822d55e22b4ba7937d9469->enter($__internal_9157922e5bc4de77e6aa94b57ed3e70dd781c1df80822d55e22b4ba7937d9469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ec331642358bbf77cb6dd41627073feb21b0b45131c3d5f33992a67a52ba277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec331642358bbf77cb6dd41627073feb21b0b45131c3d5f33992a67a52ba277->enter($__internal_6ec331642358bbf77cb6dd41627073feb21b0b45131c3d5f33992a67a52ba277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservierung edit</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
        <div class=\"form_creation\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startDatum", array()), 'row', array("attr" => array("class" => "")));
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "endDatum", array()), 'row', array("attr" => array("class" => "")));
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dozent", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "student", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "raum", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    <div>
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
      <div class=\"button_p_edit\">
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\" />

    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "



    <ul>
        <li>

<div class=\"retour\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_index");
        echo "\">Back to the list</a>
    </div>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <div class=\"modifier\">
    <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
  </div>


            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
  </div>
</div>
</div>
</div>
</div>
";
        
        $__internal_6ec331642358bbf77cb6dd41627073feb21b0b45131c3d5f33992a67a52ba277->leave($__internal_6ec331642358bbf77cb6dd41627073feb21b0b45131c3d5f33992a67a52ba277_prof);

        
        $__internal_9157922e5bc4de77e6aa94b57ed3e70dd781c1df80822d55e22b4ba7937d9469->leave($__internal_9157922e5bc4de77e6aa94b57ed3e70dd781c1df80822d55e22b4ba7937d9469_prof);

    }

    public function getTemplateName()
    {
        return ":reservierung:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 37,  105 => 31,  98 => 27,  87 => 19,  80 => 15,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reservierung edit</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
        <div class=\"form_creation\">
    {{ form_start(edit_form) }}
    {{ form_row(edit_form.startDatum, {'attr':{'class':''}})}}
    {{ form_row(edit_form.endDatum, {'attr':{'class':''}})}}
    {{ form_row(edit_form.dozent, {'attr':{'class':'form-control'}})}}
    {{ form_row(edit_form.student, {'attr':{'class':'form-control'}})}}
    {{ form_row(edit_form.raum, {'attr':{'class':'form-control'}})}}
    <div>
        {{ form_widget(edit_form) }}
      <div class=\"button_p_edit\">
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\" />

    {{ form_end(edit_form) }}



    <ul>
        <li>

<div class=\"retour\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminReservierung_index') }}\">Back to the list</a>
    </div>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <div class=\"modifier\">
    <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
  </div>


            {{ form_end(delete_form) }}
        </li>
    </ul>
  </div>
</div>
</div>
</div>
</div>
{% endblock %}
", ":reservierung:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierung/edit.html.twig");
    }
}
