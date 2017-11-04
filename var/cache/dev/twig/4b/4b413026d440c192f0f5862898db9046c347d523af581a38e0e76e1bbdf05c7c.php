<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_813d4af6fdc4657ae1a2fec3ece4055a52cd5f31c2a356f7d6ad8c1fe924bc1f extends Twig_Template
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
        $__internal_1d842599f36160d35773b0a4c4e8260589fe68b9611ad57a2d49bec9b2fd4115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d842599f36160d35773b0a4c4e8260589fe68b9611ad57a2d49bec9b2fd4115->enter($__internal_1d842599f36160d35773b0a4c4e8260589fe68b9611ad57a2d49bec9b2fd4115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_6b977c0ad2f18cf078e03ae77c6a4c8552c36fa09725955a9b801726cf6e9ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b977c0ad2f18cf078e03ae77c6a4c8552c36fa09725955a9b801726cf6e9ec1->enter($__internal_6b977c0ad2f18cf078e03ae77c6a4c8552c36fa09725955a9b801726cf6e9ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1d842599f36160d35773b0a4c4e8260589fe68b9611ad57a2d49bec9b2fd4115->leave($__internal_1d842599f36160d35773b0a4c4e8260589fe68b9611ad57a2d49bec9b2fd4115_prof);

        
        $__internal_6b977c0ad2f18cf078e03ae77c6a4c8552c36fa09725955a9b801726cf6e9ec1->leave($__internal_6b977c0ad2f18cf078e03ae77c6a4c8552c36fa09725955a9b801726cf6e9ec1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
