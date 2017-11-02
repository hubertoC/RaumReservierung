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
        $__internal_bec6e18e85f9a044ec2e75826fbfb5d4229f322b5a1fe621bf228d542f8d3636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bec6e18e85f9a044ec2e75826fbfb5d4229f322b5a1fe621bf228d542f8d3636->enter($__internal_bec6e18e85f9a044ec2e75826fbfb5d4229f322b5a1fe621bf228d542f8d3636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutPublic.html.twig"));

        $__internal_534cab1b1b3493fc8f4a5012c31eb8ba139ee772c5499da44518498524dd91e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534cab1b1b3493fc8f4a5012c31eb8ba139ee772c5499da44518498524dd91e2->enter($__internal_534cab1b1b3493fc8f4a5012c31eb8ba139ee772c5499da44518498524dd91e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutPublic.html.twig"));

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
        
        $__internal_bec6e18e85f9a044ec2e75826fbfb5d4229f322b5a1fe621bf228d542f8d3636->leave($__internal_bec6e18e85f9a044ec2e75826fbfb5d4229f322b5a1fe621bf228d542f8d3636_prof);

        
        $__internal_534cab1b1b3493fc8f4a5012c31eb8ba139ee772c5499da44518498524dd91e2->leave($__internal_534cab1b1b3493fc8f4a5012c31eb8ba139ee772c5499da44518498524dd91e2_prof);

    }

    // line 22
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8a8db0adba4cd34d7bb2776cf87bfe17bceab0e6fed1098c6c25549ecdcff78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a8db0adba4cd34d7bb2776cf87bfe17bceab0e6fed1098c6c25549ecdcff78->enter($__internal_c8a8db0adba4cd34d7bb2776cf87bfe17bceab0e6fed1098c6c25549ecdcff78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1ac318ecc7f6e3eb56466c6644f9c1982adc42e328aac30dcf551f7826d1e922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac318ecc7f6e3eb56466c6644f9c1982adc42e328aac30dcf551f7826d1e922->enter($__internal_1ac318ecc7f6e3eb56466c6644f9c1982adc42e328aac30dcf551f7826d1e922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1ac318ecc7f6e3eb56466c6644f9c1982adc42e328aac30dcf551f7826d1e922->leave($__internal_1ac318ecc7f6e3eb56466c6644f9c1982adc42e328aac30dcf551f7826d1e922_prof);

        
        $__internal_c8a8db0adba4cd34d7bb2776cf87bfe17bceab0e6fed1098c6c25549ecdcff78->leave($__internal_c8a8db0adba4cd34d7bb2776cf87bfe17bceab0e6fed1098c6c25549ecdcff78_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e189e60d03404d81d4f547a31f59ed4822c174477c8c9c52c407ed43aa5dfaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e189e60d03404d81d4f547a31f59ed4822c174477c8c9c52c407ed43aa5dfaf->enter($__internal_9e189e60d03404d81d4f547a31f59ed4822c174477c8c9c52c407ed43aa5dfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1964b59c49023c54e228581558edb9cbc9a8996ba25cb5762ef1384b7747531f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1964b59c49023c54e228581558edb9cbc9a8996ba25cb5762ef1384b7747531f->enter($__internal_1964b59c49023c54e228581558edb9cbc9a8996ba25cb5762ef1384b7747531f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1964b59c49023c54e228581558edb9cbc9a8996ba25cb5762ef1384b7747531f->leave($__internal_1964b59c49023c54e228581558edb9cbc9a8996ba25cb5762ef1384b7747531f_prof);

        
        $__internal_9e189e60d03404d81d4f547a31f59ed4822c174477c8c9c52c407ed43aa5dfaf->leave($__internal_9e189e60d03404d81d4f547a31f59ed4822c174477c8c9c52c407ed43aa5dfaf_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a8d3627572b2a8fa2952ab5298f06c59e402548f4a0242b0e7bbed10c99b1997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d3627572b2a8fa2952ab5298f06c59e402548f4a0242b0e7bbed10c99b1997->enter($__internal_a8d3627572b2a8fa2952ab5298f06c59e402548f4a0242b0e7bbed10c99b1997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_8fdea331ee024fadbab29d962d0fdb44b256b728f3294b09ee4dae5599d02cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fdea331ee024fadbab29d962d0fdb44b256b728f3294b09ee4dae5599d02cd8->enter($__internal_8fdea331ee024fadbab29d962d0fdb44b256b728f3294b09ee4dae5599d02cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_8fdea331ee024fadbab29d962d0fdb44b256b728f3294b09ee4dae5599d02cd8->leave($__internal_8fdea331ee024fadbab29d962d0fdb44b256b728f3294b09ee4dae5599d02cd8_prof);

        
        $__internal_a8d3627572b2a8fa2952ab5298f06c59e402548f4a0242b0e7bbed10c99b1997->leave($__internal_a8d3627572b2a8fa2952ab5298f06c59e402548f4a0242b0e7bbed10c99b1997_prof);

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
