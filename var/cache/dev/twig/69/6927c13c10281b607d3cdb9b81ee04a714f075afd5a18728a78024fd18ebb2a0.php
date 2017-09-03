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
        $__internal_9541e25a61562a45e449aa88c1fa592213c81d344ce8925bf731ac6d5dbe6f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9541e25a61562a45e449aa88c1fa592213c81d344ce8925bf731ac6d5dbe6f6e->enter($__internal_9541e25a61562a45e449aa88c1fa592213c81d344ce8925bf731ac6d5dbe6f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_aed1118d6414ea9abc280b579fe660331bba9e7cdc3a370a56bf9d543c778ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed1118d6414ea9abc280b579fe660331bba9e7cdc3a370a56bf9d543c778ffa->enter($__internal_aed1118d6414ea9abc280b579fe660331bba9e7cdc3a370a56bf9d543c778ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9541e25a61562a45e449aa88c1fa592213c81d344ce8925bf731ac6d5dbe6f6e->leave($__internal_9541e25a61562a45e449aa88c1fa592213c81d344ce8925bf731ac6d5dbe6f6e_prof);

        
        $__internal_aed1118d6414ea9abc280b579fe660331bba9e7cdc3a370a56bf9d543c778ffa->leave($__internal_aed1118d6414ea9abc280b579fe660331bba9e7cdc3a370a56bf9d543c778ffa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de85097d0a55d0209cccb42ea518cc31f97a2b6899fb64d626cb9c5bf05f81bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de85097d0a55d0209cccb42ea518cc31f97a2b6899fb64d626cb9c5bf05f81bc->enter($__internal_de85097d0a55d0209cccb42ea518cc31f97a2b6899fb64d626cb9c5bf05f81bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e1115db939e58475c03b607dbe6e4f14576d7ce59f3864f322fe3b9ea946fd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1115db939e58475c03b607dbe6e4f14576d7ce59f3864f322fe3b9ea946fd6e->enter($__internal_e1115db939e58475c03b607dbe6e4f14576d7ce59f3864f322fe3b9ea946fd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e1115db939e58475c03b607dbe6e4f14576d7ce59f3864f322fe3b9ea946fd6e->leave($__internal_e1115db939e58475c03b607dbe6e4f14576d7ce59f3864f322fe3b9ea946fd6e_prof);

        
        $__internal_de85097d0a55d0209cccb42ea518cc31f97a2b6899fb64d626cb9c5bf05f81bc->leave($__internal_de85097d0a55d0209cccb42ea518cc31f97a2b6899fb64d626cb9c5bf05f81bc_prof);

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
