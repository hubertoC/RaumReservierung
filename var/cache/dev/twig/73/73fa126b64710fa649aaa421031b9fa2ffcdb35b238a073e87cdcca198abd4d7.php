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
        $__internal_0bf8d4b0852bfe4da5e8a77e4e55c36ea9039b262afadc1622f051b6082db713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf8d4b0852bfe4da5e8a77e4e55c36ea9039b262afadc1622f051b6082db713->enter($__internal_0bf8d4b0852bfe4da5e8a77e4e55c36ea9039b262afadc1622f051b6082db713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_8c5501ef454edaf9afb7944551f9e883df8c47a96c3801da22df99ce72519df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5501ef454edaf9afb7944551f9e883df8c47a96c3801da22df99ce72519df8->enter($__internal_8c5501ef454edaf9afb7944551f9e883df8c47a96c3801da22df99ce72519df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0bf8d4b0852bfe4da5e8a77e4e55c36ea9039b262afadc1622f051b6082db713->leave($__internal_0bf8d4b0852bfe4da5e8a77e4e55c36ea9039b262afadc1622f051b6082db713_prof);

        
        $__internal_8c5501ef454edaf9afb7944551f9e883df8c47a96c3801da22df99ce72519df8->leave($__internal_8c5501ef454edaf9afb7944551f9e883df8c47a96c3801da22df99ce72519df8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a0aa1cb5c2d5b9e40e2d2b93735aa5858cdb8b4da9d5de238c520200bc0d4e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0aa1cb5c2d5b9e40e2d2b93735aa5858cdb8b4da9d5de238c520200bc0d4e23->enter($__internal_a0aa1cb5c2d5b9e40e2d2b93735aa5858cdb8b4da9d5de238c520200bc0d4e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b19aabd7ca3fc279d718650cdf9c390389fb5b838acc329dc154937773a67914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19aabd7ca3fc279d718650cdf9c390389fb5b838acc329dc154937773a67914->enter($__internal_b19aabd7ca3fc279d718650cdf9c390389fb5b838acc329dc154937773a67914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b19aabd7ca3fc279d718650cdf9c390389fb5b838acc329dc154937773a67914->leave($__internal_b19aabd7ca3fc279d718650cdf9c390389fb5b838acc329dc154937773a67914_prof);

        
        $__internal_a0aa1cb5c2d5b9e40e2d2b93735aa5858cdb8b4da9d5de238c520200bc0d4e23->leave($__internal_a0aa1cb5c2d5b9e40e2d2b93735aa5858cdb8b4da9d5de238c520200bc0d4e23_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_184be8d0588fe4618859e1689f8fad62b605ffbc0090477663614ecb40de64d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184be8d0588fe4618859e1689f8fad62b605ffbc0090477663614ecb40de64d0->enter($__internal_184be8d0588fe4618859e1689f8fad62b605ffbc0090477663614ecb40de64d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3988f7ecd53f516f8fd2a42975ecb0d1f77eac7205c1a6ecb442c602e0e5a5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3988f7ecd53f516f8fd2a42975ecb0d1f77eac7205c1a6ecb442c602e0e5a5ca->enter($__internal_3988f7ecd53f516f8fd2a42975ecb0d1f77eac7205c1a6ecb442c602e0e5a5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3988f7ecd53f516f8fd2a42975ecb0d1f77eac7205c1a6ecb442c602e0e5a5ca->leave($__internal_3988f7ecd53f516f8fd2a42975ecb0d1f77eac7205c1a6ecb442c602e0e5a5ca_prof);

        
        $__internal_184be8d0588fe4618859e1689f8fad62b605ffbc0090477663614ecb40de64d0->leave($__internal_184be8d0588fe4618859e1689f8fad62b605ffbc0090477663614ecb40de64d0_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ab2403ed50f4eeb712e5faffbdc678f61546ea8a9d7375878b5857188c30b6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab2403ed50f4eeb712e5faffbdc678f61546ea8a9d7375878b5857188c30b6ac->enter($__internal_ab2403ed50f4eeb712e5faffbdc678f61546ea8a9d7375878b5857188c30b6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_152a7415c43e425187acf1e41bea8b082f0ba550277d65c53d7f6c0aff5e773e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152a7415c43e425187acf1e41bea8b082f0ba550277d65c53d7f6c0aff5e773e->enter($__internal_152a7415c43e425187acf1e41bea8b082f0ba550277d65c53d7f6c0aff5e773e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_152a7415c43e425187acf1e41bea8b082f0ba550277d65c53d7f6c0aff5e773e->leave($__internal_152a7415c43e425187acf1e41bea8b082f0ba550277d65c53d7f6c0aff5e773e_prof);

        
        $__internal_ab2403ed50f4eeb712e5faffbdc678f61546ea8a9d7375878b5857188c30b6ac->leave($__internal_ab2403ed50f4eeb712e5faffbdc678f61546ea8a9d7375878b5857188c30b6ac_prof);

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
