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
        $__internal_8b5337e459659d81ef3f942b1595bbf2edf6387dc973534c210d53bf28c571de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5337e459659d81ef3f942b1595bbf2edf6387dc973534c210d53bf28c571de->enter($__internal_8b5337e459659d81ef3f942b1595bbf2edf6387dc973534c210d53bf28c571de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/new.html.twig"));

        $__internal_9768bfad2b43e9bcad4f5d187329d00f2dac89235cde37da743e57c17957fa71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9768bfad2b43e9bcad4f5d187329d00f2dac89235cde37da743e57c17957fa71->enter($__internal_9768bfad2b43e9bcad4f5d187329d00f2dac89235cde37da743e57c17957fa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b5337e459659d81ef3f942b1595bbf2edf6387dc973534c210d53bf28c571de->leave($__internal_8b5337e459659d81ef3f942b1595bbf2edf6387dc973534c210d53bf28c571de_prof);

        
        $__internal_9768bfad2b43e9bcad4f5d187329d00f2dac89235cde37da743e57c17957fa71->leave($__internal_9768bfad2b43e9bcad4f5d187329d00f2dac89235cde37da743e57c17957fa71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_136d401bfbd5f3d7380c440fc12ce4d4142081a25299cc28044f25f838cb3794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136d401bfbd5f3d7380c440fc12ce4d4142081a25299cc28044f25f838cb3794->enter($__internal_136d401bfbd5f3d7380c440fc12ce4d4142081a25299cc28044f25f838cb3794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e450dc14ac8919b54f1e022d11370f3fedbdc69030b0afd45061661ca229430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e450dc14ac8919b54f1e022d11370f3fedbdc69030b0afd45061661ca229430->enter($__internal_8e450dc14ac8919b54f1e022d11370f3fedbdc69030b0afd45061661ca229430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8e450dc14ac8919b54f1e022d11370f3fedbdc69030b0afd45061661ca229430->leave($__internal_8e450dc14ac8919b54f1e022d11370f3fedbdc69030b0afd45061661ca229430_prof);

        
        $__internal_136d401bfbd5f3d7380c440fc12ce4d4142081a25299cc28044f25f838cb3794->leave($__internal_136d401bfbd5f3d7380c440fc12ce4d4142081a25299cc28044f25f838cb3794_prof);

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
</div>
</div>
{% endblock %}
", "dozent/new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/dozent/new.html.twig");
    }
}
