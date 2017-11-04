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
        $__internal_bc41765990320b31a8698548972d023d8d574f332e4eaa4f5604c20e55f021d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc41765990320b31a8698548972d023d8d574f332e4eaa4f5604c20e55f021d9->enter($__internal_bc41765990320b31a8698548972d023d8d574f332e4eaa4f5604c20e55f021d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:raumInfos.html.twig"));

        $__internal_cb0a589b94e8ec18596f61018fbffa1ab2cb901c2b436328b656726858612589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0a589b94e8ec18596f61018fbffa1ab2cb901c2b436328b656726858612589->enter($__internal_cb0a589b94e8ec18596f61018fbffa1ab2cb901c2b436328b656726858612589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:raumInfos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc41765990320b31a8698548972d023d8d574f332e4eaa4f5604c20e55f021d9->leave($__internal_bc41765990320b31a8698548972d023d8d574f332e4eaa4f5604c20e55f021d9_prof);

        
        $__internal_cb0a589b94e8ec18596f61018fbffa1ab2cb901c2b436328b656726858612589->leave($__internal_cb0a589b94e8ec18596f61018fbffa1ab2cb901c2b436328b656726858612589_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c55eec5bd2c1bf6dc846983c55c7d7b5f9d55c4cb95873f0203ec8c489c62215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55eec5bd2c1bf6dc846983c55c7d7b5f9d55c4cb95873f0203ec8c489c62215->enter($__internal_c55eec5bd2c1bf6dc846983c55c7d7b5f9d55c4cb95873f0203ec8c489c62215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e34c268cf927f44a477495929ed3a63e8e81da07c79a55875a84a1a71411cde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34c268cf927f44a477495929ed3a63e8e81da07c79a55875a84a1a71411cde4->enter($__internal_e34c268cf927f44a477495929ed3a63e8e81da07c79a55875a84a1a71411cde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e34c268cf927f44a477495929ed3a63e8e81da07c79a55875a84a1a71411cde4->leave($__internal_e34c268cf927f44a477495929ed3a63e8e81da07c79a55875a84a1a71411cde4_prof);

        
        $__internal_c55eec5bd2c1bf6dc846983c55c7d7b5f9d55c4cb95873f0203ec8c489c62215->leave($__internal_c55eec5bd2c1bf6dc846983c55c7d7b5f9d55c4cb95873f0203ec8c489c62215_prof);

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
