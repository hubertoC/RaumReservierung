<?php

/* :raum:index.html.twig */
class __TwigTemplate_965bd0719f8c8c3a2170fd4cd219716d55b15d185afefc7f33e438d321956aad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":raum:index.html.twig", 1);
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
        $__internal_4d9471d8958ba7a7a03d9b83b514e091e7c68cf00e814e7d9a62cb781fbb1386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9471d8958ba7a7a03d9b83b514e091e7c68cf00e814e7d9a62cb781fbb1386->enter($__internal_4d9471d8958ba7a7a03d9b83b514e091e7c68cf00e814e7d9a62cb781fbb1386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:index.html.twig"));

        $__internal_0a376c5a0d982e4dca7cfc9825883a9625e9c48b85b36546443df3423d946259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a376c5a0d982e4dca7cfc9825883a9625e9c48b85b36546443df3423d946259->enter($__internal_0a376c5a0d982e4dca7cfc9825883a9625e9c48b85b36546443df3423d946259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":raum:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d9471d8958ba7a7a03d9b83b514e091e7c68cf00e814e7d9a62cb781fbb1386->leave($__internal_4d9471d8958ba7a7a03d9b83b514e091e7c68cf00e814e7d9a62cb781fbb1386_prof);

        
        $__internal_0a376c5a0d982e4dca7cfc9825883a9625e9c48b85b36546443df3423d946259->leave($__internal_0a376c5a0d982e4dca7cfc9825883a9625e9c48b85b36546443df3423d946259_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d56e86689356df5d5bd3c093f6bd670db5327594fcc588f3b221955f6955d21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56e86689356df5d5bd3c093f6bd670db5327594fcc588f3b221955f6955d21d->enter($__internal_d56e86689356df5d5bd3c093f6bd670db5327594fcc588f3b221955f6955d21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5cc504f5ffa9bef78bdfe8c8def7ae24198ca8957125d401c9eb43ea11b5abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5cc504f5ffa9bef78bdfe8c8def7ae24198ca8957125d401c9eb43ea11b5abe->enter($__internal_d5cc504f5ffa9bef78bdfe8c8def7ae24198ca8957125d401c9eb43ea11b5abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Raum list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["raums"]) ? $context["raums"] : $this->getContext($context, "raums")));
        foreach ($context['_seq'] as $context["_key"] => $context["raum"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_show", array("id" => $this->getAttribute($context["raum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["raum"], "id", array()), "html", null, true);
            echo "</a></td>
                <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["raum"], "image", array()), "webPath", array())), "html", null, true);
            echo "\" height=\"52\" width=\"52\" ></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["raum"], "nummer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["raum"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_show", array("id" => $this->getAttribute($context["raum"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_edit", array("id" => $this->getAttribute($context["raum"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
          <div class= \"cration_artiste\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_new");
        echo "\">Create a new raum<i class=\"glyphicon glyphicon-plus\"></i></a>
          </div>
</li>
    </ul>
";
        
        $__internal_d5cc504f5ffa9bef78bdfe8c8def7ae24198ca8957125d401c9eb43ea11b5abe->leave($__internal_d5cc504f5ffa9bef78bdfe8c8def7ae24198ca8957125d401c9eb43ea11b5abe_prof);

        
        $__internal_d56e86689356df5d5bd3c093f6bd670db5327594fcc588f3b221955f6955d21d->leave($__internal_d56e86689356df5d5bd3c093f6bd670db5327594fcc588f3b221955f6955d21d_prof);

    }

    public function getTemplateName()
    {
        return ":raum:index.html.twig";
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
    <h1>Raum list</h1>

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
        {% for raum in raums %}
            <tr>
                <td><a href=\"{{ path('adminRaum_show', { 'id': raum.id }) }}\">{{ raum.id }}</a></td>
                <td><img src=\"{{ asset(raum.image.webPath)}}\" height=\"52\" width=\"52\" ></td>
                <td>{{ raum.nummer }}</td>
                <td>{{ raum.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('adminRaum_show', { 'id': raum.id }) }}\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"{{ path('adminRaum_edit', { 'id': raum.id }) }}\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
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

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminRaum_new') }}\">Create a new raum<i class=\"glyphicon glyphicon-plus\"></i></a>
          </div>
</li>
    </ul>
{% endblock %}
", ":raum:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/index.html.twig");
    }
}
