<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_339126da287ccec2e7e2691172203842a30b85eef50beda4de2d4fd63c1f1f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_814fc08358f09057236fe4c55c03f5eb6f74759f07091d8efed9040afb99f547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814fc08358f09057236fe4c55c03f5eb6f74759f07091d8efed9040afb99f547->enter($__internal_814fc08358f09057236fe4c55c03f5eb6f74759f07091d8efed9040afb99f547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_73639edfbb09776c583b2423702351dbb3c09684a2ae7b79dd6166145c6283d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73639edfbb09776c583b2423702351dbb3c09684a2ae7b79dd6166145c6283d1->enter($__internal_73639edfbb09776c583b2423702351dbb3c09684a2ae7b79dd6166145c6283d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_814fc08358f09057236fe4c55c03f5eb6f74759f07091d8efed9040afb99f547->leave($__internal_814fc08358f09057236fe4c55c03f5eb6f74759f07091d8efed9040afb99f547_prof);

        
        $__internal_73639edfbb09776c583b2423702351dbb3c09684a2ae7b79dd6166145c6283d1->leave($__internal_73639edfbb09776c583b2423702351dbb3c09684a2ae7b79dd6166145c6283d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a6285e90b8f9cee0f3ed97e748ef3fae143592d3602e572f22b0117933b204a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6285e90b8f9cee0f3ed97e748ef3fae143592d3602e572f22b0117933b204a->enter($__internal_4a6285e90b8f9cee0f3ed97e748ef3fae143592d3602e572f22b0117933b204a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a9519ae21b541d756b541cfa8b89f09594c265dffcab1c3227a4a747883e034d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9519ae21b541d756b541cfa8b89f09594c265dffcab1c3227a4a747883e034d->enter($__internal_a9519ae21b541d756b541cfa8b89f09594c265dffcab1c3227a4a747883e034d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a9519ae21b541d756b541cfa8b89f09594c265dffcab1c3227a4a747883e034d->leave($__internal_a9519ae21b541d756b541cfa8b89f09594c265dffcab1c3227a4a747883e034d_prof);

        
        $__internal_4a6285e90b8f9cee0f3ed97e748ef3fae143592d3602e572f22b0117933b204a->leave($__internal_4a6285e90b8f9cee0f3ed97e748ef3fae143592d3602e572f22b0117933b204a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
