<?php

/* dozent/edit.html.twig */
class __TwigTemplate_ac238709e57cf63af729986f8fb1ea244627354c8efcae08f8772726fe01c032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "dozent/edit.html.twig", 1);
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
        $__internal_84e4701144d716b2fe71d26293e71716d6e355ba01c03c317364916aee92a700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e4701144d716b2fe71d26293e71716d6e355ba01c03c317364916aee92a700->enter($__internal_84e4701144d716b2fe71d26293e71716d6e355ba01c03c317364916aee92a700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/edit.html.twig"));

        $__internal_1617049f8cb4ca641b7274ca06fa68fa26f902561b44e8c7b0564ffc65593564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1617049f8cb4ca641b7274ca06fa68fa26f902561b44e8c7b0564ffc65593564->enter($__internal_1617049f8cb4ca641b7274ca06fa68fa26f902561b44e8c7b0564ffc65593564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84e4701144d716b2fe71d26293e71716d6e355ba01c03c317364916aee92a700->leave($__internal_84e4701144d716b2fe71d26293e71716d6e355ba01c03c317364916aee92a700_prof);

        
        $__internal_1617049f8cb4ca641b7274ca06fa68fa26f902561b44e8c7b0564ffc65593564->leave($__internal_1617049f8cb4ca641b7274ca06fa68fa26f902561b44e8c7b0564ffc65593564_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_daee72a2cbd09ca8c16e176a32b57e9543fd35de82ba16ee3ac13b9f28f0de2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daee72a2cbd09ca8c16e176a32b57e9543fd35de82ba16ee3ac13b9f28f0de2c->enter($__internal_daee72a2cbd09ca8c16e176a32b57e9543fd35de82ba16ee3ac13b9f28f0de2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3db3dd43d4474f372de2958257bd790adaf8ed5709dfb2acb32ccfed487f652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3db3dd43d4474f372de2958257bd790adaf8ed5709dfb2acb32ccfed487f652->enter($__internal_f3db3dd43d4474f372de2958257bd790adaf8ed5709dfb2acb32ccfed487f652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dozent edit</h1>
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "vorname", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "raumNummer", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <div class=\"button_p_edit\">

        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\" />
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
          <div class=\"retour\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <div class=\"modifier\">

                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
          </div>

        </li>
    </ul>
  </div>
</div>
</div>
</div>
";
        
        $__internal_f3db3dd43d4474f372de2958257bd790adaf8ed5709dfb2acb32ccfed487f652->leave($__internal_f3db3dd43d4474f372de2958257bd790adaf8ed5709dfb2acb32ccfed487f652_prof);

        
        $__internal_daee72a2cbd09ca8c16e176a32b57e9543fd35de82ba16ee3ac13b9f28f0de2c->leave($__internal_daee72a2cbd09ca8c16e176a32b57e9543fd35de82ba16ee3ac13b9f28f0de2c_prof);

    }

    public function getTemplateName()
    {
        return "dozent/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  102 => 28,  96 => 25,  87 => 19,  80 => 15,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Dozent edit</h1>
    <div class= \"cration_artiste\">
          <div class=\"cration mdl-shadow--2dp\">
            <div class=\"form_creation\">
    {{ form_start(edit_form) }}
    {{ form_row(edit_form.name, {'attr':{'class':'form-control'}})}}
    {{ form_row(edit_form.vorname, {'attr':{'class':'form-control'}})}}
    {{ form_row(edit_form.title, {'attr':{'class':'form-control'}})}}
    {{ form_row(edit_form.raumNummer, {'attr':{'class':'form-control'}})}}
    {{ form_row(edit_form.email, {'attr':{'class':'form-control'}})}}

        {{ form_widget(edit_form) }}
        <div class=\"button_p_edit\">

        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
          <div class=\"retour\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminDozent_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <div class=\"modifier\">

                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
          </div>

        </li>
    </ul>
  </div>
</div>
</div>
</div>
{% endblock %}
", "dozent/edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/dozent/edit.html.twig");
    }
}
