<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b1cee4bc8b5c0942487186f3c65ad3fe4ad7637b767389ac123d14af27d86e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_8fdb3352fe0067b02d9104efc71ef0d229f4749557afce6a8551349af9d0a4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fdb3352fe0067b02d9104efc71ef0d229f4749557afce6a8551349af9d0a4ab->enter($__internal_8fdb3352fe0067b02d9104efc71ef0d229f4749557afce6a8551349af9d0a4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_5032e0d774625831da5776f89201dd6188d6e4af5ab584d18f6e53faf263b855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5032e0d774625831da5776f89201dd6188d6e4af5ab584d18f6e53faf263b855->enter($__internal_5032e0d774625831da5776f89201dd6188d6e4af5ab584d18f6e53faf263b855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fdb3352fe0067b02d9104efc71ef0d229f4749557afce6a8551349af9d0a4ab->leave($__internal_8fdb3352fe0067b02d9104efc71ef0d229f4749557afce6a8551349af9d0a4ab_prof);

        
        $__internal_5032e0d774625831da5776f89201dd6188d6e4af5ab584d18f6e53faf263b855->leave($__internal_5032e0d774625831da5776f89201dd6188d6e4af5ab584d18f6e53faf263b855_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ec1cf47f1e84ce701bea737bdaa904a523a1aced2e560d2f5c5098d09cb7322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec1cf47f1e84ce701bea737bdaa904a523a1aced2e560d2f5c5098d09cb7322->enter($__internal_5ec1cf47f1e84ce701bea737bdaa904a523a1aced2e560d2f5c5098d09cb7322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_00eaae1daab1b5992bf360fdee2b8acfc8e5bc387499e71c4e5301dcba38b3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00eaae1daab1b5992bf360fdee2b8acfc8e5bc387499e71c4e5301dcba38b3f7->enter($__internal_00eaae1daab1b5992bf360fdee2b8acfc8e5bc387499e71c4e5301dcba38b3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_00eaae1daab1b5992bf360fdee2b8acfc8e5bc387499e71c4e5301dcba38b3f7->leave($__internal_00eaae1daab1b5992bf360fdee2b8acfc8e5bc387499e71c4e5301dcba38b3f7_prof);

        
        $__internal_5ec1cf47f1e84ce701bea737bdaa904a523a1aced2e560d2f5c5098d09cb7322->leave($__internal_5ec1cf47f1e84ce701bea737bdaa904a523a1aced2e560d2f5c5098d09cb7322_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
