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
        $__internal_7cc8b6f1c5db2897cae3053b688163abd4ea4aef365b163ed346816a12592ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc8b6f1c5db2897cae3053b688163abd4ea4aef365b163ed346816a12592ea1->enter($__internal_7cc8b6f1c5db2897cae3053b688163abd4ea4aef365b163ed346816a12592ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_1d5110e227b6d68d31d37873651eda55036711c1f5f7f2db0e0bc6baa40f089f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5110e227b6d68d31d37873651eda55036711c1f5f7f2db0e0bc6baa40f089f->enter($__internal_1d5110e227b6d68d31d37873651eda55036711c1f5f7f2db0e0bc6baa40f089f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cc8b6f1c5db2897cae3053b688163abd4ea4aef365b163ed346816a12592ea1->leave($__internal_7cc8b6f1c5db2897cae3053b688163abd4ea4aef365b163ed346816a12592ea1_prof);

        
        $__internal_1d5110e227b6d68d31d37873651eda55036711c1f5f7f2db0e0bc6baa40f089f->leave($__internal_1d5110e227b6d68d31d37873651eda55036711c1f5f7f2db0e0bc6baa40f089f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_386fc7c988696d476ecf96496b089fdc6adeca2c0f51b9ed04ac1bfd450b4aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386fc7c988696d476ecf96496b089fdc6adeca2c0f51b9ed04ac1bfd450b4aed->enter($__internal_386fc7c988696d476ecf96496b089fdc6adeca2c0f51b9ed04ac1bfd450b4aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3160d603d417f1b436944a9e928323ad959193b55e26e4c6456417cfafb166fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3160d603d417f1b436944a9e928323ad959193b55e26e4c6456417cfafb166fd->enter($__internal_3160d603d417f1b436944a9e928323ad959193b55e26e4c6456417cfafb166fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_3160d603d417f1b436944a9e928323ad959193b55e26e4c6456417cfafb166fd->leave($__internal_3160d603d417f1b436944a9e928323ad959193b55e26e4c6456417cfafb166fd_prof);

        
        $__internal_386fc7c988696d476ecf96496b089fdc6adeca2c0f51b9ed04ac1bfd450b4aed->leave($__internal_386fc7c988696d476ecf96496b089fdc6adeca2c0f51b9ed04ac1bfd450b4aed_prof);

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
