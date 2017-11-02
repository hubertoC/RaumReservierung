<?php

/* HZraumReservierungBundle:RaumHtml:reservierung.html.twig */
class __TwigTemplate_dc61a72e554e5343ac3945030c0fcfec925cc70e8f4cec2b12b4897cc9ef4050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutPublic.html.twig", "HZraumReservierungBundle:RaumHtml:reservierung.html.twig", 1);
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
        $__internal_1b35b75fbb6f759189b7b6f42113ee0010cfd15642d91e31a73bbddedd6efcc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b35b75fbb6f759189b7b6f42113ee0010cfd15642d91e31a73bbddedd6efcc7->enter($__internal_1b35b75fbb6f759189b7b6f42113ee0010cfd15642d91e31a73bbddedd6efcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:reservierung.html.twig"));

        $__internal_a01761b0810618b5129a9763f23d35ace76a451814ba28188308efd7463df923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01761b0810618b5129a9763f23d35ace76a451814ba28188308efd7463df923->enter($__internal_a01761b0810618b5129a9763f23d35ace76a451814ba28188308efd7463df923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:reservierung.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b35b75fbb6f759189b7b6f42113ee0010cfd15642d91e31a73bbddedd6efcc7->leave($__internal_1b35b75fbb6f759189b7b6f42113ee0010cfd15642d91e31a73bbddedd6efcc7_prof);

        
        $__internal_a01761b0810618b5129a9763f23d35ace76a451814ba28188308efd7463df923->leave($__internal_a01761b0810618b5129a9763f23d35ace76a451814ba28188308efd7463df923_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_39cbbafdba5e38ed1bb6d560e2ee56dbd42d96cd691769453380e7892bb06bdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39cbbafdba5e38ed1bb6d560e2ee56dbd42d96cd691769453380e7892bb06bdc->enter($__internal_39cbbafdba5e38ed1bb6d560e2ee56dbd42d96cd691769453380e7892bb06bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc6e550bb7e2866592c286ce38340681f897d5688342fe2cbf5ba776fd6c2fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6e550bb7e2866592c286ce38340681f897d5688342fe2cbf5ba776fd6c2fd0->enter($__internal_dc6e550bb7e2866592c286ce38340681f897d5688342fe2cbf5ba776fd6c2fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
  <style media=\"screen\">
    .Disponible {
      background-color: red;
      color: #FFF;
      border-radius: 0.1em;
      border-color: #000;
    }
    .NoDisponible {
      color: #000;
    }

  </style>
  <br><br><br>
  ";
        // line 17
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") && ((isset($context["raumFrei"]) ? $context["raumFrei"] : $this->getContext($context, "raumFrei")) == "yes")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOZENT"))) {
            // line 18
            echo "    <div class=\"alt-grid \" id=\"reservation\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-lg-4\">
            <br><br>
            <div class=\"row col-lg-12 calenderPiker\">
              <div class=\"testform\" id=\"datepicker\">
                ";
            // line 26
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "user-notice"), "method")) {
                // line 27
                echo "                  <div class=\"alert alert-success\">
                    ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "user-notice"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 29
                    echo "                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" name=\"button\">

                        <span aria-hidden=\"true\">&times;
                        </span>
                        <span class=\"sr-only\">Close</span>
                      </button>
                      <a href=\"/\" class=\"alert-link\">";
                    // line 35
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "</a>

                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                  </div>
                ";
            }
            // line 40
            echo "
                <div class=\"bookingTitle\">
                  <br>
                  Wann findet Ihre Veranstaltung statt?
                </div>
                ";
            // line 45
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
                ";
            // line 46
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row', array("label" => "Event Title *", "attr" => array("class" => "form-control")));
            echo "
                <br>
                ";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "start", array()), 'row', array("label" => "Start Datum *", "attr" => array("id" => "")));
            echo "
                <br>
                ";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "end", array()), 'row', array("label" => "Ende Datum *"));
            echo "
                <br>
                ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'row', array("label" => "Event Link", "attr" => array("class" => "form-control")));
            echo "
                <br>
                ";
            // line 54
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 55
                echo "                  ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "className", array()), 'row', array("label" => "Css Color", "attr" => array("class" => "form-control")));
                echo "
                ";
            }
            // line 57
            echo "
                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Reservieren\"/>
                <div style=\"display:none;\">
                  ";
            // line 60
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "className", array()), 'row', array("label" => "Css Color"));
            echo "
                </div>
                ";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
                ";
            // line 63
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "

              </div>
              <div class=\"legende\">
                Legende:
              </div>
              <div class=\"rectangleReserver\">
                <span>Gebucht</span>
              </div>
              <br><br>
              <div class=\"rectangleFrei\">
                <span>Verfügbar</span>
              </div>
              <br>
              <div class=\"rectangleBlockiert\">
                <img src=\"https://upload.wikimedia.org/wikipedia/commons/9/97/Crystal_Project_Lock.png\" alt=\"\">
                <span>Gesperrt</span>
              </div>
            </div>
            <br><br><br><br><br><br><br>

          </div>
          <br><br>
          <div style=\"background-color: #fff; padding:0em\" class=\"col-lg-offset-1 col-lg-7 \">
            <div id='calendar'></div>

          </div>
          <br>
        </div>
      </div>
    </div>
  ";
        } else {
            // line 95
            echo "    <div class=\"jumbotron error\">
      <h2>Diese Raum ist leider für Student nicht frei geschalten!!!</h2>
    </div>
  ";
        }
        // line 99
        echo "
  <script type=\"text/javascript\">
  
    \$(document).ready(function() {
      \$('#calendar').fullCalendar({
        header: {
          center: 'agendaWeek'
        },
        events: {
            url: \"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("h_zraum_reservierung_search", array("raumId" => (isset($context["raumId"]) ? $context["raumId"] : $this->getContext($context, "raumId")))), "html", null, true);
        echo "\",
            console.console.log();
        }

      })

    });
  </script>

