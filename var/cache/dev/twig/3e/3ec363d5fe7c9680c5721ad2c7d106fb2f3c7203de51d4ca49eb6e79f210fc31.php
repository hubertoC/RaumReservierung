<?php

/* student/edit.html.twig */
class __TwigTemplate_175571699487c5402367c76a7924b331ef70cad82aca9ae32a77ba2918856c5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "student/edit.html.twig", 1);
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
        $__internal_76e26775d69ca01e75ea2f91644e6d14e3447f8c7fecdb5df59d7c9f97b6d903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e26775d69ca01e75ea2f91644e6d14e3447f8c7fecdb5df59d7c9f97b6d903->enter($__internal_76e26775d69ca01e75ea2f91644e6d14e3447f8c7fecdb5df59d7c9f97b6d903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/edit.html.twig"));

        $__internal_59af7dba8a6af9be0d244d5d9107a37d48c2fa8a29db6d62b1a47d659cfabd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59af7dba8a6af9be0d244d5d9107a37d48c2fa8a29db6d62b1a47d659cfabd68->enter($__internal_59af7dba8a6af9be0d244d5d9107a37d48c2fa8a29db6d62b1a47d659cfabd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76e26775d69ca01e75ea2f91644e6d14e3447f8c7fecdb5df59d7c9f97b6d903->leave($__internal_76e26775d69ca01e75ea2f91644e6d14e3447f8c7fecdb5df59d7c9f97b6d903_prof);

        
        $__internal_59af7dba8a6af9be0d244d5d9107a37d48c2fa8a29db6d62b1a47d659cfabd68->leave($__internal_59af7dba8a6af9be0d244d5d9107a37d48c2fa8a29db6d62b1a47d659cfabd68_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25b0947fc9972f76844bdb37f123d4f83e6c945301a24ddcc22f659c5d10d5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b0947fc9972f76844bdb37f123d4f83e6c945301a24ddcc22f659c5d10d5e4->enter($__internal_25b0947fc9972f76844bdb37f123d4f83e6c945301a24ddcc22f659c5d10d5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_734b4363d4d99b5cf00f55d36d86c133157ac45b3aa33cf0b22f8aebd2845e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734b4363d4d99b5cf00f55d36d86c133157ac45b3aa33cf0b22f8aebd2845e4d->enter($__internal_734b4363d4d99b5cf00f55d36d86c133157ac45b3aa33cf0b22f8aebd2845e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_734b4363d4d99b5cf00f55d36d86c133157ac45b3aa33cf0b22f8aebd2845e4d->leave($__internal_734b4363d4d99b5cf00f55d36d86c133157ac45b3aa33cf0b22f8aebd2845e4d_prof);

        
        $__internal_25b0947fc9972f76844bdb37f123d4f83e6c945301a24ddcc22f659c5d10d5e4->leave($__internal_25b0947fc9972f76844bdb37f123d4f83e6c945301a24ddcc22f659c5d10d5e4_prof);

    }

    public function getTemplateName()
    {
        return "student/edit.html.twig";
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
", "student/edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/student/edit.html.twig");
    }
}
