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
        $__internal_9f9394974089742834ab52eea83a128f4b7ab7f07f6749f3d9c6043e7c0bb1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9394974089742834ab52eea83a128f4b7ab7f07f6749f3d9c6043e7c0bb1bb->enter($__internal_9f9394974089742834ab52eea83a128f4b7ab7f07f6749f3d9c6043e7c0bb1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutAdmin.html.twig"));

        $__internal_18b3677bea04d2359259816b7a2f44e05eb0b7b578e7a749e0a095aa01da559b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b3677bea04d2359259816b7a2f44e05eb0b7b578e7a749e0a095aa01da559b->enter($__internal_18b3677bea04d2359259816b7a2f44e05eb0b7b578e7a749e0a095aa01da559b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutAdmin.html.twig"));

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

    <nav class=\"navbar navbar-default navbar-fixed-top\"></nav>
    <div class=\"row\">
<br><br>
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
        
        $__internal_9f9394974089742834ab52eea83a128f4b7ab7f07f6749f3d9c6043e7c0bb1bb->leave($__internal_9f9394974089742834ab52eea83a128f4b7ab7f07f6749f3d9c6043e7c0bb1bb_prof);

        
        $__internal_18b3677bea04d2359259816b7a2f44e05eb0b7b578e7a749e0a095aa01da559b->leave($__internal_18b3677bea04d2359259816b7a2f44e05eb0b7b578e7a749e0a095aa01da559b_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bfacc98f9f9d4d319b68cf3e316806e8e0aea388bb51f4436c86bde4883d774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bfacc98f9f9d4d319b68cf3e316806e8e0aea388bb51f4436c86bde4883d774->enter($__internal_0bfacc98f9f9d4d319b68cf3e316806e8e0aea388bb51f4436c86bde4883d774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_945c470492fb53e2e9088ea70ec2e3b2122fa2d0483d696489cfe49f1c54f4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945c470492fb53e2e9088ea70ec2e3b2122fa2d0483d696489cfe49f1c54f4c3->enter($__internal_945c470492fb53e2e9088ea70ec2e3b2122fa2d0483d696489cfe49f1c54f4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Raum Reservierung";
        
        $__internal_945c470492fb53e2e9088ea70ec2e3b2122fa2d0483d696489cfe49f1c54f4c3->leave($__internal_945c470492fb53e2e9088ea70ec2e3b2122fa2d0483d696489cfe49f1c54f4c3_prof);

        
        $__internal_0bfacc98f9f9d4d319b68cf3e316806e8e0aea388bb51f4436c86bde4883d774->leave($__internal_0bfacc98f9f9d4d319b68cf3e316806e8e0aea388bb51f4436c86bde4883d774_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_e595c7312be5e6a59b645b0341d1596388338756a9d929c89da993267f79e972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e595c7312be5e6a59b645b0341d1596388338756a9d929c89da993267f79e972->enter($__internal_e595c7312be5e6a59b645b0341d1596388338756a9d929c89da993267f79e972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6fc8d3a5fe01fd303f7cc88b0b1b63c7cb5ba2ac3de2a6ad03c56a6d9568538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fc8d3a5fe01fd303f7cc88b0b1b63c7cb5ba2ac3de2a6ad03c56a6d9568538->enter($__internal_f6fc8d3a5fe01fd303f7cc88b0b1b63c7cb5ba2ac3de2a6ad03c56a6d9568538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f6fc8d3a5fe01fd303f7cc88b0b1b63c7cb5ba2ac3de2a6ad03c56a6d9568538->leave($__internal_f6fc8d3a5fe01fd303f7cc88b0b1b63c7cb5ba2ac3de2a6ad03c56a6d9568538_prof);

        
        $__internal_e595c7312be5e6a59b645b0341d1596388338756a9d929c89da993267f79e972->leave($__internal_e595c7312be5e6a59b645b0341d1596388338756a9d929c89da993267f79e972_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db4b0a92384885d833c80cc8ea8e97cf8633c9ccce2bfb107da6440403f91217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4b0a92384885d833c80cc8ea8e97cf8633c9ccce2bfb107da6440403f91217->enter($__internal_db4b0a92384885d833c80cc8ea8e97cf8633c9ccce2bfb107da6440403f91217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1291cda4f866753e3a7d6cd6ddab506231b696287a3b79eaa3e1fbf32996af5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1291cda4f866753e3a7d6cd6ddab506231b696287a3b79eaa3e1fbf32996af5f->enter($__internal_1291cda4f866753e3a7d6cd6ddab506231b696287a3b79eaa3e1fbf32996af5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        // line 63
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>

  ";
        
        $__internal_1291cda4f866753e3a7d6cd6ddab506231b696287a3b79eaa3e1fbf32996af5f->leave($__internal_1291cda4f866753e3a7d6cd6ddab506231b696287a3b79eaa3e1fbf32996af5f_prof);

        
        $__internal_db4b0a92384885d833c80cc8ea8e97cf8633c9ccce2bfb107da6440403f91217->leave($__internal_db4b0a92384885d833c80cc8ea8e97cf8633c9ccce2bfb107da6440403f91217_prof);

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

    <nav class=\"navbar navbar-default navbar-fixed-top\"></nav>
    <div class=\"row\">
<br><br>
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
