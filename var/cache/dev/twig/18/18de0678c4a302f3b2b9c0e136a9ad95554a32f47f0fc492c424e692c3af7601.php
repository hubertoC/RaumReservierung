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
        $__internal_855c586eaa1dc46b004c6688801f1293c888f8495fed03511178e9c976d64503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855c586eaa1dc46b004c6688801f1293c888f8495fed03511178e9c976d64503->enter($__internal_855c586eaa1dc46b004c6688801f1293c888f8495fed03511178e9c976d64503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_61353d0356e45548b5f8b5eadbccd0126c4edf2398470dc6d480c7dcc7437258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61353d0356e45548b5f8b5eadbccd0126c4edf2398470dc6d480c7dcc7437258->enter($__internal_61353d0356e45548b5f8b5eadbccd0126c4edf2398470dc6d480c7dcc7437258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_855c586eaa1dc46b004c6688801f1293c888f8495fed03511178e9c976d64503->leave($__internal_855c586eaa1dc46b004c6688801f1293c888f8495fed03511178e9c976d64503_prof);

        
        $__internal_61353d0356e45548b5f8b5eadbccd0126c4edf2398470dc6d480c7dcc7437258->leave($__internal_61353d0356e45548b5f8b5eadbccd0126c4edf2398470dc6d480c7dcc7437258_prof);

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
