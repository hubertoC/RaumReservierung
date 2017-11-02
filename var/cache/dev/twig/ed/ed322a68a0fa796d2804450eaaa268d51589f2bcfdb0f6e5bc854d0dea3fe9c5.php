<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_81f4f9786c986438eed02a815145f5888175182f7f378b27aa524f263d7b89f9 extends Twig_Template
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
        $__internal_7579bc92edbf65dfdf56876ee8383e081313ae46b28ba772a1db8305841926bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7579bc92edbf65dfdf56876ee8383e081313ae46b28ba772a1db8305841926bf->enter($__internal_7579bc92edbf65dfdf56876ee8383e081313ae46b28ba772a1db8305841926bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d26fe6bcb01333019d5736f45934378ace1a90e892bba8a59c1e948c06478e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26fe6bcb01333019d5736f45934378ace1a90e892bba8a59c1e948c06478e3c->enter($__internal_d26fe6bcb01333019d5736f45934378ace1a90e892bba8a59c1e948c06478e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7579bc92edbf65dfdf56876ee8383e081313ae46b28ba772a1db8305841926bf->leave($__internal_7579bc92edbf65dfdf56876ee8383e081313ae46b28ba772a1db8305841926bf_prof);

        
        $__internal_d26fe6bcb01333019d5736f45934378ace1a90e892bba8a59c1e948c06478e3c->leave($__internal_d26fe6bcb01333019d5736f45934378ace1a90e892bba8a59c1e948c06478e3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
