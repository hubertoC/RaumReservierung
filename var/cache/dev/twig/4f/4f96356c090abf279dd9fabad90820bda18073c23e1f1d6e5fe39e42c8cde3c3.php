<?php

/* student/show.html.twig */
class __TwigTemplate_3c868106db98e295644defd3c30d716bb4b69c1952172f8eed00c984003678ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "student/show.html.twig", 1);
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
        $__internal_bdfdf69577d3ec9b73c990c274c62bfed8476e44dfa290f46d28bc5b1c7651e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdfdf69577d3ec9b73c990c274c62bfed8476e44dfa290f46d28bc5b1c7651e9->enter($__internal_bdfdf69577d3ec9b73c990c274c62bfed8476e44dfa290f46d28bc5b1c7651e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/show.html.twig"));

        $__internal_90da26b2c2da1ac7e308160d63a42be69e17833bed4a5a224fad130d431a2002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90da26b2c2da1ac7e308160d63a42be69e17833bed4a5a224fad130d431a2002->enter($__internal_90da26b2c2da1ac7e308160d63a42be69e17833bed4a5a224fad130d431a2002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdfdf69577d3ec9b73c990c274c62bfed8476e44dfa290f46d28bc5b1c7651e9->leave($__internal_bdfdf69577d3ec9b73c990c274c62bfed8476e44dfa290f46d28bc5b1c7651e9_prof);

        
        $__internal_90da26b2c2da1ac7e308160d63a42be69e17833bed4a5a224fad130d431a2002->leave($__internal_90da26b2c2da1ac7e308160d63a42be69e17833bed4a5a224fad130d431a2002_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ae95f51860b718eef90149e491f513fd2d12b62a88322413650cb40f0e60b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae95f51860b718eef90149e491f513fd2d12b62a88322413650cb40f0e60b47->enter($__internal_6ae95f51860b718eef90149e491f513fd2d12b62a88322413650cb40f0e60b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3d48deeb0ca6b08b0c101456fc51d3c682b0c84fd53022db7bc264d320f7701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d48deeb0ca6b08b0c101456fc51d3c682b0c84fd53022db7bc264d320f7701->enter($__internal_a3d48deeb0ca6b08b0c101456fc51d3c682b0c84fd53022db7bc264d320f7701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student</h1>
    <div class=\"conte_show\">

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vorname</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "vorname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <li>
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <div class=\"show_suprimer\">
            <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </li>
    <ul>
        <li>
          <div class=\"show_modifier\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_edit", array("id" => $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
</div>
</li>
</ul>
<ul>
  <div class=\"show_retour\">

        </li>

        <li>
          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_index");
        echo "\">Back to the list</a>

        </li>

    </ul>
  </div>
";
        
        $__internal_a3d48deeb0ca6b08b0c101456fc51d3c682b0c84fd53022db7bc264d320f7701->leave($__internal_a3d48deeb0ca6b08b0c101456fc51d3c682b0c84fd53022db7bc264d320f7701_prof);

        
        $__internal_6ae95f51860b718eef90149e491f513fd2d12b62a88322413650cb40f0e60b47->leave($__internal_6ae95f51860b718eef90149e491f513fd2d12b62a88322413650cb40f0e60b47_prof);

    }

    public function getTemplateName()
    {
        return "student/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  101 => 36,  93 => 31,  87 => 28,  79 => 23,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Student</h1>
    <div class=\"conte_show\">

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ student.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ student.name }}</td>
            </tr>
            <tr>
                <th>Vorname</th>
                <td>{{ student.vorname }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ student.email }}</td>
            </tr>
        </tbody>
    </table>
    <li>
        {{ form_start(delete_form) }}
        <div class=\"show_suprimer\">
            <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
        {{ form_end(delete_form) }}
    </li>
    <ul>
        <li>
          <div class=\"show_modifier\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminStudent_edit', { 'id': student.id }) }}\">Edit</a>
</div>
</li>
</ul>
<ul>
  <div class=\"show_retour\">

        </li>

        <li>
          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminStudent_index') }}\">Back to the list</a>

        </li>

    </ul>
  </div>
{% endblock %}
", "student/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/student/show.html.twig");
    }
}
