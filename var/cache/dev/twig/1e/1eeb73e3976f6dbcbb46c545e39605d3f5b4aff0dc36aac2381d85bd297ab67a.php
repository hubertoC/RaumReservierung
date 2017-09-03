<?php

/* :raum:show.html.twig */
class __TwigTemplate_6fa570f58635ccf352a67b5011cc0077283399bd59d55dc12f07965c49d91000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":raum:show.html.twig", 1);
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
        $__internal_a91024018899e594ed4436b1e5e7282ec7931c4a5ec10d3784e28bdcb56e1c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91024018899e594ed4436b1e5e7282ec7931c4a5ec10d3784e28bdcb56e1c7f->enter($__internal_a91024018899e594ed4436b1e5e7282ec7931c4a5ec10d3784e28bdcb56e1c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:show.html.twig"));

        $__internal_652963f543c2fdb649626644a692c16e92e1923f79d78e78963983fa9758917f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652963f543c2fdb649626644a692c16e92e1923f79d78e78963983fa9758917f->enter($__internal_652963f543c2fdb649626644a692c16e92e1923f79d78e78963983fa9758917f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a91024018899e594ed4436b1e5e7282ec7931c4a5ec10d3784e28bdcb56e1c7f->leave($__internal_a91024018899e594ed4436b1e5e7282ec7931c4a5ec10d3784e28bdcb56e1c7f_prof);

        
        $__internal_652963f543c2fdb649626644a692c16e92e1923f79d78e78963983fa9758917f->leave($__internal_652963f543c2fdb649626644a692c16e92e1923f79d78e78963983fa9758917f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_820ea7e035e6c3b59a45eaca0b2c7922aa0af2abcbbbd860e18a4b13f5dd437e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_820ea7e035e6c3b59a45eaca0b2c7922aa0af2abcbbbd860e18a4b13f5dd437e->enter($__internal_820ea7e035e6c3b59a45eaca0b2c7922aa0af2abcbbbd860e18a4b13f5dd437e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4708befec9f4d8f9c33ddfa08d2d958edcf80f8dc6c48240c0d2bd2c4a452e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4708befec9f4d8f9c33ddfa08d2d958edcf80f8dc6c48240c0d2bd2c4a452e3->enter($__internal_d4708befec9f4d8f9c33ddfa08d2d958edcf80f8dc6c48240c0d2bd2c4a452e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Raum</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["raum"]) ? $context["raum"] : $this->getContext($context, "raum")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nummer</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["raum"]) ? $context["raum"] : $this->getContext($context, "raum")), "nummer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["raum"]) ? $context["raum"] : $this->getContext($context, "raum")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_edit", array("id" => $this->getAttribute((isset($context["raum"]) ? $context["raum"] : $this->getContext($context, "raum")), "id", array()))), "html", null, true);
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
        
        $__internal_d4708befec9f4d8f9c33ddfa08d2d958edcf80f8dc6c48240c0d2bd2c4a452e3->leave($__internal_d4708befec9f4d8f9c33ddfa08d2d958edcf80f8dc6c48240c0d2bd2c4a452e3_prof);

        
        $__internal_820ea7e035e6c3b59a45eaca0b2c7922aa0af2abcbbbd860e18a4b13f5dd437e->leave($__internal_820ea7e035e6c3b59a45eaca0b2c7922aa0af2abcbbbd860e18a4b13f5dd437e_prof);

    }

    public function getTemplateName()
    {
        return ":raum:show.html.twig";
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
    <h1>Raum</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ raum.id }}</td>
            </tr>
            <tr>
                <th>Nummer</th>
                <td>{{ raum.nummer }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ raum.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adminRaum_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('adminRaum_edit', { 'id': raum.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":raum:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/show.html.twig");
    }
}
