<?php

/* reservierungadmin/show.html.twig */
class __TwigTemplate_7e54180658d45ac1effe8dad183cd5798f541fec03234f3b5f4b92283e64b779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "reservierungadmin/show.html.twig", 1);
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
        $__internal_fb566e9cebe9bc51bc4f39094929b81c9f6eda79ccb98f88214246c59bfd0d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb566e9cebe9bc51bc4f39094929b81c9f6eda79ccb98f88214246c59bfd0d59->enter($__internal_fb566e9cebe9bc51bc4f39094929b81c9f6eda79ccb98f88214246c59bfd0d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierungadmin/show.html.twig"));

        $__internal_140efaa5b29cb0c39bc6155870eec6211102e8278719e4ef28d363b21204c4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140efaa5b29cb0c39bc6155870eec6211102e8278719e4ef28d363b21204c4d5->enter($__internal_140efaa5b29cb0c39bc6155870eec6211102e8278719e4ef28d363b21204c4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierungadmin/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb566e9cebe9bc51bc4f39094929b81c9f6eda79ccb98f88214246c59bfd0d59->leave($__internal_fb566e9cebe9bc51bc4f39094929b81c9f6eda79ccb98f88214246c59bfd0d59_prof);

        
        $__internal_140efaa5b29cb0c39bc6155870eec6211102e8278719e4ef28d363b21204c4d5->leave($__internal_140efaa5b29cb0c39bc6155870eec6211102e8278719e4ef28d363b21204c4d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a33359bdbdbe5fa1cdae803bbe3a5f37c4ac31e3b69d73f34171766b698f3b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33359bdbdbe5fa1cdae803bbe3a5f37c4ac31e3b69d73f34171766b698f3b02->enter($__internal_a33359bdbdbe5fa1cdae803bbe3a5f37c4ac31e3b69d73f34171766b698f3b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e19da6763f76e97f7e878a1789595db41b9406046b0961ef21f652e405b7fc74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19da6763f76e97f7e878a1789595db41b9406046b0961ef21f652e405b7fc74->enter($__internal_e19da6763f76e97f7e878a1789595db41b9406046b0961ef21f652e405b7fc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1>Reservierungadmin</h1>
  <div class=\"conte_show\">

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
      <tbody>
        <tr>
          <th>Id</th>
          <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservierungAdmin"]) ? $context["reservierungAdmin"] : $this->getContext($context, "reservierungAdmin")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          <th>Start</th>
          <td>
            ";
        // line 16
        if ($this->getAttribute((isset($context["reservierungAdmin"]) ? $context["reservierungAdmin"] : $this->getContext($context, "reservierungAdmin")), "start", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservierungAdmin"]) ? $context["reservierungAdmin"] : $this->getContext($context, "reservierungAdmin")), "start", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        // line 17
        echo "          </td>
        </tr>
        <tr>
          <th>End</th>
          <td>
            ";
        // line 22
        if ($this->getAttribute((isset($context["reservierungAdmin"]) ? $context["reservierungAdmin"] : $this->getContext($context, "reservierungAdmin")), "end", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservierungAdmin"]) ? $context["reservierungAdmin"] : $this->getContext($context, "reservierungAdmin")), "end", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        // line 23
        echo "          </td>
        </tr>
        <tr>
          <th>Title</th>
          <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservierungAdmin"]) ? $context["reservierungAdmin"] : $this->getContext($context, "reservierungAdmin")), "title", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          <th>Url</th>
          <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservierungAdmin"]) ? $context["reservierungAdmin"] : $this->getContext($context, "reservierungAdmin")), "url", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          <th>Classname</th>
          <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservierungAdmin"]) ? $context["reservierungAdmin"] : $this->getContext($context, "reservierungAdmin")), "className", array()), "html", null, true);
        echo "</td>
        </tr>
      </tbody>
    </table>
  <li>
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "

    <div class=\"show_suprimer\">

      <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
    </div>

    ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
  </li>

  <ul>
    <li>
      <div class=\"show_modifier\">

        <a class=\"mdl-button mdl-js-button mdl-button--raised \" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservierungadmin_edit", array("id" => $this->getAttribute((isset($context["reservierungAdmin"]) ? $context["reservierungAdmin"] : $this->getContext($context, "reservierungAdmin")), "id", array()))), "html", null, true);
        echo "\">Edit<i class=\"glyphicon glyphicon-pencil\"></i>
        </a>
      </li>
    </div>
  </ul>
  <ul>
    <div class=\"show_retour\">

      <li>
        <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservierungadmin_index");
        echo "\">Back to the list</a>
      </li>

    </ul>
  </div>

";
        
        $__internal_e19da6763f76e97f7e878a1789595db41b9406046b0961ef21f652e405b7fc74->leave($__internal_e19da6763f76e97f7e878a1789595db41b9406046b0961ef21f652e405b7fc74_prof);

        
        $__internal_a33359bdbdbe5fa1cdae803bbe3a5f37c4ac31e3b69d73f34171766b698f3b02->leave($__internal_a33359bdbdbe5fa1cdae803bbe3a5f37c4ac31e3b69d73f34171766b698f3b02_prof);

    }

    public function getTemplateName()
    {
        return "reservierungadmin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 63,  129 => 54,  119 => 47,  109 => 40,  101 => 35,  94 => 31,  87 => 27,  81 => 23,  77 => 22,  70 => 17,  66 => 16,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
  <h1>Reservierungadmin</h1>
  <div class=\"conte_show\">

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
      <tbody>
        <tr>
          <th>Id</th>
          <td>{{ reservierungAdmin.id }}</td>
        </tr>
        <tr>
          <th>Start</th>
          <td>
            {% if reservierungAdmin.start %}{{ reservierungAdmin.start|date('Y-m-d H:i:s') }}{% endif %}
          </td>
        </tr>
        <tr>
          <th>End</th>
          <td>
            {% if reservierungAdmin.end %}{{ reservierungAdmin.end|date('Y-m-d H:i:s') }}{% endif %}
          </td>
        </tr>
        <tr>
          <th>Title</th>
          <td>{{ reservierungAdmin.title }}</td>
        </tr>
        <tr>
          <th>Url</th>
          <td>{{ reservierungAdmin.url }}</td>
        </tr>
        <tr>
          <th>Classname</th>
          <td>{{ reservierungAdmin.className }}</td>
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

        <a class=\"mdl-button mdl-js-button mdl-button--raised \" href=\"{{ path('admin_reservierungadmin_edit', { 'id': reservierungAdmin.id }) }}\">Edit<i class=\"glyphicon glyphicon-pencil\"></i>
        </a>
      </li>
    </div>
  </ul>
  <ul>
    <div class=\"show_retour\">

      <li>
        <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('admin_reservierungadmin_index') }}\">Back to the list</a>
      </li>

    </ul>
  </div>

{% endblock %}
", "reservierungadmin/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierungadmin/show.html.twig");
    }
}
