<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_672ce66ce36bb0fec0d531aa70f4e572e23ff97d3b5706b3f5721e1fe4edaafb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_dc4cac74eff01f859b7810fb4c7a7fdc5d6274674885fa5dfcdb5cb7fb804156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4cac74eff01f859b7810fb4c7a7fdc5d6274674885fa5dfcdb5cb7fb804156->enter($__internal_dc4cac74eff01f859b7810fb4c7a7fdc5d6274674885fa5dfcdb5cb7fb804156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_79f9136ad59f6eb61ef4f6d21e8561d009c77944a4d533cf5684fddbe3c0cc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f9136ad59f6eb61ef4f6d21e8561d009c77944a4d533cf5684fddbe3c0cc9a->enter($__internal_79f9136ad59f6eb61ef4f6d21e8561d009c77944a4d533cf5684fddbe3c0cc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc4cac74eff01f859b7810fb4c7a7fdc5d6274674885fa5dfcdb5cb7fb804156->leave($__internal_dc4cac74eff01f859b7810fb4c7a7fdc5d6274674885fa5dfcdb5cb7fb804156_prof);

        
        $__internal_79f9136ad59f6eb61ef4f6d21e8561d009c77944a4d533cf5684fddbe3c0cc9a->leave($__internal_79f9136ad59f6eb61ef4f6d21e8561d009c77944a4d533cf5684fddbe3c0cc9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0b47c1d87125c5d31bbb5f3be9bf3735686b590d47a07a8d843df8c2634056e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b47c1d87125c5d31bbb5f3be9bf3735686b590d47a07a8d843df8c2634056e->enter($__internal_d0b47c1d87125c5d31bbb5f3be9bf3735686b590d47a07a8d843df8c2634056e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_50bbbea0b272a1caea5392dab5851775f5d0b2f443e526ffe295e1edb85be498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bbbea0b272a1caea5392dab5851775f5d0b2f443e526ffe295e1edb85be498->enter($__internal_50bbbea0b272a1caea5392dab5851775f5d0b2f443e526ffe295e1edb85be498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_50bbbea0b272a1caea5392dab5851775f5d0b2f443e526ffe295e1edb85be498->leave($__internal_50bbbea0b272a1caea5392dab5851775f5d0b2f443e526ffe295e1edb85be498_prof);

        
        $__internal_d0b47c1d87125c5d31bbb5f3be9bf3735686b590d47a07a8d843df8c2634056e->leave($__internal_d0b47c1d87125c5d31bbb5f3be9bf3735686b590d47a07a8d843df8c2634056e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
