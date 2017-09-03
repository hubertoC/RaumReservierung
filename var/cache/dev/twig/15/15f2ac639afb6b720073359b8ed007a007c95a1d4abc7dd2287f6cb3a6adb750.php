<?php

/* gebaeude/index.html.twig */
class __TwigTemplate_1d3d1e8769a2c6d05fe168bcbb8820f166957293553d075d7bc392439a78ccd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "gebaeude/index.html.twig", 1);
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
        $__internal_644bb1238b1f4dd62178661324b78e8a2cbeb60e3496bbd723cb7bda13fd3570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644bb1238b1f4dd62178661324b78e8a2cbeb60e3496bbd723cb7bda13fd3570->enter($__internal_644bb1238b1f4dd62178661324b78e8a2cbeb60e3496bbd723cb7bda13fd3570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/index.html.twig"));

        $__internal_028f347e68210633eff5ec556c94863f16b5095812d1c6869f8885f0e1f51901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028f347e68210633eff5ec556c94863f16b5095812d1c6869f8885f0e1f51901->enter($__internal_028f347e68210633eff5ec556c94863f16b5095812d1c6869f8885f0e1f51901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gebaeude/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_644bb1238b1f4dd62178661324b78e8a2cbeb60e3496bbd723cb7bda13fd3570->leave($__internal_644bb1238b1f4dd62178661324b78e8a2cbeb60e3496bbd723cb7bda13fd3570_prof);

        
        $__internal_028f347e68210633eff5ec556c94863f16b5095812d1c6869f8885f0e1f51901->leave($__internal_028f347e68210633eff5ec556c94863f16b5095812d1c6869f8885f0e1f51901_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2152c5ac569f5f143b3fa8cbde9bbaa93cd5918ea95d64a96df940589aa7700d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2152c5ac569f5f143b3fa8cbde9bbaa93cd5918ea95d64a96df940589aa7700d->enter($__internal_2152c5ac569f5f143b3fa8cbde9bbaa93cd5918ea95d64a96df940589aa7700d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2638c6e33730bef173eb0be02876dd174b964e6c69e31869d359aee7cde0470b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2638c6e33730bef173eb0be02876dd174b964e6c69e31869d359aee7cde0470b->enter($__internal_2638c6e33730bef173eb0be02876dd174b964e6c69e31869d359aee7cde0470b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Gebaeudes list</h1>

    <table>
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
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_new");
        echo "\">Create a new gebaeude</a>
        </li>
    </ul>
";
        
        $__internal_2638c6e33730bef173eb0be02876dd174b964e6c69e31869d359aee7cde0470b->leave($__internal_2638c6e33730bef173eb0be02876dd174b964e6c69e31869d359aee7cde0470b_prof);

        
        $__internal_2152c5ac569f5f143b3fa8cbde9bbaa93cd5918ea95d64a96df940589aa7700d->leave($__internal_2152c5ac569f5f143b3fa8cbde9bbaa93cd5918ea95d64a96df940589aa7700d_prof);

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
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Gebaeudes list</h1>

    <table>
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
            <a href=\"{{ path('adminGebaeude_new') }}\">Create a new gebaeude</a>
        </li>
    </ul>
{% endblock %}
", "gebaeude/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/gebaeude/index.html.twig");
    }
}
