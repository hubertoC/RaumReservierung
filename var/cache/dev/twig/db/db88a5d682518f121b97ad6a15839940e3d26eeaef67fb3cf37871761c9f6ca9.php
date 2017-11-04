<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a058ddd36d5bea341b4bfdadb7ed68e4fed77002676b1cce14f1ce77e4056a43 extends Twig_Template
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
        $__internal_7ff1205e3b3c6f10c2bdadae80b692fae39c4ede6d941dc97c4b0af40d4260c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff1205e3b3c6f10c2bdadae80b692fae39c4ede6d941dc97c4b0af40d4260c3->enter($__internal_7ff1205e3b3c6f10c2bdadae80b692fae39c4ede6d941dc97c4b0af40d4260c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_43f29df195840848dc80664d672c7b9f9f9307993d3c532d0e5a30b54592b045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f29df195840848dc80664d672c7b9f9f9307993d3c532d0e5a30b54592b045->enter($__internal_43f29df195840848dc80664d672c7b9f9f9307993d3c532d0e5a30b54592b045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7ff1205e3b3c6f10c2bdadae80b692fae39c4ede6d941dc97c4b0af40d4260c3->leave($__internal_7ff1205e3b3c6f10c2bdadae80b692fae39c4ede6d941dc97c4b0af40d4260c3_prof);

        
        $__internal_43f29df195840848dc80664d672c7b9f9f9307993d3c532d0e5a30b54592b045->leave($__internal_43f29df195840848dc80664d672c7b9f9f9307993d3c532d0e5a30b54592b045_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
