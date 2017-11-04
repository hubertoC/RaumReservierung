<?php

/* layoutPublic.html.twig */
class __TwigTemplate_9ff770f7431287f30e3a03a4ae413ead3253a6a9331a1e0d52ead403bee83897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_215e3fce5c0db143d4696833309b103c252d5fba815c1c8f49d7cd9c639dc554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215e3fce5c0db143d4696833309b103c252d5fba815c1c8f49d7cd9c639dc554->enter($__internal_215e3fce5c0db143d4696833309b103c252d5fba815c1c8f49d7cd9c639dc554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutPublic.html.twig"));

        $__internal_e63611dfbcbfae75e85c146dcb0ab2430429d3a8c5d6fcfa4b044fdac1727c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63611dfbcbfae75e85c146dcb0ab2430429d3a8c5d6fcfa4b044fdac1727c9c->enter($__internal_e63611dfbcbfae75e85c146dcb0ab2430429d3a8c5d6fcfa4b044fdac1727c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutPublic.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/publicCss.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/kontakt.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/fullcalendar.css"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fullcalendar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <title>Raum Buchung</title>

  </head>
  <body>
    ";
        // line 22
        $this->displayBlock('head', $context, $blocks);
        // line 52
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "
    ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 94
        echo "</body>

</html>
";
        
        $__internal_215e3fce5c0db143d4696833309b103c252d5fba815c1c8f49d7cd9c639dc554->leave($__internal_215e3fce5c0db143d4696833309b103c252d5fba815c1c8f49d7cd9c639dc554_prof);

        
        $__internal_e63611dfbcbfae75e85c146dcb0ab2430429d3a8c5d6fcfa4b044fdac1727c9c->leave($__internal_e63611dfbcbfae75e85c146dcb0ab2430429d3a8c5d6fcfa4b044fdac1727c9c_prof);

    }

    // line 22
    public function block_head($context, array $blocks = array())
    {
        $__internal_107a0065738ebd7aff617ee910cec5e4126d21bfbaf53fab86c51425106c78fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107a0065738ebd7aff617ee910cec5e4126d21bfbaf53fab86c51425106c78fa->enter($__internal_107a0065738ebd7aff617ee910cec5e4126d21bfbaf53fab86c51425106c78fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a2ca58b576cdb34543e2a4f8ca95d6ef6fb5c053bed429b772c43246a219f4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ca58b576cdb34543e2a4f8ca95d6ef6fb5c053bed429b772c43246a219f4f5->enter($__internal_a2ca58b576cdb34543e2a4f8ca95d6ef6fb5c053bed429b772c43246a219f4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 23
        echo "      <nav class=\" navbar navbar-default navbar-fixed-top\">
        <div class=\"navbar-header\">
          <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navHeaderCollapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">
            <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/TH_Koeln_Logo.svg/1280px-TH_Koeln_Logo.svg.png\" height=\"62\" width=\"130\" alt=\"\">
          </a>

        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li>
              <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("h_zraum_reservierung_homepage");
        echo "\">Home</a>
            </li>
            <li>
              <a href=\"#\">Infos</a>
            </li>
            <li>
              <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("h_zraum_reservierung_kontakt");
        echo "\">Kontakt</a>
            </li>
          </ul>
        </div>
      </nav>
    ";
        
        $__internal_a2ca58b576cdb34543e2a4f8ca95d6ef6fb5c053bed429b772c43246a219f4f5->leave($__internal_a2ca58b576cdb34543e2a4f8ca95d6ef6fb5c053bed429b772c43246a219f4f5_prof);

        
        $__internal_107a0065738ebd7aff617ee910cec5e4126d21bfbaf53fab86c51425106c78fa->leave($__internal_107a0065738ebd7aff617ee910cec5e4126d21bfbaf53fab86c51425106c78fa_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_052ca693b0e553ecfa496ade8e7e8ba68dcfcc869038f3229880cd55b2c82200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052ca693b0e553ecfa496ade8e7e8ba68dcfcc869038f3229880cd55b2c82200->enter($__internal_052ca693b0e553ecfa496ade8e7e8ba68dcfcc869038f3229880cd55b2c82200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cd7a10f8c565e72b9313cbf8dd9fe510a58783a0357abb452fcb1791c8f16d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd7a10f8c565e72b9313cbf8dd9fe510a58783a0357abb452fcb1791c8f16d0->enter($__internal_9cd7a10f8c565e72b9313cbf8dd9fe510a58783a0357abb452fcb1791c8f16d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9cd7a10f8c565e72b9313cbf8dd9fe510a58783a0357abb452fcb1791c8f16d0->leave($__internal_9cd7a10f8c565e72b9313cbf8dd9fe510a58783a0357abb452fcb1791c8f16d0_prof);

        
        $__internal_052ca693b0e553ecfa496ade8e7e8ba68dcfcc869038f3229880cd55b2c82200->leave($__internal_052ca693b0e553ecfa496ade8e7e8ba68dcfcc869038f3229880cd55b2c82200_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_53212366c01c2f731cbe63f0eb981935334f1a694d95223a9d6fa005a5f9e8bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53212366c01c2f731cbe63f0eb981935334f1a694d95223a9d6fa005a5f9e8bd->enter($__internal_53212366c01c2f731cbe63f0eb981935334f1a694d95223a9d6fa005a5f9e8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ed2e0681f9bb13b12a5b2313681c50908d16b99563554eae97cea1ec1bb15fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2e0681f9bb13b12a5b2313681c50908d16b99563554eae97cea1ec1bb15fab->enter($__internal_ed2e0681f9bb13b12a5b2313681c50908d16b99563554eae97cea1ec1bb15fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "      <footer class=\"site-footer section-spacing text-center \" id=\"eight\">

        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4\"></br>
            <p class=\"footer-links\">
              <a href=\"#\"></a>
            </p>

          </div>

          <div class=\"col-md-4\"></br>
          <small>&copy; 2017 WI/AI-Projekt reserved.</small>
        </div>
        <div class=\"col-md-4\"></br>
        <ul class=\"social\">
          <li>
            <a href=\"#\" target=\"_blank\">
              <i class=\"fa fa-twitter \"></i>
            </a>
          </li>
          <li>
            <a href=\"#\" target=\"_blank\">
              <i class=\"fa fa-facebook\"></i>
            </a>
          </li>
          <li>
            <a href=\"#\" target=\"_blank\">
              <i class=\"fa fa-youtube-play\"></i>
            </a>
          </li>
        </ul>
      </br>

    </div>
  </div>
</div>
</footer>
";
        
        $__internal_ed2e0681f9bb13b12a5b2313681c50908d16b99563554eae97cea1ec1bb15fab->leave($__internal_ed2e0681f9bb13b12a5b2313681c50908d16b99563554eae97cea1ec1bb15fab_prof);

        
        $__internal_53212366c01c2f731cbe63f0eb981935334f1a694d95223a9d6fa005a5f9e8bd->leave($__internal_53212366c01c2f731cbe63f0eb981935334f1a694d95223a9d6fa005a5f9e8bd_prof);

    }

    public function getTemplateName()
    {
        return "layoutPublic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 55,  162 => 54,  145 => 52,  129 => 46,  120 => 40,  101 => 23,  92 => 22,  79 => 94,  77 => 54,  74 => 53,  71 => 52,  69 => 22,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  43 => 11,  39 => 10,  28 => 1,);
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

    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    <link rel=\"stylesheet\" href=\"https://code.getmdl.io/1.3.0/material.indigo-pink.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/publicCss.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/kontakt.css') }}\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/fullcalendar.css') }}\">
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/fullcalendar.js') }}\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <title>Raum Buchung</title>

  </head>
  <body>
    {% block head %}
      <nav class=\" navbar navbar-default navbar-fixed-top\">
        <div class=\"navbar-header\">
          <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navHeaderCollapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">
            <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/TH_Koeln_Logo.svg/1280px-TH_Koeln_Logo.svg.png\" height=\"62\" width=\"130\" alt=\"\">
          </a>

        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li>
              <a href=\"{{ path('h_zraum_reservierung_homepage') }}\">Home</a>
            </li>
            <li>
              <a href=\"#\">Infos</a>
            </li>
            <li>
              <a href=\"{{ path('h_zraum_reservierung_kontakt') }}\">Kontakt</a>
            </li>
          </ul>
        </div>
      </nav>
    {% endblock %}
    {% block body %}{% endblock %}

    {% block footer %}
      <footer class=\"site-footer section-spacing text-center \" id=\"eight\">

        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4\"></br>
            <p class=\"footer-links\">
              <a href=\"#\"></a>
            </p>

          </div>

          <div class=\"col-md-4\"></br>
          <small>&copy; 2017 WI/AI-Projekt reserved.</small>
        </div>
        <div class=\"col-md-4\"></br>
        <ul class=\"social\">
          <li>
            <a href=\"#\" target=\"_blank\">
              <i class=\"fa fa-twitter \"></i>
            </a>
          </li>
          <li>
            <a href=\"#\" target=\"_blank\">
              <i class=\"fa fa-facebook\"></i>
            </a>
          </li>
          <li>
            <a href=\"#\" target=\"_blank\">
              <i class=\"fa fa-youtube-play\"></i>
            </a>
          </li>
        </ul>
      </br>

    </div>
  </div>
</div>
</footer>
{% endblock %}
</body>

</html>
", "layoutPublic.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/layoutPublic.html.twig");
    }
}
