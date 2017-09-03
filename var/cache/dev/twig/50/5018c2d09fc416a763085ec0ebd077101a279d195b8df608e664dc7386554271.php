<?php

/* :gebaeude:edit.html.twig */
class __TwigTemplate_6df2d1c5483539118380b3ee871d21fe4fd400b5f159c4038c12773d5b52fbbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":gebaeude:edit.html.twig", 1);
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
        $__internal_bf40553e84db360367befa10e01461ee453e909172fdd8874c37a6e6785c39ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf40553e84db360367befa10e01461ee453e909172fdd8874c37a6e6785c39ab->enter($__internal_bf40553e84db360367befa10e01461ee453e909172fdd8874c37a6e6785c39ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gebaeude:edit.html.twig"));

        $__internal_a8c27befb9c16da46c1b83d4d7cce0fdc1b0867f76feb8a53f1fb55d9f728859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c27befb9c16da46c1b83d4d7cce0fdc1b0867f76feb8a53f1fb55d9f728859->enter($__internal_a8c27befb9c16da46c1b83d4d7cce0fdc1b0867f76feb8a53f1fb55d9f728859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gebaeude:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf40553e84db360367befa10e01461ee453e909172fdd8874c37a6e6785c39ab->leave($__internal_bf40553e84db360367befa10e01461ee453e909172fdd8874c37a6e6785c39ab_prof);

        
        $__internal_a8c27befb9c16da46c1b83d4d7cce0fdc1b0867f76feb8a53f1fb55d9f728859->leave($__internal_a8c27befb9c16da46c1b83d4d7cce0fdc1b0867f76feb8a53f1fb55d9f728859_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3df5018ea172ec263922d01f2de9cbd1290a666411d0dce1839420d80ad42e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df5018ea172ec263922d01f2de9cbd1290a666411d0dce1839420d80ad42e50->enter($__internal_3df5018ea172ec263922d01f2de9cbd1290a666411d0dce1839420d80ad42e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75519bdffafc522afbe62fac92d4224bbffd65b91014fb7425e45e927f96bf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75519bdffafc522afbe62fac92d4224bbffd65b91014fb7425e45e927f96bf23->enter($__internal_75519bdffafc522afbe62fac92d4224bbffd65b91014fb7425e45e927f96bf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Gebaeude edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_75519bdffafc522afbe62fac92d4224bbffd65b91014fb7425e45e927f96bf23->leave($__internal_75519bdffafc522afbe62fac92d4224bbffd65b91014fb7425e45e927f96bf23_prof);

        
        $__internal_3df5018ea172ec263922d01f2de9cbd1290a666411d0dce1839420d80ad42e50->leave($__internal_3df5018ea172ec263922d01f2de9cbd1290a666411d0dce1839420d80ad42e50_prof);

    }

    public function getTemplateName()
    {
        return ":gebaeude:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Gebaeude edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminGebaeude_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":gebaeude:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/gebaeude/edit.html.twig");
    }
}
