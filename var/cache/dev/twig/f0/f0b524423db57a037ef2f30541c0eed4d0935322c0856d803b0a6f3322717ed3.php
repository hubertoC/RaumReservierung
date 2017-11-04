<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a894e203d64fc4f5781b4c7b71d89f1c4bae555e03d7135df0961babe42e81dd extends Twig_Template
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
        $__internal_a21888b8b51726b7173ae9ca44e00d9e340978da2c7514786d62e4fa2907be4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21888b8b51726b7173ae9ca44e00d9e340978da2c7514786d62e4fa2907be4a->enter($__internal_a21888b8b51726b7173ae9ca44e00d9e340978da2c7514786d62e4fa2907be4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_756fdddf4cc85abd8666b4e7a0e99cb60a1481259dbbd37d51d1ebec20e51a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756fdddf4cc85abd8666b4e7a0e99cb60a1481259dbbd37d51d1ebec20e51a5e->enter($__internal_756fdddf4cc85abd8666b4e7a0e99cb60a1481259dbbd37d51d1ebec20e51a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a21888b8b51726b7173ae9ca44e00d9e340978da2c7514786d62e4fa2907be4a->leave($__internal_a21888b8b51726b7173ae9ca44e00d9e340978da2c7514786d62e4fa2907be4a_prof);

        
        $__internal_756fdddf4cc85abd8666b4e7a0e99cb60a1481259dbbd37d51d1ebec20e51a5e->leave($__internal_756fdddf4cc85abd8666b4e7a0e99cb60a1481259dbbd37d51d1ebec20e51a5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
