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
        $__internal_51b4a2980de1b33af6d20fb69ad608d18bf90efafdfbfb340782677e0b11f3e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b4a2980de1b33af6d20fb69ad608d18bf90efafdfbfb340782677e0b11f3e7->enter($__internal_51b4a2980de1b33af6d20fb69ad608d18bf90efafdfbfb340782677e0b11f3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_828893360bd230cfab707037028b0e3c8906cff29f825629113733490a1f92f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828893360bd230cfab707037028b0e3c8906cff29f825629113733490a1f92f6->enter($__internal_828893360bd230cfab707037028b0e3c8906cff29f825629113733490a1f92f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_51b4a2980de1b33af6d20fb69ad608d18bf90efafdfbfb340782677e0b11f3e7->leave($__internal_51b4a2980de1b33af6d20fb69ad608d18bf90efafdfbfb340782677e0b11f3e7_prof);

        
        $__internal_828893360bd230cfab707037028b0e3c8906cff29f825629113733490a1f92f6->leave($__internal_828893360bd230cfab707037028b0e3c8906cff29f825629113733490a1f92f6_prof);

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
