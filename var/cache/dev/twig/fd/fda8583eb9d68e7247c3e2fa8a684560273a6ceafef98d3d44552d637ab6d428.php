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
        $__internal_5ec616f971e122565da8920b6b57c084395796c65f55685ac4d8f61842d6696c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec616f971e122565da8920b6b57c084395796c65f55685ac4d8f61842d6696c->enter($__internal_5ec616f971e122565da8920b6b57c084395796c65f55685ac4d8f61842d6696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig"));

        $__internal_5e23cf90581b5dcd30d2280db7a8e57da41f5d1931838a08217d73c492616d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e23cf90581b5dcd30d2280db7a8e57da41f5d1931838a08217d73c492616d0c->enter($__internal_5e23cf90581b5dcd30d2280db7a8e57da41f5d1931838a08217d73c492616d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ec616f971e122565da8920b6b57c084395796c65f55685ac4d8f61842d6696c->leave($__internal_5ec616f971e122565da8920b6b57c084395796c65f55685ac4d8f61842d6696c_prof);

        
        $__internal_5e23cf90581b5dcd30d2280db7a8e57da41f5d1931838a08217d73c492616d0c->leave($__internal_5e23cf90581b5dcd30d2280db7a8e57da41f5d1931838a08217d73c492616d0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c2f351b40d87bdc9eb8135d686fd164102494d9efc754685980bbdf296676d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2f351b40d87bdc9eb8135d686fd164102494d9efc754685980bbdf296676d1->enter($__internal_5c2f351b40d87bdc9eb8135d686fd164102494d9efc754685980bbdf296676d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c071e292b1c20111cae66b2a0d540433e1c40942cb3f02bd832439b5e58e4ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c071e292b1c20111cae66b2a0d540433e1c40942cb3f02bd832439b5e58e4ef4->enter($__internal_c071e292b1c20111cae66b2a0d540433e1c40942cb3f02bd832439b5e58e4ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c071e292b1c20111cae66b2a0d540433e1c40942cb3f02bd832439b5e58e4ef4->leave($__internal_c071e292b1c20111cae66b2a0d540433e1c40942cb3f02bd832439b5e58e4ef4_prof);

        
        $__internal_5c2f351b40d87bdc9eb8135d686fd164102494d9efc754685980bbdf296676d1->leave($__internal_5c2f351b40d87bdc9eb8135d686fd164102494d9efc754685980bbdf296676d1_prof);

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
