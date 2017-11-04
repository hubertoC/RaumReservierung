<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bb4249dc71239c0410b8b8cee29b4ca713f1cd099a70b93709c74f909653baf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19be06c1a772944977356926d8efb52abe98fecd9aa31efd422280e5b1df9743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19be06c1a772944977356926d8efb52abe98fecd9aa31efd422280e5b1df9743->enter($__internal_19be06c1a772944977356926d8efb52abe98fecd9aa31efd422280e5b1df9743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b741888ac6374e610e787e288b5b6d76ad5cc063afaee294e9b6e9aaae3635f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b741888ac6374e610e787e288b5b6d76ad5cc063afaee294e9b6e9aaae3635f6->enter($__internal_b741888ac6374e610e787e288b5b6d76ad5cc063afaee294e9b6e9aaae3635f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_19be06c1a772944977356926d8efb52abe98fecd9aa31efd422280e5b1df9743->leave($__internal_19be06c1a772944977356926d8efb52abe98fecd9aa31efd422280e5b1df9743_prof);

        
        $__internal_b741888ac6374e610e787e288b5b6d76ad5cc063afaee294e9b6e9aaae3635f6->leave($__internal_b741888ac6374e610e787e288b5b6d76ad5cc063afaee294e9b6e9aaae3635f6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c171802d671bc10def4fa35ff8f1aeb69e33bc9ed7245db54d0d225b18941a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c171802d671bc10def4fa35ff8f1aeb69e33bc9ed7245db54d0d225b18941a8->enter($__internal_3c171802d671bc10def4fa35ff8f1aeb69e33bc9ed7245db54d0d225b18941a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_922ae6f2a73f70e2ba7f4b3798ddc7577c6f8eef25ec413609d2b5abbca320aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922ae6f2a73f70e2ba7f4b3798ddc7577c6f8eef25ec413609d2b5abbca320aa->enter($__internal_922ae6f2a73f70e2ba7f4b3798ddc7577c6f8eef25ec413609d2b5abbca320aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_922ae6f2a73f70e2ba7f4b3798ddc7577c6f8eef25ec413609d2b5abbca320aa->leave($__internal_922ae6f2a73f70e2ba7f4b3798ddc7577c6f8eef25ec413609d2b5abbca320aa_prof);

        
        $__internal_3c171802d671bc10def4fa35ff8f1aeb69e33bc9ed7245db54d0d225b18941a8->leave($__internal_3c171802d671bc10def4fa35ff8f1aeb69e33bc9ed7245db54d0d225b18941a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
