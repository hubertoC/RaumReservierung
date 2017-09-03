<?php

/* :reservierung:edit.html.twig */
class __TwigTemplate_8c815588df2c7fe353ba4314b7b5789b9bb50f92256df5f2aeff182c482ccc22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservierung:edit.html.twig", 1);
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
        $__internal_27952ed609b38bd427f89c080c597bc77f7456bfb2c766722b5633f085a0b776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27952ed609b38bd427f89c080c597bc77f7456bfb2c766722b5633f085a0b776->enter($__internal_27952ed609b38bd427f89c080c597bc77f7456bfb2c766722b5633f085a0b776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:edit.html.twig"));

        $__internal_43234c34fc44aeee34385c616cbcf9084bdfad0ced00510436b5cdf3844905d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43234c34fc44aeee34385c616cbcf9084bdfad0ced00510436b5cdf3844905d8->enter($__internal_43234c34fc44aeee34385c616cbcf9084bdfad0ced00510436b5cdf3844905d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierung:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27952ed609b38bd427f89c080c597bc77f7456bfb2c766722b5633f085a0b776->leave($__internal_27952ed609b38bd427f89c080c597bc77f7456bfb2c766722b5633f085a0b776_prof);

        
        $__internal_43234c34fc44aeee34385c616cbcf9084bdfad0ced00510436b5cdf3844905d8->leave($__internal_43234c34fc44aeee34385c616cbcf9084bdfad0ced00510436b5cdf3844905d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_907d05f4891784126881059f2cefe5b1b5463dec49edd5a4da88ffb746a2b0a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907d05f4891784126881059f2cefe5b1b5463dec49edd5a4da88ffb746a2b0a6->enter($__internal_907d05f4891784126881059f2cefe5b1b5463dec49edd5a4da88ffb746a2b0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea610a5afb7a929049cd7cb440489d41049cd48d8c8b5050acfae34b0a459c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea610a5afb7a929049cd7cb440489d41049cd48d8c8b5050acfae34b0a459c52->enter($__internal_ea610a5afb7a929049cd7cb440489d41049cd48d8c8b5050acfae34b0a459c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservierung edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_index");
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
        
        $__internal_ea610a5afb7a929049cd7cb440489d41049cd48d8c8b5050acfae34b0a459c52->leave($__internal_ea610a5afb7a929049cd7cb440489d41049cd48d8c8b5050acfae34b0a459c52_prof);

        
        $__internal_907d05f4891784126881059f2cefe5b1b5463dec49edd5a4da88ffb746a2b0a6->leave($__internal_907d05f4891784126881059f2cefe5b1b5463dec49edd5a4da88ffb746a2b0a6_prof);

    }

    public function getTemplateName()
    {
        return ":reservierung:edit.html.twig";
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
    <h1>Reservierung edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminReservierung_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":reservierung:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierung/edit.html.twig");
    }
}
