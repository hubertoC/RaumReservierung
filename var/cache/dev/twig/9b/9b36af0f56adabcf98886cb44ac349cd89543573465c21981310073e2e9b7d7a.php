<?php

/* student/index.html.twig */
class __TwigTemplate_4f95d3b5ad3da52b708935f7eba6a28e64ea63c1dd777b3d7461394d7ab1773f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "student/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_688648da2f1bd00ef8f31be12a500b627d7760f3957cfed1acbf48e06613cb5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688648da2f1bd00ef8f31be12a500b627d7760f3957cfed1acbf48e06613cb5a->enter($__internal_688648da2f1bd00ef8f31be12a500b627d7760f3957cfed1acbf48e06613cb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $__internal_be4247a5a6cc7c4a6f3991c7164750db7201d4786adc603d1e32978c4e1fecee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4247a5a6cc7c4a6f3991c7164750db7201d4786adc603d1e32978c4e1fecee->enter($__internal_be4247a5a6cc7c4a6f3991c7164750db7201d4786adc603d1e32978c4e1fecee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_688648da2f1bd00ef8f31be12a500b627d7760f3957cfed1acbf48e06613cb5a->leave($__internal_688648da2f1bd00ef8f31be12a500b627d7760f3957cfed1acbf48e06613cb5a_prof);

        
        $__internal_be4247a5a6cc7c4a6f3991c7164750db7201d4786adc603d1e32978c4e1fecee->leave($__internal_be4247a5a6cc7c4a6f3991c7164750db7201d4786adc603d1e32978c4e1fecee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19a04ea840a729b4c50a8b7ebd049bc3434fe609aa4d937222d0c25478587cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a04ea840a729b4c50a8b7ebd049bc3434fe609aa4d937222d0c25478587cbf->enter($__internal_19a04ea840a729b4c50a8b7ebd049bc3434fe609aa4d937222d0c25478587cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5cd024b916c9b3cf2dbe0c98b096527e7c936e50425a798a947a7bff6213e13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd024b916c9b3cf2dbe0c98b096527e7c936e50425a798a947a7bff6213e13d->enter($__internal_5cd024b916c9b3cf2dbe0c98b096527e7c936e50425a798a947a7bff6213e13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Students list</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
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
            echo "\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_edit", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
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
          <div class= \"cration_artiste\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_new");
        echo "\">Create a new student<i class=\"glyphicon glyphicon-plus\"></i></a>
        </li>
    </ul>
";
        
        $__internal_5cd024b916c9b3cf2dbe0c98b096527e7c936e50425a798a947a7bff6213e13d->leave($__internal_5cd024b916c9b3cf2dbe0c98b096527e7c936e50425a798a947a7bff6213e13d_prof);

        
        $__internal_19a04ea840a729b4c50a8b7ebd049bc3434fe609aa4d937222d0c25478587cbf->leave($__internal_19a04ea840a729b4c50a8b7ebd049bc3434fe609aa4d937222d0c25478587cbf_prof);

    }

    public function getTemplateName()
    {
        return "student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layoutAdmin.html.twig' %}

{% block body %}
    <h1>Students list</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
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
                            <a href=\"{{ path('adminStudent_show', { 'id': student.id }) }}\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"{{ path('adminStudent_edit', { 'id': student.id }) }}\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
          <div class= \"cration_artiste\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminStudent_new') }}\">Create a new student<i class=\"glyphicon glyphicon-plus\"></i></a>
        </li>
    </ul>
{% endblock %}
", "student/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/student/index.html.twig");
    }
}
