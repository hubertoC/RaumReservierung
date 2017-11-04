<?php

/* :gebaeude:new.html.twig */
class __TwigTemplate_30749f2dd947dd74f4d2df41de1a4a8b4d476d5aa2d78c316c3ac39044d3167b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":gebaeude:new.html.twig", 1);
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
        $__internal_421eaf5c025559133a5149e401152ecc69627ae20606234af85cdd7025339770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421eaf5c025559133a5149e401152ecc69627ae20606234af85cdd7025339770->enter($__internal_421eaf5c025559133a5149e401152ecc69627ae20606234af85cdd7025339770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gebaeude:new.html.twig"));

        $__internal_55d2761fcecc0b50d2f0ed84e8dd28ebb861bd8d7e7b41f612fb288ea569ee8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d2761fcecc0b50d2f0ed84e8dd28ebb861bd8d7e7b41f612fb288ea569ee8e->enter($__internal_55d2761fcecc0b50d2f0ed84e8dd28ebb861bd8d7e7b41f612fb288ea569ee8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gebaeude:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_421eaf5c025559133a5149e401152ecc69627ae20606234af85cdd7025339770->leave($__internal_421eaf5c025559133a5149e401152ecc69627ae20606234af85cdd7025339770_prof);

        
        $__internal_55d2761fcecc0b50d2f0ed84e8dd28ebb861bd8d7e7b41f612fb288ea569ee8e->leave($__internal_55d2761fcecc0b50d2f0ed84e8dd28ebb861bd8d7e7b41f612fb288ea569ee8e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3731ee502ddc52a8655effb490fc80bb6a5b55a3aa9365a8c42a5dcbefa5ed1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3731ee502ddc52a8655effb490fc80bb6a5b55a3aa9365a8c42a5dcbefa5ed1e->enter($__internal_3731ee502ddc52a8655effb490fc80bb6a5b55a3aa9365a8c42a5dcbefa5ed1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a0a7800abd3028651a9c43c43676ca26222e7c3f7c34fe39ba4667e425ae187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0a7800abd3028651a9c43c43676ca26222e7c3f7c34fe39ba4667e425ae187->enter($__internal_3a0a7800abd3028651a9c43c43676ca26222e7c3f7c34fe39ba4667e425ae187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Gebaeude creation</h1>
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nummer", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br>
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Create\" />
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
          <div class=\"lon\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
  </div>
  </div>
  </div>
  </div>
";
        
        $__internal_3a0a7800abd3028651a9c43c43676ca26222e7c3f7c34fe39ba4667e425ae187->leave($__internal_3a0a7800abd3028651a9c43c43676ca26222e7c3f7c34fe39ba4667e425ae187_prof);

        
        $__internal_3731ee502ddc52a8655effb490fc80bb6a5b55a3aa9365a8c42a5dcbefa5ed1e->leave($__internal_3731ee502ddc52a8655effb490fc80bb6a5b55a3aa9365a8c42a5dcbefa5ed1e_prof);

    }

    public function getTemplateName()
    {
        return ":gebaeude:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  75 => 16,  69 => 13,  64 => 11,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Gebaeude creation</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
               <div class=\"form_creation\">
                 <div class=\"form-groupe\">
    {{ form_start(form) }}
    {{ form_row(form.name, {'attr':{'class':'form-control'}})}}
    {{ form_row(form.nummer, {'attr':{'class':'form-control'}})}}

        {{ form_widget(form) }}
        <br>
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
          <div class=\"lon\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminGebaeude_index') }}\">Back to the list</a>
        </li>
    </ul>
  </div>
  </div>
  </div>
  </div>
{% endblock %}
", ":gebaeude:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/gebaeude/new.html.twig");
    }
}
