<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_2b672c2c84e269772b29e207fc5accf16e335f13e9f32527afd92dce0d34bca0 extends Twig_Template
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
        $__internal_9b1b4fdc17a6b9e36474b45f30c045c6b55398de776edb751d80d6486289e0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b1b4fdc17a6b9e36474b45f30c045c6b55398de776edb751d80d6486289e0b8->enter($__internal_9b1b4fdc17a6b9e36474b45f30c045c6b55398de776edb751d80d6486289e0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_1fdc52a7046599abb52b3479bf40c2013c53b3fe796d0da3144761f11d122d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdc52a7046599abb52b3479bf40c2013c53b3fe796d0da3144761f11d122d8a->enter($__internal_1fdc52a7046599abb52b3479bf40c2013c53b3fe796d0da3144761f11d122d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9b1b4fdc17a6b9e36474b45f30c045c6b55398de776edb751d80d6486289e0b8->leave($__internal_9b1b4fdc17a6b9e36474b45f30c045c6b55398de776edb751d80d6486289e0b8_prof);

        
        $__internal_1fdc52a7046599abb52b3479bf40c2013c53b3fe796d0da3144761f11d122d8a->leave($__internal_1fdc52a7046599abb52b3479bf40c2013c53b3fe796d0da3144761f11d122d8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
