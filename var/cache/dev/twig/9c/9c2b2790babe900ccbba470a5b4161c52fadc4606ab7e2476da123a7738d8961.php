<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9c806dd7dfd15734508e5ecd857748ddff474cb3b519999cb3754602a4981050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_24563a746e3c21083922d79944d5401e55f17f4a93533259324b3599ce2074cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24563a746e3c21083922d79944d5401e55f17f4a93533259324b3599ce2074cc->enter($__internal_24563a746e3c21083922d79944d5401e55f17f4a93533259324b3599ce2074cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_1135fc7a26a61d028a2968b9b7e3cbc3165d548fc6b7f17b867da99de5ee32e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1135fc7a26a61d028a2968b9b7e3cbc3165d548fc6b7f17b867da99de5ee32e5->enter($__internal_1135fc7a26a61d028a2968b9b7e3cbc3165d548fc6b7f17b867da99de5ee32e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24563a746e3c21083922d79944d5401e55f17f4a93533259324b3599ce2074cc->leave($__internal_24563a746e3c21083922d79944d5401e55f17f4a93533259324b3599ce2074cc_prof);

        
        $__internal_1135fc7a26a61d028a2968b9b7e3cbc3165d548fc6b7f17b867da99de5ee32e5->leave($__internal_1135fc7a26a61d028a2968b9b7e3cbc3165d548fc6b7f17b867da99de5ee32e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a98e6e401dfada8dad6636221a4e6b11c54190082ab79e5a3d8ee3f763e9a953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98e6e401dfada8dad6636221a4e6b11c54190082ab79e5a3d8ee3f763e9a953->enter($__internal_a98e6e401dfada8dad6636221a4e6b11c54190082ab79e5a3d8ee3f763e9a953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_98b7e807aa0db280fb9c19a502ae388bcb501d8b523d8841c7f4377523680dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b7e807aa0db280fb9c19a502ae388bcb501d8b523d8841c7f4377523680dc0->enter($__internal_98b7e807aa0db280fb9c19a502ae388bcb501d8b523d8841c7f4377523680dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_98b7e807aa0db280fb9c19a502ae388bcb501d8b523d8841c7f4377523680dc0->leave($__internal_98b7e807aa0db280fb9c19a502ae388bcb501d8b523d8841c7f4377523680dc0_prof);

        
        $__internal_a98e6e401dfada8dad6636221a4e6b11c54190082ab79e5a3d8ee3f763e9a953->leave($__internal_a98e6e401dfada8dad6636221a4e6b11c54190082ab79e5a3d8ee3f763e9a953_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
