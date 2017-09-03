<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b7441d40556439ae44c86cf370b3fb71b670e2902210fe00f869841f173cba88 extends Twig_Template
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
        $__internal_36d50272d5ef2230b5aa1d1ca276003a7d9af56c62a731413b73fe97624a707f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d50272d5ef2230b5aa1d1ca276003a7d9af56c62a731413b73fe97624a707f->enter($__internal_36d50272d5ef2230b5aa1d1ca276003a7d9af56c62a731413b73fe97624a707f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d43ede2d7e56b72c6218e0a89236b97280289f79fd6f8e0fd6d11277c7aaa692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43ede2d7e56b72c6218e0a89236b97280289f79fd6f8e0fd6d11277c7aaa692->enter($__internal_d43ede2d7e56b72c6218e0a89236b97280289f79fd6f8e0fd6d11277c7aaa692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_36d50272d5ef2230b5aa1d1ca276003a7d9af56c62a731413b73fe97624a707f->leave($__internal_36d50272d5ef2230b5aa1d1ca276003a7d9af56c62a731413b73fe97624a707f_prof);

        
        $__internal_d43ede2d7e56b72c6218e0a89236b97280289f79fd6f8e0fd6d11277c7aaa692->leave($__internal_d43ede2d7e56b72c6218e0a89236b97280289f79fd6f8e0fd6d11277c7aaa692_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
