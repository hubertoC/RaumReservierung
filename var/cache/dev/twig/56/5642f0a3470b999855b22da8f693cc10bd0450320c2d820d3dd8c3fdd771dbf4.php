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
        $__internal_69bfdcdb8e2174383e8a105d14b3aff0efb0700906c216ccba8d4a74547a38a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69bfdcdb8e2174383e8a105d14b3aff0efb0700906c216ccba8d4a74547a38a7->enter($__internal_69bfdcdb8e2174383e8a105d14b3aff0efb0700906c216ccba8d4a74547a38a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e5920f21be67d58b3487a9d12c80d3a0e386593f76219855e6b928b60468b82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5920f21be67d58b3487a9d12c80d3a0e386593f76219855e6b928b60468b82f->enter($__internal_e5920f21be67d58b3487a9d12c80d3a0e386593f76219855e6b928b60468b82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_69bfdcdb8e2174383e8a105d14b3aff0efb0700906c216ccba8d4a74547a38a7->leave($__internal_69bfdcdb8e2174383e8a105d14b3aff0efb0700906c216ccba8d4a74547a38a7_prof);

        
        $__internal_e5920f21be67d58b3487a9d12c80d3a0e386593f76219855e6b928b60468b82f->leave($__internal_e5920f21be67d58b3487a9d12c80d3a0e386593f76219855e6b928b60468b82f_prof);

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
