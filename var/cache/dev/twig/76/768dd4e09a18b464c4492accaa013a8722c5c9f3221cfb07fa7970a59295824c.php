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
        $__internal_9876e5afd3d9ba4fef2ae8e6f7e8b6fb244d3858d54d2710b26f0c21a0bc1c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9876e5afd3d9ba4fef2ae8e6f7e8b6fb244d3858d54d2710b26f0c21a0bc1c63->enter($__internal_9876e5afd3d9ba4fef2ae8e6f7e8b6fb244d3858d54d2710b26f0c21a0bc1c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_9e3671d7e719bd36cad9be7c836d77b3577cee6143eb0c3850fbe6d3e042e8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3671d7e719bd36cad9be7c836d77b3577cee6143eb0c3850fbe6d3e042e8ae->enter($__internal_9e3671d7e719bd36cad9be7c836d77b3577cee6143eb0c3850fbe6d3e042e8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9876e5afd3d9ba4fef2ae8e6f7e8b6fb244d3858d54d2710b26f0c21a0bc1c63->leave($__internal_9876e5afd3d9ba4fef2ae8e6f7e8b6fb244d3858d54d2710b26f0c21a0bc1c63_prof);

        
        $__internal_9e3671d7e719bd36cad9be7c836d77b3577cee6143eb0c3850fbe6d3e042e8ae->leave($__internal_9e3671d7e719bd36cad9be7c836d77b3577cee6143eb0c3850fbe6d3e042e8ae_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0994ecb7e3d654c909539f67ff08745c190c2b718aad615fc64dd59726819067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0994ecb7e3d654c909539f67ff08745c190c2b718aad615fc64dd59726819067->enter($__internal_0994ecb7e3d654c909539f67ff08745c190c2b718aad615fc64dd59726819067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c24d944d2488042816072806c8c06822cbc6bd9b5cf2e78a9d8f0f030616f304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24d944d2488042816072806c8c06822cbc6bd9b5cf2e78a9d8f0f030616f304->enter($__internal_c24d944d2488042816072806c8c06822cbc6bd9b5cf2e78a9d8f0f030616f304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c24d944d2488042816072806c8c06822cbc6bd9b5cf2e78a9d8f0f030616f304->leave($__internal_c24d944d2488042816072806c8c06822cbc6bd9b5cf2e78a9d8f0f030616f304_prof);

        
        $__internal_0994ecb7e3d654c909539f67ff08745c190c2b718aad615fc64dd59726819067->leave($__internal_0994ecb7e3d654c909539f67ff08745c190c2b718aad615fc64dd59726819067_prof);

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
