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
        $__internal_502e2a1fab7c47b95e264d29f6f70c0780ee0c7dcce86d031b4128b2f89a889d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_502e2a1fab7c47b95e264d29f6f70c0780ee0c7dcce86d031b4128b2f89a889d->enter($__internal_502e2a1fab7c47b95e264d29f6f70c0780ee0c7dcce86d031b4128b2f89a889d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:confirmation.html.twig"));

        $__internal_a84f14f63ecf6dc39ec981f85eba5301e7f38e0f48de3667a84f27c4e9a8aee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a84f14f63ecf6dc39ec981f85eba5301e7f38e0f48de3667a84f27c4e9a8aee1->enter($__internal_a84f14f63ecf6dc39ec981f85eba5301e7f38e0f48de3667a84f27c4e9a8aee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:confirmation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_502e2a1fab7c47b95e264d29f6f70c0780ee0c7dcce86d031b4128b2f89a889d->leave($__internal_502e2a1fab7c47b95e264d29f6f70c0780ee0c7dcce86d031b4128b2f89a889d_prof);

        
        $__internal_a84f14f63ecf6dc39ec981f85eba5301e7f38e0f48de3667a84f27c4e9a8aee1->leave($__internal_a84f14f63ecf6dc39ec981f85eba5301e7f38e0f48de3667a84f27c4e9a8aee1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6043c8fe222a96ec7707b2cee1306f6f890d8e6f6ebc7306f742f8b59d1e1256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6043c8fe222a96ec7707b2cee1306f6f890d8e6f6ebc7306f742f8b59d1e1256->enter($__internal_6043c8fe222a96ec7707b2cee1306f6f890d8e6f6ebc7306f742f8b59d1e1256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_085d4f259763abeaff918316891ebabcd7cddd8377d3aa99f7dade8a83eb75d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085d4f259763abeaff918316891ebabcd7cddd8377d3aa99f7dade8a83eb75d8->enter($__internal_085d4f259763abeaff918316891ebabcd7cddd8377d3aa99f7dade8a83eb75d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"\">

</div>
<div class=\"jumbotron confirmation\">
  <h1>  Ihre Reservierung war Erfolgreich!!!</h1>
    <h2>hiermit finden sie Ihre Pin Nummer: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["random"]) ? $context["random"] : $this->getContext($context, "random")), "html", null, true);
        echo "</h2>
</div>
";
        
        $__internal_085d4f259763abeaff918316891ebabcd7cddd8377d3aa99f7dade8a83eb75d8->leave($__internal_085d4f259763abeaff918316891ebabcd7cddd8377d3aa99f7dade8a83eb75d8_prof);

        
        $__internal_6043c8fe222a96ec7707b2cee1306f6f890d8e6f6ebc7306f742f8b59d1e1256->leave($__internal_6043c8fe222a96ec7707b2cee1306f6f890d8e6f6ebc7306f742f8b59d1e1256_prof);

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
  <h1>  Ihre Reservierung war Erfolgreich!!!</h1>
    <h2>hiermit finden sie Ihre Pin Nummer: {{random}}</h2>
</div>
{% endblock %}
", "HZraumReservierungBundle:RaumHtml:confirmation.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/src/HZ/raumReservierungBundle/Resources/views/RaumHtml/confirmation.html.twig");
    }
}
