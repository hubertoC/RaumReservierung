<?php

/* :student:edit.html.twig */
class __TwigTemplate_175571699487c5402367c76a7924b331ef70cad82aca9ae32a77ba2918856c5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":student:edit.html.twig", 1);
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
        $__internal_602c1a15e4b506bd6d8d43b57425b2e94429cef4fe3b2f9ae8310768577137d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602c1a15e4b506bd6d8d43b57425b2e94429cef4fe3b2f9ae8310768577137d4->enter($__internal_602c1a15e4b506bd6d8d43b57425b2e94429cef4fe3b2f9ae8310768577137d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:edit.html.twig"));

        $__internal_5b39d89701327d0bad160aa5efad3ee244c4f126dfa0ec6ddbafb63aa406b470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b39d89701327d0bad160aa5efad3ee244c4f126dfa0ec6ddbafb63aa406b470->enter($__internal_5b39d89701327d0bad160aa5efad3ee244c4f126dfa0ec6ddbafb63aa406b470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_602c1a15e4b506bd6d8d43b57425b2e94429cef4fe3b2f9ae8310768577137d4->leave($__internal_602c1a15e4b506bd6d8d43b57425b2e94429cef4fe3b2f9ae8310768577137d4_prof);

        
        $__internal_5b39d89701327d0bad160aa5efad3ee244c4f126dfa0ec6ddbafb63aa406b470->leave($__internal_5b39d89701327d0bad160aa5efad3ee244c4f126dfa0ec6ddbafb63aa406b470_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc85baa51152de0dc92981dfdef5baad8c8c720b9dc3af48161acd807cdabb25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc85baa51152de0dc92981dfdef5baad8c8c720b9dc3af48161acd807cdabb25->enter($__internal_fc85baa51152de0dc92981dfdef5baad8c8c720b9dc3af48161acd807cdabb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_224cff2e8eff7894ea127381d04cdc3d2969d397f7599af10ccb7f05112c09ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224cff2e8eff7894ea127381d04cdc3d2969d397f7599af10ccb7f05112c09ad->enter($__internal_224cff2e8eff7894ea127381d04cdc3d2969d397f7599af10ccb7f05112c09ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student edit</h1>
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <div class=\"button_p_edit\">

        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\" />
    </div>
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
          <div class=\"retour\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_index");
        echo "\">Back to the list</a>
          </div>
</li>
        <li>
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <div class=\"modifier\">

                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
              </div>
";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
  </div>
  </div>
  </div>
";
        
        $__internal_224cff2e8eff7894ea127381d04cdc3d2969d397f7599af10ccb7f05112c09ad->leave($__internal_224cff2e8eff7894ea127381d04cdc3d2969d397f7599af10ccb7f05112c09ad_prof);

        
        $__internal_fc85baa51152de0dc92981dfdef5baad8c8c720b9dc3af48161acd807cdabb25->leave($__internal_fc85baa51152de0dc92981dfdef5baad8c8c720b9dc3af48161acd807cdabb25_prof);

    }

    public function getTemplateName()
    {
        return ":student:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  96 => 28,  89 => 24,  80 => 18,  72 => 13,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Student edit</h1>
    <div class= \"cration_artiste\">
          <div class=\"cration mdl-shadow--2dp\">
            <div class=\"form_creation\">
    {{ form_start(edit_form) }}
    {{ form_row(edit_form.name, {'attr':{'class':'form-control'}})}}
    {{ form_row(edit_form.vorname, {'attr':{'class':'form-control'}})}}
    {{ form_row(edit_form.email, {'attr':{'class':'form-control'}})}}

        {{ form_widget(edit_form) }}
        <div class=\"button_p_edit\">

        <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\" />
    </div>
    {{ form_end(edit_form) }}

    <ul>
        <li>
          <div class=\"retour\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminStudent_index') }}\">Back to the list</a>
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
{% endblock %}
", ":student:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/student/edit.html.twig");
    }
}
