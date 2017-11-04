<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_73468cd9ccb10ce1e43908b99c270e1133ca0c67ea9872a10a47cca5dd1cf0d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_604a53ed4afeffdddb17fafccc478ee20ae5ec1f0ced5a0c339ba5e9ddfe07a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604a53ed4afeffdddb17fafccc478ee20ae5ec1f0ced5a0c339ba5e9ddfe07a8->enter($__internal_604a53ed4afeffdddb17fafccc478ee20ae5ec1f0ced5a0c339ba5e9ddfe07a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_4ee540af75bf675c6f0752a5ccb97fdb4a8957ef84141f823a8b702ee7a61625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee540af75bf675c6f0752a5ccb97fdb4a8957ef84141f823a8b702ee7a61625->enter($__internal_4ee540af75bf675c6f0752a5ccb97fdb4a8957ef84141f823a8b702ee7a61625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_604a53ed4afeffdddb17fafccc478ee20ae5ec1f0ced5a0c339ba5e9ddfe07a8->leave($__internal_604a53ed4afeffdddb17fafccc478ee20ae5ec1f0ced5a0c339ba5e9ddfe07a8_prof);

        
        $__internal_4ee540af75bf675c6f0752a5ccb97fdb4a8957ef84141f823a8b702ee7a61625->leave($__internal_4ee540af75bf675c6f0752a5ccb97fdb4a8957ef84141f823a8b702ee7a61625_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ee894f63ddb30cd03f698816ac951e3ffb47aec52b58bbf652d36345b5e548c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee894f63ddb30cd03f698816ac951e3ffb47aec52b58bbf652d36345b5e548c->enter($__internal_8ee894f63ddb30cd03f698816ac951e3ffb47aec52b58bbf652d36345b5e548c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_40806126c372f45b15844c8f772347f54ceb4eaa1a9a3a9c412f4b9fb1e0ea7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40806126c372f45b15844c8f772347f54ceb4eaa1a9a3a9c412f4b9fb1e0ea7a->enter($__internal_40806126c372f45b15844c8f772347f54ceb4eaa1a9a3a9c412f4b9fb1e0ea7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_40806126c372f45b15844c8f772347f54ceb4eaa1a9a3a9c412f4b9fb1e0ea7a->leave($__internal_40806126c372f45b15844c8f772347f54ceb4eaa1a9a3a9c412f4b9fb1e0ea7a_prof);

        
        $__internal_8ee894f63ddb30cd03f698816ac951e3ffb47aec52b58bbf652d36345b5e548c->leave($__internal_8ee894f63ddb30cd03f698816ac951e3ffb47aec52b58bbf652d36345b5e548c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
