<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f0d4b89f2b2a6a3e4ae13e51b38fb6bafa54d0b64da4acb72b89c1cc0dffe80f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_5cf1f8c01b5f0ca5ab9297db9f86f50f9327412c19e62184d2d2777c0b6a3742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf1f8c01b5f0ca5ab9297db9f86f50f9327412c19e62184d2d2777c0b6a3742->enter($__internal_5cf1f8c01b5f0ca5ab9297db9f86f50f9327412c19e62184d2d2777c0b6a3742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c4e29b4622d074314a3806c1505e98065d4f064da520b95f0d0845ebec3709b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e29b4622d074314a3806c1505e98065d4f064da520b95f0d0845ebec3709b2->enter($__internal_c4e29b4622d074314a3806c1505e98065d4f064da520b95f0d0845ebec3709b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cf1f8c01b5f0ca5ab9297db9f86f50f9327412c19e62184d2d2777c0b6a3742->leave($__internal_5cf1f8c01b5f0ca5ab9297db9f86f50f9327412c19e62184d2d2777c0b6a3742_prof);

        
        $__internal_c4e29b4622d074314a3806c1505e98065d4f064da520b95f0d0845ebec3709b2->leave($__internal_c4e29b4622d074314a3806c1505e98065d4f064da520b95f0d0845ebec3709b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e81cd4f09b1c59cd9619184b98e0b20466747d1da28d86c4844e467f05e351b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e81cd4f09b1c59cd9619184b98e0b20466747d1da28d86c4844e467f05e351b->enter($__internal_8e81cd4f09b1c59cd9619184b98e0b20466747d1da28d86c4844e467f05e351b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d336060a2d7ee76ab3d237284e109288a7fd4ba12f74b595c60b29fe11a8f358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d336060a2d7ee76ab3d237284e109288a7fd4ba12f74b595c60b29fe11a8f358->enter($__internal_d336060a2d7ee76ab3d237284e109288a7fd4ba12f74b595c60b29fe11a8f358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d336060a2d7ee76ab3d237284e109288a7fd4ba12f74b595c60b29fe11a8f358->leave($__internal_d336060a2d7ee76ab3d237284e109288a7fd4ba12f74b595c60b29fe11a8f358_prof);

        
        $__internal_8e81cd4f09b1c59cd9619184b98e0b20466747d1da28d86c4844e467f05e351b->leave($__internal_8e81cd4f09b1c59cd9619184b98e0b20466747d1da28d86c4844e467f05e351b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
