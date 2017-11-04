<?php

/* HZraumReservierungBundle:RaumHtml:confirmation.html.twig */
class __TwigTemplate_d511bbf2be922aadbf93c3d6dd4775cca70b4961295dd8e492adb97362a53eaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutPublic.html.twig", "HZraumReservierungBundle:RaumHtml:confirmation.html.twig", 1);
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
        $__internal_23e8fe2366a45c885f5cd625c1324308c8869bef7cf5cac1d9ae5d90c80fd7a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e8fe2366a45c885f5cd625c1324308c8869bef7cf5cac1d9ae5d90c80fd7a5->enter($__internal_23e8fe2366a45c885f5cd625c1324308c8869bef7cf5cac1d9ae5d90c80fd7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:confirmation.html.twig"));

        $__internal_cc97941ea1fc9f8aa18567de3b37ce924f00d55fa32bce3f03b4ab575c07f93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc97941ea1fc9f8aa18567de3b37ce924f00d55fa32bce3f03b4ab575c07f93b->enter($__internal_cc97941ea1fc9f8aa18567de3b37ce924f00d55fa32bce3f03b4ab575c07f93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:confirmation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23e8fe2366a45c885f5cd625c1324308c8869bef7cf5cac1d9ae5d90c80fd7a5->leave($__internal_23e8fe2366a45c885f5cd625c1324308c8869bef7cf5cac1d9ae5d90c80fd7a5_prof);

        
        $__internal_cc97941ea1fc9f8aa18567de3b37ce924f00d55fa32bce3f03b4ab575c07f93b->leave($__internal_cc97941ea1fc9f8aa18567de3b37ce924f00d55fa32bce3f03b4ab575c07f93b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_aae5fb5bc37c6d89c975c93b8bd4bc507db86d3d0304a0d4e2edfbbc2f8c40d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae5fb5bc37c6d89c975c93b8bd4bc507db86d3d0304a0d4e2edfbbc2f8c40d2->enter($__internal_aae5fb5bc37c6d89c975c93b8bd4bc507db86d3d0304a0d4e2edfbbc2f8c40d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_add76377f5927a31efbede139a995a0baa582e0a1784c1023468dcfede2b2022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add76377f5927a31efbede139a995a0baa582e0a1784c1023468dcfede2b2022->enter($__internal_add76377f5927a31efbede139a995a0baa582e0a1784c1023468dcfede2b2022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"\">

</div>
<div class=\"jumbotron confirmation\">
  <h1>  Ihre Reservierung war Erfolgreich!!!</h1><br>
    <h2>hiermit finden sie Ihre Pin Nummer: <span>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["random"]) ? $context["random"] : $this->getContext($context, "random")), "html", null, true);
        echo "</span> </h2>
</div>
";
        
        $__internal_add76377f5927a31efbede139a995a0baa582e0a1784c1023468dcfede2b2022->leave($__internal_add76377f5927a31efbede139a995a0baa582e0a1784c1023468dcfede2b2022_prof);

        
        $__internal_aae5fb5bc37c6d89c975c93b8bd4bc507db86d3d0304a0d4e2edfbbc2f8c40d2->leave($__internal_aae5fb5bc37c6d89c975c93b8bd4bc507db86d3d0304a0d4e2edfbbc2f8c40d2_prof);

    }

    public function getTemplateName()
    {
        return "HZraumReservierungBundle:RaumHtml:confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
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
<div class=\"\">

</div>
<div class=\"jumbotron confirmation\">
  <h1>  Ihre Reservierung war Erfolgreich!!!</h1><br>
    <h2>hiermit finden sie Ihre Pin Nummer: <span>{{random}}</span> </h2>
</div>
{% endblock %}
", "HZraumReservierungBundle:RaumHtml:confirmation.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/src/HZ/raumReservierungBundle/Resources/views/RaumHtml/confirmation.html.twig");
    }
}
