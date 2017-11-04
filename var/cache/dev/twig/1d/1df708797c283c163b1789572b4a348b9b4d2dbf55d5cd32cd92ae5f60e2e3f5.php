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
        $__internal_fb48855e0228dafb0c4be164db3193a3ac20d0496d07673a8cc2e361c267209c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb48855e0228dafb0c4be164db3193a3ac20d0496d07673a8cc2e361c267209c->enter($__internal_fb48855e0228dafb0c4be164db3193a3ac20d0496d07673a8cc2e361c267209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/new.html.twig"));

        $__internal_2623a6008103636289025a6786bad06a6668bf520e80081fecfe3a444c390258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2623a6008103636289025a6786bad06a6668bf520e80081fecfe3a444c390258->enter($__internal_2623a6008103636289025a6786bad06a6668bf520e80081fecfe3a444c390258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb48855e0228dafb0c4be164db3193a3ac20d0496d07673a8cc2e361c267209c->leave($__internal_fb48855e0228dafb0c4be164db3193a3ac20d0496d07673a8cc2e361c267209c_prof);

        
        $__internal_2623a6008103636289025a6786bad06a6668bf520e80081fecfe3a444c390258->leave($__internal_2623a6008103636289025a6786bad06a6668bf520e80081fecfe3a444c390258_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e52bab728b6c9525b75f5b6a0323471876267068605ddf16fa760edc383907e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52bab728b6c9525b75f5b6a0323471876267068605ddf16fa760edc383907e6->enter($__internal_e52bab728b6c9525b75f5b6a0323471876267068605ddf16fa760edc383907e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e43efdac2b73363f4646b884dec43623b44fcdbfdab0b4c376864985d7b6aa81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43efdac2b73363f4646b884dec43623b44fcdbfdab0b4c376864985d7b6aa81->enter($__internal_e43efdac2b73363f4646b884dec43623b44fcdbfdab0b4c376864985d7b6aa81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e43efdac2b73363f4646b884dec43623b44fcdbfdab0b4c376864985d7b6aa81->leave($__internal_e43efdac2b73363f4646b884dec43623b44fcdbfdab0b4c376864985d7b6aa81_prof);

        
        $__internal_e52bab728b6c9525b75f5b6a0323471876267068605ddf16fa760edc383907e6->leave($__internal_e52bab728b6c9525b75f5b6a0323471876267068605ddf16fa760edc383907e6_prof);

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
        return array (  78 => 22,  69 => 16,  63 => 13,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
