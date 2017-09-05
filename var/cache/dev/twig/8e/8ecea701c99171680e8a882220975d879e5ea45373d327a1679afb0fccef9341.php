<?php

/* dozent/index.html.twig */
class __TwigTemplate_e210aac78d78436f43a7dc85bc0e40c949e7db2aefbd0397cd314c85d96b928e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "dozent/index.html.twig", 1);
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
        $__internal_47684d528d14bd57afbd02d51345715512146401a2547d64daf182d3579e1bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47684d528d14bd57afbd02d51345715512146401a2547d64daf182d3579e1bb4->enter($__internal_47684d528d14bd57afbd02d51345715512146401a2547d64daf182d3579e1bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/index.html.twig"));

        $__internal_89c80005efabefdb19ee48f0c6fcc27096d67f9b2ce2c3dcebc461e2563ca2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c80005efabefdb19ee48f0c6fcc27096d67f9b2ce2c3dcebc461e2563ca2ce->enter($__internal_89c80005efabefdb19ee48f0c6fcc27096d67f9b2ce2c3dcebc461e2563ca2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47684d528d14bd57afbd02d51345715512146401a2547d64daf182d3579e1bb4->leave($__internal_47684d528d14bd57afbd02d51345715512146401a2547d64daf182d3579e1bb4_prof);

        
        $__internal_89c80005efabefdb19ee48f0c6fcc27096d67f9b2ce2c3dcebc461e2563ca2ce->leave($__internal_89c80005efabefdb19ee48f0c6fcc27096d67f9b2ce2c3dcebc461e2563ca2ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5c941c46da39bb45c0bb16d1b916fdebd347f30ed72b126338f8de0ef1d47d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c941c46da39bb45c0bb16d1b916fdebd347f30ed72b126338f8de0ef1d47d3->enter($__internal_a5c941c46da39bb45c0bb16d1b916fdebd347f30ed72b126338f8de0ef1d47d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a969077bc63682243e42feb077db1a9e2e0908236bc766db1893c2f576379cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a969077bc63682243e42feb077db1a9e2e0908236bc766db1893c2f576379cae->enter($__internal_a969077bc63682243e42feb077db1a9e2e0908236bc766db1893c2f576379cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dozents list</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Vorname</th>
                <th>Title</th>
                <th>Raumnummer</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dozents"]) ? $context["dozents"] : $this->getContext($context, "dozents")));
        foreach ($context['_seq'] as $context["_key"] => $context["dozent"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_show", array("id" => $this->getAttribute($context["dozent"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dozent"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["dozent"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["dozent"], "vorname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["dozent"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["dozent"], "raumNummer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["dozent"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a class=\"bon\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_show", array("id" => $this->getAttribute($context["dozent"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_edit", array("id" => $this->getAttribute($context["dozent"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dozent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
          <div class= \"cration_artiste\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_new");
        echo "\">Create a new dozent<i class=\"glyphicon glyphicon-plus\"></i></a>
        </div>
      </li>
    </ul>
";
        
        $__internal_a969077bc63682243e42feb077db1a9e2e0908236bc766db1893c2f576379cae->leave($__internal_a969077bc63682243e42feb077db1a9e2e0908236bc766db1893c2f576379cae_prof);

        
        $__internal_a5c941c46da39bb45c0bb16d1b916fdebd347f30ed72b126338f8de0ef1d47d3->leave($__internal_a5c941c46da39bb45c0bb16d1b916fdebd347f30ed72b126338f8de0ef1d47d3_prof);

    }

    public function getTemplateName()
    {
        return "dozent/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Dozents list</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Vorname</th>
                <th>Title</th>
                <th>Raumnummer</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for dozent in dozents %}
            <tr>
                <td><a href=\"{{ path('adminDozent_show', { 'id': dozent.id }) }}\">{{ dozent.id }}</a></td>
                <td>{{ dozent.name }}</td>
                <td>{{ dozent.vorname }}</td>
                <td>{{ dozent.title }}</td>
                <td>{{ dozent.raumNummer }}</td>
                <td>{{ dozent.email }}</td>
                <td>
                    <ul>
                        <li>
                            <a class=\"bon\" href=\"{{ path('adminDozent_show', { 'id': dozent.id }) }}\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"{{ path('adminDozent_edit', { 'id': dozent.id }) }}\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
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

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminDozent_new') }}\">Create a new dozent<i class=\"glyphicon glyphicon-plus\"></i></a>
        </div>
      </li>
    </ul>
{% endblock %}
", "dozent/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/dozent/index.html.twig");
    }
}
