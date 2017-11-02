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
        $__internal_9af5150fb9f5af2764d44a20f1cb5e0fa7ef31fb7462df4f224a686e3d8c2ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af5150fb9f5af2764d44a20f1cb5e0fa7ef31fb7462df4f224a686e3d8c2ab0->enter($__internal_9af5150fb9f5af2764d44a20f1cb5e0fa7ef31fb7462df4f224a686e3d8c2ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutAdmin.html.twig"));

        $__internal_a3139b03aff130b7bcb4dc9bf1c0dbc35f27237932fdffde73684760def989d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3139b03aff130b7bcb4dc9bf1c0dbc35f27237932fdffde73684760def989d4->enter($__internal_a3139b03aff130b7bcb4dc9bf1c0dbc35f27237932fdffde73684760def989d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutAdmin.html.twig"));

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
        
        $__internal_9af5150fb9f5af2764d44a20f1cb5e0fa7ef31fb7462df4f224a686e3d8c2ab0->leave($__internal_9af5150fb9f5af2764d44a20f1cb5e0fa7ef31fb7462df4f224a686e3d8c2ab0_prof);

        
        $__internal_a3139b03aff130b7bcb4dc9bf1c0dbc35f27237932fdffde73684760def989d4->leave($__internal_a3139b03aff130b7bcb4dc9bf1c0dbc35f27237932fdffde73684760def989d4_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b9eab87a6e4402ffb18f8300b20305e39693daa19c8b2d105afa63bbb0b9304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9eab87a6e4402ffb18f8300b20305e39693daa19c8b2d105afa63bbb0b9304->enter($__internal_2b9eab87a6e4402ffb18f8300b20305e39693daa19c8b2d105afa63bbb0b9304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc85f2a3e6cae9ececa22b26447740e5fddfb1c01e5ffebe38d92e127ce9905d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc85f2a3e6cae9ececa22b26447740e5fddfb1c01e5ffebe38d92e127ce9905d->enter($__internal_fc85f2a3e6cae9ececa22b26447740e5fddfb1c01e5ffebe38d92e127ce9905d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Raum Reservierung";
        
        $__internal_fc85f2a3e6cae9ececa22b26447740e5fddfb1c01e5ffebe38d92e127ce9905d->leave($__internal_fc85f2a3e6cae9ececa22b26447740e5fddfb1c01e5ffebe38d92e127ce9905d_prof);

        
        $__internal_2b9eab87a6e4402ffb18f8300b20305e39693daa19c8b2d105afa63bbb0b9304->leave($__internal_2b9eab87a6e4402ffb18f8300b20305e39693daa19c8b2d105afa63bbb0b9304_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_d85af1fc4b09bd03e556c54a10a58af48a3499a1a8020147337176f1e94e327a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d85af1fc4b09bd03e556c54a10a58af48a3499a1a8020147337176f1e94e327a->enter($__internal_d85af1fc4b09bd03e556c54a10a58af48a3499a1a8020147337176f1e94e327a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1728c265d6a2c13957d18d1f45bdc98b6970f7bf1e3627adea2104423017032f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1728c265d6a2c13957d18d1f45bdc98b6970f7bf1e3627adea2104423017032f->enter($__internal_1728c265d6a2c13957d18d1f45bdc98b6970f7bf1e3627adea2104423017032f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1728c265d6a2c13957d18d1f45bdc98b6970f7bf1e3627adea2104423017032f->leave($__internal_1728c265d6a2c13957d18d1f45bdc98b6970f7bf1e3627adea2104423017032f_prof);

        
        $__internal_d85af1fc4b09bd03e556c54a10a58af48a3499a1a8020147337176f1e94e327a->leave($__internal_d85af1fc4b09bd03e556c54a10a58af48a3499a1a8020147337176f1e94e327a_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5bb8cac3d961e0a5e25082b1f16713d80f162da825f5a754c95fc3e6b7d8e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5bb8cac3d961e0a5e25082b1f16713d80f162da825f5a754c95fc3e6b7d8e59->enter($__internal_e5bb8cac3d961e0a5e25082b1f16713d80f162da825f5a754c95fc3e6b7d8e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e37e64a0eaca9c8a55a72baeeaa0133e1b58779da9d6b031eba3fd3134fae8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37e64a0eaca9c8a55a72baeeaa0133e1b58779da9d6b031eba3fd3134fae8b9->enter($__internal_e37e64a0eaca9c8a55a72baeeaa0133e1b58779da9d6b031eba3fd3134fae8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        // line 63
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script defer src=\"https://code.getmdl.io/1.3.0/material.min.js\"></script>

  ";
        
        $__internal_e37e64a0eaca9c8a55a72baeeaa0133e1b58779da9d6b031eba3fd3134fae8b9->leave($__internal_e37e64a0eaca9c8a55a72baeeaa0133e1b58779da9d6b031eba3fd3134fae8b9_prof);

        
        $__internal_e5bb8cac3d961e0a5e25082b1f16713d80f162da825f5a754c95fc3e6b7d8e59->leave($__internal_e5bb8cac3d961e0a5e25082b1f16713d80f162da825f5a754c95fc3e6b7d8e59_prof);

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
