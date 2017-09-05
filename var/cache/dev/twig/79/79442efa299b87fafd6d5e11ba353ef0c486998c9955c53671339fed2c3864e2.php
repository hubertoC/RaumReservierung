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
        $__internal_c5626d11c4ca0cabcd653e54e57bc972633e2001b543c37981df5bbcc79a3352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5626d11c4ca0cabcd653e54e57bc972633e2001b543c37981df5bbcc79a3352->enter($__internal_c5626d11c4ca0cabcd653e54e57bc972633e2001b543c37981df5bbcc79a3352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/new.html.twig"));

        $__internal_521e39ecd2663ab7d6ba8d668f3ddc1e35178ab7cfc5ac5778f30ec25e7f8f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521e39ecd2663ab7d6ba8d668f3ddc1e35178ab7cfc5ac5778f30ec25e7f8f57->enter($__internal_521e39ecd2663ab7d6ba8d668f3ddc1e35178ab7cfc5ac5778f30ec25e7f8f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5626d11c4ca0cabcd653e54e57bc972633e2001b543c37981df5bbcc79a3352->leave($__internal_c5626d11c4ca0cabcd653e54e57bc972633e2001b543c37981df5bbcc79a3352_prof);

        
        $__internal_521e39ecd2663ab7d6ba8d668f3ddc1e35178ab7cfc5ac5778f30ec25e7f8f57->leave($__internal_521e39ecd2663ab7d6ba8d668f3ddc1e35178ab7cfc5ac5778f30ec25e7f8f57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ea6b9d91fdb41dcda640bec871623d92539f92c88aedcf76ee9849ffb262b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea6b9d91fdb41dcda640bec871623d92539f92c88aedcf76ee9849ffb262b77->enter($__internal_0ea6b9d91fdb41dcda640bec871623d92539f92c88aedcf76ee9849ffb262b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a43fea46b8afba9cffcb18bc0a0725e41db7bd830e892b4f9dc58304bb9d698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a43fea46b8afba9cffcb18bc0a0725e41db7bd830e892b4f9dc58304bb9d698->enter($__internal_2a43fea46b8afba9cffcb18bc0a0725e41db7bd830e892b4f9dc58304bb9d698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gebaeude", array()), 'row', array("attr" => array("class" => "form-control")));
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
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
  </div>
";
        
        $__internal_2a43fea46b8afba9cffcb18bc0a0725e41db7bd830e892b4f9dc58304bb9d698->leave($__internal_2a43fea46b8afba9cffcb18bc0a0725e41db7bd830e892b4f9dc58304bb9d698_prof);

        
        $__internal_0ea6b9d91fdb41dcda640bec871623d92539f92c88aedcf76ee9849ffb262b77->leave($__internal_0ea6b9d91fdb41dcda640bec871623d92539f92c88aedcf76ee9849ffb262b77_prof);

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
        return array (  88 => 23,  79 => 17,  73 => 14,  68 => 12,  64 => 11,  60 => 10,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
             {{ form_row(form.gebaeude, {'attr':{'class':'form-control'}})}}

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
{% endblock %}
", "raum/new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/new.html.twig");
    }
}
