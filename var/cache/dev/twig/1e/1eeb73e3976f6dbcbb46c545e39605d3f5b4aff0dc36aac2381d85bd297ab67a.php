<?php

/* :raum:show.html.twig */
class __TwigTemplate_6fa570f58635ccf352a67b5011cc0077283399bd59d55dc12f07965c49d91000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":raum:show.html.twig", 1);
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
        $__internal_32754421e04c267e4205972172ae312a1096b156931a6537ac85f8838c585f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32754421e04c267e4205972172ae312a1096b156931a6537ac85f8838c585f44->enter($__internal_32754421e04c267e4205972172ae312a1096b156931a6537ac85f8838c585f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:show.html.twig"));

        $__internal_ff6d7e73dd5a7acafbd4edbcb1ec8c3e5a54ad09681e597716f977d6b3ca2174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6d7e73dd5a7acafbd4edbcb1ec8c3e5a54ad09681e597716f977d6b3ca2174->enter($__internal_ff6d7e73dd5a7acafbd4edbcb1ec8c3e5a54ad09681e597716f977d6b3ca2174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32754421e04c267e4205972172ae312a1096b156931a6537ac85f8838c585f44->leave($__internal_32754421e04c267e4205972172ae312a1096b156931a6537ac85f8838c585f44_prof);

        
        $__internal_ff6d7e73dd5a7acafbd4edbcb1ec8c3e5a54ad09681e597716f977d6b3ca2174->leave($__internal_ff6d7e73dd5a7acafbd4edbcb1ec8c3e5a54ad09681e597716f977d6b3ca2174_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08cb218aee1cdf25e49622f82404ad5561a484e941cda806720322b8146f5739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08cb218aee1cdf25e49622f82404ad5561a484e941cda806720322b8146f5739->enter($__internal_08cb218aee1cdf25e49622f82404ad5561a484e941cda806720322b8146f5739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e31beb0a54351257710a1fdb1069159f93a25946ccde97a830dfdbf08026bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e31beb0a54351257710a1fdb1069159f93a25946ccde97a830dfdbf08026bf9->enter($__internal_1e31beb0a54351257710a1fdb1069159f93a25946ccde97a830dfdbf08026bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Raum</h1>
    <div class=\"conte_show\">

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["raum"]) ? $context["raum"] : $this->getContext($context, "raum")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nummer</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["raum"]) ? $context["raum"] : $this->getContext($context, "raum")), "nummer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["raum"]) ? $context["raum"] : $this->getContext($context, "raum")), "name", array()), "html", null, true);
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

            <input  class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
          </div>
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </li>

    <ul>
      <div class=\"show_modifier\">
        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_edit", array("id" => $this->getAttribute((isset($context["raum"]) ? $context["raum"] : $this->getContext($context, "raum")), "id", array()))), "html", null, true);
        echo "\">Edit<i class=\"glyphicon glyphicon-pencil\"></i></a>
        </li>
      </div>

      </ul>
    </ul>
    <div class=\"show_retour\">

        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_index");
        echo "\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Back to the list</a>
        </li>
      </div>


    </ul>
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_1e31beb0a54351257710a1fdb1069159f93a25946ccde97a830dfdbf08026bf9->leave($__internal_1e31beb0a54351257710a1fdb1069159f93a25946ccde97a830dfdbf08026bf9_prof);

        
        $__internal_08cb218aee1cdf25e49622f82404ad5561a484e941cda806720322b8146f5739->leave($__internal_08cb218aee1cdf25e49622f82404ad5561a484e941cda806720322b8146f5739_prof);

    }

    public function getTemplateName()
    {
        return ":raum:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  97 => 35,  88 => 29,  80 => 24,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Raum</h1>
    <div class=\"conte_show\">

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ raum.id }}</td>
            </tr>
            <tr>
                <th>Nummer</th>
                <td>{{ raum.nummer }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ raum.name }}</td>
            </tr>
        </tbody>
    </table>
    <li>
        {{ form_start(delete_form) }}
        <div class=\"show_suprimer\">

            <input  class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
          </div>
{{ form_end(delete_form) }}
    </li>

    <ul>
      <div class=\"show_modifier\">
        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminRaum_edit', { 'id': raum.id }) }}\">Edit<i class=\"glyphicon glyphicon-pencil\"></i></a>
        </li>
      </div>

      </ul>
    </ul>
    <div class=\"show_retour\">

        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminRaum_index') }}\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Back to the list</a>
        </li>
      </div>


    </ul>
    </div>
    </div>
    </div>
    </div>
{% endblock %}
", ":raum:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/show.html.twig");
    }
}
