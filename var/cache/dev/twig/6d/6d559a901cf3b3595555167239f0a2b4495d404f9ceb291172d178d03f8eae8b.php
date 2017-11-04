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
        $__internal_5e0df9bf20af272b09527839c539e70d977eb3a0fa5b978b7f1b52926ce63092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0df9bf20af272b09527839c539e70d977eb3a0fa5b978b7f1b52926ce63092->enter($__internal_5e0df9bf20af272b09527839c539e70d977eb3a0fa5b978b7f1b52926ce63092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9cd08626778cad6b2a5e7f3ff980fb91c76aefa27f47f7f927fa6d2502dc0d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd08626778cad6b2a5e7f3ff980fb91c76aefa27f47f7f927fa6d2502dc0d51->enter($__internal_9cd08626778cad6b2a5e7f3ff980fb91c76aefa27f47f7f927fa6d2502dc0d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5e0df9bf20af272b09527839c539e70d977eb3a0fa5b978b7f1b52926ce63092->leave($__internal_5e0df9bf20af272b09527839c539e70d977eb3a0fa5b978b7f1b52926ce63092_prof);

        
        $__internal_9cd08626778cad6b2a5e7f3ff980fb91c76aefa27f47f7f927fa6d2502dc0d51->leave($__internal_9cd08626778cad6b2a5e7f3ff980fb91c76aefa27f47f7f927fa6d2502dc0d51_prof);

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
