<?php

/* :gebaeude:show.html.twig */
class __TwigTemplate_7afe820ac7ea24ee89d24042ff9c8f5c3632890b904fb4639d70af6594e2cb74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":gebaeude:show.html.twig", 1);
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
        $__internal_f07a44fc14f52454886501abc4811fb2ed6be0f962e2a02537e4e34755b3c94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07a44fc14f52454886501abc4811fb2ed6be0f962e2a02537e4e34755b3c94f->enter($__internal_f07a44fc14f52454886501abc4811fb2ed6be0f962e2a02537e4e34755b3c94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gebaeude:show.html.twig"));

        $__internal_394975ae8163f46a74d4a556a0cce5257ebb0d1d419c65731e2e62d6f880c606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394975ae8163f46a74d4a556a0cce5257ebb0d1d419c65731e2e62d6f880c606->enter($__internal_394975ae8163f46a74d4a556a0cce5257ebb0d1d419c65731e2e62d6f880c606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gebaeude:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f07a44fc14f52454886501abc4811fb2ed6be0f962e2a02537e4e34755b3c94f->leave($__internal_f07a44fc14f52454886501abc4811fb2ed6be0f962e2a02537e4e34755b3c94f_prof);

        
        $__internal_394975ae8163f46a74d4a556a0cce5257ebb0d1d419c65731e2e62d6f880c606->leave($__internal_394975ae8163f46a74d4a556a0cce5257ebb0d1d419c65731e2e62d6f880c606_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0069cb8a199039a8f870b3bacf1848da794577c6cb884ae1d6d1f32526443d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0069cb8a199039a8f870b3bacf1848da794577c6cb884ae1d6d1f32526443d4a->enter($__internal_0069cb8a199039a8f870b3bacf1848da794577c6cb884ae1d6d1f32526443d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a64668e40470896964f8a577fa115c884d244193105b4da72fff4e1e377660d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a64668e40470896964f8a577fa115c884d244193105b4da72fff4e1e377660d->enter($__internal_4a64668e40470896964f8a577fa115c884d244193105b4da72fff4e1e377660d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Gebaeude</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gebaeude"]) ? $context["gebaeude"] : $this->getContext($context, "gebaeude")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nummer</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gebaeude"]) ? $context["gebaeude"] : $this->getContext($context, "gebaeude")), "nummer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gebaeude"]) ? $context["gebaeude"] : $this->getContext($context, "gebaeude")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_edit", array("id" => $this->getAttribute((isset($context["gebaeude"]) ? $context["gebaeude"] : $this->getContext($context, "gebaeude")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4a64668e40470896964f8a577fa115c884d244193105b4da72fff4e1e377660d->leave($__internal_4a64668e40470896964f8a577fa115c884d244193105b4da72fff4e1e377660d_prof);

        
        $__internal_0069cb8a199039a8f870b3bacf1848da794577c6cb884ae1d6d1f32526443d4a->leave($__internal_0069cb8a199039a8f870b3bacf1848da794577c6cb884ae1d6d1f32526443d4a_prof);

    }

    public function getTemplateName()
    {
        return ":gebaeude:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Gebaeude</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ gebaeude.id }}</td>
            </tr>
            <tr>
                <th>Nummer</th>
                <td>{{ gebaeude.nummer }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ gebaeude.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adminGebaeude_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('adminGebaeude_edit', { 'id': gebaeude.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":gebaeude:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/gebaeude/show.html.twig");
    }
}
