<?php

/* HZraumReservierungBundle:RaumHtml:kontakt.html.twig */
class __TwigTemplate_745a6659cc1602d15f1b3dc8f92bba3585174a47a6bf8faf3e32e708bb0bb2d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutPublic.html.twig", "HZraumReservierungBundle:RaumHtml:kontakt.html.twig", 1);
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
        $__internal_bf3e996c1ff1d3995c996ded876d5be3ecd452e4c225ff6981d49cfaf1cf50c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3e996c1ff1d3995c996ded876d5be3ecd452e4c225ff6981d49cfaf1cf50c0->enter($__internal_bf3e996c1ff1d3995c996ded876d5be3ecd452e4c225ff6981d49cfaf1cf50c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:kontakt.html.twig"));

        $__internal_a725075cdb7cccd52d21cdd16fb9f425e76255d4af6206168fa1c28c616f6201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a725075cdb7cccd52d21cdd16fb9f425e76255d4af6206168fa1c28c616f6201->enter($__internal_a725075cdb7cccd52d21cdd16fb9f425e76255d4af6206168fa1c28c616f6201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:kontakt.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf3e996c1ff1d3995c996ded876d5be3ecd452e4c225ff6981d49cfaf1cf50c0->leave($__internal_bf3e996c1ff1d3995c996ded876d5be3ecd452e4c225ff6981d49cfaf1cf50c0_prof);

        
        $__internal_a725075cdb7cccd52d21cdd16fb9f425e76255d4af6206168fa1c28c616f6201->leave($__internal_a725075cdb7cccd52d21cdd16fb9f425e76255d4af6206168fa1c28c616f6201_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d8dfe1ba53ae015fbc6652b3e90db1c7a68c64abda956635d433b176246e687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8dfe1ba53ae015fbc6652b3e90db1c7a68c64abda956635d433b176246e687->enter($__internal_9d8dfe1ba53ae015fbc6652b3e90db1c7a68c64abda956635d433b176246e687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de5a91f256f1198044a6df763084c5afed6bf9551dc1ba6c09dd6456a7e62b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5a91f256f1198044a6df763084c5afed6bf9551dc1ba6c09dd6456a7e62b3a->enter($__internal_de5a91f256f1198044a6df763084c5afed6bf9551dc1ba6c09dd6456a7e62b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <div class=\"\">

    <section id=\"contact\">
      <div class=\"section-content\">
        ";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => "user-notice"), "method")) {
            // line 10
            echo "          <div class=\"alert alert-success\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "user-notice"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 12
                echo "              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" name=\"button\">

                <span aria-hidden=\"true\">&times;
                </span>
                <span class=\"sr-only\">Close</span>
              </button>
              <a href=\"/\" class=\"alert-link\">";
                // line 18
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</a>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "          </div>
        ";
        }
        // line 23
        echo "        <h1 class=\"section-header\">Nehmen Sie Kontakt auf
          <span class=\"content-header wow fadeIn \" data-wow-delay=\"0.2s\" data-wow-duration=\"2s\">
          </span>
        </h1>
        <h3>Mit diesem Formular können Sie uns eine Nachricht zukommen lassen.
        </h3>
      </div>
      ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
      <div class=\"col-md-6 form-line\">
        <div class=\"form-group\">

          ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">

          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        </div>
      </div>

      <div class=\"col-md-6\">
        <div class=\"form-group\">
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div>

          <button class=\"btn btn-default submit\" type=\"submit\">senden<i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
          </button><br>
          ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
      </section>

    </div>

    <link href=\"https://fonts.googleapis.com/css?family=Oleo+Script:400,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Teko:400,700\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/categories/style.css"), "html", null, true);
        echo "\" media=\"screen\">

  ";
        
        $__internal_de5a91f256f1198044a6df763084c5afed6bf9551dc1ba6c09dd6456a7e62b3a->leave($__internal_de5a91f256f1198044a6df763084c5afed6bf9551dc1ba6c09dd6456a7e62b3a_prof);

        
        $__internal_9d8dfe1ba53ae015fbc6652b3e90db1c7a68c64abda956635d433b176246e687->leave($__internal_9d8dfe1ba53ae015fbc6652b3e90db1c7a68c64abda956635d433b176246e687_prof);

    }

    public function getTemplateName()
    {
        return "HZraumReservierungBundle:RaumHtml:kontakt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 60,  128 => 51,  119 => 45,  109 => 38,  102 => 34,  95 => 30,  86 => 23,  82 => 21,  73 => 18,  65 => 12,  61 => 11,  58 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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

  <div class=\"\">

    <section id=\"contact\">
      <div class=\"section-content\">
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
        <h1 class=\"section-header\">Nehmen Sie Kontakt auf
          <span class=\"content-header wow fadeIn \" data-wow-delay=\"0.2s\" data-wow-duration=\"2s\">
          </span>
        </h1>
        <h3>Mit diesem Formular können Sie uns eine Nachricht zukommen lassen.
        </h3>
      </div>
      {{ form_start(form) }}
      <div class=\"col-md-6 form-line\">
        <div class=\"form-group\">

          {{ form_row(form.name, {'attr':{'class':'form-control'}})}}
        </div>
        <div class=\"form-group\">

          {{ form_row(form.email, {'attr':{'class':'form-control'}})}}

        </div>
      </div>

      <div class=\"col-md-6\">
        <div class=\"form-group\">
          {{ form_row(form.content, {'attr':{'class':'form-control'}})}}
        </div>
        <div>

          <button class=\"btn btn-default submit\" type=\"submit\">senden<i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
          </button><br>
          {{ form_end(form) }}
        </div>
      </section>

    </div>

    <link href=\"https://fonts.googleapis.com/css?family=Oleo+Script:400,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Teko:400,700\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/categories/style.css') }}\" media=\"screen\">

  {% endblock %}
", "HZraumReservierungBundle:RaumHtml:kontakt.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/src/HZ/raumReservierungBundle/Resources/views/RaumHtml/kontakt.html.twig");
    }
}
