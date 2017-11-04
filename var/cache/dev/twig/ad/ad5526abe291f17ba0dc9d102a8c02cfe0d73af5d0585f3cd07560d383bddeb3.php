<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a979395d400e22d50ef680b2077d70795445f94a943fb6e9fe6d9c90d6d797ab extends Twig_Template
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
        $__internal_7ddf6c90681f69fd1f90390388e349a2db01d925a85addfa07660610ad70529b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ddf6c90681f69fd1f90390388e349a2db01d925a85addfa07660610ad70529b->enter($__internal_7ddf6c90681f69fd1f90390388e349a2db01d925a85addfa07660610ad70529b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_107b32f6550fc7f558d828f98e68675addbbd6b41bb47b869d8ef6b6c29760be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107b32f6550fc7f558d828f98e68675addbbd6b41bb47b869d8ef6b6c29760be->enter($__internal_107b32f6550fc7f558d828f98e68675addbbd6b41bb47b869d8ef6b6c29760be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7ddf6c90681f69fd1f90390388e349a2db01d925a85addfa07660610ad70529b->leave($__internal_7ddf6c90681f69fd1f90390388e349a2db01d925a85addfa07660610ad70529b_prof);

        
        $__internal_107b32f6550fc7f558d828f98e68675addbbd6b41bb47b869d8ef6b6c29760be->leave($__internal_107b32f6550fc7f558d828f98e68675addbbd6b41bb47b869d8ef6b6c29760be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
