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
        $__internal_c88890301e62a792f3465618f408a18698a05207b3f6e3a352daf7fd7e683282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88890301e62a792f3465618f408a18698a05207b3f6e3a352daf7fd7e683282->enter($__internal_c88890301e62a792f3465618f408a18698a05207b3f6e3a352daf7fd7e683282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_4d2530725da2218daf4749dce834348b2860e4cae4caee1929f374b3465a4a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2530725da2218daf4749dce834348b2860e4cae4caee1929f374b3465a4a34->enter($__internal_4d2530725da2218daf4749dce834348b2860e4cae4caee1929f374b3465a4a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c88890301e62a792f3465618f408a18698a05207b3f6e3a352daf7fd7e683282->leave($__internal_c88890301e62a792f3465618f408a18698a05207b3f6e3a352daf7fd7e683282_prof);

        
        $__internal_4d2530725da2218daf4749dce834348b2860e4cae4caee1929f374b3465a4a34->leave($__internal_4d2530725da2218daf4749dce834348b2860e4cae4caee1929f374b3465a4a34_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff5b58ade5ff19c620e40a36849f767d1fe84d6c56fb1763325a57c5f80ce5a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5b58ade5ff19c620e40a36849f767d1fe84d6c56fb1763325a57c5f80ce5a4->enter($__internal_ff5b58ade5ff19c620e40a36849f767d1fe84d6c56fb1763325a57c5f80ce5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eeb53bcbacbf000206155b5d05197df80446189f9004b7b6bf21cbe44c7efb7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb53bcbacbf000206155b5d05197df80446189f9004b7b6bf21cbe44c7efb7e->enter($__internal_eeb53bcbacbf000206155b5d05197df80446189f9004b7b6bf21cbe44c7efb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_eeb53bcbacbf000206155b5d05197df80446189f9004b7b6bf21cbe44c7efb7e->leave($__internal_eeb53bcbacbf000206155b5d05197df80446189f9004b7b6bf21cbe44c7efb7e_prof);

        
        $__internal_ff5b58ade5ff19c620e40a36849f767d1fe84d6c56fb1763325a57c5f80ce5a4->leave($__internal_ff5b58ade5ff19c620e40a36849f767d1fe84d6c56fb1763325a57c5f80ce5a4_prof);

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
