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
        $__internal_84c6223a36097d7a83a47cfddc002048339697cfc387792102bdd175cb8fe1d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c6223a36097d7a83a47cfddc002048339697cfc387792102bdd175cb8fe1d3->enter($__internal_84c6223a36097d7a83a47cfddc002048339697cfc387792102bdd175cb8fe1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:new.html.twig"));

        $__internal_56263a4b24a276569244e5163e1fecd1f4a40fcf97b1984c054942c5227c46cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56263a4b24a276569244e5163e1fecd1f4a40fcf97b1984c054942c5227c46cc->enter($__internal_56263a4b24a276569244e5163e1fecd1f4a40fcf97b1984c054942c5227c46cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84c6223a36097d7a83a47cfddc002048339697cfc387792102bdd175cb8fe1d3->leave($__internal_84c6223a36097d7a83a47cfddc002048339697cfc387792102bdd175cb8fe1d3_prof);

        
        $__internal_56263a4b24a276569244e5163e1fecd1f4a40fcf97b1984c054942c5227c46cc->leave($__internal_56263a4b24a276569244e5163e1fecd1f4a40fcf97b1984c054942c5227c46cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52b835aedb8a6b167f50f3e348b03e519620780d4c7349829b9d7fa699b65bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b835aedb8a6b167f50f3e348b03e519620780d4c7349829b9d7fa699b65bee->enter($__internal_52b835aedb8a6b167f50f3e348b03e519620780d4c7349829b9d7fa699b65bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06f74f71d89de506f0e3e3a77193caea685bf64bd145748fa835394222e92761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f74f71d89de506f0e3e3a77193caea685bf64bd145748fa835394222e92761->enter($__internal_06f74f71d89de506f0e3e3a77193caea685bf64bd145748fa835394222e92761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
";
        
        $__internal_06f74f71d89de506f0e3e3a77193caea685bf64bd145748fa835394222e92761->leave($__internal_06f74f71d89de506f0e3e3a77193caea685bf64bd145748fa835394222e92761_prof);

        
        $__internal_52b835aedb8a6b167f50f3e348b03e519620780d4c7349829b9d7fa699b65bee->leave($__internal_52b835aedb8a6b167f50f3e348b03e519620780d4c7349829b9d7fa699b65bee_prof);

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
{% endblock %}
", ":reservierung:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierung/new.html.twig");
    }
}
