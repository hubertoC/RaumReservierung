<?php

/* :dozent:show.html.twig */
class __TwigTemplate_23e3c876edb6e71c93d77e3ce1d2ef398bc359d4347436b34fff2af435b5bb19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":dozent:show.html.twig", 1);
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
        $__internal_6253dd13da96911c6c5bd52c22959f8e21e681c33b13ecea9db143f447362472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6253dd13da96911c6c5bd52c22959f8e21e681c33b13ecea9db143f447362472->enter($__internal_6253dd13da96911c6c5bd52c22959f8e21e681c33b13ecea9db143f447362472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dozent:show.html.twig"));

        $__internal_8e33460e2a0f7edfa4dcf4130d1c76afb230168faefec6ccb351dccc4047ebe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e33460e2a0f7edfa4dcf4130d1c76afb230168faefec6ccb351dccc4047ebe7->enter($__internal_8e33460e2a0f7edfa4dcf4130d1c76afb230168faefec6ccb351dccc4047ebe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dozent:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6253dd13da96911c6c5bd52c22959f8e21e681c33b13ecea9db143f447362472->leave($__internal_6253dd13da96911c6c5bd52c22959f8e21e681c33b13ecea9db143f447362472_prof);

        
        $__internal_8e33460e2a0f7edfa4dcf4130d1c76afb230168faefec6ccb351dccc4047ebe7->leave($__internal_8e33460e2a0f7edfa4dcf4130d1c76afb230168faefec6ccb351dccc4047ebe7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44397bfd5c0cc38ad4911c03749bb3f5cf362c2dccc8654e4c435f1d10f5f201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44397bfd5c0cc38ad4911c03749bb3f5cf362c2dccc8654e4c435f1d10f5f201->enter($__internal_44397bfd5c0cc38ad4911c03749bb3f5cf362c2dccc8654e4c435f1d10f5f201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0ace174d36b4b3c3871ac4b5ea7942f43e2245e52264ce6e61b43e0d37c3843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ace174d36b4b3c3871ac4b5ea7942f43e2245e52264ce6e61b43e0d37c3843->enter($__internal_c0ace174d36b4b3c3871ac4b5ea7942f43e2245e52264ce6e61b43e0d37c3843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_c0ace174d36b4b3c3871ac4b5ea7942f43e2245e52264ce6e61b43e0d37c3843->leave($__internal_c0ace174d36b4b3c3871ac4b5ea7942f43e2245e52264ce6e61b43e0d37c3843_prof);

        
        $__internal_44397bfd5c0cc38ad4911c03749bb3f5cf362c2dccc8654e4c435f1d10f5f201->leave($__internal_44397bfd5c0cc38ad4911c03749bb3f5cf362c2dccc8654e4c435f1d10f5f201_prof);

    }

    public function getTemplateName()
    {
        return ":dozent:show.html.twig";
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
    </div>
    </div>
    </div>
    </div>
{% endblock %}
", ":dozent:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/dozent/show.html.twig");
    }
}
