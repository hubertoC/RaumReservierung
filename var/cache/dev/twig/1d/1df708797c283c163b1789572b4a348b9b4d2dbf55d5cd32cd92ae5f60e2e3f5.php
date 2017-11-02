<?php

/* :reservierung:new.html.twig */
class __TwigTemplate_a4a9c9b445e111ecf9ead7f382795adec657e6fc2fe9a1faa450895911837425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":reservierung:new.html.twig", 1);
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
        $__internal_90df0f12002dade1418c4c92c55d9b8b9f1cd113b6f544cd8d2995d3336c7902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90df0f12002dade1418c4c92c55d9b8b9f1cd113b6f544cd8d2995d3336c7902->enter($__internal_90df0f12002dade1418c4c92c55d9b8b9f1cd113b6f544cd8d2995d3336c7902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:new.html.twig"));

        $__internal_9a3adf99b4b66ab6194b0627b02fc8092044ec856fbf09d6e48335b1931f2a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3adf99b4b66ab6194b0627b02fc8092044ec856fbf09d6e48335b1931f2a02->enter($__internal_9a3adf99b4b66ab6194b0627b02fc8092044ec856fbf09d6e48335b1931f2a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90df0f12002dade1418c4c92c55d9b8b9f1cd113b6f544cd8d2995d3336c7902->leave($__internal_90df0f12002dade1418c4c92c55d9b8b9f1cd113b6f544cd8d2995d3336c7902_prof);

        
        $__internal_9a3adf99b4b66ab6194b0627b02fc8092044ec856fbf09d6e48335b1931f2a02->leave($__internal_9a3adf99b4b66ab6194b0627b02fc8092044ec856fbf09d6e48335b1931f2a02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97895aaa6d1f76eccfb5d3271bf8ee1fd5d6dec0ca8c40269ecadea94224d181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97895aaa6d1f76eccfb5d3271bf8ee1fd5d6dec0ca8c40269ecadea94224d181->enter($__internal_97895aaa6d1f76eccfb5d3271bf8ee1fd5d6dec0ca8c40269ecadea94224d181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7e1728e4f239c897ff0a08cb34381a4393d07f18b55df20ff1b9fd23c36e911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e1728e4f239c897ff0a08cb34381a4393d07f18b55df20ff1b9fd23c36e911->enter($__internal_e7e1728e4f239c897ff0a08cb34381a4393d07f18b55df20ff1b9fd23c36e911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservierung creation</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
         <div class=\"form_creation\">
           <div class=\"form-groupe\">
             ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

             ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dozent", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
             ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "student", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
             ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "raum", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br>
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Create\" />
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
          <div class=\"lon\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_index");
        echo "\">Back to the list</a>
          </div>
</li>
    </ul>
  </div>
  </div>
  </div>
  </div>
";
        
        $__internal_e7e1728e4f239c897ff0a08cb34381a4393d07f18b55df20ff1b9fd23c36e911->leave($__internal_e7e1728e4f239c897ff0a08cb34381a4393d07f18b55df20ff1b9fd23c36e911_prof);

        
        $__internal_97895aaa6d1f76eccfb5d3271bf8ee1fd5d6dec0ca8c40269ecadea94224d181->leave($__internal_97895aaa6d1f76eccfb5d3271bf8ee1fd5d6dec0ca8c40269ecadea94224d181_prof);

    }

    public function getTemplateName()
    {
        return ":reservierung:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  80 => 18,  74 => 15,  69 => 13,  65 => 12,  61 => 11,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reservierung creation</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
         <div class=\"form_creation\">
           <div class=\"form-groupe\">
             {{ form_start(form) }}

             {{ form_row(form.dozent, {'attr':{'class':'form-control'}})}}
             {{ form_row(form.student, {'attr':{'class':'form-control'}})}}
             {{ form_row(form.raum, {'attr':{'class':'form-control'}})}}

        {{ form_widget(form) }}
        <br>
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
          <div class=\"lon\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminReservierung_index') }}\">Back to the list</a>
          </div>
</li>
    </ul>
  </div>
  </div>
  </div>
  </div>
{% endblock %}
", ":reservierung:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierung/new.html.twig");
    }
}
