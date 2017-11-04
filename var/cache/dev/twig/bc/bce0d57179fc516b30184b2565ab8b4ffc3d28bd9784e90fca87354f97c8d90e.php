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
        $__internal_aa66c8724d62b5ccd4fca87d2f3dd525eb3b37e027b1d49383eb8247368ab9b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa66c8724d62b5ccd4fca87d2f3dd525eb3b37e027b1d49383eb8247368ab9b6->enter($__internal_aa66c8724d62b5ccd4fca87d2f3dd525eb3b37e027b1d49383eb8247368ab9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_1be9553dffc785c02ba5d5f269ebc7fea5f5140ee910e46a9176b72c188550d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be9553dffc785c02ba5d5f269ebc7fea5f5140ee910e46a9176b72c188550d5->enter($__internal_1be9553dffc785c02ba5d5f269ebc7fea5f5140ee910e46a9176b72c188550d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa66c8724d62b5ccd4fca87d2f3dd525eb3b37e027b1d49383eb8247368ab9b6->leave($__internal_aa66c8724d62b5ccd4fca87d2f3dd525eb3b37e027b1d49383eb8247368ab9b6_prof);

        
        $__internal_1be9553dffc785c02ba5d5f269ebc7fea5f5140ee910e46a9176b72c188550d5->leave($__internal_1be9553dffc785c02ba5d5f269ebc7fea5f5140ee910e46a9176b72c188550d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0885ad01aecbc43d58bacdd42af340d2bef7bf897b9d6989390abdd8c96f8d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0885ad01aecbc43d58bacdd42af340d2bef7bf897b9d6989390abdd8c96f8d0->enter($__internal_c0885ad01aecbc43d58bacdd42af340d2bef7bf897b9d6989390abdd8c96f8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_02412c0fcf653547c8e20257f374d48fbe7dc91fb06605f32b436a2f803ec611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02412c0fcf653547c8e20257f374d48fbe7dc91fb06605f32b436a2f803ec611->enter($__internal_02412c0fcf653547c8e20257f374d48fbe7dc91fb06605f32b436a2f803ec611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_02412c0fcf653547c8e20257f374d48fbe7dc91fb06605f32b436a2f803ec611->leave($__internal_02412c0fcf653547c8e20257f374d48fbe7dc91fb06605f32b436a2f803ec611_prof);

        
        $__internal_c0885ad01aecbc43d58bacdd42af340d2bef7bf897b9d6989390abdd8c96f8d0->leave($__internal_c0885ad01aecbc43d58bacdd42af340d2bef7bf897b9d6989390abdd8c96f8d0_prof);

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
