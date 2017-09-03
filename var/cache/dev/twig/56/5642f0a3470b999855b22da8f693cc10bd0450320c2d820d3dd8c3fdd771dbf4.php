<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3d3c47cb40a2c4ccefe78d8fdeaa398b8e75971be1b59064e9d8e7b9cee61a13 extends Twig_Template
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
        $__internal_39db90db5810826ac79c0d1cb914694a947bce385a8db2c987058a33332515a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39db90db5810826ac79c0d1cb914694a947bce385a8db2c987058a33332515a2->enter($__internal_39db90db5810826ac79c0d1cb914694a947bce385a8db2c987058a33332515a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_876db3a84c6da2f2c82a85550be842d8f6270fe59da78f1aa2fde4568aaa2cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876db3a84c6da2f2c82a85550be842d8f6270fe59da78f1aa2fde4568aaa2cb9->enter($__internal_876db3a84c6da2f2c82a85550be842d8f6270fe59da78f1aa2fde4568aaa2cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_39db90db5810826ac79c0d1cb914694a947bce385a8db2c987058a33332515a2->leave($__internal_39db90db5810826ac79c0d1cb914694a947bce385a8db2c987058a33332515a2_prof);

        
        $__internal_876db3a84c6da2f2c82a85550be842d8f6270fe59da78f1aa2fde4568aaa2cb9->leave($__internal_876db3a84c6da2f2c82a85550be842d8f6270fe59da78f1aa2fde4568aaa2cb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
