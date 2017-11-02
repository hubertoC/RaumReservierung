<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_34f5c3177a7dbe50fe322725a58a85c4eb08b6e3060ed7a80d0314893240703d extends Twig_Template
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
        $__internal_f1f78c3b046ef45dfc5198e82286db3cb6ca2e2fed64369e8d2d4ba1e4e167db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f78c3b046ef45dfc5198e82286db3cb6ca2e2fed64369e8d2d4ba1e4e167db->enter($__internal_f1f78c3b046ef45dfc5198e82286db3cb6ca2e2fed64369e8d2d4ba1e4e167db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f9b60bea67357e158637889ccd9b002c04f93e7ef1f54e2c8f5bc2a0f5f0f59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b60bea67357e158637889ccd9b002c04f93e7ef1f54e2c8f5bc2a0f5f0f59b->enter($__internal_f9b60bea67357e158637889ccd9b002c04f93e7ef1f54e2c8f5bc2a0f5f0f59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f1f78c3b046ef45dfc5198e82286db3cb6ca2e2fed64369e8d2d4ba1e4e167db->leave($__internal_f1f78c3b046ef45dfc5198e82286db3cb6ca2e2fed64369e8d2d4ba1e4e167db_prof);

        
        $__internal_f9b60bea67357e158637889ccd9b002c04f93e7ef1f54e2c8f5bc2a0f5f0f59b->leave($__internal_f9b60bea67357e158637889ccd9b002c04f93e7ef1f54e2c8f5bc2a0f5f0f59b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
