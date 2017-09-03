<?php

/* raum/index.html.twig */
class __TwigTemplate_965bd0719f8c8c3a2170fd4cd219716d55b15d185afefc7f33e438d321956aad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "raum/index.html.twig", 1);
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
        $__internal_746be6d6eb845a16d2ea1098b0f89f3aaa9fcba93c75109e6b15eae4f7b279ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746be6d6eb845a16d2ea1098b0f89f3aaa9fcba93c75109e6b15eae4f7b279ff->enter($__internal_746be6d6eb845a16d2ea1098b0f89f3aaa9fcba93c75109e6b15eae4f7b279ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/index.html.twig"));

        $__internal_e2296836efe46490e1dd825ac7edce32a88e7e8baed04d3433b0a72d67f508f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2296836efe46490e1dd825ac7edce32a88e7e8baed04d3433b0a72d67f508f5->enter($__internal_e2296836efe46490e1dd825ac7edce32a88e7e8baed04d3433b0a72d67f508f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_746be6d6eb845a16d2ea1098b0f89f3aaa9fcba93c75109e6b15eae4f7b279ff->leave($__internal_746be6d6eb845a16d2ea1098b0f89f3aaa9fcba93c75109e6b15eae4f7b279ff_prof);

        
        $__internal_e2296836efe46490e1dd825ac7edce32a88e7e8baed04d3433b0a72d67f508f5->leave($__internal_e2296836efe46490e1dd825ac7edce32a88e7e8baed04d3433b0a72d67f508f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bf5c42188418114bd44527e404d273555c3bf0f265f0cc0d062a2570d2063a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf5c42188418114bd44527e404d273555c3bf0f265f0cc0d062a2570d2063a5->enter($__internal_9bf5c42188418114bd44527e404d273555c3bf0f265f0cc0d062a2570d2063a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5a2a7439be91555e11bdbe8f612c89daf384168632cc86efa6074e31ecdbb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a2a7439be91555e11bdbe8f612c89daf384168632cc86efa6074e31ecdbb4e->enter($__internal_b5a2a7439be91555e11bdbe8f612c89daf384168632cc86efa6074e31ecdbb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Raums list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nummer</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["raums"]) ? $context["raums"] : $this->getContext($context, "raums")));
        foreach ($context['_seq'] as $context["_key"] => $context["raum"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_show", array("id" => $this->getAttribute($context["raum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["raum"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["raum"], "nummer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["raum"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_show", array("id" => $this->getAttribute($context["raum"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_edit", array("id" => $this->getAttribute($context["raum"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_new");
        echo "\">Create a new raum</a>
        </li>
    </ul>
";
        
        $__internal_b5a2a7439be91555e11bdbe8f612c89daf384168632cc86efa6074e31ecdbb4e->leave($__internal_b5a2a7439be91555e11bdbe8f612c89daf384168632cc86efa6074e31ecdbb4e_prof);

        
        $__internal_9bf5c42188418114bd44527e404d273555c3bf0f265f0cc0d062a2570d2063a5->leave($__internal_9bf5c42188418114bd44527e404d273555c3bf0f265f0cc0d062a2570d2063a5_prof);

    }

    public function getTemplateName()
    {
        return "raum/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Raums list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nummer</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for raum in raums %}
            <tr>
                <td><a href=\"{{ path('adminRaum_show', { 'id': raum.id }) }}\">{{ raum.id }}</a></td>
                <td>{{ raum.nummer }}</td>
                <td>{{ raum.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('adminRaum_show', { 'id': raum.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('adminRaum_edit', { 'id': raum.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adminRaum_new') }}\">Create a new raum</a>
        </li>
    </ul>
{% endblock %}
", "raum/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/index.html.twig");
    }
}
