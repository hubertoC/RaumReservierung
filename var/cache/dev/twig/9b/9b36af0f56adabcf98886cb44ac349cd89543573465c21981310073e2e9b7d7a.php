<?php

/* :student:index.html.twig */
class __TwigTemplate_4f95d3b5ad3da52b708935f7eba6a28e64ea63c1dd777b3d7461394d7ab1773f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":student:index.html.twig", 1);
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
        $__internal_d39689a40b10eaab0b3ca31179e1480bbbe8bdcde879be003599400cef330218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39689a40b10eaab0b3ca31179e1480bbbe8bdcde879be003599400cef330218->enter($__internal_d39689a40b10eaab0b3ca31179e1480bbbe8bdcde879be003599400cef330218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:index.html.twig"));

        $__internal_1d6f618518588894d4c67ae0e3bf22acd4358521390d7238b2bc6f0991fbe726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6f618518588894d4c67ae0e3bf22acd4358521390d7238b2bc6f0991fbe726->enter($__internal_1d6f618518588894d4c67ae0e3bf22acd4358521390d7238b2bc6f0991fbe726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d39689a40b10eaab0b3ca31179e1480bbbe8bdcde879be003599400cef330218->leave($__internal_d39689a40b10eaab0b3ca31179e1480bbbe8bdcde879be003599400cef330218_prof);

        
        $__internal_1d6f618518588894d4c67ae0e3bf22acd4358521390d7238b2bc6f0991fbe726->leave($__internal_1d6f618518588894d4c67ae0e3bf22acd4358521390d7238b2bc6f0991fbe726_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_479d9bdac6bd25c2c8cfff00ab964ff0b76f56f35769ce0fa4c8476510f2cfbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479d9bdac6bd25c2c8cfff00ab964ff0b76f56f35769ce0fa4c8476510f2cfbd->enter($__internal_479d9bdac6bd25c2c8cfff00ab964ff0b76f56f35769ce0fa4c8476510f2cfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe0ee53f642aa39a89662ae8b3cc14fb16d3084ce75960bed02d31f0414a5686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0ee53f642aa39a89662ae8b3cc14fb16d3084ce75960bed02d31f0414a5686->enter($__internal_fe0ee53f642aa39a89662ae8b3cc14fb16d3084ce75960bed02d31f0414a5686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Students list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Vorname</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "vorname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_edit", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_new");
        echo "\">Create a new student</a>
        </li>
    </ul>
";
        
        $__internal_fe0ee53f642aa39a89662ae8b3cc14fb16d3084ce75960bed02d31f0414a5686->leave($__internal_fe0ee53f642aa39a89662ae8b3cc14fb16d3084ce75960bed02d31f0414a5686_prof);

        
        $__internal_479d9bdac6bd25c2c8cfff00ab964ff0b76f56f35769ce0fa4c8476510f2cfbd->leave($__internal_479d9bdac6bd25c2c8cfff00ab964ff0b76f56f35769ce0fa4c8476510f2cfbd_prof);

    }

    public function getTemplateName()
    {
        return ":student:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Students list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Vorname</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for student in students %}
            <tr>
                <td><a href=\"{{ path('adminStudent_show', { 'id': student.id }) }}\">{{ student.id }}</a></td>
                <td>{{ student.name }}</td>
                <td>{{ student.vorname }}</td>
                <td>{{ student.email }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('adminStudent_show', { 'id': student.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('adminStudent_edit', { 'id': student.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adminStudent_new') }}\">Create a new student</a>
        </li>
    </ul>
{% endblock %}
", ":student:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/student/index.html.twig");
    }
}
