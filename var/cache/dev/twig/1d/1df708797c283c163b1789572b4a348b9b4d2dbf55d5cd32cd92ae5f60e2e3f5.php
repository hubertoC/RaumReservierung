<?php

/* :reservierung:new.html.twig */
class __TwigTemplate_a4a9c9b445e111ecf9ead7f382795adec657e6fc2fe9a1faa450895911837425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservierung:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c362ce1ee884f4429d4295b9faeff117cbe2a3008465055bb6f1abc0d0aa80c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c362ce1ee884f4429d4295b9faeff117cbe2a3008465055bb6f1abc0d0aa80c0->enter($__internal_c362ce1ee884f4429d4295b9faeff117cbe2a3008465055bb6f1abc0d0aa80c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:new.html.twig"));

        $__internal_9d514410d8e2b7ddc800f2a9fb806ef8e57c1c1c9c2a253dfad2358284843f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d514410d8e2b7ddc800f2a9fb806ef8e57c1c1c9c2a253dfad2358284843f27->enter($__internal_9d514410d8e2b7ddc800f2a9fb806ef8e57c1c1c9c2a253dfad2358284843f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c362ce1ee884f4429d4295b9faeff117cbe2a3008465055bb6f1abc0d0aa80c0->leave($__internal_c362ce1ee884f4429d4295b9faeff117cbe2a3008465055bb6f1abc0d0aa80c0_prof);

        
        $__internal_9d514410d8e2b7ddc800f2a9fb806ef8e57c1c1c9c2a253dfad2358284843f27->leave($__internal_9d514410d8e2b7ddc800f2a9fb806ef8e57c1c1c9c2a253dfad2358284843f27_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e2b2828fedd4b19bf835eec767c9dd936a2871511635fd6b2ed62e6ed854c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2b2828fedd4b19bf835eec767c9dd936a2871511635fd6b2ed62e6ed854c7f->enter($__internal_4e2b2828fedd4b19bf835eec767c9dd936a2871511635fd6b2ed62e6ed854c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cfd60af18f9944624fa96031937eb26941c4f64370da15dc2066176b16fd215e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd60af18f9944624fa96031937eb26941c4f64370da15dc2066176b16fd215e->enter($__internal_cfd60af18f9944624fa96031937eb26941c4f64370da15dc2066176b16fd215e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservierung creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_cfd60af18f9944624fa96031937eb26941c4f64370da15dc2066176b16fd215e->leave($__internal_cfd60af18f9944624fa96031937eb26941c4f64370da15dc2066176b16fd215e_prof);

        
        $__internal_4e2b2828fedd4b19bf835eec767c9dd936a2871511635fd6b2ed62e6ed854c7f->leave($__internal_4e2b2828fedd4b19bf835eec767c9dd936a2871511635fd6b2ed62e6ed854c7f_prof);

    }

    public function getTemplateName()
    {
        return ":reservierung:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Reservierung creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminReservierung_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":reservierung:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierung/new.html.twig");
    }
}
