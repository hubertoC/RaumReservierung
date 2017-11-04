<?php

/* reservierungadmin/new.html.twig */
class __TwigTemplate_6264f678560e92acecfe45895994073df4503d44413c33b8eb3243ba6c697931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "reservierungadmin/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_062f481d988d202940ea85beecbca46585b31a0ed1be2420d2fbf4631020067e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062f481d988d202940ea85beecbca46585b31a0ed1be2420d2fbf4631020067e->enter($__internal_062f481d988d202940ea85beecbca46585b31a0ed1be2420d2fbf4631020067e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierungadmin/new.html.twig"));

        $__internal_42aebd216aa833796d4dd7921254eb84059b37c0d7ded7356d7208847fd91454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42aebd216aa833796d4dd7921254eb84059b37c0d7ded7356d7208847fd91454->enter($__internal_42aebd216aa833796d4dd7921254eb84059b37c0d7ded7356d7208847fd91454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierungadmin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_062f481d988d202940ea85beecbca46585b31a0ed1be2420d2fbf4631020067e->leave($__internal_062f481d988d202940ea85beecbca46585b31a0ed1be2420d2fbf4631020067e_prof);

        
        $__internal_42aebd216aa833796d4dd7921254eb84059b37c0d7ded7356d7208847fd91454->leave($__internal_42aebd216aa833796d4dd7921254eb84059b37c0d7ded7356d7208847fd91454_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07d1bccacfdad7a5ae3286fd0b6339ab038c22f37ec3d9a3b2ca638cd5ecb2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d1bccacfdad7a5ae3286fd0b6339ab038c22f37ec3d9a3b2ca638cd5ecb2e6->enter($__internal_07d1bccacfdad7a5ae3286fd0b6339ab038c22f37ec3d9a3b2ca638cd5ecb2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f1259cfb5b0e8d69e28d13e0c89bc3215136a3fefddca5682379a8f5f78ae09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1259cfb5b0e8d69e28d13e0c89bc3215136a3fefddca5682379a8f5f78ae09->enter($__internal_9f1259cfb5b0e8d69e28d13e0c89bc3215136a3fefddca5682379a8f5f78ae09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1>Reservierungadmin creation</h1>

  <div class=\"cration_artiste\">
    <div class=\"cration mdl-shadow--2dp\">
      <div class=\"form_creation\">
        <div class=\"form-groupe\">

          ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
          ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "start", array()), 'row');
        echo "
          <br>
          ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "end", array()), 'row');
        echo "
          <br>
          ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "<br>
          ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "<br>
          ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "className", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "<br>
          ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "raum", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "<br>

          ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
          <br>
          <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Create\"/>
          ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

          <ul>
            <li>
              <div class=\"lon\">

                <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservierungadmin_index");
        echo "\">Back to the list</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_9f1259cfb5b0e8d69e28d13e0c89bc3215136a3fefddca5682379a8f5f78ae09->leave($__internal_9f1259cfb5b0e8d69e28d13e0c89bc3215136a3fefddca5682379a8f5f78ae09_prof);

        
        $__internal_07d1bccacfdad7a5ae3286fd0b6339ab038c22f37ec3d9a3b2ca638cd5ecb2e6->leave($__internal_07d1bccacfdad7a5ae3286fd0b6339ab038c22f37ec3d9a3b2ca638cd5ecb2e6_prof);

    }

    public function getTemplateName()
    {
        return "reservierungadmin/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  95 => 24,  89 => 21,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  67 => 14,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layoutAdmin.html.twig' %}

{% block body %}
  <h1>Reservierungadmin creation</h1>

  <div class=\"cration_artiste\">
    <div class=\"cration mdl-shadow--2dp\">
      <div class=\"form_creation\">
        <div class=\"form-groupe\">

          {{ form_start(form) }}
          {{ form_row(form.start)}}
          <br>
          {{ form_row(form.end)}}
          <br>
          {{ form_row(form.title, {'attr':{'class':'form-control'}})}}<br>
          {{ form_row(form.url, {'attr':{'class':'form-control'}})}}<br>
          {{ form_row(form.className, {'attr':{'class':'form-control'}})}}<br>
          {{ form_row(form.raum, {'attr':{'class':'form-control'}})}}<br>

          {{ form_widget(form) }}
          <br>
          <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Create\"/>
          {{ form_end(form) }}

          <ul>
            <li>
              <div class=\"lon\">

                <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('admin_reservierungadmin_index') }}\">Back to the list</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "reservierungadmin/new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierungadmin/new.html.twig");
    }
}
