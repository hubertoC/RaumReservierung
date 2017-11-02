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
        $__internal_b47bf9ba7acd1f8e076c3d5a537d62120594953dcabc5a30be473e3e6ae7bf13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47bf9ba7acd1f8e076c3d5a537d62120594953dcabc5a30be473e3e6ae7bf13->enter($__internal_b47bf9ba7acd1f8e076c3d5a537d62120594953dcabc5a30be473e3e6ae7bf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_e25eea6a23b7ee3ea72dbfda7326d859068596f03e1857d72865debb04290b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25eea6a23b7ee3ea72dbfda7326d859068596f03e1857d72865debb04290b45->enter($__internal_e25eea6a23b7ee3ea72dbfda7326d859068596f03e1857d72865debb04290b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b47bf9ba7acd1f8e076c3d5a537d62120594953dcabc5a30be473e3e6ae7bf13->leave($__internal_b47bf9ba7acd1f8e076c3d5a537d62120594953dcabc5a30be473e3e6ae7bf13_prof);

        
        $__internal_e25eea6a23b7ee3ea72dbfda7326d859068596f03e1857d72865debb04290b45->leave($__internal_e25eea6a23b7ee3ea72dbfda7326d859068596f03e1857d72865debb04290b45_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_636445d50446e3d8e045276cee0cf17c686ca67cd5a23df90c66ad1a69998eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636445d50446e3d8e045276cee0cf17c686ca67cd5a23df90c66ad1a69998eea->enter($__internal_636445d50446e3d8e045276cee0cf17c686ca67cd5a23df90c66ad1a69998eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9db2eb4b2d99fb221b14d2504850ea7a275f664d64d25b81eff99e2e7bf2b4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db2eb4b2d99fb221b14d2504850ea7a275f664d64d25b81eff99e2e7bf2b4df->enter($__internal_9db2eb4b2d99fb221b14d2504850ea7a275f664d64d25b81eff99e2e7bf2b4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9db2eb4b2d99fb221b14d2504850ea7a275f664d64d25b81eff99e2e7bf2b4df->leave($__internal_9db2eb4b2d99fb221b14d2504850ea7a275f664d64d25b81eff99e2e7bf2b4df_prof);

        
        $__internal_636445d50446e3d8e045276cee0cf17c686ca67cd5a23df90c66ad1a69998eea->leave($__internal_636445d50446e3d8e045276cee0cf17c686ca67cd5a23df90c66ad1a69998eea_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0c137a7bea8182bfb704377a34329a8f406563095a18e3153668e7c35086fade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c137a7bea8182bfb704377a34329a8f406563095a18e3153668e7c35086fade->enter($__internal_0c137a7bea8182bfb704377a34329a8f406563095a18e3153668e7c35086fade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9f75c4c3c3f914ae11fe8214d808b9fc7408d2cb1f584d03b8d27ab84a82d199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f75c4c3c3f914ae11fe8214d808b9fc7408d2cb1f584d03b8d27ab84a82d199->enter($__internal_9f75c4c3c3f914ae11fe8214d808b9fc7408d2cb1f584d03b8d27ab84a82d199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9f75c4c3c3f914ae11fe8214d808b9fc7408d2cb1f584d03b8d27ab84a82d199->leave($__internal_9f75c4c3c3f914ae11fe8214d808b9fc7408d2cb1f584d03b8d27ab84a82d199_prof);

        
        $__internal_0c137a7bea8182bfb704377a34329a8f406563095a18e3153668e7c35086fade->leave($__internal_0c137a7bea8182bfb704377a34329a8f406563095a18e3153668e7c35086fade_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9948cb5061363d7dd3d559502ad0971b04433524ed99b1c7115873855bcec5d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9948cb5061363d7dd3d559502ad0971b04433524ed99b1c7115873855bcec5d6->enter($__internal_9948cb5061363d7dd3d559502ad0971b04433524ed99b1c7115873855bcec5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_76a1ec573e6e2e39e74c74dfbec6675b990fc5a76cd35a0566b22146b193aa09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a1ec573e6e2e39e74c74dfbec6675b990fc5a76cd35a0566b22146b193aa09->enter($__internal_76a1ec573e6e2e39e74c74dfbec6675b990fc5a76cd35a0566b22146b193aa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_76a1ec573e6e2e39e74c74dfbec6675b990fc5a76cd35a0566b22146b193aa09->leave($__internal_76a1ec573e6e2e39e74c74dfbec6675b990fc5a76cd35a0566b22146b193aa09_prof);

        
        $__internal_9948cb5061363d7dd3d559502ad0971b04433524ed99b1c7115873855bcec5d6->leave($__internal_9948cb5061363d7dd3d559502ad0971b04433524ed99b1c7115873855bcec5d6_prof);

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
