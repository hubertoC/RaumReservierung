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
        $__internal_03fd28031b726c0bb86e0cd3d1546870728b08b73ae5e293e72b900dfa287a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fd28031b726c0bb86e0cd3d1546870728b08b73ae5e293e72b900dfa287a2f->enter($__internal_03fd28031b726c0bb86e0cd3d1546870728b08b73ae5e293e72b900dfa287a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:show.html.twig"));

        $__internal_c754747f84d4210ad8f5a08a31cef1590eb82e94ea446a662bc57aad88e91148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c754747f84d4210ad8f5a08a31cef1590eb82e94ea446a662bc57aad88e91148->enter($__internal_c754747f84d4210ad8f5a08a31cef1590eb82e94ea446a662bc57aad88e91148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03fd28031b726c0bb86e0cd3d1546870728b08b73ae5e293e72b900dfa287a2f->leave($__internal_03fd28031b726c0bb86e0cd3d1546870728b08b73ae5e293e72b900dfa287a2f_prof);

        
        $__internal_c754747f84d4210ad8f5a08a31cef1590eb82e94ea446a662bc57aad88e91148->leave($__internal_c754747f84d4210ad8f5a08a31cef1590eb82e94ea446a662bc57aad88e91148_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a949bf89a3b87abed76868b3ed02b04c795c2c9f7780c4a2a38a1958d90efb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a949bf89a3b87abed76868b3ed02b04c795c2c9f7780c4a2a38a1958d90efb52->enter($__internal_a949bf89a3b87abed76868b3ed02b04c795c2c9f7780c4a2a38a1958d90efb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dce50a30500b8e379f9cc0a9bc834e9635c77840c3d34906269ad6c1a5297b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce50a30500b8e379f9cc0a9bc834e9635c77840c3d34906269ad6c1a5297b66->enter($__internal_dce50a30500b8e379f9cc0a9bc834e9635c77840c3d34906269ad6c1a5297b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dce50a30500b8e379f9cc0a9bc834e9635c77840c3d34906269ad6c1a5297b66->leave($__internal_dce50a30500b8e379f9cc0a9bc834e9635c77840c3d34906269ad6c1a5297b66_prof);

        
        $__internal_a949bf89a3b87abed76868b3ed02b04c795c2c9f7780c4a2a38a1958d90efb52->leave($__internal_a949bf89a3b87abed76868b3ed02b04c795c2c9f7780c4a2a38a1958d90efb52_prof);

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
