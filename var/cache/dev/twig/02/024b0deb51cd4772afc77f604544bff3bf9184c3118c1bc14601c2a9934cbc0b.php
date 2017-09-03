<?php

/* reservierung/show.html.twig */
class __TwigTemplate_be2fd2a3c6af0710f87873c0a2536ffa0f3f37669e9a7d7fa603d9432d2ae132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservierung/show.html.twig", 1);
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
        $__internal_b4f83ca3f6ba2882ed1cefa300b486195349bad7bf4ca9f9ecadc76d9e4b5261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f83ca3f6ba2882ed1cefa300b486195349bad7bf4ca9f9ecadc76d9e4b5261->enter($__internal_b4f83ca3f6ba2882ed1cefa300b486195349bad7bf4ca9f9ecadc76d9e4b5261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/show.html.twig"));

        $__internal_734caaeb773911590381ad4af1a4b232d375c158591fcf1d4e84c3254e59a972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734caaeb773911590381ad4af1a4b232d375c158591fcf1d4e84c3254e59a972->enter($__internal_734caaeb773911590381ad4af1a4b232d375c158591fcf1d4e84c3254e59a972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4f83ca3f6ba2882ed1cefa300b486195349bad7bf4ca9f9ecadc76d9e4b5261->leave($__internal_b4f83ca3f6ba2882ed1cefa300b486195349bad7bf4ca9f9ecadc76d9e4b5261_prof);

        
        $__internal_734caaeb773911590381ad4af1a4b232d375c158591fcf1d4e84c3254e59a972->leave($__internal_734caaeb773911590381ad4af1a4b232d375c158591fcf1d4e84c3254e59a972_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b5ef7a87b272a914a5bf801685d47a210a6712ef9c5b6360987b4e7d3b2600f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5ef7a87b272a914a5bf801685d47a210a6712ef9c5b6360987b4e7d3b2600f->enter($__internal_0b5ef7a87b272a914a5bf801685d47a210a6712ef9c5b6360987b4e7d3b2600f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e4ef92c8f511c0b9db3d07b569a9e0fdbde3dda1ddaab3286c12d3a06951169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4ef92c8f511c0b9db3d07b569a9e0fdbde3dda1ddaab3286c12d3a06951169->enter($__internal_6e4ef92c8f511c0b9db3d07b569a9e0fdbde3dda1ddaab3286c12d3a06951169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservierung</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservierung"]) ? $context["reservierung"] : $this->getContext($context, "reservierung")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Startdatum</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["reservierung"]) ? $context["reservierung"] : $this->getContext($context, "reservierung")), "startDatum", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservierung"]) ? $context["reservierung"] : $this->getContext($context, "reservierung")), "startDatum", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Enddatum</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["reservierung"]) ? $context["reservierung"] : $this->getContext($context, "reservierung")), "endDatum", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reservierung"]) ? $context["reservierung"] : $this->getContext($context, "reservierung")), "endDatum", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_edit", array("id" => $this->getAttribute((isset($context["reservierung"]) ? $context["reservierung"] : $this->getContext($context, "reservierung")), "id", array()))), "html", null, true);
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
        
        $__internal_6e4ef92c8f511c0b9db3d07b569a9e0fdbde3dda1ddaab3286c12d3a06951169->leave($__internal_6e4ef92c8f511c0b9db3d07b569a9e0fdbde3dda1ddaab3286c12d3a06951169_prof);

        
        $__internal_0b5ef7a87b272a914a5bf801685d47a210a6712ef9c5b6360987b4e7d3b2600f->leave($__internal_0b5ef7a87b272a914a5bf801685d47a210a6712ef9c5b6360987b4e7d3b2600f_prof);

    }

    public function getTemplateName()
    {
        return "reservierung/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  97 => 31,  91 => 28,  85 => 25,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Reservierung</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ reservierung.id }}</td>
            </tr>
            <tr>
                <th>Startdatum</th>
                <td>{% if reservierung.startDatum %}{{ reservierung.startDatum|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Enddatum</th>
                <td>{% if reservierung.endDatum %}{{ reservierung.endDatum|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adminReservierung_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('adminReservierung_edit', { 'id': reservierung.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "reservierung/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierung/show.html.twig");
    }
}
