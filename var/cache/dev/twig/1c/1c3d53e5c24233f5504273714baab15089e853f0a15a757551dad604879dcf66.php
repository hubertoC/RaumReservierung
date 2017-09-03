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
        $__internal_e2e6ee740d2de9d9e0bd8382360f01b77e7147e75b2d0555f0de0e70acb975a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e6ee740d2de9d9e0bd8382360f01b77e7147e75b2d0555f0de0e70acb975a1->enter($__internal_e2e6ee740d2de9d9e0bd8382360f01b77e7147e75b2d0555f0de0e70acb975a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_6d9697d42ca80c52192825d877aeae025176f5a10e81a7504b9ac1cccfdf5254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9697d42ca80c52192825d877aeae025176f5a10e81a7504b9ac1cccfdf5254->enter($__internal_6d9697d42ca80c52192825d877aeae025176f5a10e81a7504b9ac1cccfdf5254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e2e6ee740d2de9d9e0bd8382360f01b77e7147e75b2d0555f0de0e70acb975a1->leave($__internal_e2e6ee740d2de9d9e0bd8382360f01b77e7147e75b2d0555f0de0e70acb975a1_prof);

        
        $__internal_6d9697d42ca80c52192825d877aeae025176f5a10e81a7504b9ac1cccfdf5254->leave($__internal_6d9697d42ca80c52192825d877aeae025176f5a10e81a7504b9ac1cccfdf5254_prof);

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
