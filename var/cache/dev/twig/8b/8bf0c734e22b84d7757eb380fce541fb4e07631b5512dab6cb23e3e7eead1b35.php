<?php

/* :student:new.html.twig */
class __TwigTemplate_e7b54527582c7521d42044c16439d1dd094fd075ff28ff1d5d6744d5f5b47d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":student:new.html.twig", 1);
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
        $__internal_72837e23c935b79fa470054edad8cd859559d5f2814045142fdfac8e73cdae5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72837e23c935b79fa470054edad8cd859559d5f2814045142fdfac8e73cdae5e->enter($__internal_72837e23c935b79fa470054edad8cd859559d5f2814045142fdfac8e73cdae5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:new.html.twig"));

        $__internal_f4df6b02ea25d2f3e2b596eb4598a73cc248b1b4275e5ea651669c3e2429e5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4df6b02ea25d2f3e2b596eb4598a73cc248b1b4275e5ea651669c3e2429e5d4->enter($__internal_f4df6b02ea25d2f3e2b596eb4598a73cc248b1b4275e5ea651669c3e2429e5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72837e23c935b79fa470054edad8cd859559d5f2814045142fdfac8e73cdae5e->leave($__internal_72837e23c935b79fa470054edad8cd859559d5f2814045142fdfac8e73cdae5e_prof);

        
        $__internal_f4df6b02ea25d2f3e2b596eb4598a73cc248b1b4275e5ea651669c3e2429e5d4->leave($__internal_f4df6b02ea25d2f3e2b596eb4598a73cc248b1b4275e5ea651669c3e2429e5d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7789ae2702ff7d6fbc381a5731e477a14f05b78597999aa460c85b05305d7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7789ae2702ff7d6fbc381a5731e477a14f05b78597999aa460c85b05305d7ea->enter($__internal_a7789ae2702ff7d6fbc381a5731e477a14f05b78597999aa460c85b05305d7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_377ecb0a52ea4d8e1eae03a0f9c516f9f2d4bb501a9928454e28ab15cf1cc2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377ecb0a52ea4d8e1eae03a0f9c516f9f2d4bb501a9928454e28ab15cf1cc2a1->enter($__internal_377ecb0a52ea4d8e1eae03a0f9c516f9f2d4bb501a9928454e28ab15cf1cc2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student creation</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
         <div class=\"form_creation\">
           <div class=\"form-groupe\">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vorname", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br>
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Create\" />
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
          <div class=\"lon\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_index");
        echo "\">Back to the list</a>
        </div>
      </li>
    </ul>
  </div>
  </div>
  </div>
  </div>
";
        
        $__internal_377ecb0a52ea4d8e1eae03a0f9c516f9f2d4bb501a9928454e28ab15cf1cc2a1->leave($__internal_377ecb0a52ea4d8e1eae03a0f9c516f9f2d4bb501a9928454e28ab15cf1cc2a1_prof);

        
        $__internal_a7789ae2702ff7d6fbc381a5731e477a14f05b78597999aa460c85b05305d7ea->leave($__internal_a7789ae2702ff7d6fbc381a5731e477a14f05b78597999aa460c85b05305d7ea_prof);

    }

    public function getTemplateName()
    {
        return ":student:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  79 => 17,  73 => 14,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Student creation</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
         <div class=\"form_creation\">
           <div class=\"form-groupe\">
    {{ form_start(form) }}
    {{ form_row(form.name, {'attr':{'class':'form-control'}})}}
    {{ form_row(form.vorname, {'attr':{'class':'form-control'}})}}
    {{ form_row(form.email, {'attr':{'class':'form-control'}})}}

        {{ form_widget(form) }}
        <br>
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
          <div class=\"lon\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminStudent_index') }}\">Back to the list</a>
        </div>
      </li>
    </ul>
  </div>
  </div>
  </div>
  </div>
{% endblock %}
", ":student:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/student/new.html.twig");
    }
}
