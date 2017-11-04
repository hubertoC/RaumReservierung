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
        $__internal_eba697e7ce5ca266cc69d331784a9806abe1c6cc22cc621ffad6184afbfe202c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba697e7ce5ca266cc69d331784a9806abe1c6cc22cc621ffad6184afbfe202c->enter($__internal_eba697e7ce5ca266cc69d331784a9806abe1c6cc22cc621ffad6184afbfe202c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:kontakt.html.twig"));

        $__internal_4c65798a2a0a50b72313d65f9a5b4b2f31c7bfdc8ae61b973ad0ad537aa238c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c65798a2a0a50b72313d65f9a5b4b2f31c7bfdc8ae61b973ad0ad537aa238c7->enter($__internal_4c65798a2a0a50b72313d65f9a5b4b2f31c7bfdc8ae61b973ad0ad537aa238c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:kontakt.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eba697e7ce5ca266cc69d331784a9806abe1c6cc22cc621ffad6184afbfe202c->leave($__internal_eba697e7ce5ca266cc69d331784a9806abe1c6cc22cc621ffad6184afbfe202c_prof);

        
        $__internal_4c65798a2a0a50b72313d65f9a5b4b2f31c7bfdc8ae61b973ad0ad537aa238c7->leave($__internal_4c65798a2a0a50b72313d65f9a5b4b2f31c7bfdc8ae61b973ad0ad537aa238c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f94886ab06e22377ebdd22563d355dcbf61284bc7b9192fdf122c368773ec3c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f94886ab06e22377ebdd22563d355dcbf61284bc7b9192fdf122c368773ec3c7->enter($__internal_f94886ab06e22377ebdd22563d355dcbf61284bc7b9192fdf122c368773ec3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6d5d7a605697ee6fa2829455008c01ff8b6efda62020b6a84056a5267d7e576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d5d7a605697ee6fa2829455008c01ff8b6efda62020b6a84056a5267d7e576->enter($__internal_b6d5d7a605697ee6fa2829455008c01ff8b6efda62020b6a84056a5267d7e576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b6d5d7a605697ee6fa2829455008c01ff8b6efda62020b6a84056a5267d7e576->leave($__internal_b6d5d7a605697ee6fa2829455008c01ff8b6efda62020b6a84056a5267d7e576_prof);

        
        $__internal_f94886ab06e22377ebdd22563d355dcbf61284bc7b9192fdf122c368773ec3c7->leave($__internal_f94886ab06e22377ebdd22563d355dcbf61284bc7b9192fdf122c368773ec3c7_prof);

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
