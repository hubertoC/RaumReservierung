<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_207b7ef03fcc2ad20f6800f9d8566566c59b5353e3cc4511ea2d835d4a0bffba extends Twig_Template
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
        $__internal_e45c9814b00cd3683d2b3f2ce4af88fc1c6205c6b927613778ee2258aea0707c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45c9814b00cd3683d2b3f2ce4af88fc1c6205c6b927613778ee2258aea0707c->enter($__internal_e45c9814b00cd3683d2b3f2ce4af88fc1c6205c6b927613778ee2258aea0707c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_1f6f9966f3c738020129cb4ac5105d8fb786ac0aee91c5de0f81aa87d8b8ef2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6f9966f3c738020129cb4ac5105d8fb786ac0aee91c5de0f81aa87d8b8ef2e->enter($__internal_1f6f9966f3c738020129cb4ac5105d8fb786ac0aee91c5de0f81aa87d8b8ef2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e45c9814b00cd3683d2b3f2ce4af88fc1c6205c6b927613778ee2258aea0707c->leave($__internal_e45c9814b00cd3683d2b3f2ce4af88fc1c6205c6b927613778ee2258aea0707c_prof);

        
        $__internal_1f6f9966f3c738020129cb4ac5105d8fb786ac0aee91c5de0f81aa87d8b8ef2e->leave($__internal_1f6f9966f3c738020129cb4ac5105d8fb786ac0aee91c5de0f81aa87d8b8ef2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
