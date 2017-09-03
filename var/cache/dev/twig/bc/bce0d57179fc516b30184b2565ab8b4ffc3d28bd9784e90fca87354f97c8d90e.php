<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_520d2edee525c3a95165d6ed96ddc238a904b01b470b6a5abc48624d8cf55778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_884ad5e55adf24e4db9867f7503d5e14ebed0918879b687d00e239ec5789ff47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884ad5e55adf24e4db9867f7503d5e14ebed0918879b687d00e239ec5789ff47->enter($__internal_884ad5e55adf24e4db9867f7503d5e14ebed0918879b687d00e239ec5789ff47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_5cbefdb48f0fea97c789b16e1d36c906e9ea25540af2e1c02f27f0401f289840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbefdb48f0fea97c789b16e1d36c906e9ea25540af2e1c02f27f0401f289840->enter($__internal_5cbefdb48f0fea97c789b16e1d36c906e9ea25540af2e1c02f27f0401f289840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_884ad5e55adf24e4db9867f7503d5e14ebed0918879b687d00e239ec5789ff47->leave($__internal_884ad5e55adf24e4db9867f7503d5e14ebed0918879b687d00e239ec5789ff47_prof);

        
        $__internal_5cbefdb48f0fea97c789b16e1d36c906e9ea25540af2e1c02f27f0401f289840->leave($__internal_5cbefdb48f0fea97c789b16e1d36c906e9ea25540af2e1c02f27f0401f289840_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f571a86a9e24213fcab565348e103b6bbb2f05f3060eab957e9e69187d01660f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f571a86a9e24213fcab565348e103b6bbb2f05f3060eab957e9e69187d01660f->enter($__internal_f571a86a9e24213fcab565348e103b6bbb2f05f3060eab957e9e69187d01660f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8db27486794fc7946506e563cabda8415ed2da8fc14ae004b74c54d19b531247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db27486794fc7946506e563cabda8415ed2da8fc14ae004b74c54d19b531247->enter($__internal_8db27486794fc7946506e563cabda8415ed2da8fc14ae004b74c54d19b531247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8db27486794fc7946506e563cabda8415ed2da8fc14ae004b74c54d19b531247->leave($__internal_8db27486794fc7946506e563cabda8415ed2da8fc14ae004b74c54d19b531247_prof);

        
        $__internal_f571a86a9e24213fcab565348e103b6bbb2f05f3060eab957e9e69187d01660f->leave($__internal_f571a86a9e24213fcab565348e103b6bbb2f05f3060eab957e9e69187d01660f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
