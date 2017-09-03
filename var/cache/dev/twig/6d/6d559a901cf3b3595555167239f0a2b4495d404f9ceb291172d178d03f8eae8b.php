<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2b078ac8f66d1fd1caee51c16b76923fa7f2642c95db443468bafa87bd913e73 extends Twig_Template
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
        $__internal_29c78d1866d8ad3dc3b30ae666971903956823f20b2b5053e66244610cb20300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c78d1866d8ad3dc3b30ae666971903956823f20b2b5053e66244610cb20300->enter($__internal_29c78d1866d8ad3dc3b30ae666971903956823f20b2b5053e66244610cb20300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a5186bb80a7552f055978653db23420e863850d0785c2e1c795f4ca90d7e7c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5186bb80a7552f055978653db23420e863850d0785c2e1c795f4ca90d7e7c13->enter($__internal_a5186bb80a7552f055978653db23420e863850d0785c2e1c795f4ca90d7e7c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_29c78d1866d8ad3dc3b30ae666971903956823f20b2b5053e66244610cb20300->leave($__internal_29c78d1866d8ad3dc3b30ae666971903956823f20b2b5053e66244610cb20300_prof);

        
        $__internal_a5186bb80a7552f055978653db23420e863850d0785c2e1c795f4ca90d7e7c13->leave($__internal_a5186bb80a7552f055978653db23420e863850d0785c2e1c795f4ca90d7e7c13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
