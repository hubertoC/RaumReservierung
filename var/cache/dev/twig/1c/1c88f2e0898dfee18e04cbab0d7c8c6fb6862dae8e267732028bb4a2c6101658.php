<?php

/* reservierung/index.html.twig */
class __TwigTemplate_ea16a81424a9dfd25c764385b614c3d5ac85ac5a5b5d8680e35d752fc2a98ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "reservierung/index.html.twig", 1);
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
        $__internal_cd2fbdde39dd3c26270c37cd869a540bf531df42804347421b773ff80af0cd94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2fbdde39dd3c26270c37cd869a540bf531df42804347421b773ff80af0cd94->enter($__internal_cd2fbdde39dd3c26270c37cd869a540bf531df42804347421b773ff80af0cd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/index.html.twig"));

        $__internal_c33dd3b32282320f3400fe303bc4200059c1fde07def52f896a68c7bd776a4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33dd3b32282320f3400fe303bc4200059c1fde07def52f896a68c7bd776a4fb->enter($__internal_c33dd3b32282320f3400fe303bc4200059c1fde07def52f896a68c7bd776a4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2fbdde39dd3c26270c37cd869a540bf531df42804347421b773ff80af0cd94->leave($__internal_cd2fbdde39dd3c26270c37cd869a540bf531df42804347421b773ff80af0cd94_prof);

        
        $__internal_c33dd3b32282320f3400fe303bc4200059c1fde07def52f896a68c7bd776a4fb->leave($__internal_c33dd3b32282320f3400fe303bc4200059c1fde07def52f896a68c7bd776a4fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fee66f3cc89dd42fc11b6d9662784f0573a058245a34cdbb7bf7f24e23464113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee66f3cc89dd42fc11b6d9662784f0573a058245a34cdbb7bf7f24e23464113->enter($__internal_fee66f3cc89dd42fc11b6d9662784f0573a058245a34cdbb7bf7f24e23464113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_237bf5971fb3158ca7566ebf26e30ef2875b494a6135b6ca7bccfbaaa53ae7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237bf5971fb3158ca7566ebf26e30ef2875b494a6135b6ca7bccfbaaa53ae7a7->enter($__internal_237bf5971fb3158ca7566ebf26e30ef2875b494a6135b6ca7bccfbaaa53ae7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservierungs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Startdatum</th>
                <th>Enddatum</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservierungs"]) ? $context["reservierungs"] : $this->getContext($context, "reservierungs")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservierung"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_show", array("id" => $this->getAttribute($context["reservierung"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservierung"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["reservierung"], "startDatum", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservierung"], "startDatum", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["reservierung"], "endDatum", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservierung"], "endDatum", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_show", array("id" => $this->getAttribute($context["reservierung"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_edit", array("id" => $this->getAttribute($context["reservierung"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservierung'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_new");
        echo "\">Create a new reservierung</a>
        </li>
    </ul>
";
        
        $__internal_237bf5971fb3158ca7566ebf26e30ef2875b494a6135b6ca7bccfbaaa53ae7a7->leave($__internal_237bf5971fb3158ca7566ebf26e30ef2875b494a6135b6ca7bccfbaaa53ae7a7_prof);

        
        $__internal_fee66f3cc89dd42fc11b6d9662784f0573a058245a34cdbb7bf7f24e23464113->leave($__internal_fee66f3cc89dd42fc11b6d9662784f0573a058245a34cdbb7bf7f24e23464113_prof);

    }

    public function getTemplateName()
    {
        return "reservierung/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 38,  109 => 33,  97 => 27,  91 => 24,  82 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reservierungs list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Startdatum</th>
                <th>Enddatum</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reservierung in reservierungs %}
            <tr>
                <td><a href=\"{{ path('adminReservierung_show', { 'id': reservierung.id }) }}\">{{ reservierung.id }}</a></td>
                <td>{% if reservierung.startDatum %}{{ reservierung.startDatum|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if reservierung.endDatum %}{{ reservierung.endDatum|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('adminReservierung_show', { 'id': reservierung.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('adminReservierung_edit', { 'id': reservierung.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adminReservierung_new') }}\">Create a new reservierung</a>
        </li>
    </ul>
{% endblock %}
", "reservierung/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierung/index.html.twig");
    }
}
