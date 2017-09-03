<?php

/* :student:show.html.twig */
class __TwigTemplate_3c868106db98e295644defd3c30d716bb4b69c1952172f8eed00c984003678ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":student:show.html.twig", 1);
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
        $__internal_c0584ecf77774fb7d1e3f35ac45e62ca6c8e2bb050e1f43c752f015f1b11aaea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0584ecf77774fb7d1e3f35ac45e62ca6c8e2bb050e1f43c752f015f1b11aaea->enter($__internal_c0584ecf77774fb7d1e3f35ac45e62ca6c8e2bb050e1f43c752f015f1b11aaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:show.html.twig"));

        $__internal_aa97f5420e84d7d2f81a3052864e3f442ba5ba8f0f97d4b96b1364a9428b2ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa97f5420e84d7d2f81a3052864e3f442ba5ba8f0f97d4b96b1364a9428b2ecc->enter($__internal_aa97f5420e84d7d2f81a3052864e3f442ba5ba8f0f97d4b96b1364a9428b2ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0584ecf77774fb7d1e3f35ac45e62ca6c8e2bb050e1f43c752f015f1b11aaea->leave($__internal_c0584ecf77774fb7d1e3f35ac45e62ca6c8e2bb050e1f43c752f015f1b11aaea_prof);

        
        $__internal_aa97f5420e84d7d2f81a3052864e3f442ba5ba8f0f97d4b96b1364a9428b2ecc->leave($__internal_aa97f5420e84d7d2f81a3052864e3f442ba5ba8f0f97d4b96b1364a9428b2ecc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a85757387bf24bc7f5fb945b1d1613c6aab77b7e50e81766bc1a59eeed496ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a85757387bf24bc7f5fb945b1d1613c6aab77b7e50e81766bc1a59eeed496ab->enter($__internal_3a85757387bf24bc7f5fb945b1d1613c6aab77b7e50e81766bc1a59eeed496ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0debeb5e99a4e4eb82c60ad8b69dceb074528259a0046aa72d68e53dc340463f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0debeb5e99a4e4eb82c60ad8b69dceb074528259a0046aa72d68e53dc340463f->enter($__internal_0debeb5e99a4e4eb82c60ad8b69dceb074528259a0046aa72d68e53dc340463f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vorname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "vorname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminStudent_edit", array("id" => $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0debeb5e99a4e4eb82c60ad8b69dceb074528259a0046aa72d68e53dc340463f->leave($__internal_0debeb5e99a4e4eb82c60ad8b69dceb074528259a0046aa72d68e53dc340463f_prof);

        
        $__internal_3a85757387bf24bc7f5fb945b1d1613c6aab77b7e50e81766bc1a59eeed496ab->leave($__internal_3a85757387bf24bc7f5fb945b1d1613c6aab77b7e50e81766bc1a59eeed496ab_prof);

    }

    public function getTemplateName()
    {
        return ":student:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Student</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ student.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ student.name }}</td>
            </tr>
            <tr>
                <th>Vorname</th>
                <td>{{ student.vorname }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ student.email }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adminStudent_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('adminStudent_edit', { 'id': student.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":student:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/student/show.html.twig");
    }
}
