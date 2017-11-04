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
        $__internal_e2948ff0bee936b77cb8e9d5ebaf046352b044340eaa653019764060f87e64b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2948ff0bee936b77cb8e9d5ebaf046352b044340eaa653019764060f87e64b0->enter($__internal_e2948ff0bee936b77cb8e9d5ebaf046352b044340eaa653019764060f87e64b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/index.html.twig"));

        $__internal_b5838d310c2592d03f275fdbf9b80ddc6b216c4690351f473fe34f5ecc1cffb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5838d310c2592d03f275fdbf9b80ddc6b216c4690351f473fe34f5ecc1cffb6->enter($__internal_b5838d310c2592d03f275fdbf9b80ddc6b216c4690351f473fe34f5ecc1cffb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierung/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2948ff0bee936b77cb8e9d5ebaf046352b044340eaa653019764060f87e64b0->leave($__internal_e2948ff0bee936b77cb8e9d5ebaf046352b044340eaa653019764060f87e64b0_prof);

        
        $__internal_b5838d310c2592d03f275fdbf9b80ddc6b216c4690351f473fe34f5ecc1cffb6->leave($__internal_b5838d310c2592d03f275fdbf9b80ddc6b216c4690351f473fe34f5ecc1cffb6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1af41cfb34a86954d8634b16f27e8117108fc2224a54f81fedd139c1741e44fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af41cfb34a86954d8634b16f27e8117108fc2224a54f81fedd139c1741e44fb->enter($__internal_1af41cfb34a86954d8634b16f27e8117108fc2224a54f81fedd139c1741e44fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6024c17a8ec61796ac1a3586df2908bee500d06803f62ab3c942ed2a604f1c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6024c17a8ec61796ac1a3586df2908bee500d06803f62ab3c942ed2a604f1c54->enter($__internal_6024c17a8ec61796ac1a3586df2908bee500d06803f62ab3c942ed2a604f1c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservierungs list</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
              <th>Id</th>
                <th>sat</th>
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
            if ($this->getAttribute($context["reservierung"], "start", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservierung"], "start", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["reservierung"], "end", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservierung"], "end", array()), "Y-m-d H:i:s"), "html", null, true);
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
        
        $__internal_6024c17a8ec61796ac1a3586df2908bee500d06803f62ab3c942ed2a604f1c54->leave($__internal_6024c17a8ec61796ac1a3586df2908bee500d06803f62ab3c942ed2a604f1c54_prof);

        
        $__internal_1af41cfb34a86954d8634b16f27e8117108fc2224a54f81fedd139c1741e44fb->leave($__internal_1af41cfb34a86954d8634b16f27e8117108fc2224a54f81fedd139c1741e44fb_prof);

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
                <th>sat</th>
                <th>Enddatum</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reservierung in reservierungs %}
            <tr>
                <td><a href=\"{{ path('adminReservierung_show', { 'id': reservierung.id }) }}\">{{ reservierung.id }}</a></td>
                <td>{% if reservierung.start %}{{ reservierung.start|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if reservierung.end %}{{ reservierung.end |date('Y-m-d H:i:s') }}{% endif %}</td>

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
