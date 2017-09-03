<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4b3f262fc8be21973574807af7e2ba9163adf67298e2e824ad9d8ff162433505 extends Twig_Template
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
        $__internal_fa519f9cbb919ba60d79b3d240bf4677b81f8c79056403fb6f4a46e335f35eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa519f9cbb919ba60d79b3d240bf4677b81f8c79056403fb6f4a46e335f35eec->enter($__internal_fa519f9cbb919ba60d79b3d240bf4677b81f8c79056403fb6f4a46e335f35eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_6b555a908ebcfeef1a651e2703e1d6646ca709a52aa1d954a85cfc261fafe23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b555a908ebcfeef1a651e2703e1d6646ca709a52aa1d954a85cfc261fafe23b->enter($__internal_6b555a908ebcfeef1a651e2703e1d6646ca709a52aa1d954a85cfc261fafe23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fa519f9cbb919ba60d79b3d240bf4677b81f8c79056403fb6f4a46e335f35eec->leave($__internal_fa519f9cbb919ba60d79b3d240bf4677b81f8c79056403fb6f4a46e335f35eec_prof);

        
        $__internal_6b555a908ebcfeef1a651e2703e1d6646ca709a52aa1d954a85cfc261fafe23b->leave($__internal_6b555a908ebcfeef1a651e2703e1d6646ca709a52aa1d954a85cfc261fafe23b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5af6de54e71caac6828142cbf1b66179d6f6f025a0b9c46855b227f9aa2cccef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af6de54e71caac6828142cbf1b66179d6f6f025a0b9c46855b227f9aa2cccef->enter($__internal_5af6de54e71caac6828142cbf1b66179d6f6f025a0b9c46855b227f9aa2cccef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_08816ecb370b6c37034cc3bea3b711700998315b86a347d1704cd3f7d154031c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08816ecb370b6c37034cc3bea3b711700998315b86a347d1704cd3f7d154031c->enter($__internal_08816ecb370b6c37034cc3bea3b711700998315b86a347d1704cd3f7d154031c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_08816ecb370b6c37034cc3bea3b711700998315b86a347d1704cd3f7d154031c->leave($__internal_08816ecb370b6c37034cc3bea3b711700998315b86a347d1704cd3f7d154031c_prof);

        
        $__internal_5af6de54e71caac6828142cbf1b66179d6f6f025a0b9c46855b227f9aa2cccef->leave($__internal_5af6de54e71caac6828142cbf1b66179d6f6f025a0b9c46855b227f9aa2cccef_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6db99c1a06afe3dc8f87cffb690132ece00c6a1f6f4740bbc3b9ea86c5e2a26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db99c1a06afe3dc8f87cffb690132ece00c6a1f6f4740bbc3b9ea86c5e2a26d->enter($__internal_6db99c1a06afe3dc8f87cffb690132ece00c6a1f6f4740bbc3b9ea86c5e2a26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_86dc0b9c84badfd9ee754be6b2ad3e8ceb534552642ec725ca0012fffc8707b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86dc0b9c84badfd9ee754be6b2ad3e8ceb534552642ec725ca0012fffc8707b7->enter($__internal_86dc0b9c84badfd9ee754be6b2ad3e8ceb534552642ec725ca0012fffc8707b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_86dc0b9c84badfd9ee754be6b2ad3e8ceb534552642ec725ca0012fffc8707b7->leave($__internal_86dc0b9c84badfd9ee754be6b2ad3e8ceb534552642ec725ca0012fffc8707b7_prof);

        
        $__internal_6db99c1a06afe3dc8f87cffb690132ece00c6a1f6f4740bbc3b9ea86c5e2a26d->leave($__internal_6db99c1a06afe3dc8f87cffb690132ece00c6a1f6f4740bbc3b9ea86c5e2a26d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d090071cc5ccad133f97af2f8343fb1f7b4bc84ca2adba0235ea42bfc9be6f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d090071cc5ccad133f97af2f8343fb1f7b4bc84ca2adba0235ea42bfc9be6f05->enter($__internal_d090071cc5ccad133f97af2f8343fb1f7b4bc84ca2adba0235ea42bfc9be6f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8077f2581552ab485cf8185eb7192f90b9d11f94dca1fd05c7031faa3666e7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8077f2581552ab485cf8185eb7192f90b9d11f94dca1fd05c7031faa3666e7e9->enter($__internal_8077f2581552ab485cf8185eb7192f90b9d11f94dca1fd05c7031faa3666e7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8077f2581552ab485cf8185eb7192f90b9d11f94dca1fd05c7031faa3666e7e9->leave($__internal_8077f2581552ab485cf8185eb7192f90b9d11f94dca1fd05c7031faa3666e7e9_prof);

        
        $__internal_d090071cc5ccad133f97af2f8343fb1f7b4bc84ca2adba0235ea42bfc9be6f05->leave($__internal_d090071cc5ccad133f97af2f8343fb1f7b4bc84ca2adba0235ea42bfc9be6f05_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
