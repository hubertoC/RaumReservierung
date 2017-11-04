<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_6c642e6621bcefecfaaa4bf57d60c4db8d4b0f358f00b55ffc2a8fcc2bfb9962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4550035aaa4c4488b1fff58ea046990080f8ee80f2a233235e61d4c9bcee20e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4550035aaa4c4488b1fff58ea046990080f8ee80f2a233235e61d4c9bcee20e8->enter($__internal_4550035aaa4c4488b1fff58ea046990080f8ee80f2a233235e61d4c9bcee20e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_24508c7c99ce0db31953ebd4f2d5019da00c4c73849ad78947ba80208779363c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24508c7c99ce0db31953ebd4f2d5019da00c4c73849ad78947ba80208779363c->enter($__internal_24508c7c99ce0db31953ebd4f2d5019da00c4c73849ad78947ba80208779363c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4550035aaa4c4488b1fff58ea046990080f8ee80f2a233235e61d4c9bcee20e8->leave($__internal_4550035aaa4c4488b1fff58ea046990080f8ee80f2a233235e61d4c9bcee20e8_prof);

        
        $__internal_24508c7c99ce0db31953ebd4f2d5019da00c4c73849ad78947ba80208779363c->leave($__internal_24508c7c99ce0db31953ebd4f2d5019da00c4c73849ad78947ba80208779363c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
