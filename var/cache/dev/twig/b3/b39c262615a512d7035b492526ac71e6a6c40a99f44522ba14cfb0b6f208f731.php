<?php

/* :dozent:show.html.twig */
class __TwigTemplate_23e3c876edb6e71c93d77e3ce1d2ef398bc359d4347436b34fff2af435b5bb19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dozent:show.html.twig", 1);
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
        $__internal_f51c13f40cba31fc5ff192ebab141cb7ea4320d6942f7518aed5cf733a0042fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51c13f40cba31fc5ff192ebab141cb7ea4320d6942f7518aed5cf733a0042fa->enter($__internal_f51c13f40cba31fc5ff192ebab141cb7ea4320d6942f7518aed5cf733a0042fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dozent:show.html.twig"));

        $__internal_ebd10e6d5cba013996e5cf5c1dd9fe0e52f9755cc15aa695fe5b4033bd2891b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd10e6d5cba013996e5cf5c1dd9fe0e52f9755cc15aa695fe5b4033bd2891b3->enter($__internal_ebd10e6d5cba013996e5cf5c1dd9fe0e52f9755cc15aa695fe5b4033bd2891b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dozent:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f51c13f40cba31fc5ff192ebab141cb7ea4320d6942f7518aed5cf733a0042fa->leave($__internal_f51c13f40cba31fc5ff192ebab141cb7ea4320d6942f7518aed5cf733a0042fa_prof);

        
        $__internal_ebd10e6d5cba013996e5cf5c1dd9fe0e52f9755cc15aa695fe5b4033bd2891b3->leave($__internal_ebd10e6d5cba013996e5cf5c1dd9fe0e52f9755cc15aa695fe5b4033bd2891b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97895c55d421f6dee5676c6e01c247e2139adc74599562ccc5f14c9d5481e120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97895c55d421f6dee5676c6e01c247e2139adc74599562ccc5f14c9d5481e120->enter($__internal_97895c55d421f6dee5676c6e01c247e2139adc74599562ccc5f14c9d5481e120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70e18d964b05018b17700eff34918042dd7efe6c4e2d5a2aa7e5a3c3066ef5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e18d964b05018b17700eff34918042dd7efe6c4e2d5a2aa7e5a3c3066ef5ac->enter($__internal_70e18d964b05018b17700eff34918042dd7efe6c4e2d5a2aa7e5a3c3066ef5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dozent</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Vorname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "vorname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Raumnummer</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "raumNummer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_edit", array("id" => $this->getAttribute((isset($context["dozent"]) ? $context["dozent"] : $this->getContext($context, "dozent")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_70e18d964b05018b17700eff34918042dd7efe6c4e2d5a2aa7e5a3c3066ef5ac->leave($__internal_70e18d964b05018b17700eff34918042dd7efe6c4e2d5a2aa7e5a3c3066ef5ac_prof);

        
        $__internal_97895c55d421f6dee5676c6e01c247e2139adc74599562ccc5f14c9d5481e120->leave($__internal_97895c55d421f6dee5676c6e01c247e2139adc74599562ccc5f14c9d5481e120_prof);

    }

    public function getTemplateName()
    {
        return ":dozent:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Dozent</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ dozent.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ dozent.name }}</td>
            </tr>
            <tr>
                <th>Vorname</th>
                <td>{{ dozent.vorname }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ dozent.title }}</td>
            </tr>
            <tr>
                <th>Raumnummer</th>
                <td>{{ dozent.raumNummer }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ dozent.email }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('adminDozent_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('adminDozent_edit', { 'id': dozent.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":dozent:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/dozent/show.html.twig");
    }
}
