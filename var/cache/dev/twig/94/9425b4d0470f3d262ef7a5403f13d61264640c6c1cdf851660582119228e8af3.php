<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_7394a095354d7a0af196a51e46d88f8211521825c44ed7f5719f9adda08824a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_29b23dc0ebe7fd9e4e8e4b55afb81d90d563578b5f99eef59ac2326dbb6a5234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b23dc0ebe7fd9e4e8e4b55afb81d90d563578b5f99eef59ac2326dbb6a5234->enter($__internal_29b23dc0ebe7fd9e4e8e4b55afb81d90d563578b5f99eef59ac2326dbb6a5234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_5da69083f96c94a6b1fc35f56877cb8eaf2ddef5355abea4ea62b12863b9cd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da69083f96c94a6b1fc35f56877cb8eaf2ddef5355abea4ea62b12863b9cd61->enter($__internal_5da69083f96c94a6b1fc35f56877cb8eaf2ddef5355abea4ea62b12863b9cd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b23dc0ebe7fd9e4e8e4b55afb81d90d563578b5f99eef59ac2326dbb6a5234->leave($__internal_29b23dc0ebe7fd9e4e8e4b55afb81d90d563578b5f99eef59ac2326dbb6a5234_prof);

        
        $__internal_5da69083f96c94a6b1fc35f56877cb8eaf2ddef5355abea4ea62b12863b9cd61->leave($__internal_5da69083f96c94a6b1fc35f56877cb8eaf2ddef5355abea4ea62b12863b9cd61_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de67dd8a91f1a768654cdc422b9712413cfbd657949e8755db89d834d508fc8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de67dd8a91f1a768654cdc422b9712413cfbd657949e8755db89d834d508fc8b->enter($__internal_de67dd8a91f1a768654cdc422b9712413cfbd657949e8755db89d834d508fc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9cbc57568d1069985787466a1f3e989f355911f912aa89e469091617cacff5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbc57568d1069985787466a1f3e989f355911f912aa89e469091617cacff5d8->enter($__internal_9cbc57568d1069985787466a1f3e989f355911f912aa89e469091617cacff5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_9cbc57568d1069985787466a1f3e989f355911f912aa89e469091617cacff5d8->leave($__internal_9cbc57568d1069985787466a1f3e989f355911f912aa89e469091617cacff5d8_prof);

        
        $__internal_de67dd8a91f1a768654cdc422b9712413cfbd657949e8755db89d834d508fc8b->leave($__internal_de67dd8a91f1a768654cdc422b9712413cfbd657949e8755db89d834d508fc8b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
