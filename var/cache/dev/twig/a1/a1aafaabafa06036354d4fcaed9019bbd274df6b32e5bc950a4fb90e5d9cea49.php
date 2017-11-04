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
        $__internal_5808f8981d0d479c823052ef9bf481f94e237a54cbf8d76a8ccd3bc9abc881ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5808f8981d0d479c823052ef9bf481f94e237a54cbf8d76a8ccd3bc9abc881ff->enter($__internal_5808f8981d0d479c823052ef9bf481f94e237a54cbf8d76a8ccd3bc9abc881ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_83743cfd86315753db3e2931493e614a4d9ec62f1297b57331a3b13c5d492bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83743cfd86315753db3e2931493e614a4d9ec62f1297b57331a3b13c5d492bed->enter($__internal_83743cfd86315753db3e2931493e614a4d9ec62f1297b57331a3b13c5d492bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5808f8981d0d479c823052ef9bf481f94e237a54cbf8d76a8ccd3bc9abc881ff->leave($__internal_5808f8981d0d479c823052ef9bf481f94e237a54cbf8d76a8ccd3bc9abc881ff_prof);

        
        $__internal_83743cfd86315753db3e2931493e614a4d9ec62f1297b57331a3b13c5d492bed->leave($__internal_83743cfd86315753db3e2931493e614a4d9ec62f1297b57331a3b13c5d492bed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0fe11e7eeaff3cd53f75bceec6fb939b63d82438390cd93f13ecd927d3c2f5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe11e7eeaff3cd53f75bceec6fb939b63d82438390cd93f13ecd927d3c2f5b4->enter($__internal_0fe11e7eeaff3cd53f75bceec6fb939b63d82438390cd93f13ecd927d3c2f5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0e5b51374b03f8a112ef55b9747b62ded4f777ce479423d57f3c252a9ef7bc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5b51374b03f8a112ef55b9747b62ded4f777ce479423d57f3c252a9ef7bc20->enter($__internal_0e5b51374b03f8a112ef55b9747b62ded4f777ce479423d57f3c252a9ef7bc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0e5b51374b03f8a112ef55b9747b62ded4f777ce479423d57f3c252a9ef7bc20->leave($__internal_0e5b51374b03f8a112ef55b9747b62ded4f777ce479423d57f3c252a9ef7bc20_prof);

        
        $__internal_0fe11e7eeaff3cd53f75bceec6fb939b63d82438390cd93f13ecd927d3c2f5b4->leave($__internal_0fe11e7eeaff3cd53f75bceec6fb939b63d82438390cd93f13ecd927d3c2f5b4_prof);

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
