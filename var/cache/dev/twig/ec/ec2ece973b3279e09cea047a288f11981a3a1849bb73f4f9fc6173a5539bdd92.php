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
        $__internal_7952cf6a994be792d96b69b6ae8b5cd92105311b7dac277b6695dfa28c357762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7952cf6a994be792d96b69b6ae8b5cd92105311b7dac277b6695dfa28c357762->enter($__internal_7952cf6a994be792d96b69b6ae8b5cd92105311b7dac277b6695dfa28c357762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_3eede86960d5dcf7024d26882f9289e9cf27b09cfd73bab5013dcbcbea69302c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eede86960d5dcf7024d26882f9289e9cf27b09cfd73bab5013dcbcbea69302c->enter($__internal_3eede86960d5dcf7024d26882f9289e9cf27b09cfd73bab5013dcbcbea69302c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7952cf6a994be792d96b69b6ae8b5cd92105311b7dac277b6695dfa28c357762->leave($__internal_7952cf6a994be792d96b69b6ae8b5cd92105311b7dac277b6695dfa28c357762_prof);

        
        $__internal_3eede86960d5dcf7024d26882f9289e9cf27b09cfd73bab5013dcbcbea69302c->leave($__internal_3eede86960d5dcf7024d26882f9289e9cf27b09cfd73bab5013dcbcbea69302c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6073716059200239f59559d8b5626084ac4fd72149b238478088b0d9da225b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6073716059200239f59559d8b5626084ac4fd72149b238478088b0d9da225b2f->enter($__internal_6073716059200239f59559d8b5626084ac4fd72149b238478088b0d9da225b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cbe39adcad967eeea6c6ee6d592b5cd2ff7e5cf1346c6c5b040b7af283951831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe39adcad967eeea6c6ee6d592b5cd2ff7e5cf1346c6c5b040b7af283951831->enter($__internal_cbe39adcad967eeea6c6ee6d592b5cd2ff7e5cf1346c6c5b040b7af283951831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_cbe39adcad967eeea6c6ee6d592b5cd2ff7e5cf1346c6c5b040b7af283951831->leave($__internal_cbe39adcad967eeea6c6ee6d592b5cd2ff7e5cf1346c6c5b040b7af283951831_prof);

        
        $__internal_6073716059200239f59559d8b5626084ac4fd72149b238478088b0d9da225b2f->leave($__internal_6073716059200239f59559d8b5626084ac4fd72149b238478088b0d9da225b2f_prof);

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
