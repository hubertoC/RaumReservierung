<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f4864290bffa17ef5aa96d939e01b4dfa7d88bc9d4891ff9c087d70448096b15 extends Twig_Template
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
        $__internal_853f66e3517d33d1f489abb83b6073c9c71bb247b1915de538b984aa9673df66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853f66e3517d33d1f489abb83b6073c9c71bb247b1915de538b984aa9673df66->enter($__internal_853f66e3517d33d1f489abb83b6073c9c71bb247b1915de538b984aa9673df66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_6c1bfa1d1c1e72b213edd1c367a000fd87ccc1b6d619adecb1dca9ea5becf2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1bfa1d1c1e72b213edd1c367a000fd87ccc1b6d619adecb1dca9ea5becf2d5->enter($__internal_6c1bfa1d1c1e72b213edd1c367a000fd87ccc1b6d619adecb1dca9ea5becf2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_853f66e3517d33d1f489abb83b6073c9c71bb247b1915de538b984aa9673df66->leave($__internal_853f66e3517d33d1f489abb83b6073c9c71bb247b1915de538b984aa9673df66_prof);

        
        $__internal_6c1bfa1d1c1e72b213edd1c367a000fd87ccc1b6d619adecb1dca9ea5becf2d5->leave($__internal_6c1bfa1d1c1e72b213edd1c367a000fd87ccc1b6d619adecb1dca9ea5becf2d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ef9d271d836acd10fbe7866ff275c6a34b4822455da693a8a8ab2911f451374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef9d271d836acd10fbe7866ff275c6a34b4822455da693a8a8ab2911f451374->enter($__internal_2ef9d271d836acd10fbe7866ff275c6a34b4822455da693a8a8ab2911f451374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0aa7264811f029b62afec1e18b9d1e556a48649e3b0acba1e5b3921962e5c907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa7264811f029b62afec1e18b9d1e556a48649e3b0acba1e5b3921962e5c907->enter($__internal_0aa7264811f029b62afec1e18b9d1e556a48649e3b0acba1e5b3921962e5c907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0aa7264811f029b62afec1e18b9d1e556a48649e3b0acba1e5b3921962e5c907->leave($__internal_0aa7264811f029b62afec1e18b9d1e556a48649e3b0acba1e5b3921962e5c907_prof);

        
        $__internal_2ef9d271d836acd10fbe7866ff275c6a34b4822455da693a8a8ab2911f451374->leave($__internal_2ef9d271d836acd10fbe7866ff275c6a34b4822455da693a8a8ab2911f451374_prof);

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
", "@FOSUser/Security/login.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
