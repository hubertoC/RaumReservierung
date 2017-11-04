<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a1d264c351596849d6761ebfa1b0363bd8a548da0f70fd593f321874c5770a81 extends Twig_Template
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
        $__internal_0848c3aff8326472aa91a8a8862ca94cc5d19300e54c2619c49c8ffbcd0f5574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0848c3aff8326472aa91a8a8862ca94cc5d19300e54c2619c49c8ffbcd0f5574->enter($__internal_0848c3aff8326472aa91a8a8862ca94cc5d19300e54c2619c49c8ffbcd0f5574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d2301dc8305df762c8cafb76b8c194a2b590f7365b4af1310bcea6e732b17eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2301dc8305df762c8cafb76b8c194a2b590f7365b4af1310bcea6e732b17eee->enter($__internal_d2301dc8305df762c8cafb76b8c194a2b590f7365b4af1310bcea6e732b17eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0848c3aff8326472aa91a8a8862ca94cc5d19300e54c2619c49c8ffbcd0f5574->leave($__internal_0848c3aff8326472aa91a8a8862ca94cc5d19300e54c2619c49c8ffbcd0f5574_prof);

        
        $__internal_d2301dc8305df762c8cafb76b8c194a2b590f7365b4af1310bcea6e732b17eee->leave($__internal_d2301dc8305df762c8cafb76b8c194a2b590f7365b4af1310bcea6e732b17eee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