";
        
        $__internal_dc6e550bb7e2866592c286ce38340681f897d5688342fe2cbf5ba776fd6c2fd0->leave($__internal_dc6e550bb7e2866592c286ce38340681f897d5688342fe2cbf5ba776fd6c2fd0_prof);

        
        $__internal_39cbbafdba5e38ed1bb6d560e2ee56dbd42d96cd691769453380e7892bb06bdc->leave($__internal_39cbbafdba5e38ed1bb6d560e2ee56dbd42d96cd691769453380e7892bb06bdc_prof);

    }

    public function getTemplateName()
    {
        return "HZraumReservierungBundle:RaumHtml:reservierung.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 108,  201 => 99,  195 => 95,  160 => 63,  156 => 62,  151 => 60,  146 => 57,  140 => 55,  138 => 54,  133 => 52,  128 => 50,  123 => 48,  118 => 46,  114 => 45,  107 => 40,  103 => 38,  94 => 35,  86 => 29,  82 => 28,  79 => 27,  77 => 26,  67 => 18,  65 => 17,  49 => 3,  40 => 2,  11 => 1,);
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

  <style media=\"screen\">
    .Disponible {
      background-color: red;
      color: #FFF;
      border-radius: 0.1em;
      border-color: #000;
    }
    .NoDisponible {
      color: #000;
    }

  </style>
  <br><br><br>
  {% if is_granted('ROLE_STUDENT')and raumFrei == 'yes' or is_granted('ROLE_DOZENT') %}
    <div class=\"alt-grid \" id=\"reservation\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-lg-4\">
            <br><br>
            <div class=\"row col-lg-12 calenderPiker\">
              <div class=\"testform\" id=\"datepicker\">
                {% if app.session.flashbag.has('user-notice') %}
                  <div class=\"alert alert-success\">
                    {% for msg in app.session.flashbag.get('user-notice') %}
                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" name=\"button\">

                        <span aria-hidden=\"true\">&times;
                        </span>
                        <span class=\"sr-only\">Close</span>
                      </button>
                      <a href=\"/\" class=\"alert-link\">{{ msg }}</a>

                    {% endfor %}
                  </div>
                {% endif %}

                <div class=\"bookingTitle\">
                  <br>
                  Wann findet Ihre Veranstaltung statt?
                </div>
                {{ form_start(form) }}
                {{ form_row(form.title , {'label': 'Event Title *','attr':{'class':'form-control'}})}}
                <br>
                {{ form_row(form.start, {'label': 'Start Datum *','attr':{'id':''}})}}
                <br>
                {{ form_row(form.end, {'label': 'Ende Datum *'})}}
                <br>
                {{ form_row(form.url , {'label': 'Event Link','attr':{'class':'form-control'}})}}
                <br>
                {% if is_granted('ROLE_ADMIN') %}
                  {{ form_row(form.className , {'label': 'Css Color','attr':{'class':'form-control'}})}}
                {% endif %}

                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Reservieren\"/>
                <div style=\"display:none;\">
                  {{ form_row(form.className , {'label': 'Css Color'})}}
                </div>
                {{ form_widget(form) }}
                {{ form_end(form) }}

              </div>
              <div class=\"legende\">
                Legende:
              </div>
              <div class=\"rectangleReserver\">
                <span>Gebucht</span>
              </div>
              <br><br>
              <div class=\"rectangleFrei\">
                <span>Verfügbar</span>
              </div>
              <br>
              <div class=\"rectangleBlockiert\">
                <img src=\"https://upload.wikimedia.org/wikipedia/commons/9/97/Crystal_Project_Lock.png\" alt=\"\">
                <span>Gesperrt</span>
              </div>
            </div>
            <br><br><br><br><br><br><br>

          </div>
          <br><br>
          <div style=\"background-color: #fff; padding:0em\" class=\"col-lg-offset-1 col-lg-7 \">
            <div id='calendar'></div>

          </div>
          <br>
        </div>
      </div>
    </div>
  {% else %}
    <div class=\"jumbotron error\">
      <h2>Diese Raum ist leider für Student nicht frei geschalten!!!</h2>
    </div>
  {% endif %}

  <script type=\"text/javascript\">
  
    \$(document).ready(function() {
      \$('#calendar').fullCalendar({
        header: {
          center: 'agendaWeek'
        },
        events: {
            url: \"{{ path('h_zraum_reservierung_search', {'raumId':raumId})}}\",
            console.console.log();
        }

      })

    });
  </script>

{% endblock %}
", "HZraumReservierungBundle:RaumHtml:reservierung.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/src/HZ/raumReservierungBundle/Resources/views/RaumHtml/reservierung.html.twig");
    }
}
