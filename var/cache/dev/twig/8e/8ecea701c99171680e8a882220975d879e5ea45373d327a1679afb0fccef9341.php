<?php

/* :dozent:index.html.twig */
class __TwigTemplate_e210aac78d78436f43a7dc85bc0e40c949e7db2aefbd0397cd314c85d96b928e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":dozent:index.html.twig", 1);
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
        $__internal_450b12c983b37ebc35fc629df39bc276aaa7a0df115415d8f836c82e58a8318a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_450b12c983b37ebc35fc629df39bc276aaa7a0df115415d8f836c82e58a8318a->enter($__internal_450b12c983b37ebc35fc629df39bc276aaa7a0df115415d8f836c82e58a8318a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dozent:index.html.twig"));

        $__internal_b0abb81a9341619d358c70f10920efe3024000363a9483069d7939f6807a0e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0abb81a9341619d358c70f10920efe3024000363a9483069d7939f6807a0e17->enter($__internal_b0abb81a9341619d358c70f10920efe3024000363a9483069d7939f6807a0e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dozent:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_450b12c983b37ebc35fc629df39bc276aaa7a0df115415d8f836c82e58a8318a->leave($__internal_450b12c983b37ebc35fc629df39bc276aaa7a0df115415d8f836c82e58a8318a_prof);

        
        $__internal_b0abb81a9341619d358c70f10920efe3024000363a9483069d7939f6807a0e17->leave($__internal_b0abb81a9341619d358c70f10920efe3024000363a9483069d7939f6807a0e17_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98718704d16f0c7529507e39878b52a7d66e1197862ffe48a22b3df4e79a0df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98718704d16f0c7529507e39878b52a7d66e1197862ffe48a22b3df4e79a0df2->enter($__internal_98718704d16f0c7529507e39878b52a7d66e1197862ffe48a22b3df4e79a0df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b26b986d6ad717ba806eb8db86672f3ccbbe68018ded976e44ea28c8b17e883e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26b986d6ad717ba806eb8db86672f3ccbbe68018ded976e44ea28c8b17e883e->enter($__internal_b26b986d6ad717ba806eb8db86672f3ccbbe68018ded976e44ea28c8b17e883e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b26b986d6ad717ba806eb8db86672f3ccbbe68018ded976e44ea28c8b17e883e->leave($__internal_b26b986d6ad717ba806eb8db86672f3ccbbe68018ded976e44ea28c8b17e883e_prof);

        
        $__internal_98718704d16f0c7529507e39878b52a7d66e1197862ffe48a22b3df4e79a0df2->leave($__internal_98718704d16f0c7529507e39878b52a7d66e1197862ffe48a22b3df4e79a0df2_prof);

    }

    public function getTemplateName()
    {
        return ":dozent:index.html.twig";
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
", ":dozent:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/dozent/index.html.twig");
    }
}
