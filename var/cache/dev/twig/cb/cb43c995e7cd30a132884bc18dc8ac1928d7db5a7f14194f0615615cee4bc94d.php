<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f6531d2dff64266a12d627c7be99e50a0325a9145ef217bf934c05342ae34817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_9fcdfa4d07afb806415677a3202f4fa2b052a30c55b06981afac7e08fcc2c4c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fcdfa4d07afb806415677a3202f4fa2b052a30c55b06981afac7e08fcc2c4c9->enter($__internal_9fcdfa4d07afb806415677a3202f4fa2b052a30c55b06981afac7e08fcc2c4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_c283ae4909fbd7d0a9af9ea3a900f3b6ad4df0b531475f9b8268e7f021f52727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c283ae4909fbd7d0a9af9ea3a900f3b6ad4df0b531475f9b8268e7f021f52727->enter($__internal_c283ae4909fbd7d0a9af9ea3a900f3b6ad4df0b531475f9b8268e7f021f52727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fcdfa4d07afb806415677a3202f4fa2b052a30c55b06981afac7e08fcc2c4c9->leave($__internal_9fcdfa4d07afb806415677a3202f4fa2b052a30c55b06981afac7e08fcc2c4c9_prof);

        
        $__internal_c283ae4909fbd7d0a9af9ea3a900f3b6ad4df0b531475f9b8268e7f021f52727->leave($__internal_c283ae4909fbd7d0a9af9ea3a900f3b6ad4df0b531475f9b8268e7f021f52727_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15f2f6811f7f38b332dcfc7f766ad46c184e868e19f843a1111ced056ffe954b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f2f6811f7f38b332dcfc7f766ad46c184e868e19f843a1111ced056ffe954b->enter($__internal_15f2f6811f7f38b332dcfc7f766ad46c184e868e19f843a1111ced056ffe954b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8ecd52e2669bf983a0a0fa5c0ad324ba10d2abee4d527b4c2df312dc68725740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecd52e2669bf983a0a0fa5c0ad324ba10d2abee4d527b4c2df312dc68725740->enter($__internal_8ecd52e2669bf983a0a0fa5c0ad324ba10d2abee4d527b4c2df312dc68725740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_8ecd52e2669bf983a0a0fa5c0ad324ba10d2abee4d527b4c2df312dc68725740->leave($__internal_8ecd52e2669bf983a0a0fa5c0ad324ba10d2abee4d527b4c2df312dc68725740_prof);

        
        $__internal_15f2f6811f7f38b332dcfc7f766ad46c184e868e19f843a1111ced056ffe954b->leave($__internal_15f2f6811f7f38b332dcfc7f766ad46c184e868e19f843a1111ced056ffe954b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
