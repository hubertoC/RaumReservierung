<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_e2cd2f8c969170ff794fabc772ebd8cd04c7c597f2ead3ea5eb17fb1d700a66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_655358bda5fdb192d73637c840a5f160e6a8206636a088feb54e0967a0ea9c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655358bda5fdb192d73637c840a5f160e6a8206636a088feb54e0967a0ea9c09->enter($__internal_655358bda5fdb192d73637c840a5f160e6a8206636a088feb54e0967a0ea9c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_3445fc0e7a148e34bd50b483ddc44d3301d90c3fe8265f474ee0da276da55acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3445fc0e7a148e34bd50b483ddc44d3301d90c3fe8265f474ee0da276da55acd->enter($__internal_3445fc0e7a148e34bd50b483ddc44d3301d90c3fe8265f474ee0da276da55acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_655358bda5fdb192d73637c840a5f160e6a8206636a088feb54e0967a0ea9c09->leave($__internal_655358bda5fdb192d73637c840a5f160e6a8206636a088feb54e0967a0ea9c09_prof);

        
        $__internal_3445fc0e7a148e34bd50b483ddc44d3301d90c3fe8265f474ee0da276da55acd->leave($__internal_3445fc0e7a148e34bd50b483ddc44d3301d90c3fe8265f474ee0da276da55acd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d59eb1772491b187b9528d92ed3a68ecda1897f356da7bca2a96e9312ae7fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d59eb1772491b187b9528d92ed3a68ecda1897f356da7bca2a96e9312ae7fab->enter($__internal_4d59eb1772491b187b9528d92ed3a68ecda1897f356da7bca2a96e9312ae7fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6659e8ef15fb50f3b018772af0455e67f74f8d56f589b3a55e32cc18a56c5c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6659e8ef15fb50f3b018772af0455e67f74f8d56f589b3a55e32cc18a56c5c7f->enter($__internal_6659e8ef15fb50f3b018772af0455e67f74f8d56f589b3a55e32cc18a56c5c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6659e8ef15fb50f3b018772af0455e67f74f8d56f589b3a55e32cc18a56c5c7f->leave($__internal_6659e8ef15fb50f3b018772af0455e67f74f8d56f589b3a55e32cc18a56c5c7f_prof);

        
        $__internal_4d59eb1772491b187b9528d92ed3a68ecda1897f356da7bca2a96e9312ae7fab->leave($__internal_4d59eb1772491b187b9528d92ed3a68ecda1897f356da7bca2a96e9312ae7fab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
