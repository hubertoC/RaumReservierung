<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_aae31445689fc8ee557e24c1db5d7e13adda4833200a109b8c3c25fadf032fa3 extends Twig_Template
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
        $__internal_8e5a7be11cdbf06a255f7b3b36747639bf6179f8cfce83e72ffcf34c08b5ba1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5a7be11cdbf06a255f7b3b36747639bf6179f8cfce83e72ffcf34c08b5ba1a->enter($__internal_8e5a7be11cdbf06a255f7b3b36747639bf6179f8cfce83e72ffcf34c08b5ba1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_aaf2e54d480f672aacd26002f87869c143a5aadeebed78e95a3c4f193d54bf22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf2e54d480f672aacd26002f87869c143a5aadeebed78e95a3c4f193d54bf22->enter($__internal_aaf2e54d480f672aacd26002f87869c143a5aadeebed78e95a3c4f193d54bf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8e5a7be11cdbf06a255f7b3b36747639bf6179f8cfce83e72ffcf34c08b5ba1a->leave($__internal_8e5a7be11cdbf06a255f7b3b36747639bf6179f8cfce83e72ffcf34c08b5ba1a_prof);

        
        $__internal_aaf2e54d480f672aacd26002f87869c143a5aadeebed78e95a3c4f193d54bf22->leave($__internal_aaf2e54d480f672aacd26002f87869c143a5aadeebed78e95a3c4f193d54bf22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
