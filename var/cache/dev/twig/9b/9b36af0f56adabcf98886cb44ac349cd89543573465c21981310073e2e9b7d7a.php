<?php

/* :student:index.html.twig */
class __TwigTemplate_4f95d3b5ad3da52b708935f7eba6a28e64ea63c1dd777b3d7461394d7ab1773f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":student:index.html.twig", 1);
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
        $__internal_b50a160fa93e5fba9ee7f2c3b888abac37269478fd6b527f103fd2583080105f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50a160fa93e5fba9ee7f2c3b888abac37269478fd6b527f103fd2583080105f->enter($__internal_b50a160fa93e5fba9ee7f2c3b888abac37269478fd6b527f103fd2583080105f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:index.html.twig"));

        $__internal_9c99ad2116be1d72a6802b570d6c500f88ddebc1f4687f32aa2d980c11e0cee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c99ad2116be1d72a6802b570d6c500f88ddebc1f4687f32aa2d980c11e0cee4->enter($__internal_9c99ad2116be1d72a6802b570d6c500f88ddebc1f4687f32aa2d980c11e0cee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b50a160fa93e5fba9ee7f2c3b888abac37269478fd6b527f103fd2583080105f->leave($__internal_b50a160fa93e5fba9ee7f2c3b888abac37269478fd6b527f103fd2583080105f_prof);

        
        $__internal_9c99ad2116be1d72a6802b570d6c500f88ddebc1f4687f32aa2d980c11e0cee4->leave($__internal_9c99ad2116be1d72a6802b570d6c500f88ddebc1f4687f32aa2d980c11e0cee4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_adf93b1632989df12bc25e245a9b91e74fa09e55f4d27bc1ea7eb51834d30a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf93b1632989df12bc25e245a9b91e74fa09e55f4d27bc1ea7eb51834d30a57->enter($__internal_adf93b1632989df12bc25e245a9b91e74fa09e55f4d27bc1ea7eb51834d30a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f8ad8f152833c9d8053974b17ea71b1d6f29d4f7ec287ead108b8f97bf3f274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8ad8f152833c9d8053974b17ea71b1d6f29d4f7ec287ead108b8f97bf3f274->enter($__internal_0f8ad8f152833c9d8053974b17ea71b1d6f29d4f7ec287ead108b8f97bf3f274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0f8ad8f152833c9d8053974b17ea71b1d6f29d4f7ec287ead108b8f97bf3f274->leave($__internal_0f8ad8f152833c9d8053974b17ea71b1d6f29d4f7ec287ead108b8f97bf3f274_prof);

        
        $__internal_adf93b1632989df12bc25e245a9b91e74fa09e55f4d27bc1ea7eb51834d30a57->leave($__internal_adf93b1632989df12bc25e245a9b91e74fa09e55f4d27bc1ea7eb51834d30a57_prof);

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
", ":student:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/student/index.html.twig");
    }
}
