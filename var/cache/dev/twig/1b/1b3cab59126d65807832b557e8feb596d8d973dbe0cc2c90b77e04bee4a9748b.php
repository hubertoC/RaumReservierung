<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d7fbf7c6a0dfac30509226a0b6d2aa6472ab488d619d2064c569dc9bedb43930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_a63beab47100cdfa8e0c94c245f14d310ce585a7669c282e85a6eb3d429d0bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63beab47100cdfa8e0c94c245f14d310ce585a7669c282e85a6eb3d429d0bb6->enter($__internal_a63beab47100cdfa8e0c94c245f14d310ce585a7669c282e85a6eb3d429d0bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_f19915d14695bae4da99737bbf8fb91b00c6e5fccee42da21a83081e58b9f233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19915d14695bae4da99737bbf8fb91b00c6e5fccee42da21a83081e58b9f233->enter($__internal_f19915d14695bae4da99737bbf8fb91b00c6e5fccee42da21a83081e58b9f233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a63beab47100cdfa8e0c94c245f14d310ce585a7669c282e85a6eb3d429d0bb6->leave($__internal_a63beab47100cdfa8e0c94c245f14d310ce585a7669c282e85a6eb3d429d0bb6_prof);

        
        $__internal_f19915d14695bae4da99737bbf8fb91b00c6e5fccee42da21a83081e58b9f233->leave($__internal_f19915d14695bae4da99737bbf8fb91b00c6e5fccee42da21a83081e58b9f233_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72b327c65258c2e3a37ecf42836ecb8d2e73ef60345dadd7761c1faa5fc06bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b327c65258c2e3a37ecf42836ecb8d2e73ef60345dadd7761c1faa5fc06bf5->enter($__internal_72b327c65258c2e3a37ecf42836ecb8d2e73ef60345dadd7761c1faa5fc06bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_626ceece53441013ad7374e5d0617730a6afcd9feb1668cefae0808e3091293d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626ceece53441013ad7374e5d0617730a6afcd9feb1668cefae0808e3091293d->enter($__internal_626ceece53441013ad7374e5d0617730a6afcd9feb1668cefae0808e3091293d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_626ceece53441013ad7374e5d0617730a6afcd9feb1668cefae0808e3091293d->leave($__internal_626ceece53441013ad7374e5d0617730a6afcd9feb1668cefae0808e3091293d_prof);

        
        $__internal_72b327c65258c2e3a37ecf42836ecb8d2e73ef60345dadd7761c1faa5fc06bf5->leave($__internal_72b327c65258c2e3a37ecf42836ecb8d2e73ef60345dadd7761c1faa5fc06bf5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
