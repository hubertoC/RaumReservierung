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
        $__internal_cacf03871801902c47cb6927eab5cb39b2c1250ff49d08daf53e3e409e759352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cacf03871801902c47cb6927eab5cb39b2c1250ff49d08daf53e3e409e759352->enter($__internal_cacf03871801902c47cb6927eab5cb39b2c1250ff49d08daf53e3e409e759352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:new.html.twig"));

        $__internal_8dc671661159b0c4e3dcf1d7a62010ebb8a1bbfcdea071e7f3455cfb8305a006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc671661159b0c4e3dcf1d7a62010ebb8a1bbfcdea071e7f3455cfb8305a006->enter($__internal_8dc671661159b0c4e3dcf1d7a62010ebb8a1bbfcdea071e7f3455cfb8305a006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cacf03871801902c47cb6927eab5cb39b2c1250ff49d08daf53e3e409e759352->leave($__internal_cacf03871801902c47cb6927eab5cb39b2c1250ff49d08daf53e3e409e759352_prof);

        
        $__internal_8dc671661159b0c4e3dcf1d7a62010ebb8a1bbfcdea071e7f3455cfb8305a006->leave($__internal_8dc671661159b0c4e3dcf1d7a62010ebb8a1bbfcdea071e7f3455cfb8305a006_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b6be26c09670ead69f209f7b786ae738c93d6f2c802a030682bb95fcbe2a965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6be26c09670ead69f209f7b786ae738c93d6f2c802a030682bb95fcbe2a965->enter($__internal_8b6be26c09670ead69f209f7b786ae738c93d6f2c802a030682bb95fcbe2a965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_671c752326807cf16591a3121bbeba837293f598e774b5b45141e648ee4b92f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671c752326807cf16591a3121bbeba837293f598e774b5b45141e648ee4b92f1->enter($__internal_671c752326807cf16591a3121bbeba837293f598e774b5b45141e648ee4b92f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_671c752326807cf16591a3121bbeba837293f598e774b5b45141e648ee4b92f1->leave($__internal_671c752326807cf16591a3121bbeba837293f598e774b5b45141e648ee4b92f1_prof);

        
        $__internal_8b6be26c09670ead69f209f7b786ae738c93d6f2c802a030682bb95fcbe2a965->leave($__internal_8b6be26c09670ead69f209f7b786ae738c93d6f2c802a030682bb95fcbe2a965_prof);

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
