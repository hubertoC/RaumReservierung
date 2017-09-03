<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0367cebd603c65cd73f9f896be675902d7d1032538db024b3abd4088e1ea7a9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_08a75d54603aca23d3222c14e741da3485a40cd7e1908d4d39d4bec072e1a89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a75d54603aca23d3222c14e741da3485a40cd7e1908d4d39d4bec072e1a89b->enter($__internal_08a75d54603aca23d3222c14e741da3485a40cd7e1908d4d39d4bec072e1a89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_b40e8872eff6165d0df393d14b4ba2585d0e372e0547340a6d0c0a19a1f1d7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40e8872eff6165d0df393d14b4ba2585d0e372e0547340a6d0c0a19a1f1d7d1->enter($__internal_b40e8872eff6165d0df393d14b4ba2585d0e372e0547340a6d0c0a19a1f1d7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08a75d54603aca23d3222c14e741da3485a40cd7e1908d4d39d4bec072e1a89b->leave($__internal_08a75d54603aca23d3222c14e741da3485a40cd7e1908d4d39d4bec072e1a89b_prof);

        
        $__internal_b40e8872eff6165d0df393d14b4ba2585d0e372e0547340a6d0c0a19a1f1d7d1->leave($__internal_b40e8872eff6165d0df393d14b4ba2585d0e372e0547340a6d0c0a19a1f1d7d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb63471b9b11a16ed344e471ae7f5772638996aebc42a31b442116d27f81f71c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb63471b9b11a16ed344e471ae7f5772638996aebc42a31b442116d27f81f71c->enter($__internal_fb63471b9b11a16ed344e471ae7f5772638996aebc42a31b442116d27f81f71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3f92117d1f550fbc4aea81e69c3edb57fdfac88374ea5a095e472b4e27689551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f92117d1f550fbc4aea81e69c3edb57fdfac88374ea5a095e472b4e27689551->enter($__internal_3f92117d1f550fbc4aea81e69c3edb57fdfac88374ea5a095e472b4e27689551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_3f92117d1f550fbc4aea81e69c3edb57fdfac88374ea5a095e472b4e27689551->leave($__internal_3f92117d1f550fbc4aea81e69c3edb57fdfac88374ea5a095e472b4e27689551_prof);

        
        $__internal_fb63471b9b11a16ed344e471ae7f5772638996aebc42a31b442116d27f81f71c->leave($__internal_fb63471b9b11a16ed344e471ae7f5772638996aebc42a31b442116d27f81f71c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
