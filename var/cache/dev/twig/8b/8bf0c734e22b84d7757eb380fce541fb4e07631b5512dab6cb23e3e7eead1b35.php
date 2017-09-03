<?php

/* :student:new.html.twig */
class __TwigTemplate_e7b54527582c7521d42044c16439d1dd094fd075ff28ff1d5d6744d5f5b47d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":student:new.html.twig", 1);
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
        $__internal_77a3f825df46b470c048ef8deccff00621a5c6efefd79a74d7febf95f5751049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a3f825df46b470c048ef8deccff00621a5c6efefd79a74d7febf95f5751049->enter($__internal_77a3f825df46b470c048ef8deccff00621a5c6efefd79a74d7febf95f5751049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:new.html.twig"));

        $__internal_c73589ecd70e5d189260c322e06d9a1372037deb7c7bde8df1cf496f70e465fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73589ecd70e5d189260c322e06d9a1372037deb7c7bde8df1cf496f70e465fa->enter($__internal_c73589ecd70e5d189260c322e06d9a1372037deb7c7bde8df1cf496f70e465fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77a3f825df46b470c048ef8deccff00621a5c6efefd79a74d7febf95f5751049->leave($__internal_77a3f825df46b470c048ef8deccff00621a5c6efefd79a74d7febf95f5751049_prof);

        
        $__internal_c73589ecd70e5d189260c322e06d9a1372037deb7c7bde8df1cf496f70e465fa->leave($__internal_c73589ecd70e5d189260c322e06d9a1372037deb7c7bde8df1cf496f70e465fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d6f7e2ae778fd796bd82c4622b3f1b4e69735447a9aafe722e8dcfbf4874791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6f7e2ae778fd796bd82c4622b3f1b4e69735447a9aafe722e8dcfbf4874791->enter($__internal_8d6f7e2ae778fd796bd82c4622b3f1b4e69735447a9aafe722e8dcfbf4874791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ef811301c716fd750b0e2c49fa75cd429cc5b5a7991fe0d917cde0f3d0135a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef811301c716fd750b0e2c49fa75cd429cc5b5a7991fe0d917cde0f3d0135a6->enter($__internal_0ef811301c716fd750b0e2c49fa75cd429cc5b5a7991fe0d917cde0f3d0135a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0ef811301c716fd750b0e2c49fa75cd429cc5b5a7991fe0d917cde0f3d0135a6->leave($__internal_0ef811301c716fd750b0e2c49fa75cd429cc5b5a7991fe0d917cde0f3d0135a6_prof);

        
        $__internal_8d6f7e2ae778fd796bd82c4622b3f1b4e69735447a9aafe722e8dcfbf4874791->leave($__internal_8d6f7e2ae778fd796bd82c4622b3f1b4e69735447a9aafe722e8dcfbf4874791_prof);

    }

    public function getTemplateName()
    {
        return ":student:new.html.twig";
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
    <h1>Student creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminStudent_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":student:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/student/new.html.twig");
    }
}
