<?php

/* HZraumReservierungBundle:RaumHtml:raumInfos.html.twig */
class __TwigTemplate_8ab17b5daa5d1c597cfc61e7062b72107bcb8cb1c39c616a68a6e58182384b56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutPublic.html.twig", "HZraumReservierungBundle:RaumHtml:raumInfos.html.twig", 1);
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
        $__internal_5eee403dc6a1ca7e94784df426fcfeda306704292bdd1901430ffd5f40cb67a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eee403dc6a1ca7e94784df426fcfeda306704292bdd1901430ffd5f40cb67a1->enter($__internal_5eee403dc6a1ca7e94784df426fcfeda306704292bdd1901430ffd5f40cb67a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:raumInfos.html.twig"));

        $__internal_2c7b01595b5639b594229c6c10b5738b8e1958bfe37a2b264e5d28febce04389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7b01595b5639b594229c6c10b5738b8e1958bfe37a2b264e5d28febce04389->enter($__internal_2c7b01595b5639b594229c6c10b5738b8e1958bfe37a2b264e5d28febce04389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:raumInfos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eee403dc6a1ca7e94784df426fcfeda306704292bdd1901430ffd5f40cb67a1->leave($__internal_5eee403dc6a1ca7e94784df426fcfeda306704292bdd1901430ffd5f40cb67a1_prof);

        
        $__internal_2c7b01595b5639b594229c6c10b5738b8e1958bfe37a2b264e5d28febce04389->leave($__internal_2c7b01595b5639b594229c6c10b5738b8e1958bfe37a2b264e5d28febce04389_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_794e11b506c3a4a68936c01c1ef528265b148c2372740a4d6a444cf52163e376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794e11b506c3a4a68936c01c1ef528265b148c2372740a4d6a444cf52163e376->enter($__internal_794e11b506c3a4a68936c01c1ef528265b148c2372740a4d6a444cf52163e376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62f49230bdf653202e9bfb7d67f26872be01316b1e82e172f7c110f368397435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f49230bdf653202e9bfb7d67f26872be01316b1e82e172f7c110f368397435->enter($__internal_62f49230bdf653202e9bfb7d67f26872be01316b1e82e172f7c110f368397435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <br><br><br><br><br><br>

  <div class=\"alt-grid\">
    <div class=\"container\">
      <div class=\"infosRaum\">
        Raum Information:
      </div>
      <br>
      <div class=\"col-lg-4\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "image", array()), "webPath", array())), "html", null, true);
        echo "\" alt=\"\" width=\"430\" height=\"300\">
      </div>
      <div class=\"col-lg-8 \">
        <section id=\"categorie\">
          <div class=\"infosNummer\">
            Raum: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "nummer", array()), "html", null, true);
        echo "
          </div>
          <br>
          <div class=\"detailRaum\">
            <ul>
              <li>
                Sitzplätze: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "sitzplatze", array()), "html", null, true);
        echo "
              </li>
              <li>
                Beamer: ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "beamer", array()), "html", null, true);
        echo "
              </li>
              <li>
                Steckdose: ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "steckdose", array()), "html", null, true);
        echo "
              </li>
              <li>
                USB Anschlüsse: ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "usbAnschluss", array()), "html", null, true);
        echo "
              </li>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<br>
<div class=\"weiterButton\">
  
  <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("h_zraum_reservierung_reservierung", array("raumId" => $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "id", array()), "raumFrei" => $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "frei", array()))), "html", null, true);
        echo "\">

  <button class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"button\" name=\"button\">Weiter</button></a>
</div>
<br>
";
        
        $__internal_62f49230bdf653202e9bfb7d67f26872be01316b1e82e172f7c110f368397435->leave($__internal_62f49230bdf653202e9bfb7d67f26872be01316b1e82e172f7c110f368397435_prof);

        
        $__internal_794e11b506c3a4a68936c01c1ef528265b148c2372740a4d6a444cf52163e376->leave($__internal_794e11b506c3a4a68936c01c1ef528265b148c2372740a4d6a444cf52163e376_prof);

    }

    public function getTemplateName()
    {
        return "HZraumReservierungBundle:RaumHtml:raumInfos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  95 => 33,  89 => 30,  83 => 27,  77 => 24,  68 => 18,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
  <br><br><br><br><br><br>

  <div class=\"alt-grid\">
    <div class=\"container\">
      <div class=\"infosRaum\">
        Raum Information:
      </div>
      <br>
      <div class=\"col-lg-4\">
        <img src=\"{{asset(infos.image.webPath)}}\" alt=\"\" width=\"430\" height=\"300\">
      </div>
      <div class=\"col-lg-8 \">
        <section id=\"categorie\">
          <div class=\"infosNummer\">
            Raum: {{infos.nummer}}
          </div>
          <br>
          <div class=\"detailRaum\">
            <ul>
              <li>
                Sitzplätze: {{infos.sitzplatze}}
              </li>
              <li>
                Beamer: {{infos.beamer}}
              </li>
              <li>
                Steckdose: {{infos.steckdose}}
              </li>
              <li>
                USB Anschlüsse: {{infos.usbAnschluss}}
              </li>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<br>
<div class=\"weiterButton\">
  
  <a href=\"{{ path('h_zraum_reservierung_reservierung',{'raumId': infos.id, 'raumFrei': infos.frei}) }}\">

  <button class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"button\" name=\"button\">Weiter</button></a>
</div>
<br>
{% endblock %}
", "HZraumReservierungBundle:RaumHtml:raumInfos.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/src/HZ/raumReservierungBundle/Resources/views/RaumHtml/raumInfos.html.twig");
    }
}
