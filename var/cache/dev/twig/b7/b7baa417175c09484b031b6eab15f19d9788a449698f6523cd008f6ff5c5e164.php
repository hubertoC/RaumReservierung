<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a5f4964b8dd2411fb4b93db10fd09e972e9a4fc40c61ab201c92f8f0befe5dec extends Twig_Template
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
        $__internal_4ac1030d3a40ff00490a56fd0b32b1a1e7e906996abecc082bb36a3b326535fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac1030d3a40ff00490a56fd0b32b1a1e7e906996abecc082bb36a3b326535fa->enter($__internal_4ac1030d3a40ff00490a56fd0b32b1a1e7e906996abecc082bb36a3b326535fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d875eee3425d2c45f2c1aceda1ad080ce675065655ba25dc687bb62bd7c3a354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d875eee3425d2c45f2c1aceda1ad080ce675065655ba25dc687bb62bd7c3a354->enter($__internal_d875eee3425d2c45f2c1aceda1ad080ce675065655ba25dc687bb62bd7c3a354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4ac1030d3a40ff00490a56fd0b32b1a1e7e906996abecc082bb36a3b326535fa->leave($__internal_4ac1030d3a40ff00490a56fd0b32b1a1e7e906996abecc082bb36a3b326535fa_prof);

        
        $__internal_d875eee3425d2c45f2c1aceda1ad080ce675065655ba25dc687bb62bd7c3a354->leave($__internal_d875eee3425d2c45f2c1aceda1ad080ce675065655ba25dc687bb62bd7c3a354_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
