<?php

/* HZraumReservierungBundle:RaumHtml:index.html.twig */
class __TwigTemplate_dc6382425bdce3b4204d90d489c970a938bf0791c4439bd7dfc166718ff12100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutPublic.html.twig", "HZraumReservierungBundle:RaumHtml:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutPublic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_367bdc46b0fdca1e2edc3b40df1ea55471febdd99fd9673fa2a0b41ada4bbf3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367bdc46b0fdca1e2edc3b40df1ea55471febdd99fd9673fa2a0b41ada4bbf3e->enter($__internal_367bdc46b0fdca1e2edc3b40df1ea55471febdd99fd9673fa2a0b41ada4bbf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:index.html.twig"));

        $__internal_0925abed281f57e17da4f158fdb0ad0e9cb3e3d39131c1049b78d1a9947b3586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0925abed281f57e17da4f158fdb0ad0e9cb3e3d39131c1049b78d1a9947b3586->enter($__internal_0925abed281f57e17da4f158fdb0ad0e9cb3e3d39131c1049b78d1a9947b3586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_367bdc46b0fdca1e2edc3b40df1ea55471febdd99fd9673fa2a0b41ada4bbf3e->leave($__internal_367bdc46b0fdca1e2edc3b40df1ea55471febdd99fd9673fa2a0b41ada4bbf3e_prof);

        
        $__internal_0925abed281f57e17da4f158fdb0ad0e9cb3e3d39131c1049b78d1a9947b3586->leave($__internal_0925abed281f57e17da4f158fdb0ad0e9cb3e3d39131c1049b78d1a9947b3586_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_32b985e84663e9e583fc85e528143bd5342721ed622168efcdee9950d9af6c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b985e84663e9e583fc85e528143bd5342721ed622168efcdee9950d9af6c88->enter($__internal_32b985e84663e9e583fc85e528143bd5342721ed622168efcdee9950d9af6c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c20165130f77a6d367ca6c3e4e210a188306e6aabafc1dadf0cfe2a638c227f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20165130f77a6d367ca6c3e4e210a188306e6aabafc1dadf0cfe2a638c227f2->enter($__internal_c20165130f77a6d367ca6c3e4e210a188306e6aabafc1dadf0cfe2a638c227f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div class=\"jumbotron\">
    <div class=\"container\">
      <h1> Raum Reservierung </h1>
    </div>
  </div>

  <div class=\"alt-grid\">
    <div class=\"container\">

      <div class=\"row\">
        <div class=\"col-lg-5 description\"><br>
          <div class=\"titelDecription\">
          Willkommen auf unsere Webseite,<br><br>
        </div>

in Rahmen des WI&AI Projekt sind wir von Professor Doktor Christian Kohls beauftragt worden eine Webseite zu erstellen.<br>

Unsere Webseite dient dazu bestimmte Räume unsere Hochschule zu Buchen.<br><br>
Warum sollte man ein Raum online buchen, obwohl man die Möglichkeit hat direkt in den Raum hereingehen und nutzen kann, wenn er frei ist?<br>

Es gabt oft das Problem, dass man bei der Benutzung eines Raumes immer gestört ist, wenn Leute immer hereinkommen.<br><br>

Deswegen haben wir eine Webseite erstellt, womit wir viele verschieden räumen verwalten. Wir geben ihnen somit die Möglichkeit frühzeitig ein Raum für ihre Veranstaltungen zu buchen. Sie haben auch die Möglichkeit, wenn sie schon vor der Tür stehen zu prüfen, ob der Raum frei ist. Indem sie den QR-Code, der an der Tür ist, einscannen. So werden sie direkt zu unsere Webseite weitergeleitet, wo sie sich die Verfügbarkeit den gewünschten Raum anschauen können.<br><br><br>


Erstellt von:


Hubert Tegang, Raissa Tchounga, Marie Kouadjane, Josefa Pagui.<br><br>

        </div>

        <div class=\"col-lg-6 col-lg-offset-1\">

          <section id=\"categorie\">
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gebaeude"]) ? $context["gebaeude"] : $this->getContext($context, "gebaeude")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "              <div class=\"gallery\">
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("h_zraum_reservierung_gebaeudeRaum", array("gebaeude" => $this->getAttribute($context["item"], "id", array()), "name" => $this->getAttribute($context["item"], "name", array()))), "html", null, true);
            echo "\">
                  <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "image", array()), "webPath", array())), "html", null, true);
            echo "\">
                </a>
                <div class=\"desc\">
                  ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "
                </div>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "          </section>
        </div>
      </div>
    </div>
  </div>
  <br>
