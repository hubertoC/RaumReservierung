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
        $__internal_4ee139d01597736f3cfe05a6c84e31f2e9911c7901c430e76686eb1fe84bcb11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee139d01597736f3cfe05a6c84e31f2e9911c7901c430e76686eb1fe84bcb11->enter($__internal_4ee139d01597736f3cfe05a6c84e31f2e9911c7901c430e76686eb1fe84bcb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutAdmin.html.twig"));

        $__internal_5a82bf8f12d23981e462df52570dec15de17c7d263aae754efefb87d00fc1bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a82bf8f12d23981e462df52570dec15de17c7d263aae754efefb87d00fc1bd8->enter($__internal_5a82bf8f12d23981e462df52570dec15de17c7d263aae754efefb87d00fc1bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutAdmin.html.twig"));

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
        
        $__internal_4ee139d01597736f3cfe05a6c84e31f2e9911c7901c430e76686eb1fe84bcb11->leave($__internal_4ee139d01597736f3cfe05a6c84e31f2e9911c7901c430e76686eb1fe84bcb11_prof);

        
        $__internal_5a82bf8f12d23981e462df52570dec15de17c7d263aae754efefb87d00fc1bd8->leave($__internal_5a82bf8f12d23981e462df52570dec15de17c7d263aae754efefb87d00fc1bd8_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac4cf4678ba0f019f8e7ea19bdba655fd390fc6d2c6bea33d89e2828fc6412f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4cf4678ba0f019f8e7ea19bdba655fd390fc6d2c6bea33d89e2828fc6412f7->enter($__internal_ac4cf4678ba0f019f8e7ea19bdba655fd390fc6d2c6bea33d89e2828fc6412f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1486c45dfa2d761202bd92dd0d737c20c0eda91fb497af03489f188a9cb6abd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1486c45dfa2d761202bd92dd0d737c20c0eda91fb497af03489f188a9cb6abd7->enter($__internal_1486c45dfa2d761202bd92dd0d737c20c0eda91fb497af03489f188a9cb6abd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Raum Reservierung";
        
        $__internal_1486c45dfa2d761202bd92dd0d737c20c0eda91fb497af03489f188a9cb6abd7->leave($__internal_1486c45dfa2d761202bd92dd0d737c20c0eda91fb497af03489f188a9cb6abd7_prof);

        
        $__internal_ac4cf4678ba0f019f8e7ea19bdba655fd390fc6d2c6bea33d89e2828fc6412f7->leave($__internal_ac4cf4678ba0f019f8e7ea19bdba655fd390fc6d2c6bea33d89e2828fc6412f7_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_d003846c6ff8cdb00fcbf424e05db0296d7c846f8a48644aefb384d67d338798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d003846c6ff8cdb00fcbf424e05db0296d7c846f8a48644aefb384d67d338798->enter($__internal_d003846c6ff8cdb00fcbf424e05db0296d7c846f8a48644aefb384d67d338798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4adde60c6ea665e9329757cc5a3eacaed1b8a8e0c58b75cadfafc41d42e3dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4adde60c6ea665e9329757cc5a3eacaed1b8a8e0c58b75cadfafc41d42e3dd3->enter($__internal_b4adde60c6ea665e9329757cc5a3eacaed1b8a8e0c58b75cadfafc41d42e3dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b4adde60c6ea665e9329757cc5a3eacaed1b8a8e0c58b75cadfafc41d42e3dd3->leave($__internal_b4adde60c6ea665e9329757cc5a3eacaed1b8a8e0c58b75cadfafc41d42e3dd3_prof);

        
        $__internal_d003846c6ff8cdb00fcbf424e05db0296d7c846f8a48644aefb384d67d338798->leave($__internal_d003846c6ff8cdb00fcbf424e05db0296d7c846f8a48644aefb384d67d338798_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5efd73be382fc1600853b9e04c5c5693cd98249c01a1eb853ec9e116b5031f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efd73be382fc1600853b9e04c5c5693cd98249c01a1eb853ec9e116b5031f8b->enter($__internal_5efd73be382fc1600853b9e04c5c5693cd98249c01a1eb853ec9e116b5031f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e44fb99056d4faaf4398a58a25e5dacf2a4448ea906609ac1aa8f06b0ab5a255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44fb99056d4faaf4398a58a25e5dacf2a4448ea906609ac1aa8f06b0ab5a255->enter($__internal_e44fb99056d4faaf4398a58a25e5dacf2a4448ea906609ac1aa8f06b0ab5a255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        // line 63
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>

  ";
        
        $__internal_e44fb99056d4faaf4398a58a25e5dacf2a4448ea906609ac1aa8f06b0ab5a255->leave($__internal_e44fb99056d4faaf4398a58a25e5dacf2a4448ea906609ac1aa8f06b0ab5a255_prof);

        
        $__internal_5efd73be382fc1600853b9e04c5c5693cd98249c01a1eb853ec9e116b5031f8b->leave($__internal_5efd73be382fc1600853b9e04c5c5693cd98249c01a1eb853ec9e116b5031f8b_prof);

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
