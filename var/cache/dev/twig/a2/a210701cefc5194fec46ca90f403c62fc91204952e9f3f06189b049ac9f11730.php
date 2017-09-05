<?php

/* raum/index.html.twig */
class __TwigTemplate_965bd0719f8c8c3a2170fd4cd219716d55b15d185afefc7f33e438d321956aad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "raum/index.html.twig", 1);
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
        $__internal_650701daef9d7fd238248ca82a8edebae151aaf728a718cf9ef7318ffda0ce42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650701daef9d7fd238248ca82a8edebae151aaf728a718cf9ef7318ffda0ce42->enter($__internal_650701daef9d7fd238248ca82a8edebae151aaf728a718cf9ef7318ffda0ce42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/index.html.twig"));

        $__internal_b9c1b05b8e5d8242b6d4abe3d84e23463742e69603e3eca88de39f55c29008a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c1b05b8e5d8242b6d4abe3d84e23463742e69603e3eca88de39f55c29008a6->enter($__internal_b9c1b05b8e5d8242b6d4abe3d84e23463742e69603e3eca88de39f55c29008a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_650701daef9d7fd238248ca82a8edebae151aaf728a718cf9ef7318ffda0ce42->leave($__internal_650701daef9d7fd238248ca82a8edebae151aaf728a718cf9ef7318ffda0ce42_prof);

        
        $__internal_b9c1b05b8e5d8242b6d4abe3d84e23463742e69603e3eca88de39f55c29008a6->leave($__internal_b9c1b05b8e5d8242b6d4abe3d84e23463742e69603e3eca88de39f55c29008a6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_01ca1ba5dc130073a1aae42fa5edcb0260fd3094d76a5aafb1005d4a1ec86342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ca1ba5dc130073a1aae42fa5edcb0260fd3094d76a5aafb1005d4a1ec86342->enter($__internal_01ca1ba5dc130073a1aae42fa5edcb0260fd3094d76a5aafb1005d4a1ec86342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33825b3bf9feb5854638be606aa60433314e0bec7c98d55a70475f11a8445a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33825b3bf9feb5854638be606aa60433314e0bec7c98d55a70475f11a8445a20->enter($__internal_33825b3bf9feb5854638be606aa60433314e0bec7c98d55a70475f11a8445a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Raums list</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nummer</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["raums"]) ? $context["raums"] : $this->getContext($context, "raums")));
        foreach ($context['_seq'] as $context["_key"] => $context["raum"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_show", array("id" => $this->getAttribute($context["raum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["raum"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["raum"], "nummer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["raum"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_show", array("id" => $this->getAttribute($context["raum"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_edit", array("id" => $this->getAttribute($context["raum"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
          <div class= \"cration_artiste\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_new");
        echo "\">Create a new raum</a>
          </div>
</li>
    </ul>
";
        
        $__internal_33825b3bf9feb5854638be606aa60433314e0bec7c98d55a70475f11a8445a20->leave($__internal_33825b3bf9feb5854638be606aa60433314e0bec7c98d55a70475f11a8445a20_prof);

        
        $__internal_01ca1ba5dc130073a1aae42fa5edcb0260fd3094d76a5aafb1005d4a1ec86342->leave($__internal_01ca1ba5dc130073a1aae42fa5edcb0260fd3094d76a5aafb1005d4a1ec86342_prof);

    }

    public function getTemplateName()
    {
        return "raum/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Raums list</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nummer</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for raum in raums %}
            <tr>
                <td><a href=\"{{ path('adminRaum_show', { 'id': raum.id }) }}\">{{ raum.id }}</a></td>
                <td>{{ raum.nummer }}</td>
                <td>{{ raum.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('adminRaum_show', { 'id': raum.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('adminRaum_edit', { 'id': raum.id }) }}\">edit</a>
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

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminRaum_new') }}\">Create a new raum</a>
          </div>
</li>
    </ul>
{% endblock %}
", "raum/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/index.html.twig");
    }
}
