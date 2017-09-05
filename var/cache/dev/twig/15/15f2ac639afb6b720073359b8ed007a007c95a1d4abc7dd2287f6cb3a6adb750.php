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
        $__internal_df2bfbfb9bc1bb95dc63190a9f57fdefc66cc90da5caac07ea7f8029ddc488df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2bfbfb9bc1bb95dc63190a9f57fdefc66cc90da5caac07ea7f8029ddc488df->enter($__internal_df2bfbfb9bc1bb95dc63190a9f57fdefc66cc90da5caac07ea7f8029ddc488df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/index.html.twig"));

        $__internal_7d7f1d4785039e012a2bd34b9b7e7b67667b38a5a4c76959cd7dd6ccc74b44a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7f1d4785039e012a2bd34b9b7e7b67667b38a5a4c76959cd7dd6ccc74b44a9->enter($__internal_7d7f1d4785039e012a2bd34b9b7e7b67667b38a5a4c76959cd7dd6ccc74b44a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df2bfbfb9bc1bb95dc63190a9f57fdefc66cc90da5caac07ea7f8029ddc488df->leave($__internal_df2bfbfb9bc1bb95dc63190a9f57fdefc66cc90da5caac07ea7f8029ddc488df_prof);

        
        $__internal_7d7f1d4785039e012a2bd34b9b7e7b67667b38a5a4c76959cd7dd6ccc74b44a9->leave($__internal_7d7f1d4785039e012a2bd34b9b7e7b67667b38a5a4c76959cd7dd6ccc74b44a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b1d11409acb1dd51c25719ab0401cb040472f270f677d87727972f7996094af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1d11409acb1dd51c25719ab0401cb040472f270f677d87727972f7996094af->enter($__internal_2b1d11409acb1dd51c25719ab0401cb040472f270f677d87727972f7996094af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d607a9feff8144b06e64e8df125c60fe718808b2c7507cb2dd3c0241f39e4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d607a9feff8144b06e64e8df125c60fe718808b2c7507cb2dd3c0241f39e4d6->enter($__internal_8d607a9feff8144b06e64e8df125c60fe718808b2c7507cb2dd3c0241f39e4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8d607a9feff8144b06e64e8df125c60fe718808b2c7507cb2dd3c0241f39e4d6->leave($__internal_8d607a9feff8144b06e64e8df125c60fe718808b2c7507cb2dd3c0241f39e4d6_prof);

        
        $__internal_2b1d11409acb1dd51c25719ab0401cb040472f270f677d87727972f7996094af->leave($__internal_2b1d11409acb1dd51c25719ab0401cb040472f270f677d87727972f7996094af_prof);

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
