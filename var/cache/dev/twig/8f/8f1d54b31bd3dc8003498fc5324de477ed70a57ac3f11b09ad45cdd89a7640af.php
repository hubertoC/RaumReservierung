<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_1c7f2f9e0ead445c50662a935a923e0dbec4afebc3937d2910b7782cfe913323 extends Twig_Template
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
        $__internal_e8cd8529f5aabebf7b492437f908c7e4d90eb25c50eec998c925bd6263c879fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8cd8529f5aabebf7b492437f908c7e4d90eb25c50eec998c925bd6263c879fd->enter($__internal_e8cd8529f5aabebf7b492437f908c7e4d90eb25c50eec998c925bd6263c879fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4ca1ebc645c703559dd1a5afc44bb17c1f2bc5ba30abdceada5e313e943fd8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca1ebc645c703559dd1a5afc44bb17c1f2bc5ba30abdceada5e313e943fd8d8->enter($__internal_4ca1ebc645c703559dd1a5afc44bb17c1f2bc5ba30abdceada5e313e943fd8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e8cd8529f5aabebf7b492437f908c7e4d90eb25c50eec998c925bd6263c879fd->leave($__internal_e8cd8529f5aabebf7b492437f908c7e4d90eb25c50eec998c925bd6263c879fd_prof);

        
        $__internal_4ca1ebc645c703559dd1a5afc44bb17c1f2bc5ba30abdceada5e313e943fd8d8->leave($__internal_4ca1ebc645c703559dd1a5afc44bb17c1f2bc5ba30abdceada5e313e943fd8d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
