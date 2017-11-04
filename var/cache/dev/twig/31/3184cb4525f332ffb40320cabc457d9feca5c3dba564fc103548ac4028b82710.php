<?php

/* :reservierung:edit.html.twig */
class __TwigTemplate_8c815588df2c7fe353ba4314b7b5789b9bb50f92256df5f2aeff182c482ccc22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":reservierung:edit.html.twig", 1);
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
        $__internal_571b188ef418dfc77cd4e4270cd3122d77be44bf647d3994b007d789736124e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571b188ef418dfc77cd4e4270cd3122d77be44bf647d3994b007d789736124e4->enter($__internal_571b188ef418dfc77cd4e4270cd3122d77be44bf647d3994b007d789736124e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:edit.html.twig"));

        $__internal_b1b84daa0c7d291d2162c45f4112e66f6b83f71e44388f423a191ac63abd14b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b84daa0c7d291d2162c45f4112e66f6b83f71e44388f423a191ac63abd14b6->enter($__internal_b1b84daa0c7d291d2162c45f4112e66f6b83f71e44388f423a191ac63abd14b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_571b188ef418dfc77cd4e4270cd3122d77be44bf647d3994b007d789736124e4->leave($__internal_571b188ef418dfc77cd4e4270cd3122d77be44bf647d3994b007d789736124e4_prof);

        
        $__internal_b1b84daa0c7d291d2162c45f4112e66f6b83f71e44388f423a191ac63abd14b6->leave($__internal_b1b84daa0c7d291d2162c45f4112e66f6b83f71e44388f423a191ac63abd14b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_323d85b3969f9aee7c4d7852e93ec6c68a1e187ac285ef817dc09f6140677e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323d85b3969f9aee7c4d7852e93ec6c68a1e187ac285ef817dc09f6140677e61->enter($__internal_323d85b3969f9aee7c4d7852e93ec6c68a1e187ac285ef817dc09f6140677e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a104488a51d06114a8b90a794dcf944fd8b4ebafe109d87af818941a4bfe8e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a104488a51d06114a8b90a794dcf944fd8b4ebafe109d87af818941a4bfe8e6d->enter($__internal_a104488a51d06114a8b90a794dcf944fd8b4ebafe109d87af818941a4bfe8e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1>Reservierung edit</h1>
  <div class=\"cration_artiste\">
    <div class=\"cration mdl-shadow--2dp\">
      <div class=\"form_creation\">
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startDatum", array()), 'row', array("attr" => array("class" => "")));
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "endDatum", array()), 'row', array("attr" => array("class" => "")));
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dozent", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "student", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "raum", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        <div>
          ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
          <div class=\"button_p_edit\">
            <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\"/>

            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

            <ul>
              <li>

                <div class=\"retour\">
                  <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_index");
        echo "\">Back to the list</a>
                </div>
              </li>
              <li>
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <div class=\"modifier\">
                  <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
                </div>

                ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_a104488a51d06114a8b90a794dcf944fd8b4ebafe109d87af818941a4bfe8e6d->leave($__internal_a104488a51d06114a8b90a794dcf944fd8b4ebafe109d87af818941a4bfe8e6d_prof);

        
        $__internal_323d85b3969f9aee7c4d7852e93ec6c68a1e187ac285ef817dc09f6140677e61->leave($__internal_323d85b3969f9aee7c4d7852e93ec6c68a1e187ac285ef817dc09f6140677e61_prof);

    }

    public function getTemplateName()
    {
        return ":reservierung:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 34,  103 => 29,  96 => 25,  87 => 19,  80 => 15,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
  <h1>Reservierung edit</h1>
  <div class=\"cration_artiste\">
    <div class=\"cration mdl-shadow--2dp\">
      <div class=\"form_creation\">
        {{ form_start(edit_form) }}
        {{ form_row(edit_form.startDatum, {'attr':{'class':''}})}}
        {{ form_row(edit_form.endDatum, {'attr':{'class':''}})}}
        {{ form_row(edit_form.dozent, {'attr':{'class':'form-control'}})}}
        {{ form_row(edit_form.student, {'attr':{'class':'form-control'}})}}
        {{ form_row(edit_form.raum, {'attr':{'class':'form-control'}})}}
        <div>
          {{ form_widget(edit_form) }}
          <div class=\"button_p_edit\">
            <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\"/>

            {{ form_end(edit_form) }}

            <ul>
              <li>

                <div class=\"retour\">
                  <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminReservierung_index') }}\">Back to the list</a>
                </div>
              </li>
              <li>
                {{ form_start(delete_form) }}
                <div class=\"modifier\">
                  <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
                </div>

                {{ form_end(delete_form) }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", ":reservierung:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierung/edit.html.twig");
    }
}
