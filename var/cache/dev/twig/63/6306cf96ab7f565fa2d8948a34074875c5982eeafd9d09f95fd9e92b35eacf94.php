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
        $__internal_a763fe32113b92624f1a57ace5d91ecd3462fabd76e6829a9e13a019d6326c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a763fe32113b92624f1a57ace5d91ecd3462fabd76e6829a9e13a019d6326c61->enter($__internal_a763fe32113b92624f1a57ace5d91ecd3462fabd76e6829a9e13a019d6326c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_8fa42d62c80704cb081a925699936adf3dedbe17ef89dc2568c52f28ed23473e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa42d62c80704cb081a925699936adf3dedbe17ef89dc2568c52f28ed23473e->enter($__internal_8fa42d62c80704cb081a925699936adf3dedbe17ef89dc2568c52f28ed23473e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_a763fe32113b92624f1a57ace5d91ecd3462fabd76e6829a9e13a019d6326c61->leave($__internal_a763fe32113b92624f1a57ace5d91ecd3462fabd76e6829a9e13a019d6326c61_prof);

        
        $__internal_8fa42d62c80704cb081a925699936adf3dedbe17ef89dc2568c52f28ed23473e->leave($__internal_8fa42d62c80704cb081a925699936adf3dedbe17ef89dc2568c52f28ed23473e_prof);

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
