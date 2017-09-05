<?php

/* dozent/new.html.twig */
class __TwigTemplate_adf17fe83a2ed5f5451d080aa7a07ad7d5cf18b1ad33868fbe3b20e1c18eec2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "dozent/new.html.twig", 1);
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
        $__internal_950176f517a0330f4fade68d7306b836d09fc6bd3a36df7f12b51af2b94976fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950176f517a0330f4fade68d7306b836d09fc6bd3a36df7f12b51af2b94976fe->enter($__internal_950176f517a0330f4fade68d7306b836d09fc6bd3a36df7f12b51af2b94976fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/new.html.twig"));

        $__internal_481d3798362f418a7dfd785faf3a82f17759b566a3c2ec51a2440020b102e7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481d3798362f418a7dfd785faf3a82f17759b566a3c2ec51a2440020b102e7a6->enter($__internal_481d3798362f418a7dfd785faf3a82f17759b566a3c2ec51a2440020b102e7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_950176f517a0330f4fade68d7306b836d09fc6bd3a36df7f12b51af2b94976fe->leave($__internal_950176f517a0330f4fade68d7306b836d09fc6bd3a36df7f12b51af2b94976fe_prof);

        
        $__internal_481d3798362f418a7dfd785faf3a82f17759b566a3c2ec51a2440020b102e7a6->leave($__internal_481d3798362f418a7dfd785faf3a82f17759b566a3c2ec51a2440020b102e7a6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f37247c2af7d4d70c71e616bd072a7d76c6ec2d2f0079044931bc67d898fd641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f37247c2af7d4d70c71e616bd072a7d76c6ec2d2f0079044931bc67d898fd641->enter($__internal_f37247c2af7d4d70c71e616bd072a7d76c6ec2d2f0079044931bc67d898fd641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c8a1431ef10f8d07f1d5dce9f89c2ae5c558c89d9a30506c792008b341affeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8a1431ef10f8d07f1d5dce9f89c2ae5c558c89d9a30506c792008b341affeb->enter($__internal_7c8a1431ef10f8d07f1d5dce9f89c2ae5c558c89d9a30506c792008b341affeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dozent creation</h1>
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "raumNummer", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <br>
        <input class=\"mdl-button mdl-js-button mdl-button--raised\"type=\"submit\" value=\"Create\" />
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
          <div class=\"lon\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
  </div>
</div>
";
        
        $__internal_7c8a1431ef10f8d07f1d5dce9f89c2ae5c558c89d9a30506c792008b341affeb->leave($__internal_7c8a1431ef10f8d07f1d5dce9f89c2ae5c558c89d9a30506c792008b341affeb_prof);

        
        $__internal_f37247c2af7d4d70c71e616bd072a7d76c6ec2d2f0079044931bc67d898fd641->leave($__internal_f37247c2af7d4d70c71e616bd072a7d76c6ec2d2f0079044931bc67d898fd641_prof);

    }

    public function getTemplateName()
    {
        return "dozent/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  87 => 19,  81 => 16,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Dozent creation</h1>
    <div class= \"cration_artiste\">
      <div class=\"cration mdl-shadow--2dp\">
               <div class=\"form_creation\">
                 <div class=\"form-groupe\">
    {{ form_start(form) }}
    {{ form_row(form.name, {'attr':{'class':'form-control'}})}}
    {{ form_row(form.vorname, {'attr':{'class':'form-control'}})}}
    {{ form_row(form.title, {'attr':{'class':'form-control'}})}}
    {{ form_row(form.raumNummer, {'attr':{'class':'form-control'}})}}
    {{ form_row(form.email, {'attr':{'class':'form-control'}})}}

        {{ form_widget(form) }}
        <br>
        <input class=\"mdl-button mdl-js-button mdl-button--raised\"type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
          <div class=\"lon\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminDozent_index') }}\">Back to the list</a>
        </li>
    </ul>
  </div>
</div>
{% endblock %}
", "dozent/new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/dozent/new.html.twig");
    }
}