";
        
        $__internal_c20165130f77a6d367ca6c3e4e210a188306e6aabafc1dadf0cfe2a638c227f2->leave($__internal_c20165130f77a6d367ca6c3e4e210a188306e6aabafc1dadf0cfe2a638c227f2_prof);

        
        $__internal_32b985e84663e9e583fc85e528143bd5342721ed622168efcdee9950d9af6c88->leave($__internal_32b985e84663e9e583fc85e528143bd5342721ed622168efcdee9950d9af6c88_prof);

    }

    public function getTemplateName()
    {
        return "HZraumReservierungBundle:RaumHtml:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 48,  103 => 44,  97 => 41,  93 => 40,  90 => 39,  86 => 38,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layoutPublic.html.twig' %}
{% block body %}
  <div class=\"jumbotron\">
    <div class=\"container\">
      <h1> Raum Reservierung </h1>
    </div>
  </div>

  <div class=\"alt-grid\">
    <div class=\"container\">

      <div class=\"row\">
        <div class=\"col-lg-5 description\"><br>
          <div class=\"titelDecription\">
          Willkommen auf unsere Webseite,<br><br>
        </div>

in Rahmen des WI&AI Projekt sind wir von Professor Doktor Christian Kohls beauftragt worden eine Webseite zu erstellen.<br>

Unsere Webseite dient dazu bestimmte Räume unsere Hochschule zu Buchen.<br><br>
Warum sollte man ein Raum online buchen, obwohl man die Möglichkeit hat direkt in den Raum hereingehen und nutzen kann, wenn er frei ist?<br>

Es gabt oft das Problem, dass man bei der Benutzung eines Raumes immer gestört ist, wenn Leute immer hereinkommen.<br><br>

Deswegen haben wir eine Webseite erstellt, womit wir viele verschieden räumen verwalten. Wir geben ihnen somit die Möglichkeit frühzeitig ein Raum für ihre Veranstaltungen zu buchen. Sie haben auch die Möglichkeit, wenn sie schon vor der Tür stehen zu prüfen, ob der Raum frei ist. Indem sie den QR-Code, der an der Tür ist, einscannen. So werden sie direkt zu unsere Webseite weitergeleitet, wo sie sich die Verfügbarkeit den gewünschten Raum anschauen können.<br><br><br>


Erstellt von:


Hubert Tegang, Raissa Tchounga, Marie Kouadjane, Josefa Pagui.<br><br>

        </div>

        <div class=\"col-lg-6 col-lg-offset-1\">

          <section id=\"categorie\">
            {% for item in gebaeude %}
              <div class=\"gallery\">
                <a href=\"{{ path('h_zraum_reservierung_gebaeudeRaum', {'gebaeude': item.id, 'name': item.name}) }}\">
                  <img src=\"{{ asset(item.image.webPath)}}\">
                </a>
                <div class=\"desc\">
                  {{item.name}}
                </div>
              </div>
            {% endfor %}
          </section>
        </div>
      </div>
    </div>
  </div>
  <br>
{% endblock %}
", "HZraumReservierungBundle:RaumHtml:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/src/HZ/raumReservierungBundle/Resources/views/RaumHtml/index.html.twig");
    }
}
