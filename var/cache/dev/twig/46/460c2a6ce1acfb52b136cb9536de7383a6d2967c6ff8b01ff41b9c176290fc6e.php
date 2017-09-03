<?php

/* HZraumReservierungBundle:RaumHtml:index.html.twig */
class __TwigTemplate_dc6382425bdce3b4204d90d489c970a938bf0791c4439bd7dfc166718ff12100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutPublic.html.twig", "HZraumReservierungBundle:RaumHtml:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutPublic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3473c63d24865a1a3416d0d6c37b7c743e7016c4486854a0aa2ecbd355dbe821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3473c63d24865a1a3416d0d6c37b7c743e7016c4486854a0aa2ecbd355dbe821->enter($__internal_3473c63d24865a1a3416d0d6c37b7c743e7016c4486854a0aa2ecbd355dbe821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:index.html.twig"));

        $__internal_6c2abd375338f75fd28e98dd9879e907cf94406a8d89d6ea5a3637cbec72412a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2abd375338f75fd28e98dd9879e907cf94406a8d89d6ea5a3637cbec72412a->enter($__internal_6c2abd375338f75fd28e98dd9879e907cf94406a8d89d6ea5a3637cbec72412a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3473c63d24865a1a3416d0d6c37b7c743e7016c4486854a0aa2ecbd355dbe821->leave($__internal_3473c63d24865a1a3416d0d6c37b7c743e7016c4486854a0aa2ecbd355dbe821_prof);

        
        $__internal_6c2abd375338f75fd28e98dd9879e907cf94406a8d89d6ea5a3637cbec72412a->leave($__internal_6c2abd375338f75fd28e98dd9879e907cf94406a8d89d6ea5a3637cbec72412a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f91610275f20092110e360c104a2982276663f4efc551cfa8e2772ebd87b94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f91610275f20092110e360c104a2982276663f4efc551cfa8e2772ebd87b94f->enter($__internal_3f91610275f20092110e360c104a2982276663f4efc551cfa8e2772ebd87b94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd32bdfebc2cd54cd580007ece471ef4d12e1cf6132b6f13a9013f9b5d719451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd32bdfebc2cd54cd580007ece471ef4d12e1cf6132b6f13a9013f9b5d719451->enter($__internal_dd32bdfebc2cd54cd580007ece471ef4d12e1cf6132b6f13a9013f9b5d719451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Tout les gebaeude:
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gebaeude"]) ? $context["gebaeude"] : $this->getContext($context, "gebaeude")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("h_zraum_reservierung_gebaeudeRaum", array("gebaeude" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">
GebaeudeName: ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "  GebaeudeNummer: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nummer", array()), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<div class=\"jumbotron\">
  <h1>Hello, world!</h1>
  <p>...</p>
  <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more</a></p>
</div>
";
        
        $__internal_dd32bdfebc2cd54cd580007ece471ef4d12e1cf6132b6f13a9013f9b5d719451->leave($__internal_dd32bdfebc2cd54cd580007ece471ef4d12e1cf6132b6f13a9013f9b5d719451_prof);

        
        $__internal_3f91610275f20092110e360c104a2982276663f4efc551cfa8e2772ebd87b94f->leave($__internal_3f91610275f20092110e360c104a2982276663f4efc551cfa8e2772ebd87b94f_prof);

    }

    public function getTemplateName()
    {
        return "HZraumReservierungBundle:RaumHtml:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 8,  61 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layoutPublic.html.twig' %}
{% block body %}
    Tout les gebaeude:
{% for item in gebaeude %}
<a href=\"{{ path('h_zraum_reservierung_gebaeudeRaum', {'gebaeude': item.id}) }}\">
GebaeudeName: {{item.name}}  GebaeudeNummer: {{item.nummer}}</a>
{% endfor %}

<div class=\"jumbotron\">
  <h1>Hello, world!</h1>
  <p>...</p>
  <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more</a></p>
</div>
{% endblock %}
", "HZraumReservierungBundle:RaumHtml:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/src/HZ/raumReservierungBundle/Resources/views/RaumHtml/index.html.twig");
    }
}
