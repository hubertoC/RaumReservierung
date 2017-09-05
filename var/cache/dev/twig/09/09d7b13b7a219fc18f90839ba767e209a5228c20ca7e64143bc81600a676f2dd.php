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
        $__internal_f2dc84bfe7835d2d39a1164ee7eefdee11c635556af15993c9f4b96aefc584d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2dc84bfe7835d2d39a1164ee7eefdee11c635556af15993c9f4b96aefc584d4->enter($__internal_f2dc84bfe7835d2d39a1164ee7eefdee11c635556af15993c9f4b96aefc584d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/edit.html.twig"));

        $__internal_4aedcbedb1f71cee10f0bc1609cc12d7372818b2932980efdae028f502804afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aedcbedb1f71cee10f0bc1609cc12d7372818b2932980efdae028f502804afd->enter($__internal_4aedcbedb1f71cee10f0bc1609cc12d7372818b2932980efdae028f502804afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2dc84bfe7835d2d39a1164ee7eefdee11c635556af15993c9f4b96aefc584d4->leave($__internal_f2dc84bfe7835d2d39a1164ee7eefdee11c635556af15993c9f4b96aefc584d4_prof);

        
        $__internal_4aedcbedb1f71cee10f0bc1609cc12d7372818b2932980efdae028f502804afd->leave($__internal_4aedcbedb1f71cee10f0bc1609cc12d7372818b2932980efdae028f502804afd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c85aa80e7dbc3c624b56c3c65d3a9690828e2e5486068113e3bdc114d78a517a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85aa80e7dbc3c624b56c3c65d3a9690828e2e5486068113e3bdc114d78a517a->enter($__internal_c85aa80e7dbc3c624b56c3c65d3a9690828e2e5486068113e3bdc114d78a517a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63e089eb47fa12644dbb577b57450dde4ba1ac76cb4e82d66b915b7d65cc325c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e089eb47fa12644dbb577b57450dde4ba1ac76cb4e82d66b915b7d65cc325c->enter($__internal_63e089eb47fa12644dbb577b57450dde4ba1ac76cb4e82d66b915b7d65cc325c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
";
        
        $__internal_63e089eb47fa12644dbb577b57450dde4ba1ac76cb4e82d66b915b7d65cc325c->leave($__internal_63e089eb47fa12644dbb577b57450dde4ba1ac76cb4e82d66b915b7d65cc325c_prof);

        
        $__internal_c85aa80e7dbc3c624b56c3c65d3a9690828e2e5486068113e3bdc114d78a517a->leave($__internal_c85aa80e7dbc3c624b56c3c65d3a9690828e2e5486068113e3bdc114d78a517a_prof);

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
{% endblock %}
", "raum/edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/edit.html.twig");
    }
}
