<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9c806dd7dfd15734508e5ecd857748ddff474cb3b519999cb3754602a4981050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_4b10daa884ce6423938b092624feec18fcf38086a623dc256e53a027ba4694e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b10daa884ce6423938b092624feec18fcf38086a623dc256e53a027ba4694e3->enter($__internal_4b10daa884ce6423938b092624feec18fcf38086a623dc256e53a027ba4694e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_7acfe405e818eeb2d4fc739671c5bdfd6c9129983d8c0b8b5d75ec83e69e4896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7acfe405e818eeb2d4fc739671c5bdfd6c9129983d8c0b8b5d75ec83e69e4896->enter($__internal_7acfe405e818eeb2d4fc739671c5bdfd6c9129983d8c0b8b5d75ec83e69e4896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b10daa884ce6423938b092624feec18fcf38086a623dc256e53a027ba4694e3->leave($__internal_4b10daa884ce6423938b092624feec18fcf38086a623dc256e53a027ba4694e3_prof);

        
        $__internal_7acfe405e818eeb2d4fc739671c5bdfd6c9129983d8c0b8b5d75ec83e69e4896->leave($__internal_7acfe405e818eeb2d4fc739671c5bdfd6c9129983d8c0b8b5d75ec83e69e4896_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5198df59f5a90cceb67882793f3e1daf3c8b603c6e8b53af8b4b0205c5dec47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5198df59f5a90cceb67882793f3e1daf3c8b603c6e8b53af8b4b0205c5dec47->enter($__internal_e5198df59f5a90cceb67882793f3e1daf3c8b603c6e8b53af8b4b0205c5dec47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9969480a127f6dd8589beede9874b0a9d3429e3716259933b0d7c5805094356c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9969480a127f6dd8589beede9874b0a9d3429e3716259933b0d7c5805094356c->enter($__internal_9969480a127f6dd8589beede9874b0a9d3429e3716259933b0d7c5805094356c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9969480a127f6dd8589beede9874b0a9d3429e3716259933b0d7c5805094356c->leave($__internal_9969480a127f6dd8589beede9874b0a9d3429e3716259933b0d7c5805094356c_prof);

        
        $__internal_e5198df59f5a90cceb67882793f3e1daf3c8b603c6e8b53af8b4b0205c5dec47->leave($__internal_e5198df59f5a90cceb67882793f3e1daf3c8b603c6e8b53af8b4b0205c5dec47_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
