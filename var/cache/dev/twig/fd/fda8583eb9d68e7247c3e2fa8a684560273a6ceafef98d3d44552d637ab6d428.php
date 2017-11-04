<?php

/* HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig */
class __TwigTemplate_cb1254da5ab25c994c3a6d8a76ba526f074bc68d50bdcb6b2db1e61233d4a114 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutPublic.html.twig", "HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig", 1);
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
        $__internal_35189d81974cae0259ecd22040359b1c461d5f3ed445f96cd13d64045c95d4af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35189d81974cae0259ecd22040359b1c461d5f3ed445f96cd13d64045c95d4af->enter($__internal_35189d81974cae0259ecd22040359b1c461d5f3ed445f96cd13d64045c95d4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig"));

        $__internal_dcfb396fecf8945a905043bf9d8898a0f7db82e6e3402521a5001b4fbcd30b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfb396fecf8945a905043bf9d8898a0f7db82e6e3402521a5001b4fbcd30b7f->enter($__internal_dcfb396fecf8945a905043bf9d8898a0f7db82e6e3402521a5001b4fbcd30b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35189d81974cae0259ecd22040359b1c461d5f3ed445f96cd13d64045c95d4af->leave($__internal_35189d81974cae0259ecd22040359b1c461d5f3ed445f96cd13d64045c95d4af_prof);

        
        $__internal_dcfb396fecf8945a905043bf9d8898a0f7db82e6e3402521a5001b4fbcd30b7f->leave($__internal_dcfb396fecf8945a905043bf9d8898a0f7db82e6e3402521a5001b4fbcd30b7f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319a500cd16450e5b2f60a9a92ea7a79fb552f15d51149e4eeec82d05e590be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319a500cd16450e5b2f60a9a92ea7a79fb552f15d51149e4eeec82d05e590be6->enter($__internal_319a500cd16450e5b2f60a9a92ea7a79fb552f15d51149e4eeec82d05e590be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ac25f4d302323d3b5060225db48c9be980ae61ba283598aa6afe5693e121b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac25f4d302323d3b5060225db48c9be980ae61ba283598aa6afe5693e121b10->enter($__internal_7ac25f4d302323d3b5060225db48c9be980ae61ba283598aa6afe5693e121b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <br><br><br>
  <div class=\"container\" id=\"cont\">
    <section class=\"row\">
      <div class=\"col-md-12  text-center\">
        <h3 class=\"title\">
          <br><br>
          <span class=\"themecolor\">
            Gebaeude:
            <spam class=\"catName\">
              <U>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</spam>
            </U>
          </span>
        </h3>
        <br>
      </div>
      <div class=\"container\">
        <br><br>
        <div class=\"row\">
          <div class=\"col-md-12\">
            <!-- Nav tabs -->
            <div class=\"card\">
              <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li role=\"presentation\" class=\"active\">
                  <a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Dozent</a>
                </li>
                <li role=\"presentation\">
                  <a href=\"#messages\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Student</a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">

                  <div class=\"login-card\">

                    <div class=\"espace\"></div>

                    <section class=\"row\">
                      <div class=\"col-md-12\">
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["raeume"]) ? $context["raeume"] : $this->getContext($context, "raeume")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "                          <div class=\"grid\" id=\"London\">
                            <figure class=\"effect-sarah\">
                              <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"img13\"/>
                              <figcaption>
                                <h2>
                                  <span>Raum:
                                  </span>
                                  &nbsp;&nbsp;<span>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nummer", array()), "html", null, true);
            echo "</span>
                                </h2>
                                <p>Buchung und weitere Informationen!</p>
                                <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("h_zraum_reservierung_raumInfos", array("raum" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\"></a>
                              </figcaption>
                            </figure>
                          </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                      </section>
                      <br>
                    </div>
                  </div>

                  <div role=\"tabpanel\" class=\"tab-pane\" id=\"messages\">
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["studentRaum"]) ? $context["studentRaum"] : $this->getContext($context, "studentRaum")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            echo "                      <div class=\"grid\" id=\"\">
                        <figure class=\"effect-sarah\">
                          <img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["item"], "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"img13\"/>
                          <figcaption>
                            <h2>
                              <span>Raum:
                              </span>
                              &nbsp;&nbsp;<span>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nummer", array()), "html", null, true);
            echo "</span>
                            </h2>
                            <p>Buchung und weitere Informationen!</p>
                            <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("h_zraum_reservierung_raumInfos", array("raum" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\"></a>
                          </figcaption>
                        </figure>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                  </div>
                </section>
              </div>

            </div>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>

";
        
        $__internal_7ac25f4d302323d3b5060225db48c9be980ae61ba283598aa6afe5693e121b10->leave($__internal_7ac25f4d302323d3b5060225db48c9be980ae61ba283598aa6afe5693e121b10_prof);

        
        $__internal_319a500cd16450e5b2f60a9a92ea7a79fb552f15d51149e4eeec82d05e590be6->leave($__internal_319a500cd16450e5b2f60a9a92ea7a79fb552f15d51149e4eeec82d05e590be6_prof);

    }

    public function getTemplateName()
    {
        return "HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 83,  158 => 78,  152 => 75,  144 => 70,  140 => 68,  136 => 67,  128 => 61,  117 => 56,  111 => 53,  103 => 48,  99 => 46,  95 => 45,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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

  <br><br><br>
  <div class=\"container\" id=\"cont\">
    <section class=\"row\">
      <div class=\"col-md-12  text-center\">
        <h3 class=\"title\">
          <br><br>
          <span class=\"themecolor\">
            Gebaeude:
            <spam class=\"catName\">
              <U>{{ name }}</spam>
            </U>
          </span>
        </h3>
        <br>
      </div>
      <div class=\"container\">
        <br><br>
        <div class=\"row\">
          <div class=\"col-md-12\">
            <!-- Nav tabs -->
            <div class=\"card\">
              <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li role=\"presentation\" class=\"active\">
                  <a href=\"#home\" aria-controls=\"home\" role=\"tab\" data-toggle=\"tab\">Dozent</a>
                </li>
                <li role=\"presentation\">
                  <a href=\"#messages\" aria-controls=\"messages\" role=\"tab\" data-toggle=\"tab\">Student</a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">

                  <div class=\"login-card\">

                    <div class=\"espace\"></div>

                    <section class=\"row\">
                      <div class=\"col-md-12\">
                        {% for item in raeume %}
                          <div class=\"grid\" id=\"London\">
                            <figure class=\"effect-sarah\">
                              <img src=\"{{ asset(item.image.webPath)}}\" alt=\"img13\"/>
                              <figcaption>
                                <h2>
                                  <span>Raum:
                                  </span>
                                  &nbsp;&nbsp;<span>{{item.nummer}}</span>
                                </h2>
                                <p>Buchung und weitere Informationen!</p>
                                <a href=\"{{ path('h_zraum_reservierung_raumInfos', {'raum': item.id}) }}\"></a>
                              </figcaption>
                            </figure>
                          </div>
                        {% endfor %}
                      </section>
                      <br>
                    </div>
                  </div>

                  <div role=\"tabpanel\" class=\"tab-pane\" id=\"messages\">
                    {% for item in studentRaum %}
                      <div class=\"grid\" id=\"\">
                        <figure class=\"effect-sarah\">
                          <img src=\"{{ asset(item.image.webPath)}}\" alt=\"img13\"/>
                          <figcaption>
                            <h2>
                              <span>Raum:
                              </span>
                              &nbsp;&nbsp;<span>{{item.nummer}}</span>
                            </h2>
                            <p>Buchung und weitere Informationen!</p>
                            <a href=\"{{ path('h_zraum_reservierung_raumInfos', {'raum': item.id}) }}\"></a>
                          </figcaption>
                        </figure>
                      </div>
                    {% endfor %}
                  </div>
                </section>
              </div>

            </div>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>

{% endblock %}
", "HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/src/HZ/raumReservierungBundle/Resources/views/RaumHtml/gebauedeRaum.html.twig");
    }
}
