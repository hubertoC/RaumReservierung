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
        $__internal_115ac0899cef8b4518bf2dc223665ab20bc6b5e1a3ed206d7cd79dadf3bdabae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115ac0899cef8b4518bf2dc223665ab20bc6b5e1a3ed206d7cd79dadf3bdabae->enter($__internal_115ac0899cef8b4518bf2dc223665ab20bc6b5e1a3ed206d7cd79dadf3bdabae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/index.html.twig"));

        $__internal_4e985bd1f085ff4b47d9bbae5f22078fa9b1b674d6395460e2409d9d6b503b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e985bd1f085ff4b47d9bbae5f22078fa9b1b674d6395460e2409d9d6b503b4b->enter($__internal_4e985bd1f085ff4b47d9bbae5f22078fa9b1b674d6395460e2409d9d6b503b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dozent/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_115ac0899cef8b4518bf2dc223665ab20bc6b5e1a3ed206d7cd79dadf3bdabae->leave($__internal_115ac0899cef8b4518bf2dc223665ab20bc6b5e1a3ed206d7cd79dadf3bdabae_prof);

        
        $__internal_4e985bd1f085ff4b47d9bbae5f22078fa9b1b674d6395460e2409d9d6b503b4b->leave($__internal_4e985bd1f085ff4b47d9bbae5f22078fa9b1b674d6395460e2409d9d6b503b4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf21df9769b9112d6f121f1a6cfe61a8bdadfc0941c09442fa10d4ed59a2940d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf21df9769b9112d6f121f1a6cfe61a8bdadfc0941c09442fa10d4ed59a2940d->enter($__internal_bf21df9769b9112d6f121f1a6cfe61a8bdadfc0941c09442fa10d4ed59a2940d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88231762a04a29c1aae97e1dd27ba3e5aaf72ca73ecd7c6b338bbc75164e31b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88231762a04a29c1aae97e1dd27ba3e5aaf72ca73ecd7c6b338bbc75164e31b8->enter($__internal_88231762a04a29c1aae97e1dd27ba3e5aaf72ca73ecd7c6b338bbc75164e31b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_88231762a04a29c1aae97e1dd27ba3e5aaf72ca73ecd7c6b338bbc75164e31b8->leave($__internal_88231762a04a29c1aae97e1dd27ba3e5aaf72ca73ecd7c6b338bbc75164e31b8_prof);

        
        $__internal_bf21df9769b9112d6f121f1a6cfe61a8bdadfc0941c09442fa10d4ed59a2940d->leave($__internal_bf21df9769b9112d6f121f1a6cfe61a8bdadfc0941c09442fa10d4ed59a2940d_prof);

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
    </div>
    </div>
    </div>
    </div>
{% endblock %}
", "dozent/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/dozent/index.html.twig");
    }
}
