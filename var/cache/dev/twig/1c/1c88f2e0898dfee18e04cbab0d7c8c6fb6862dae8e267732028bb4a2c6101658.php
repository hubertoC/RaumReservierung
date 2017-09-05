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
        $__internal_423a4fbb863db5af70cb44c2d3656b204e8c5b2800d4da488dd365d6014716a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423a4fbb863db5af70cb44c2d3656b204e8c5b2800d4da488dd365d6014716a3->enter($__internal_423a4fbb863db5af70cb44c2d3656b204e8c5b2800d4da488dd365d6014716a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/index.html.twig"));

        $__internal_2821be6b8af3c6e234be4d4c5fd19e4b5645e4c52c7bfd0dbc830ef4eadebd10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2821be6b8af3c6e234be4d4c5fd19e4b5645e4c52c7bfd0dbc830ef4eadebd10->enter($__internal_2821be6b8af3c6e234be4d4c5fd19e4b5645e4c52c7bfd0dbc830ef4eadebd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_423a4fbb863db5af70cb44c2d3656b204e8c5b2800d4da488dd365d6014716a3->leave($__internal_423a4fbb863db5af70cb44c2d3656b204e8c5b2800d4da488dd365d6014716a3_prof);

        
        $__internal_2821be6b8af3c6e234be4d4c5fd19e4b5645e4c52c7bfd0dbc830ef4eadebd10->leave($__internal_2821be6b8af3c6e234be4d4c5fd19e4b5645e4c52c7bfd0dbc830ef4eadebd10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a00b461328540471acf3e1e7a76e6e8a3ea1f5e2391971cf84598dd64a3370d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00b461328540471acf3e1e7a76e6e8a3ea1f5e2391971cf84598dd64a3370d9->enter($__internal_a00b461328540471acf3e1e7a76e6e8a3ea1f5e2391971cf84598dd64a3370d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b94499761636be689b24e9e1a73c47dd2e88d9ffa41a599145c4aaa1e027ccc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94499761636be689b24e9e1a73c47dd2e88d9ffa41a599145c4aaa1e027ccc4->enter($__internal_b94499761636be689b24e9e1a73c47dd2e88d9ffa41a599145c4aaa1e027ccc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservierungs list</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
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
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_show", array("id" => $this->getAttribute($context["reservierung"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_edit", array("id" => $this->getAttribute($context["reservierung"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservierung'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <div class= \"cration_artiste\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_new");
        echo "\" >Neue Reservierung erfassen<i class=\"glyphicon glyphicon-plus\"></i></a>
</div>
        </li>
    </ul>
";
        
        $__internal_b94499761636be689b24e9e1a73c47dd2e88d9ffa41a599145c4aaa1e027ccc4->leave($__internal_b94499761636be689b24e9e1a73c47dd2e88d9ffa41a599145c4aaa1e027ccc4_prof);

        
        $__internal_a00b461328540471acf3e1e7a76e6e8a3ea1f5e2391971cf84598dd64a3370d9->leave($__internal_a00b461328540471acf3e1e7a76e6e8a3ea1f5e2391971cf84598dd64a3370d9_prof);

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
        return array (  117 => 39,  110 => 34,  98 => 28,  92 => 25,  82 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
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
                            <a href=\"{{ path('adminReservierung_show', { 'id': reservierung.id }) }}\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"{{ path('adminReservierung_edit', { 'id': reservierung.id }) }}\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <div class= \"cration_artiste\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminReservierung_new') }}\" >Neue Reservierung erfassen<i class=\"glyphicon glyphicon-plus\"></i></a>
</div>
        </li>
    </ul>
{% endblock %}
", "reservierung/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierung/index.html.twig");
    }
}
