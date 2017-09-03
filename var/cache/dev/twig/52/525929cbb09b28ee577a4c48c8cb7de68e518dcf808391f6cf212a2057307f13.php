<?php

/* :gebaeude:new.html.twig */
class __TwigTemplate_30749f2dd947dd74f4d2df41de1a4a8b4d476d5aa2d78c316c3ac39044d3167b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":gebaeude:new.html.twig", 1);
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
        $__internal_60d75d4b33e66d573180e46dd016357acb0a81af33790ea94f2fe9b5cb6ef842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d75d4b33e66d573180e46dd016357acb0a81af33790ea94f2fe9b5cb6ef842->enter($__internal_60d75d4b33e66d573180e46dd016357acb0a81af33790ea94f2fe9b5cb6ef842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gebaeude:new.html.twig"));

        $__internal_8c3603859d1415fa474eaa362525ab74711b4f52eaac49654fa1c529934397ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3603859d1415fa474eaa362525ab74711b4f52eaac49654fa1c529934397ae->enter($__internal_8c3603859d1415fa474eaa362525ab74711b4f52eaac49654fa1c529934397ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gebaeude:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60d75d4b33e66d573180e46dd016357acb0a81af33790ea94f2fe9b5cb6ef842->leave($__internal_60d75d4b33e66d573180e46dd016357acb0a81af33790ea94f2fe9b5cb6ef842_prof);

        
        $__internal_8c3603859d1415fa474eaa362525ab74711b4f52eaac49654fa1c529934397ae->leave($__internal_8c3603859d1415fa474eaa362525ab74711b4f52eaac49654fa1c529934397ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17e448cb40d4f4bf41bcea7982d20e208264e5db44dc1f4e0172d7ad8065a3d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e448cb40d4f4bf41bcea7982d20e208264e5db44dc1f4e0172d7ad8065a3d5->enter($__internal_17e448cb40d4f4bf41bcea7982d20e208264e5db44dc1f4e0172d7ad8065a3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed7f29dd245903176ce0e47a7a40bc7f9f109117b0b729886fbc5b757ebf4104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7f29dd245903176ce0e47a7a40bc7f9f109117b0b729886fbc5b757ebf4104->enter($__internal_ed7f29dd245903176ce0e47a7a40bc7f9f109117b0b729886fbc5b757ebf4104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Gebaeude creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ed7f29dd245903176ce0e47a7a40bc7f9f109117b0b729886fbc5b757ebf4104->leave($__internal_ed7f29dd245903176ce0e47a7a40bc7f9f109117b0b729886fbc5b757ebf4104_prof);

        
        $__internal_17e448cb40d4f4bf41bcea7982d20e208264e5db44dc1f4e0172d7ad8065a3d5->leave($__internal_17e448cb40d4f4bf41bcea7982d20e208264e5db44dc1f4e0172d7ad8065a3d5_prof);

    }

    public function getTemplateName()
    {
        return ":gebaeude:new.html.twig";
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
    <h1>Gebaeude creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminGebaeude_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":gebaeude:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/gebaeude/new.html.twig");
    }
}
