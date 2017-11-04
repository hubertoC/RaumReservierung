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
        $__internal_b5b5bb9ee9f6007df4c0333d3c50761f4ef2ea14050debe6613ada58090109ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b5bb9ee9f6007df4c0333d3c50761f4ef2ea14050debe6613ada58090109ca->enter($__internal_b5b5bb9ee9f6007df4c0333d3c50761f4ef2ea14050debe6613ada58090109ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:index.html.twig"));

        $__internal_c1e546dab8d7bfbee5083f2b894a5ec4dd79f9624e37745db93eff90069b3709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e546dab8d7bfbee5083f2b894a5ec4dd79f9624e37745db93eff90069b3709->enter($__internal_c1e546dab8d7bfbee5083f2b894a5ec4dd79f9624e37745db93eff90069b3709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5b5bb9ee9f6007df4c0333d3c50761f4ef2ea14050debe6613ada58090109ca->leave($__internal_b5b5bb9ee9f6007df4c0333d3c50761f4ef2ea14050debe6613ada58090109ca_prof);

        
        $__internal_c1e546dab8d7bfbee5083f2b894a5ec4dd79f9624e37745db93eff90069b3709->leave($__internal_c1e546dab8d7bfbee5083f2b894a5ec4dd79f9624e37745db93eff90069b3709_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_997271a9eb8297bbfbdbbf02bba6b9e16be51dbce4462242a180c57b7dd499fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997271a9eb8297bbfbdbbf02bba6b9e16be51dbce4462242a180c57b7dd499fb->enter($__internal_997271a9eb8297bbfbdbbf02bba6b9e16be51dbce4462242a180c57b7dd499fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df40eedc0e8a2c85a0f49cd9c50eacd4d47627276f8cc32bb669b82635596997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df40eedc0e8a2c85a0f49cd9c50eacd4d47627276f8cc32bb669b82635596997->enter($__internal_df40eedc0e8a2c85a0f49cd9c50eacd4d47627276f8cc32bb669b82635596997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gebaeude"]) ? $context["gebaeude"] : $this->getContext($context, "gebaeude")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "              <div class=\"gallery\">
                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("h_zraum_reservierung_gebaeudeRaum", array("gebaeude" => $this->getAttribute($context["item"], "id", array()), "name" => $this->getAttribute($context["item"], "name", array()))), "html", null, true);
            echo "\">
                  <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "image", array()), "webPath", array())), "html", null, true);
            echo "\">
                </a>
                <div class=\"desc\">
                  ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "
                </div>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "          </section>
        </div>
      </div>
    </div>
  </div>
  <br>
";
        
        $__internal_df40eedc0e8a2c85a0f49cd9c50eacd4d47627276f8cc32bb669b82635596997->leave($__internal_df40eedc0e8a2c85a0f49cd9c50eacd4d47627276f8cc32bb669b82635596997_prof);

        
        $__internal_997271a9eb8297bbfbdbbf02bba6b9e16be51dbce4462242a180c57b7dd499fb->leave($__internal_997271a9eb8297bbfbdbbf02bba6b9e16be51dbce4462242a180c57b7dd499fb_prof);

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
        return array (  111 => 46,  101 => 42,  95 => 39,  91 => 38,  88 => 37,  84 => 36,  49 => 3,  40 => 2,  11 => 1,);
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
