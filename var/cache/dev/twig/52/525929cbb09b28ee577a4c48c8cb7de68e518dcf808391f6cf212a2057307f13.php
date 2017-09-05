<?php

/* gebaeude/new.html.twig */
class __TwigTemplate_30749f2dd947dd74f4d2df41de1a4a8b4d476d5aa2d78c316c3ac39044d3167b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "gebaeude/new.html.twig", 1);
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
        $__internal_a1fe9a890e077402e42687922f25259d452254641d1adced6f498f117974ae5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1fe9a890e077402e42687922f25259d452254641d1adced6f498f117974ae5b->enter($__internal_a1fe9a890e077402e42687922f25259d452254641d1adced6f498f117974ae5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/new.html.twig"));

        $__internal_a4feb4afc1adda351b9db8b5683e0e8c4fb08f930a72272e04e8443d171e2a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4feb4afc1adda351b9db8b5683e0e8c4fb08f930a72272e04e8443d171e2a62->enter($__internal_a4feb4afc1adda351b9db8b5683e0e8c4fb08f930a72272e04e8443d171e2a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1fe9a890e077402e42687922f25259d452254641d1adced6f498f117974ae5b->leave($__internal_a1fe9a890e077402e42687922f25259d452254641d1adced6f498f117974ae5b_prof);

        
        $__internal_a4feb4afc1adda351b9db8b5683e0e8c4fb08f930a72272e04e8443d171e2a62->leave($__internal_a4feb4afc1adda351b9db8b5683e0e8c4fb08f930a72272e04e8443d171e2a62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b1b262ec62ba5dba21711fbde92a0a86a8d2e0dc0946cde48ff71b1395ba3e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1b262ec62ba5dba21711fbde92a0a86a8d2e0dc0946cde48ff71b1395ba3e4->enter($__internal_0b1b262ec62ba5dba21711fbde92a0a86a8d2e0dc0946cde48ff71b1395ba3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7393e485771098b0b3be1567e9fc151df819b56d0bbc9f883533fbaca5dddcb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7393e485771098b0b3be1567e9fc151df819b56d0bbc9f883533fbaca5dddcb5->enter($__internal_7393e485771098b0b3be1567e9fc151df819b56d0bbc9f883533fbaca5dddcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7393e485771098b0b3be1567e9fc151df819b56d0bbc9f883533fbaca5dddcb5->leave($__internal_7393e485771098b0b3be1567e9fc151df819b56d0bbc9f883533fbaca5dddcb5_prof);

        
        $__internal_0b1b262ec62ba5dba21711fbde92a0a86a8d2e0dc0946cde48ff71b1395ba3e4->leave($__internal_0b1b262ec62ba5dba21711fbde92a0a86a8d2e0dc0946cde48ff71b1395ba3e4_prof);

    }

    public function getTemplateName()
    {
        return "gebaeude/new.html.twig";
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
", "gebaeude/new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/gebaeude/new.html.twig");
    }
}
