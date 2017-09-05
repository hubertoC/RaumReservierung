<?php

/* :reservierung:show.html.twig */
class __TwigTemplate_be2fd2a3c6af0710f87873c0a2536ffa0f3f37669e9a7d7fa603d9432d2ae132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":reservierung:show.html.twig", 1);
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
        $__internal_7caf54bba8dc7b3878b8bed450ebfd9cec0e3759bab3d96cbdadedab2a065a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7caf54bba8dc7b3878b8bed450ebfd9cec0e3759bab3d96cbdadedab2a065a28->enter($__internal_7caf54bba8dc7b3878b8bed450ebfd9cec0e3759bab3d96cbdadedab2a065a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:show.html.twig"));

        $__internal_bb3bd7d77ee837547608a497550aa3895ac2b924161271b9b5748c3c6d43852d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3bd7d77ee837547608a497550aa3895ac2b924161271b9b5748c3c6d43852d->enter($__internal_bb3bd7d77ee837547608a497550aa3895ac2b924161271b9b5748c3c6d43852d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7caf54bba8dc7b3878b8bed450ebfd9cec0e3759bab3d96cbdadedab2a065a28->leave($__internal_7caf54bba8dc7b3878b8bed450ebfd9cec0e3759bab3d96cbdadedab2a065a28_prof);

        
        $__internal_bb3bd7d77ee837547608a497550aa3895ac2b924161271b9b5748c3c6d43852d->leave($__internal_bb3bd7d77ee837547608a497550aa3895ac2b924161271b9b5748c3c6d43852d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a8b702f48a53a4fd3aee2ec6fcde29fdfc94eee361ff1416bc05738846ecd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8b702f48a53a4fd3aee2ec6fcde29fdfc94eee361ff1416bc05738846ecd1f->enter($__internal_3a8b702f48a53a4fd3aee2ec6fcde29fdfc94eee361ff1416bc05738846ecd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45172abfd9dd9376acc6126c493b33d60843557e820ffe6879ea5fa45e0646da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45172abfd9dd9376acc6126c493b33d60843557e820ffe6879ea5fa45e0646da->enter($__internal_45172abfd9dd9376acc6126c493b33d60843557e820ffe6879ea5fa45e0646da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservierung</h1>
    <div class=\"conte_show\">
    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservierung"]) ? $context["reservierung"] : $this->getContext($context, "reservierung")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Startdatum</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["reservierung"]) ? $context["reservierung"] : $this->getContext($context, "reservierung")), "startDatum", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservierung"]) ? $context["reservierung"] : $this->getContext($context, "reservierung")), "startDatum", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Enddatum</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["reservierung"]) ? $context["reservierung"] : $this->getContext($context, "reservierung")), "endDatum", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservierung"]) ? $context["reservierung"] : $this->getContext($context, "reservierung")), "endDatum", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

        <li>
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "

              <div class=\"show_suprimer\">

                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
              </div>

            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    <ul>
      <li>
        <div class=\"show_modifier\">

          <a class=\"mdl-button mdl-js-button mdl-button--raised \" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_edit", array("id" => $this->getAttribute((isset($context["reservierung"]) ? $context["reservierung"] : $this->getContext($context, "reservierung")), "id", array()))), "html", null, true);
        echo "\">Edit<i class=\"glyphicon glyphicon-pencil\"></i></a>
      </li>
    </div>
  </ul>
  <ul>
    <div class=\"show_retour\">

        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_index");
        echo "\">Back to the list</a>
        </li>


    </ul>
  </div>

";
        
        $__internal_45172abfd9dd9376acc6126c493b33d60843557e820ffe6879ea5fa45e0646da->leave($__internal_45172abfd9dd9376acc6126c493b33d60843557e820ffe6879ea5fa45e0646da_prof);

        
        $__internal_3a8b702f48a53a4fd3aee2ec6fcde29fdfc94eee361ff1416bc05738846ecd1f->leave($__internal_3a8b702f48a53a4fd3aee2ec6fcde29fdfc94eee361ff1416bc05738846ecd1f_prof);

    }

    public function getTemplateName()
    {
        return ":reservierung:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 45,  103 => 37,  94 => 31,  84 => 24,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reservierung</h1>
    <div class=\"conte_show\">
    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reservierung.id }}</td>
            </tr>
            <tr>
                <th>Startdatum</th>
                <td>{% if reservierung.startDatum %}{{ reservierung.startDatum|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Enddatum</th>
                <td>{% if reservierung.endDatum %}{{ reservierung.endDatum|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

        <li>
            {{ form_start(delete_form) }}

              <div class=\"show_suprimer\">

                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
              </div>

            {{ form_end(delete_form) }}
        </li>
    <ul>
      <li>
        <div class=\"show_modifier\">

          <a class=\"mdl-button mdl-js-button mdl-button--raised \" href=\"{{ path('adminReservierung_edit', { 'id': reservierung.id }) }}\">Edit<i class=\"glyphicon glyphicon-pencil\"></i></a>
      </li>
    </div>
  </ul>
  <ul>
    <div class=\"show_retour\">

        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminReservierung_index') }}\">Back to the list</a>
        </li>


    </ul>
  </div>

{% endblock %}
", ":reservierung:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierung/show.html.twig");
    }
}
