<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b1cee4bc8b5c0942487186f3c65ad3fe4ad7637b767389ac123d14af27d86e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_757421e0b4b7ec9a895afd552a353caa0afad4aefe7c5cd5514dfe118193133f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757421e0b4b7ec9a895afd552a353caa0afad4aefe7c5cd5514dfe118193133f->enter($__internal_757421e0b4b7ec9a895afd552a353caa0afad4aefe7c5cd5514dfe118193133f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_6200485d59dea104cd13f799db847ac1193a7ff01423194cb3560ed4de2e9614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6200485d59dea104cd13f799db847ac1193a7ff01423194cb3560ed4de2e9614->enter($__internal_6200485d59dea104cd13f799db847ac1193a7ff01423194cb3560ed4de2e9614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_757421e0b4b7ec9a895afd552a353caa0afad4aefe7c5cd5514dfe118193133f->leave($__internal_757421e0b4b7ec9a895afd552a353caa0afad4aefe7c5cd5514dfe118193133f_prof);

        
        $__internal_6200485d59dea104cd13f799db847ac1193a7ff01423194cb3560ed4de2e9614->leave($__internal_6200485d59dea104cd13f799db847ac1193a7ff01423194cb3560ed4de2e9614_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ec936813e7da454c7923091d0ae0490c7851c87322b73ceb65813c29b0a7f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec936813e7da454c7923091d0ae0490c7851c87322b73ceb65813c29b0a7f0f->enter($__internal_6ec936813e7da454c7923091d0ae0490c7851c87322b73ceb65813c29b0a7f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_395bc525f261131ad5d7847f8a24cb7f070594f303226beace8cda74138b0fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395bc525f261131ad5d7847f8a24cb7f070594f303226beace8cda74138b0fc4->enter($__internal_395bc525f261131ad5d7847f8a24cb7f070594f303226beace8cda74138b0fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_395bc525f261131ad5d7847f8a24cb7f070594f303226beace8cda74138b0fc4->leave($__internal_395bc525f261131ad5d7847f8a24cb7f070594f303226beace8cda74138b0fc4_prof);

        
        $__internal_6ec936813e7da454c7923091d0ae0490c7851c87322b73ceb65813c29b0a7f0f->leave($__internal_6ec936813e7da454c7923091d0ae0490c7851c87322b73ceb65813c29b0a7f0f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
