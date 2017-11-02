<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_dc857ce0eb360e6badbc1c69e03716cfbc58bdbd2bd38a4e3a2f0541a83e84f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0867b9e7e2a0f22de593907426442fb80994792b5b62d9517c0d21185032ca0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0867b9e7e2a0f22de593907426442fb80994792b5b62d9517c0d21185032ca0b->enter($__internal_0867b9e7e2a0f22de593907426442fb80994792b5b62d9517c0d21185032ca0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_40c62177a8f30cf3f32e602b5fbf812b30f497505b2b6a5380f155cfeec8d429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c62177a8f30cf3f32e602b5fbf812b30f497505b2b6a5380f155cfeec8d429->enter($__internal_40c62177a8f30cf3f32e602b5fbf812b30f497505b2b6a5380f155cfeec8d429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0867b9e7e2a0f22de593907426442fb80994792b5b62d9517c0d21185032ca0b->leave($__internal_0867b9e7e2a0f22de593907426442fb80994792b5b62d9517c0d21185032ca0b_prof);

        
        $__internal_40c62177a8f30cf3f32e602b5fbf812b30f497505b2b6a5380f155cfeec8d429->leave($__internal_40c62177a8f30cf3f32e602b5fbf812b30f497505b2b6a5380f155cfeec8d429_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96d1a09f86938a9d062fe55b6aea66b0dd776ceaeb6fc4df8ac7be3572c5d015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d1a09f86938a9d062fe55b6aea66b0dd776ceaeb6fc4df8ac7be3572c5d015->enter($__internal_96d1a09f86938a9d062fe55b6aea66b0dd776ceaeb6fc4df8ac7be3572c5d015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8cbf87a05abeaafee1ad5475aca2168fff5600167788554f908259d079bfbf04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cbf87a05abeaafee1ad5475aca2168fff5600167788554f908259d079bfbf04->enter($__internal_8cbf87a05abeaafee1ad5475aca2168fff5600167788554f908259d079bfbf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8cbf87a05abeaafee1ad5475aca2168fff5600167788554f908259d079bfbf04->leave($__internal_8cbf87a05abeaafee1ad5475aca2168fff5600167788554f908259d079bfbf04_prof);

        
        $__internal_96d1a09f86938a9d062fe55b6aea66b0dd776ceaeb6fc4df8ac7be3572c5d015->leave($__internal_96d1a09f86938a9d062fe55b6aea66b0dd776ceaeb6fc4df8ac7be3572c5d015_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
