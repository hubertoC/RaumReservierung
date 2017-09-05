<?php

/* dozent/show.html.twig */
class __TwigTemplate_23e3c876edb6e71c93d77e3ce1d2ef398bc359d4347436b34fff2af435b5bb19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "dozent/show.html.twig", 1);
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
        $__internal_f09931f5242f07d71eb1ddaaf38cf6a793b692f991390a547acf56b9caa72472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09931f5242f07d71eb1ddaaf38cf6a793b692f991390a547acf56b9caa72472->enter($__internal_f09931f5242f07d71eb1ddaaf38cf6a793b692f991390a547acf56b9caa72472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/show.html.twig"));

        $__internal_ada94f1eb593c262bd9362a516daf1984c963452a0b22315f3ed4859cf03073f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada94f1eb593c262bd9362a516daf1984c963452a0b22315f3ed4859cf03073f->enter($__internal_ada94f1eb593c262bd9362a516daf1984c963452a0b22315f3ed4859cf03073f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f09931f5242f07d71eb1ddaaf38cf6a793b692f991390a547acf56b9caa72472->leave($__internal_f09931f5242f07d71eb1ddaaf38cf6a793b692f991390a547acf56b9caa72472_prof);

        
        $__internal_ada94f1eb593c262bd9362a516daf1984c963452a0b22315f3ed4859cf03073f->leave($__internal_ada94f1eb593c262bd9362a516daf1984c963452a0b22315f3ed4859cf03073f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_700ba0af5225cb2baedbd4aaf820c03e86aaf22e204307794c36dfab67bb40c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700ba0af5225cb2baedbd4aaf820c03e86aaf22e204307794c36dfab67bb40c0->enter($__internal_700ba0af5225cb2baedbd4aaf820c03e86aaf22e204307794c36dfab67bb40c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad26d1a07a9c427330f33d7af2f3aef0cc255d7783ea344e91453e592651d990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad26d1a07a9c427330f33d7af2f3aef0cc255d7783ea344e91453e592651d990->enter($__internal_ad26d1a07a9c427330f33d7af2f3aef0cc255d7783ea344e91453e592651d990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dozent</h1>
    <div class=\"conte_show\">

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vorname</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "vorname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Raumnummer</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "raumNummer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <li>
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <div class=\"show_suprimer\">

            <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </li>
    <ul>
      <div class=\"show_modifier\">

        <li>
          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_edit", array("id" => $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "id", array()))), "html", null, true);
        echo "\">Edit</a>

        </li>
      </div>

        <li>
          <div class=\"show_retour\">

          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_index");
        echo "\">Back to the list</a>

        </li>

    </ul>
";
        
        $__internal_ad26d1a07a9c427330f33d7af2f3aef0cc255d7783ea344e91453e592651d990->leave($__internal_ad26d1a07a9c427330f33d7af2f3aef0cc255d7783ea344e91453e592651d990_prof);

        
        $__internal_700ba0af5225cb2baedbd4aaf820c03e86aaf22e204307794c36dfab67bb40c0->leave($__internal_700ba0af5225cb2baedbd4aaf820c03e86aaf22e204307794c36dfab67bb40c0_prof);

    }

    public function getTemplateName()
    {
        return "dozent/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 54,  117 => 46,  108 => 40,  101 => 36,  93 => 31,  86 => 27,  79 => 23,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Dozent</h1>
    <div class=\"conte_show\">

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ dozent.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ dozent.name }}</td>
            </tr>
            <tr>
                <th>Vorname</th>
                <td>{{ dozent.vorname }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ dozent.title }}</td>
            </tr>
            <tr>
                <th>Raumnummer</th>
                <td>{{ dozent.raumNummer }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ dozent.email }}</td>
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
      <div class=\"show_modifier\">

        <li>
          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminDozent_edit', { 'id': dozent.id }) }}\">Edit</a>

        </li>
      </div>

        <li>
          <div class=\"show_retour\">

          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminDozent_index') }}\">Back to the list</a>

        </li>

    </ul>
{% endblock %}
", "dozent/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/dozent/show.html.twig");
    }
}
