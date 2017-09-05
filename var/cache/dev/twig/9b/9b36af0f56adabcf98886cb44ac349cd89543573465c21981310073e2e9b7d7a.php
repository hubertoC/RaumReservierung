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
        $__internal_60c0d5edf3ecf11f0481a35156a00203335de33401024da89a3ab00ed7e65cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c0d5edf3ecf11f0481a35156a00203335de33401024da89a3ab00ed7e65cd2->enter($__internal_60c0d5edf3ecf11f0481a35156a00203335de33401024da89a3ab00ed7e65cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $__internal_58949385c337044f6c82085c58bc3d482deaac1d421ac79af3cdf084d6b55a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58949385c337044f6c82085c58bc3d482deaac1d421ac79af3cdf084d6b55a4b->enter($__internal_58949385c337044f6c82085c58bc3d482deaac1d421ac79af3cdf084d6b55a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60c0d5edf3ecf11f0481a35156a00203335de33401024da89a3ab00ed7e65cd2->leave($__internal_60c0d5edf3ecf11f0481a35156a00203335de33401024da89a3ab00ed7e65cd2_prof);

        
        $__internal_58949385c337044f6c82085c58bc3d482deaac1d421ac79af3cdf084d6b55a4b->leave($__internal_58949385c337044f6c82085c58bc3d482deaac1d421ac79af3cdf084d6b55a4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d232eadeb25318dd195105a623559ebb24dc366477879ea287f40cf7f9edebcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d232eadeb25318dd195105a623559ebb24dc366477879ea287f40cf7f9edebcb->enter($__internal_d232eadeb25318dd195105a623559ebb24dc366477879ea287f40cf7f9edebcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e114df10a1b21947112b1f543b912386c8e33f21ad1b06d917a8f88663e47f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e114df10a1b21947112b1f543b912386c8e33f21ad1b06d917a8f88663e47f26->enter($__internal_e114df10a1b21947112b1f543b912386c8e33f21ad1b06d917a8f88663e47f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e114df10a1b21947112b1f543b912386c8e33f21ad1b06d917a8f88663e47f26->leave($__internal_e114df10a1b21947112b1f543b912386c8e33f21ad1b06d917a8f88663e47f26_prof);

        
        $__internal_d232eadeb25318dd195105a623559ebb24dc366477879ea287f40cf7f9edebcb->leave($__internal_d232eadeb25318dd195105a623559ebb24dc366477879ea287f40cf7f9edebcb_prof);

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
