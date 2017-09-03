<?php

/* dozent/index.html.twig */
class __TwigTemplate_e210aac78d78436f43a7dc85bc0e40c949e7db2aefbd0397cd314c85d96b928e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dozent/index.html.twig", 1);
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
        $__internal_c5311649ecfbd319b4cf6f40e5e48121f14d17a14c7cd362756758a74213145e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5311649ecfbd319b4cf6f40e5e48121f14d17a14c7cd362756758a74213145e->enter($__internal_c5311649ecfbd319b4cf6f40e5e48121f14d17a14c7cd362756758a74213145e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/index.html.twig"));

        $__internal_037a769edd6d9a6a559fc231b69b2e38576293b772638dd58b802f93b69742db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037a769edd6d9a6a559fc231b69b2e38576293b772638dd58b802f93b69742db->enter($__internal_037a769edd6d9a6a559fc231b69b2e38576293b772638dd58b802f93b69742db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5311649ecfbd319b4cf6f40e5e48121f14d17a14c7cd362756758a74213145e->leave($__internal_c5311649ecfbd319b4cf6f40e5e48121f14d17a14c7cd362756758a74213145e_prof);

        
        $__internal_037a769edd6d9a6a559fc231b69b2e38576293b772638dd58b802f93b69742db->leave($__internal_037a769edd6d9a6a559fc231b69b2e38576293b772638dd58b802f93b69742db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99ae1b86017903e2cb89ec036ef2640f5fa1fee0eab9b8934b41d047db34c289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ae1b86017903e2cb89ec036ef2640f5fa1fee0eab9b8934b41d047db34c289->enter($__internal_99ae1b86017903e2cb89ec036ef2640f5fa1fee0eab9b8934b41d047db34c289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c5996587fcf7aa5151454f9bdda25f58073314df8fa1647c91bda2dd5ac5a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5996587fcf7aa5151454f9bdda25f58073314df8fa1647c91bda2dd5ac5a5a->enter($__internal_3c5996587fcf7aa5151454f9bdda25f58073314df8fa1647c91bda2dd5ac5a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dozents list</h1>

    <table>
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
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_show", array("id" => $this->getAttribute($context["dozent"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_edit", array("id" => $this->getAttribute($context["dozent"], "id", array()))), "html", null, true);
            echo "\">edit</a>
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
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_new");
        echo "\">Create a new dozent</a>
        </li>
    </ul>
";
        
        $__internal_3c5996587fcf7aa5151454f9bdda25f58073314df8fa1647c91bda2dd5ac5a5a->leave($__internal_3c5996587fcf7aa5151454f9bdda25f58073314df8fa1647c91bda2dd5ac5a5a_prof);

        
        $__internal_99ae1b86017903e2cb89ec036ef2640f5fa1fee0eab9b8934b41d047db34c289->leave($__internal_99ae1b86017903e2cb89ec036ef2640f5fa1fee0eab9b8934b41d047db34c289_prof);

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
        return array (  127 => 44,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Dozents list</h1>

    <table>
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
                            <a href=\"{{ path('adminDozent_show', { 'id': dozent.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('adminDozent_edit', { 'id': dozent.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adminDozent_new') }}\">Create a new dozent</a>
        </li>
    </ul>
{% endblock %}
", "dozent/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/dozent/index.html.twig");
    }
}
