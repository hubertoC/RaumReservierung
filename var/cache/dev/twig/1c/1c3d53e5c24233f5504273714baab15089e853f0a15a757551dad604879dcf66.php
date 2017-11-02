<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_75b97afc0416473d409ca87d7318fbfeed3913d650dd654d7e834b6feb312b07 extends Twig_Template
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
        $__internal_4e7f08b777af4a22689905ed56468b26f31b4109373d3dc8cc57ecd2b8224196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7f08b777af4a22689905ed56468b26f31b4109373d3dc8cc57ecd2b8224196->enter($__internal_4e7f08b777af4a22689905ed56468b26f31b4109373d3dc8cc57ecd2b8224196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_5bde543495b208715237925ec65248aa0eba55aeb0720ab4c8f817275cc5d6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bde543495b208715237925ec65248aa0eba55aeb0720ab4c8f817275cc5d6ac->enter($__internal_5bde543495b208715237925ec65248aa0eba55aeb0720ab4c8f817275cc5d6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4e7f08b777af4a22689905ed56468b26f31b4109373d3dc8cc57ecd2b8224196->leave($__internal_4e7f08b777af4a22689905ed56468b26f31b4109373d3dc8cc57ecd2b8224196_prof);

        
        $__internal_5bde543495b208715237925ec65248aa0eba55aeb0720ab4c8f817275cc5d6ac->leave($__internal_5bde543495b208715237925ec65248aa0eba55aeb0720ab4c8f817275cc5d6ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
