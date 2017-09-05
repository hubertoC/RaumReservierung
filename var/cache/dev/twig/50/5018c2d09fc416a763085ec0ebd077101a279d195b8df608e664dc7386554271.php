<?php

/* gebaeude/edit.html.twig */
class __TwigTemplate_6df2d1c5483539118380b3ee871d21fe4fd400b5f159c4038c12773d5b52fbbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "gebaeude/edit.html.twig", 1);
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
        $__internal_42f84fda0e6b3984ef6d69bd5fa14205b6b660ffcfcf1416ea38568898d41642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f84fda0e6b3984ef6d69bd5fa14205b6b660ffcfcf1416ea38568898d41642->enter($__internal_42f84fda0e6b3984ef6d69bd5fa14205b6b660ffcfcf1416ea38568898d41642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/edit.html.twig"));

        $__internal_9ffbecabf97661a86add7921febe0a5940c352d933661ec5cf37c961441d1a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffbecabf97661a86add7921febe0a5940c352d933661ec5cf37c961441d1a11->enter($__internal_9ffbecabf97661a86add7921febe0a5940c352d933661ec5cf37c961441d1a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f84fda0e6b3984ef6d69bd5fa14205b6b660ffcfcf1416ea38568898d41642->leave($__internal_42f84fda0e6b3984ef6d69bd5fa14205b6b660ffcfcf1416ea38568898d41642_prof);

        
        $__internal_9ffbecabf97661a86add7921febe0a5940c352d933661ec5cf37c961441d1a11->leave($__internal_9ffbecabf97661a86add7921febe0a5940c352d933661ec5cf37c961441d1a11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c37360280af3300e1cefa518089e145b2e5518988aeac3fc689f06b0eb50d904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37360280af3300e1cefa518089e145b2e5518988aeac3fc689f06b0eb50d904->enter($__internal_c37360280af3300e1cefa518089e145b2e5518988aeac3fc689f06b0eb50d904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b3eccd2515bcf9474aacf29dbb63459a65af8b95514b76f3f0c58b05ce5e75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3eccd2515bcf9474aacf29dbb63459a65af8b95514b76f3f0c58b05ce5e75f->enter($__internal_4b3eccd2515bcf9474aacf29dbb63459a65af8b95514b76f3f0c58b05ce5e75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Gebaeude edit</h1>
    <div class= \"cration_artiste\">
          <div class=\"cration mdl-shadow--2dp\">
            <div class=\"form_creation\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nummer", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <div class=\"button_p_edit\">
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\" />
    </div>
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
          <div class=\"retour\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_index");
        echo "\">Back to the list</a>
        </div>
      </li>
        <li>
            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <div class=\"modifier\">

                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
  </div>
  </div>
  </div>
";
        
        $__internal_4b3eccd2515bcf9474aacf29dbb63459a65af8b95514b76f3f0c58b05ce5e75f->leave($__internal_4b3eccd2515bcf9474aacf29dbb63459a65af8b95514b76f3f0c58b05ce5e75f_prof);

        
        $__internal_c37360280af3300e1cefa518089e145b2e5518988aeac3fc689f06b0eb50d904->leave($__internal_c37360280af3300e1cefa518089e145b2e5518988aeac3fc689f06b0eb50d904_prof);

    }

    public function getTemplateName()
    {
        return "gebaeude/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  91 => 26,  84 => 22,  75 => 16,  68 => 12,  63 => 10,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Gebaeude edit</h1>
    <div class= \"cration_artiste\">
          <div class=\"cration mdl-shadow--2dp\">
            <div class=\"form_creation\">
    {{ form_start(edit_form) }}
    {{ form_row(edit_form.name, {'attr':{'class':'form-control'}})}}
    {{ form_row(edit_form.nummer, {'attr':{'class':'form-control'}})}}

        {{ form_widget(edit_form) }}
        <div class=\"button_p_edit\">
        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\" />
    </div>
    {{ form_end(edit_form) }}

    <ul>
        <li>
          <div class=\"retour\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminGebaeude_index') }}\">Back to the list</a>
        </div>
      </li>
        <li>
            {{ form_start(delete_form) }}
            <div class=\"modifier\">

                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
  </div>
  </div>
  </div>
{% endblock %}
", "gebaeude/edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/gebaeude/edit.html.twig");
    }
}
