<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_bc578be23cd80f135dfd4cc54eed7c0f2dcd1a36c5f1af8d58e55c0d88bdef11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb6c52b1bb71d3a91445ff8b9b38a6ac0e0b016ed7177f880209ee306261e8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6c52b1bb71d3a91445ff8b9b38a6ac0e0b016ed7177f880209ee306261e8f7->enter($__internal_cb6c52b1bb71d3a91445ff8b9b38a6ac0e0b016ed7177f880209ee306261e8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_8f387b5601a53b7c2c45a3a045e1a14fd8593c26a74a475385087f802ea6128c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f387b5601a53b7c2c45a3a045e1a14fd8593c26a74a475385087f802ea6128c->enter($__internal_8f387b5601a53b7c2c45a3a045e1a14fd8593c26a74a475385087f802ea6128c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cb6c52b1bb71d3a91445ff8b9b38a6ac0e0b016ed7177f880209ee306261e8f7->leave($__internal_cb6c52b1bb71d3a91445ff8b9b38a6ac0e0b016ed7177f880209ee306261e8f7_prof);

        
        $__internal_8f387b5601a53b7c2c45a3a045e1a14fd8593c26a74a475385087f802ea6128c->leave($__internal_8f387b5601a53b7c2c45a3a045e1a14fd8593c26a74a475385087f802ea6128c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e1bce0038dd4b00721ecfa72758c9f16692060dd9736e72fb03eadf5e46bdbab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1bce0038dd4b00721ecfa72758c9f16692060dd9736e72fb03eadf5e46bdbab->enter($__internal_e1bce0038dd4b00721ecfa72758c9f16692060dd9736e72fb03eadf5e46bdbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c3c3d55b92571e4c952cb2fa6d7319127776babeb8b838204d5eee851c73bb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c3d55b92571e4c952cb2fa6d7319127776babeb8b838204d5eee851c73bb94->enter($__internal_c3c3d55b92571e4c952cb2fa6d7319127776babeb8b838204d5eee851c73bb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c3c3d55b92571e4c952cb2fa6d7319127776babeb8b838204d5eee851c73bb94->leave($__internal_c3c3d55b92571e4c952cb2fa6d7319127776babeb8b838204d5eee851c73bb94_prof);

        
        $__internal_e1bce0038dd4b00721ecfa72758c9f16692060dd9736e72fb03eadf5e46bdbab->leave($__internal_e1bce0038dd4b00721ecfa72758c9f16692060dd9736e72fb03eadf5e46bdbab_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0594336adee8afc3eddc95dd02295b39e1927a1629d98fb12eae265a057333db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0594336adee8afc3eddc95dd02295b39e1927a1629d98fb12eae265a057333db->enter($__internal_0594336adee8afc3eddc95dd02295b39e1927a1629d98fb12eae265a057333db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_0c94af131bcd528c8eeec481e50d21ebf7eff17a58b14025f661803f4af2fd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c94af131bcd528c8eeec481e50d21ebf7eff17a58b14025f661803f4af2fd7a->enter($__internal_0c94af131bcd528c8eeec481e50d21ebf7eff17a58b14025f661803f4af2fd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0c94af131bcd528c8eeec481e50d21ebf7eff17a58b14025f661803f4af2fd7a->leave($__internal_0c94af131bcd528c8eeec481e50d21ebf7eff17a58b14025f661803f4af2fd7a_prof);

        
        $__internal_0594336adee8afc3eddc95dd02295b39e1927a1629d98fb12eae265a057333db->leave($__internal_0594336adee8afc3eddc95dd02295b39e1927a1629d98fb12eae265a057333db_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d906b3946825a7a74306812a507311465eeca4ed9dd9af709e699cee8454bd5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d906b3946825a7a74306812a507311465eeca4ed9dd9af709e699cee8454bd5d->enter($__internal_d906b3946825a7a74306812a507311465eeca4ed9dd9af709e699cee8454bd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b1bea5d616883736201943495242473bae75d12ea905e2dc3b2f58e3ad9740c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bea5d616883736201943495242473bae75d12ea905e2dc3b2f58e3ad9740c0->enter($__internal_b1bea5d616883736201943495242473bae75d12ea905e2dc3b2f58e3ad9740c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b1bea5d616883736201943495242473bae75d12ea905e2dc3b2f58e3ad9740c0->leave($__internal_b1bea5d616883736201943495242473bae75d12ea905e2dc3b2f58e3ad9740c0_prof);

        
        $__internal_d906b3946825a7a74306812a507311465eeca4ed9dd9af709e699cee8454bd5d->leave($__internal_d906b3946825a7a74306812a507311465eeca4ed9dd9af709e699cee8454bd5d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
