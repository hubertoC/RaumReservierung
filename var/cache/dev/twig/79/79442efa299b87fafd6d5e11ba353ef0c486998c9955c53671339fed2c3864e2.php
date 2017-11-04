<?php

/* raum/new.html.twig */
class __TwigTemplate_44be6311a754fef4e59b75056feb64902a1c2f87d889bbff550d5a898b42f973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "raum/new.html.twig", 1);
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
        $__internal_098e5a7862c0e08a796246bccd85d1cfabb0d8611226e168357b78e2c959f308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098e5a7862c0e08a796246bccd85d1cfabb0d8611226e168357b78e2c959f308->enter($__internal_098e5a7862c0e08a796246bccd85d1cfabb0d8611226e168357b78e2c959f308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/new.html.twig"));

        $__internal_43c9f6e12260bc43ea47c5580f1991f819a1ab13e50a192fbb271f1614d76709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c9f6e12260bc43ea47c5580f1991f819a1ab13e50a192fbb271f1614d76709->enter($__internal_43c9f6e12260bc43ea47c5580f1991f819a1ab13e50a192fbb271f1614d76709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_098e5a7862c0e08a796246bccd85d1cfabb0d8611226e168357b78e2c959f308->leave($__internal_098e5a7862c0e08a796246bccd85d1cfabb0d8611226e168357b78e2c959f308_prof);

        
        $__internal_43c9f6e12260bc43ea47c5580f1991f819a1ab13e50a192fbb271f1614d76709->leave($__internal_43c9f6e12260bc43ea47c5580f1991f819a1ab13e50a192fbb271f1614d76709_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aebcc880816b907361f4f395add2cc86d543dfbc7003604f25fb8b3b14102d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebcc880816b907361f4f395add2cc86d543dfbc7003604f25fb8b3b14102d35->enter($__internal_aebcc880816b907361f4f395add2cc86d543dfbc7003604f25fb8b3b14102d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_380a748c8045a746b158e11484bb557300cfb5525fbbd27a6962c8ecd52b5192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380a748c8045a746b158e11484bb557300cfb5525fbbd27a6962c8ecd52b5192->enter($__internal_380a748c8045a746b158e11484bb557300cfb5525fbbd27a6962c8ecd52b5192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Raum creation</h1>
    <div class= \"cration_artiste\">
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"cration mdl-shadow--2dp\">
         <div class=\"form_creation\">
           <div class=\"form-groupe\">
             ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nummer", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
             ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
             ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sitzplatze", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
             ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "beamer", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
             ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "steckdose", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
             ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usbAnschluss", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br>
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Create\" />
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
          <div class=\"lon\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
  </div>
  </div>
  </div>
  </div>
";
        
        $__internal_380a748c8045a746b158e11484bb557300cfb5525fbbd27a6962c8ecd52b5192->leave($__internal_380a748c8045a746b158e11484bb557300cfb5525fbbd27a6962c8ecd52b5192_prof);

        
        $__internal_aebcc880816b907361f4f395add2cc86d543dfbc7003604f25fb8b3b14102d35->leave($__internal_aebcc880816b907361f4f395add2cc86d543dfbc7003604f25fb8b3b14102d35_prof);

    }

    public function getTemplateName()
    {
        return "raum/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  90 => 19,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Raum creation</h1>
    <div class= \"cration_artiste\">
    {{ form_start(form) }}
    <div class=\"cration mdl-shadow--2dp\">
         <div class=\"form_creation\">
           <div class=\"form-groupe\">
             {{ form_row(form.nummer, {'attr':{'class':'form-control'}})}}
             {{ form_row(form.name, {'attr':{'class':'form-control'}})}}
             {{ form_row(form.sitzplatze, {'attr':{'class':'form-control'}})}}
             {{ form_row(form.beamer, {'attr':{'class':'form-control'}})}}
             {{ form_row(form.steckdose, {'attr':{'class':'form-control'}})}}
             {{ form_row(form.usbAnschluss, {'attr':{'class':'form-control'}})}}
        {{ form_widget(form) }}
        <br>
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
          <div class=\"lon\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminRaum_index') }}\">Back to the list</a>
        </li>
    </ul>
  </div>
  </div>
  </div>
  </div>
{% endblock %}
", "raum/new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/new.html.twig");
    }
}
