<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a7b37095c69f1e8d7b81c41ba2dbcc90e8c8a4c580707021f71aa3d7dcf6843f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_c3efe9891ad2a701fdb19a69cffe132850793f4970ed695a37136fe1208adeb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3efe9891ad2a701fdb19a69cffe132850793f4970ed695a37136fe1208adeb8->enter($__internal_c3efe9891ad2a701fdb19a69cffe132850793f4970ed695a37136fe1208adeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_4d1d0e56cc6f09cc30f17138b63a65f2cf4b4d85d85adb48dc13771d69af8990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1d0e56cc6f09cc30f17138b63a65f2cf4b4d85d85adb48dc13771d69af8990->enter($__internal_4d1d0e56cc6f09cc30f17138b63a65f2cf4b4d85d85adb48dc13771d69af8990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3efe9891ad2a701fdb19a69cffe132850793f4970ed695a37136fe1208adeb8->leave($__internal_c3efe9891ad2a701fdb19a69cffe132850793f4970ed695a37136fe1208adeb8_prof);

        
        $__internal_4d1d0e56cc6f09cc30f17138b63a65f2cf4b4d85d85adb48dc13771d69af8990->leave($__internal_4d1d0e56cc6f09cc30f17138b63a65f2cf4b4d85d85adb48dc13771d69af8990_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85678ca975ca3a0318304393c70d3f959e83d9478d81bdee1426301265b2039d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85678ca975ca3a0318304393c70d3f959e83d9478d81bdee1426301265b2039d->enter($__internal_85678ca975ca3a0318304393c70d3f959e83d9478d81bdee1426301265b2039d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_02bae400e0a288d6f60d797bba59cb07c2682472c49f6940df783a160b653e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02bae400e0a288d6f60d797bba59cb07c2682472c49f6940df783a160b653e08->enter($__internal_02bae400e0a288d6f60d797bba59cb07c2682472c49f6940df783a160b653e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_02bae400e0a288d6f60d797bba59cb07c2682472c49f6940df783a160b653e08->leave($__internal_02bae400e0a288d6f60d797bba59cb07c2682472c49f6940df783a160b653e08_prof);

        
        $__internal_85678ca975ca3a0318304393c70d3f959e83d9478d81bdee1426301265b2039d->leave($__internal_85678ca975ca3a0318304393c70d3f959e83d9478d81bdee1426301265b2039d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
