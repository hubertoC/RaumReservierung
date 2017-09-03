<?php

/* :dozent:new.html.twig */
class __TwigTemplate_adf17fe83a2ed5f5451d080aa7a07ad7d5cf18b1ad33868fbe3b20e1c18eec2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dozent:new.html.twig", 1);
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
        $__internal_47f4a5e018f6dec033ad0bfcd79c60ae9cdb08783f8fd4ea8f8a2a9c9c3313f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f4a5e018f6dec033ad0bfcd79c60ae9cdb08783f8fd4ea8f8a2a9c9c3313f4->enter($__internal_47f4a5e018f6dec033ad0bfcd79c60ae9cdb08783f8fd4ea8f8a2a9c9c3313f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dozent:new.html.twig"));

        $__internal_25265fd356f326ad7ba984a0cab586632665884559a392f6ee957c98b6e4a15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25265fd356f326ad7ba984a0cab586632665884559a392f6ee957c98b6e4a15c->enter($__internal_25265fd356f326ad7ba984a0cab586632665884559a392f6ee957c98b6e4a15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dozent:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47f4a5e018f6dec033ad0bfcd79c60ae9cdb08783f8fd4ea8f8a2a9c9c3313f4->leave($__internal_47f4a5e018f6dec033ad0bfcd79c60ae9cdb08783f8fd4ea8f8a2a9c9c3313f4_prof);

        
        $__internal_25265fd356f326ad7ba984a0cab586632665884559a392f6ee957c98b6e4a15c->leave($__internal_25265fd356f326ad7ba984a0cab586632665884559a392f6ee957c98b6e4a15c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cf273d94b97c37cad0da1fce0953c85bcc877660fe8a31439d74f093e9f364a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf273d94b97c37cad0da1fce0953c85bcc877660fe8a31439d74f093e9f364a->enter($__internal_3cf273d94b97c37cad0da1fce0953c85bcc877660fe8a31439d74f093e9f364a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_689f554c6c5ff3749ea90d8defc70294d7a81131509b58668164ee52b52e1aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689f554c6c5ff3749ea90d8defc70294d7a81131509b58668164ee52b52e1aea->enter($__internal_689f554c6c5ff3749ea90d8defc70294d7a81131509b58668164ee52b52e1aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dozent creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_689f554c6c5ff3749ea90d8defc70294d7a81131509b58668164ee52b52e1aea->leave($__internal_689f554c6c5ff3749ea90d8defc70294d7a81131509b58668164ee52b52e1aea_prof);

        
        $__internal_3cf273d94b97c37cad0da1fce0953c85bcc877660fe8a31439d74f093e9f364a->leave($__internal_3cf273d94b97c37cad0da1fce0953c85bcc877660fe8a31439d74f093e9f364a_prof);

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
    <h1>Dozent creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminDozent_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":dozent:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/dozent/new.html.twig");
    }
}
