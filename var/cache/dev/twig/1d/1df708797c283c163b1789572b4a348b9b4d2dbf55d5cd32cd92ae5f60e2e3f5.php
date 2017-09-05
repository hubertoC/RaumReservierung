<?php

/* reservierung/new.html.twig */
class __TwigTemplate_a4a9c9b445e111ecf9ead7f382795adec657e6fc2fe9a1faa450895911837425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "reservierung/new.html.twig", 1);
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
        $__internal_24fcc5b554cfdbd8c793d935f0d9681984a09c886f4d154d1e622140ab7fd89d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24fcc5b554cfdbd8c793d935f0d9681984a09c886f4d154d1e622140ab7fd89d->enter($__internal_24fcc5b554cfdbd8c793d935f0d9681984a09c886f4d154d1e622140ab7fd89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/new.html.twig"));

        $__internal_be598da705e0f361843e4c0121a96ed1126dae77fd3227df37ef5e0cc7b82a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be598da705e0f361843e4c0121a96ed1126dae77fd3227df37ef5e0cc7b82a19->enter($__internal_be598da705e0f361843e4c0121a96ed1126dae77fd3227df37ef5e0cc7b82a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24fcc5b554cfdbd8c793d935f0d9681984a09c886f4d154d1e622140ab7fd89d->leave($__internal_24fcc5b554cfdbd8c793d935f0d9681984a09c886f4d154d1e622140ab7fd89d_prof);

        
        $__internal_be598da705e0f361843e4c0121a96ed1126dae77fd3227df37ef5e0cc7b82a19->leave($__internal_be598da705e0f361843e4c0121a96ed1126dae77fd3227df37ef5e0cc7b82a19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e56545a92e70b10b841f99642d4e325e94c9f2091adf3bd578dcfb68b5e5674e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56545a92e70b10b841f99642d4e325e94c9f2091adf3bd578dcfb68b5e5674e->enter($__internal_e56545a92e70b10b841f99642d4e325e94c9f2091adf3bd578dcfb68b5e5674e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6fbde2fdf492a3fedf6c1cd8c1eaf00cd9f44fed231f44adddc08a44859c444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6fbde2fdf492a3fedf6c1cd8c1eaf00cd9f44fed231f44adddc08a44859c444->enter($__internal_f6fbde2fdf492a3fedf6c1cd8c1eaf00cd9f44fed231f44adddc08a44859c444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f6fbde2fdf492a3fedf6c1cd8c1eaf00cd9f44fed231f44adddc08a44859c444->leave($__internal_f6fbde2fdf492a3fedf6c1cd8c1eaf00cd9f44fed231f44adddc08a44859c444_prof);

        
        $__internal_e56545a92e70b10b841f99642d4e325e94c9f2091adf3bd578dcfb68b5e5674e->leave($__internal_e56545a92e70b10b841f99642d4e325e94c9f2091adf3bd578dcfb68b5e5674e_prof);

    }

    public function getTemplateName()
    {
        return "reservierung/new.html.twig";
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
", "reservierung/new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierung/new.html.twig");
    }
}
