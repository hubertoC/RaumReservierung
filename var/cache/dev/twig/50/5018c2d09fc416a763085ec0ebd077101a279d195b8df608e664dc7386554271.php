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
        $__internal_c9954088a10772bbd7fb0f38081520aae402a27795b4615e88b2c145fcad6b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9954088a10772bbd7fb0f38081520aae402a27795b4615e88b2c145fcad6b69->enter($__internal_c9954088a10772bbd7fb0f38081520aae402a27795b4615e88b2c145fcad6b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/edit.html.twig"));

        $__internal_e19d0f72558e1aa818ac0b51266b034f4684db5f7b13560291ff39fdcbb83364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19d0f72558e1aa818ac0b51266b034f4684db5f7b13560291ff39fdcbb83364->enter($__internal_e19d0f72558e1aa818ac0b51266b034f4684db5f7b13560291ff39fdcbb83364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9954088a10772bbd7fb0f38081520aae402a27795b4615e88b2c145fcad6b69->leave($__internal_c9954088a10772bbd7fb0f38081520aae402a27795b4615e88b2c145fcad6b69_prof);

        
        $__internal_e19d0f72558e1aa818ac0b51266b034f4684db5f7b13560291ff39fdcbb83364->leave($__internal_e19d0f72558e1aa818ac0b51266b034f4684db5f7b13560291ff39fdcbb83364_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5e76dff8722b438351e5dae1e66f197e247112c6a767f8bb521759576c10807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e76dff8722b438351e5dae1e66f197e247112c6a767f8bb521759576c10807->enter($__internal_c5e76dff8722b438351e5dae1e66f197e247112c6a767f8bb521759576c10807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_108977fb517a261c7ade8d224b571869dc8b88b6b4a9b7018c3bce6553850db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108977fb517a261c7ade8d224b571869dc8b88b6b4a9b7018c3bce6553850db4->enter($__internal_108977fb517a261c7ade8d224b571869dc8b88b6b4a9b7018c3bce6553850db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_108977fb517a261c7ade8d224b571869dc8b88b6b4a9b7018c3bce6553850db4->leave($__internal_108977fb517a261c7ade8d224b571869dc8b88b6b4a9b7018c3bce6553850db4_prof);

        
        $__internal_c5e76dff8722b438351e5dae1e66f197e247112c6a767f8bb521759576c10807->leave($__internal_c5e76dff8722b438351e5dae1e66f197e247112c6a767f8bb521759576c10807_prof);

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
