<?php

/* layoutAdmin.html.twig */
class __TwigTemplate_518fefe7322cbbf616af4b548353f518e69dc71e66bb6b23b4ac23916706ba0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78eca8881dca6b793aa957a8a40a2d3e0062774377f6fc638fe3562db99d1ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78eca8881dca6b793aa957a8a40a2d3e0062774377f6fc638fe3562db99d1ddd->enter($__internal_78eca8881dca6b793aa957a8a40a2d3e0062774377f6fc638fe3562db99d1ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutAdmin.html.twig"));

        $__internal_85363074c429e4ca13938a10a79e72c857661c9d14b1cb2943ba4c8a5633a9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85363074c429e4ca13938a10a79e72c857661c9d14b1cb2943ba4c8a5633a9f4->enter($__internal_85363074c429e4ca13938a10a79e72c857661c9d14b1cb2943ba4c8a5633a9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>
      ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    </title>
    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/adminCss.css"), "html", null, true);
        echo "\">
  </head>

  <body>

    <nav class=\"navbar navbar-default \"></nav>
    <div class=\"row\">

      <div id=\"menu\" class=\"col-md-3\">

        <h3>Menu</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li>
            <a class=\"colo_menu\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("h_zraum_reservierung_homepage");
        echo "\">Home</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_index");
        echo "\">Dashboard</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_index");
        echo "\">Räume</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_index");
        echo "\">Dozent</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_index");
        echo "\">Student</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_index");
        echo "\">Gebäude</a>
          </li>

        </ul>

      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>WI/AI-Projekt ©
        ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".</p>
    </footer>
  </div>

  ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "
</body>
</html>
";
        
        $__internal_78eca8881dca6b793aa957a8a40a2d3e0062774377f6fc638fe3562db99d1ddd->leave($__internal_78eca8881dca6b793aa957a8a40a2d3e0062774377f6fc638fe3562db99d1ddd_prof);

        
        $__internal_85363074c429e4ca13938a10a79e72c857661c9d14b1cb2943ba4c8a5633a9f4->leave($__internal_85363074c429e4ca13938a10a79e72c857661c9d14b1cb2943ba4c8a5633a9f4_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_94b7b8d96cf3e3875622712129d5be8de3eae9af87dc60c84b36cf5f698d9b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b7b8d96cf3e3875622712129d5be8de3eae9af87dc60c84b36cf5f698d9b6e->enter($__internal_94b7b8d96cf3e3875622712129d5be8de3eae9af87dc60c84b36cf5f698d9b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_286ffae71b12b85a16d92b0be1d7b45b64da35cf9ef1cb37cf3de44a67edbe98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286ffae71b12b85a16d92b0be1d7b45b64da35cf9ef1cb37cf3de44a67edbe98->enter($__internal_286ffae71b12b85a16d92b0be1d7b45b64da35cf9ef1cb37cf3de44a67edbe98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Raum Reservierung";
        
        $__internal_286ffae71b12b85a16d92b0be1d7b45b64da35cf9ef1cb37cf3de44a67edbe98->leave($__internal_286ffae71b12b85a16d92b0be1d7b45b64da35cf9ef1cb37cf3de44a67edbe98_prof);

        
        $__internal_94b7b8d96cf3e3875622712129d5be8de3eae9af87dc60c84b36cf5f698d9b6e->leave($__internal_94b7b8d96cf3e3875622712129d5be8de3eae9af87dc60c84b36cf5f698d9b6e_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_339212f74c2a1f93bcd17c7d365e8f74bb7bfdcefb13d0115a4173976b41cc0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339212f74c2a1f93bcd17c7d365e8f74bb7bfdcefb13d0115a4173976b41cc0b->enter($__internal_339212f74c2a1f93bcd17c7d365e8f74bb7bfdcefb13d0115a4173976b41cc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e311bcb4167bee62ac2ac006c88ef82d4eb7506524b3158fe5ca9f1f8d50bf9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e311bcb4167bee62ac2ac006c88ef82d4eb7506524b3158fe5ca9f1f8d50bf9c->enter($__internal_e311bcb4167bee62ac2ac006c88ef82d4eb7506524b3158fe5ca9f1f8d50bf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e311bcb4167bee62ac2ac006c88ef82d4eb7506524b3158fe5ca9f1f8d50bf9c->leave($__internal_e311bcb4167bee62ac2ac006c88ef82d4eb7506524b3158fe5ca9f1f8d50bf9c_prof);

        
        $__internal_339212f74c2a1f93bcd17c7d365e8f74bb7bfdcefb13d0115a4173976b41cc0b->leave($__internal_339212f74c2a1f93bcd17c7d365e8f74bb7bfdcefb13d0115a4173976b41cc0b_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_00b85b4d789bf20b78d1dcf5c10bf38fb128bf13f7db1a7ba0a4174a36c34ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b85b4d789bf20b78d1dcf5c10bf38fb128bf13f7db1a7ba0a4174a36c34ba9->enter($__internal_00b85b4d789bf20b78d1dcf5c10bf38fb128bf13f7db1a7ba0a4174a36c34ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_541ac8182cf67fa8771238aa412991fae537d958ad09a4eca997edc61a33105d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541ac8182cf67fa8771238aa412991fae537d958ad09a4eca997edc61a33105d->enter($__internal_541ac8182cf67fa8771238aa412991fae537d958ad09a4eca997edc61a33105d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        // line 63
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>

  ";
        
        $__internal_541ac8182cf67fa8771238aa412991fae537d958ad09a4eca997edc61a33105d->leave($__internal_541ac8182cf67fa8771238aa412991fae537d958ad09a4eca997edc61a33105d_prof);

        
        $__internal_00b85b4d789bf20b78d1dcf5c10bf38fb128bf13f7db1a7ba0a4174a36c34ba9->leave($__internal_00b85b4d789bf20b78d1dcf5c10bf38fb128bf13f7db1a7ba0a4174a36c34ba9_prof);

    }

    public function getTemplateName()
    {
        return "layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 63,  180 => 62,  171 => 61,  154 => 49,  136 => 8,  123 => 68,  121 => 61,  114 => 57,  105 => 50,  103 => 49,  93 => 42,  87 => 39,  81 => 36,  75 => 33,  69 => 30,  63 => 27,  47 => 14,  42 => 11,  39 => 9,  37 => 8,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>
      {% block title %}Raum Reservierung{% endblock %}
    </title>
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/adminCss.css') }}\">
  </head>

  <body>

    <nav class=\"navbar navbar-default \"></nav>
    <div class=\"row\">

      <div id=\"menu\" class=\"col-md-3\">

        <h3>Menu</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li>
            <a class=\"colo_menu\" href=\"{{ path('h_zraum_reservierung_homepage') }}\">Home</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"{{ path('adminReservierung_index') }}\">Dashboard</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"{{ path('adminRaum_index') }}\">Räume</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"{{ path('adminDozent_index') }}\">Dozent</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"{{ path('adminStudent_index') }}\">Student</a>
          </li>
          <li>
            <a class=\"colo_menu\" href=\"{{ path('adminGebaeude_index') }}\">Gebäude</a>
          </li>

        </ul>

      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}{% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>WI/AI-Projekt ©
        {{ 'now'|date('Y') }}.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>

  {% endblock %}

</body>
</html>
", "layoutAdmin.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/layoutAdmin.html.twig");
    }
}
