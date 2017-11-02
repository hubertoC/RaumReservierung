<?php

/* :raum:new.html.twig */
class __TwigTemplate_44be6311a754fef4e59b75056feb64902a1c2f87d889bbff550d5a898b42f973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":raum:new.html.twig", 1);
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
        $__internal_fb0baf078d2616ba92cc4754be582c682999803524396f5d0cb1ce5224e7c834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0baf078d2616ba92cc4754be582c682999803524396f5d0cb1ce5224e7c834->enter($__internal_fb0baf078d2616ba92cc4754be582c682999803524396f5d0cb1ce5224e7c834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:new.html.twig"));

        $__internal_1acdb59696eccb57f0daa1403ac9dad8293cb2f15568b962b94191b826fa3255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acdb59696eccb57f0daa1403ac9dad8293cb2f15568b962b94191b826fa3255->enter($__internal_1acdb59696eccb57f0daa1403ac9dad8293cb2f15568b962b94191b826fa3255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb0baf078d2616ba92cc4754be582c682999803524396f5d0cb1ce5224e7c834->leave($__internal_fb0baf078d2616ba92cc4754be582c682999803524396f5d0cb1ce5224e7c834_prof);

        
        $__internal_1acdb59696eccb57f0daa1403ac9dad8293cb2f15568b962b94191b826fa3255->leave($__internal_1acdb59696eccb57f0daa1403ac9dad8293cb2f15568b962b94191b826fa3255_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bf796b5be269af77933cfd62ba59917149ce1d6ed62c2c406233659aa01f57d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf796b5be269af77933cfd62ba59917149ce1d6ed62c2c406233659aa01f57d->enter($__internal_5bf796b5be269af77933cfd62ba59917149ce1d6ed62c2c406233659aa01f57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb18b8b2c01f3706b9d96facc1690df34181e80c0fe72501ea8a0a9077774039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb18b8b2c01f3706b9d96facc1690df34181e80c0fe72501ea8a0a9077774039->enter($__internal_cb18b8b2c01f3706b9d96facc1690df34181e80c0fe72501ea8a0a9077774039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cb18b8b2c01f3706b9d96facc1690df34181e80c0fe72501ea8a0a9077774039->leave($__internal_cb18b8b2c01f3706b9d96facc1690df34181e80c0fe72501ea8a0a9077774039_prof);

        
        $__internal_5bf796b5be269af77933cfd62ba59917149ce1d6ed62c2c406233659aa01f57d->leave($__internal_5bf796b5be269af77933cfd62ba59917149ce1d6ed62c2c406233659aa01f57d_prof);

    }

    public function getTemplateName()
    {
        return ":raum:new.html.twig";
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
", ":raum:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/new.html.twig");
    }
}
