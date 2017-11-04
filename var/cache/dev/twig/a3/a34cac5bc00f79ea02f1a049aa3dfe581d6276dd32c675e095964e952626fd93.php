<?php

/* :dozent:new.html.twig */
class __TwigTemplate_adf17fe83a2ed5f5451d080aa7a07ad7d5cf18b1ad33868fbe3b20e1c18eec2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":dozent:new.html.twig", 1);
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
        $__internal_6e3b9fad7be039808e8eb9f34de2cfa6bc65f5bf51916844548252fe741e567e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3b9fad7be039808e8eb9f34de2cfa6bc65f5bf51916844548252fe741e567e->enter($__internal_6e3b9fad7be039808e8eb9f34de2cfa6bc65f5bf51916844548252fe741e567e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dozent:new.html.twig"));

        $__internal_764164ab8aa1f4d6d1e7ffa545e68792055968a97d794576f34288aa656c1797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764164ab8aa1f4d6d1e7ffa545e68792055968a97d794576f34288aa656c1797->enter($__internal_764164ab8aa1f4d6d1e7ffa545e68792055968a97d794576f34288aa656c1797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dozent:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e3b9fad7be039808e8eb9f34de2cfa6bc65f5bf51916844548252fe741e567e->leave($__internal_6e3b9fad7be039808e8eb9f34de2cfa6bc65f5bf51916844548252fe741e567e_prof);

        
        $__internal_764164ab8aa1f4d6d1e7ffa545e68792055968a97d794576f34288aa656c1797->leave($__internal_764164ab8aa1f4d6d1e7ffa545e68792055968a97d794576f34288aa656c1797_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa9b2d2cae46f1d6dc6ce6a25312d2625406b31f3dc17bd5839d6b731beba189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9b2d2cae46f1d6dc6ce6a25312d2625406b31f3dc17bd5839d6b731beba189->enter($__internal_fa9b2d2cae46f1d6dc6ce6a25312d2625406b31f3dc17bd5839d6b731beba189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ded7a1b592023a80a95b00fdd219b175a0d45cd6228528e9d8423e8ffdf20deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded7a1b592023a80a95b00fdd219b175a0d45cd6228528e9d8423e8ffdf20deb->enter($__internal_ded7a1b592023a80a95b00fdd219b175a0d45cd6228528e9d8423e8ffdf20deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
</div>
</div>
";
        
        $__internal_ded7a1b592023a80a95b00fdd219b175a0d45cd6228528e9d8423e8ffdf20deb->leave($__internal_ded7a1b592023a80a95b00fdd219b175a0d45cd6228528e9d8423e8ffdf20deb_prof);

        
        $__internal_fa9b2d2cae46f1d6dc6ce6a25312d2625406b31f3dc17bd5839d6b731beba189->leave($__internal_fa9b2d2cae46f1d6dc6ce6a25312d2625406b31f3dc17bd5839d6b731beba189_prof);

    }

    public function getTemplateName()
    {
        return ":dozent:new.html.twig";
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
</div>
</div>
{% endblock %}
", ":dozent:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/dozent/new.html.twig");
    }
}
