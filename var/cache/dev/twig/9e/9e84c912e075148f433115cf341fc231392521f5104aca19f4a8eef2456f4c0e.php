<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_6eacc0aae9acfac5a48013bcc1b1b67ef20e84fbda1fe446bf5e155a5b07145d extends Twig_Template
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
        $__internal_d31c03d04f713f67fc83d4f069913722f824171bd597f2230ebd25d1dcbd774c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d31c03d04f713f67fc83d4f069913722f824171bd597f2230ebd25d1dcbd774c->enter($__internal_d31c03d04f713f67fc83d4f069913722f824171bd597f2230ebd25d1dcbd774c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6d9b5d9ce14780a740d65de41e319649a9516d08abe5a83c2c8c251d9550c9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9b5d9ce14780a740d65de41e319649a9516d08abe5a83c2c8c251d9550c9ef->enter($__internal_6d9b5d9ce14780a740d65de41e319649a9516d08abe5a83c2c8c251d9550c9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d31c03d04f713f67fc83d4f069913722f824171bd597f2230ebd25d1dcbd774c->leave($__internal_d31c03d04f713f67fc83d4f069913722f824171bd597f2230ebd25d1dcbd774c_prof);

        
        $__internal_6d9b5d9ce14780a740d65de41e319649a9516d08abe5a83c2c8c251d9550c9ef->leave($__internal_6d9b5d9ce14780a740d65de41e319649a9516d08abe5a83c2c8c251d9550c9ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
