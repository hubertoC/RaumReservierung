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
        $__internal_15ae9ce9ad5f723b9d2cc7f7ad4b78d283dbb26a4a1b8c2627a036c51d691048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ae9ce9ad5f723b9d2cc7f7ad4b78d283dbb26a4a1b8c2627a036c51d691048->enter($__internal_15ae9ce9ad5f723b9d2cc7f7ad4b78d283dbb26a4a1b8c2627a036c51d691048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/index.html.twig"));

        $__internal_144cb63f9dcf833477153f990485687c559eddbc13aa06ca314282335b0fb6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144cb63f9dcf833477153f990485687c559eddbc13aa06ca314282335b0fb6ef->enter($__internal_144cb63f9dcf833477153f990485687c559eddbc13aa06ca314282335b0fb6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15ae9ce9ad5f723b9d2cc7f7ad4b78d283dbb26a4a1b8c2627a036c51d691048->leave($__internal_15ae9ce9ad5f723b9d2cc7f7ad4b78d283dbb26a4a1b8c2627a036c51d691048_prof);

        
        $__internal_144cb63f9dcf833477153f990485687c559eddbc13aa06ca314282335b0fb6ef->leave($__internal_144cb63f9dcf833477153f990485687c559eddbc13aa06ca314282335b0fb6ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_31bfb065824c15295c1f3e83d4b6413e2dd6b85c459b81c9bd5f11a537652f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31bfb065824c15295c1f3e83d4b6413e2dd6b85c459b81c9bd5f11a537652f99->enter($__internal_31bfb065824c15295c1f3e83d4b6413e2dd6b85c459b81c9bd5f11a537652f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0713dafa915c79002e3f6a98fd53cbac0228a0248203fa4642357481587e9cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0713dafa915c79002e3f6a98fd53cbac0228a0248203fa4642357481587e9cea->enter($__internal_0713dafa915c79002e3f6a98fd53cbac0228a0248203fa4642357481587e9cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 28
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
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <div class= \"cration_artiste\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminReservierung_new");
        echo "\" ><i class=\"glyphicon glyphicon-plus\"></i>Neue Reservierung erfassen</a>
</div>
        </li>
    </ul>
";
        
        $__internal_0713dafa915c79002e3f6a98fd53cbac0228a0248203fa4642357481587e9cea->leave($__internal_0713dafa915c79002e3f6a98fd53cbac0228a0248203fa4642357481587e9cea_prof);

        
        $__internal_31bfb065824c15295c1f3e83d4b6413e2dd6b85c459b81c9bd5f11a537652f99->leave($__internal_31bfb065824c15295c1f3e83d4b6413e2dd6b85c459b81c9bd5f11a537652f99_prof);

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
        <div class= \"cration_artiste\">
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminReservierung_new') }}\" ><i class=\"glyphicon glyphicon-plus\"></i>Neue Reservierung erfassen</a>
</div>
        </li>
    </ul>
{% endblock %}
", "reservierung/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierung/index.html.twig");
    }
}
