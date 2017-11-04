<?php

/* gebaeude/index.html.twig */
class __TwigTemplate_1d3d1e8769a2c6d05fe168bcbb8820f166957293553d075d7bc392439a78ccd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "gebaeude/index.html.twig", 1);
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
        $__internal_90d4dc7f18a0d15bccf455c66b5c092f818921f9c023291f425b4a13e2c9f829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d4dc7f18a0d15bccf455c66b5c092f818921f9c023291f425b4a13e2c9f829->enter($__internal_90d4dc7f18a0d15bccf455c66b5c092f818921f9c023291f425b4a13e2c9f829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/index.html.twig"));

        $__internal_5d590564ec4f04ac21a96966ad063e5b6b78773b6366ccafc51210be29c6aeaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d590564ec4f04ac21a96966ad063e5b6b78773b6366ccafc51210be29c6aeaa->enter($__internal_5d590564ec4f04ac21a96966ad063e5b6b78773b6366ccafc51210be29c6aeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90d4dc7f18a0d15bccf455c66b5c092f818921f9c023291f425b4a13e2c9f829->leave($__internal_90d4dc7f18a0d15bccf455c66b5c092f818921f9c023291f425b4a13e2c9f829_prof);

        
        $__internal_5d590564ec4f04ac21a96966ad063e5b6b78773b6366ccafc51210be29c6aeaa->leave($__internal_5d590564ec4f04ac21a96966ad063e5b6b78773b6366ccafc51210be29c6aeaa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_398ee4bdc310f1be39db65b81437c202860b2f4d5694bfc256d9faf274c4e07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398ee4bdc310f1be39db65b81437c202860b2f4d5694bfc256d9faf274c4e07d->enter($__internal_398ee4bdc310f1be39db65b81437c202860b2f4d5694bfc256d9faf274c4e07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_111358a7894f85db96380dc5d3edf1793ff52f95f6d17b98e40df163a3900ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111358a7894f85db96380dc5d3edf1793ff52f95f6d17b98e40df163a3900ec2->enter($__internal_111358a7894f85db96380dc5d3edf1793ff52f95f6d17b98e40df163a3900ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Gebaeudes list</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Profile</th>
                <th>Nummer</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gebaeudes"]) ? $context["gebaeudes"] : $this->getContext($context, "gebaeudes")));
        foreach ($context['_seq'] as $context["_key"] => $context["gebaeude"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_show", array("id" => $this->getAttribute($context["gebaeude"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gebaeude"], "id", array()), "html", null, true);
            echo "</a></td>
                <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["gebaeude"], "image", array()), "webPath", array())), "html", null, true);
            echo "\" height=\"52\" width=\"52\" ></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["gebaeude"], "nummer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["gebaeude"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_show", array("id" => $this->getAttribute($context["gebaeude"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_edit", array("id" => $this->getAttribute($context["gebaeude"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gebaeude'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
          <div class= \"cration_artiste\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_new");
        echo "\">Create a new gebaeude<i class=\"glyphicon glyphicon-plus\"></i></a>
        </li>
    </ul>
";
        
        $__internal_111358a7894f85db96380dc5d3edf1793ff52f95f6d17b98e40df163a3900ec2->leave($__internal_111358a7894f85db96380dc5d3edf1793ff52f95f6d17b98e40df163a3900ec2_prof);

        
        $__internal_398ee4bdc310f1be39db65b81437c202860b2f4d5694bfc256d9faf274c4e07d->leave($__internal_398ee4bdc310f1be39db65b81437c202860b2f4d5694bfc256d9faf274c4e07d_prof);

    }

    public function getTemplateName()
    {
        return "gebaeude/index.html.twig";
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
    <h1>Gebaeudes list</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Profile</th>
                <th>Nummer</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for gebaeude in gebaeudes %}
            <tr>
                <td><a href=\"{{ path('adminGebaeude_show', { 'id': gebaeude.id }) }}\">{{ gebaeude.id }}</a></td>
                <td><img src=\"{{ asset(gebaeude.image.webPath)}}\" height=\"52\" width=\"52\" ></td>
                <td>{{ gebaeude.nummer }}</td>
                <td>{{ gebaeude.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('adminGebaeude_show', { 'id': gebaeude.id }) }}\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"{{ path('adminGebaeude_edit', { 'id': gebaeude.id }) }}\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
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

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminGebaeude_new') }}\">Create a new gebaeude<i class=\"glyphicon glyphicon-plus\"></i></a>
        </li>
    </ul>
{% endblock %}
", "gebaeude/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/gebaeude/index.html.twig");
    }
}
