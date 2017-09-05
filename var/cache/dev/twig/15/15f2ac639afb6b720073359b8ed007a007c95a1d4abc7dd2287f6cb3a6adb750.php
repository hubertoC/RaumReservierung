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
        $__internal_6e52d436415ab52afc7997ad3c9d8b08bdef0f07d50f6259df6102fd8f8df773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e52d436415ab52afc7997ad3c9d8b08bdef0f07d50f6259df6102fd8f8df773->enter($__internal_6e52d436415ab52afc7997ad3c9d8b08bdef0f07d50f6259df6102fd8f8df773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/index.html.twig"));

        $__internal_7752d3a5b5f856ee885e548d439fde82371b1193a029b368306b25e1445a7f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7752d3a5b5f856ee885e548d439fde82371b1193a029b368306b25e1445a7f62->enter($__internal_7752d3a5b5f856ee885e548d439fde82371b1193a029b368306b25e1445a7f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e52d436415ab52afc7997ad3c9d8b08bdef0f07d50f6259df6102fd8f8df773->leave($__internal_6e52d436415ab52afc7997ad3c9d8b08bdef0f07d50f6259df6102fd8f8df773_prof);

        
        $__internal_7752d3a5b5f856ee885e548d439fde82371b1193a029b368306b25e1445a7f62->leave($__internal_7752d3a5b5f856ee885e548d439fde82371b1193a029b368306b25e1445a7f62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3e3096599868838fb27e64363057d0fb7cd0ba33f8e4b9140151e70861ee60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3e3096599868838fb27e64363057d0fb7cd0ba33f8e4b9140151e70861ee60e->enter($__internal_d3e3096599868838fb27e64363057d0fb7cd0ba33f8e4b9140151e70861ee60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dabe15ed014e9162b553c22ebab073096345fa547a481c5e149c6e93f78da3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabe15ed014e9162b553c22ebab073096345fa547a481c5e149c6e93f78da3c0->enter($__internal_dabe15ed014e9162b553c22ebab073096345fa547a481c5e149c6e93f78da3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Gebaeudes list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["gebaeudes"]) ? $context["gebaeudes"] : $this->getContext($context, "gebaeudes")));
        foreach ($context['_seq'] as $context["_key"] => $context["gebaeude"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_show", array("id" => $this->getAttribute($context["gebaeude"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gebaeude"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["gebaeude"], "nummer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["gebaeude"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_show", array("id" => $this->getAttribute($context["gebaeude"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_edit", array("id" => $this->getAttribute($context["gebaeude"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gebaeude'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
          <div class= \"cration_artiste\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_new");
        echo "\">Create a new gebaeude</a>
        </li>
    </ul>
";
        
        $__internal_dabe15ed014e9162b553c22ebab073096345fa547a481c5e149c6e93f78da3c0->leave($__internal_dabe15ed014e9162b553c22ebab073096345fa547a481c5e149c6e93f78da3c0_prof);

        
        $__internal_d3e3096599868838fb27e64363057d0fb7cd0ba33f8e4b9140151e70861ee60e->leave($__internal_d3e3096599868838fb27e64363057d0fb7cd0ba33f8e4b9140151e70861ee60e_prof);

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
    <h1>Gebaeudes list</h1>

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
        {% for gebaeude in gebaeudes %}
            <tr>
                <td><a href=\"{{ path('adminGebaeude_show', { 'id': gebaeude.id }) }}\">{{ gebaeude.id }}</a></td>
                <td>{{ gebaeude.nummer }}</td>
                <td>{{ gebaeude.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('adminGebaeude_show', { 'id': gebaeude.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('adminGebaeude_edit', { 'id': gebaeude.id }) }}\">edit</a>
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

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminGebaeude_new') }}\">Create a new gebaeude</a>
        </li>
    </ul>
{% endblock %}
", "gebaeude/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/gebaeude/index.html.twig");
    }
}
