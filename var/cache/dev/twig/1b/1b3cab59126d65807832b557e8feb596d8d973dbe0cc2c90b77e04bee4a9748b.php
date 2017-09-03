<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d7fbf7c6a0dfac30509226a0b6d2aa6472ab488d619d2064c569dc9bedb43930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_25ae770c7209459833c78ccc23541ed80d826656826c0981505a736205de7758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ae770c7209459833c78ccc23541ed80d826656826c0981505a736205de7758->enter($__internal_25ae770c7209459833c78ccc23541ed80d826656826c0981505a736205de7758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_51e8a6f28412b2a5bdf5da198922604c89bed29f5319666a540985043b7ac570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e8a6f28412b2a5bdf5da198922604c89bed29f5319666a540985043b7ac570->enter($__internal_51e8a6f28412b2a5bdf5da198922604c89bed29f5319666a540985043b7ac570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25ae770c7209459833c78ccc23541ed80d826656826c0981505a736205de7758->leave($__internal_25ae770c7209459833c78ccc23541ed80d826656826c0981505a736205de7758_prof);

        
        $__internal_51e8a6f28412b2a5bdf5da198922604c89bed29f5319666a540985043b7ac570->leave($__internal_51e8a6f28412b2a5bdf5da198922604c89bed29f5319666a540985043b7ac570_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_308051fd5216370ac7fc6ed38c0334a5c580b0e4b3e1ac0cc78e80de7c300b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308051fd5216370ac7fc6ed38c0334a5c580b0e4b3e1ac0cc78e80de7c300b82->enter($__internal_308051fd5216370ac7fc6ed38c0334a5c580b0e4b3e1ac0cc78e80de7c300b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9911dd449ca89d15fc90b284958a4596569133142313bfcd6d3fe58dacc7de1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9911dd449ca89d15fc90b284958a4596569133142313bfcd6d3fe58dacc7de1d->enter($__internal_9911dd449ca89d15fc90b284958a4596569133142313bfcd6d3fe58dacc7de1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_9911dd449ca89d15fc90b284958a4596569133142313bfcd6d3fe58dacc7de1d->leave($__internal_9911dd449ca89d15fc90b284958a4596569133142313bfcd6d3fe58dacc7de1d_prof);

        
        $__internal_308051fd5216370ac7fc6ed38c0334a5c580b0e4b3e1ac0cc78e80de7c300b82->leave($__internal_308051fd5216370ac7fc6ed38c0334a5c580b0e4b3e1ac0cc78e80de7c300b82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
