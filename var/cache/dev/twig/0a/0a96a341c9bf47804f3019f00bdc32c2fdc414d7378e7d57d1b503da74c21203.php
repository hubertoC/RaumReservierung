<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3d89c4191ac98f411cc2970513796e0df2d7487183baa7b27441312b77d02ec2 extends Twig_Template
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
        $__internal_86643f223b4b523f9a2a075f1d844e4347cbb4f6aeeda121991c838e75609ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86643f223b4b523f9a2a075f1d844e4347cbb4f6aeeda121991c838e75609ac1->enter($__internal_86643f223b4b523f9a2a075f1d844e4347cbb4f6aeeda121991c838e75609ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_44797cda45549bce820af762bcc49c8587a1743720712e9ee514f35e512ec8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44797cda45549bce820af762bcc49c8587a1743720712e9ee514f35e512ec8cf->enter($__internal_44797cda45549bce820af762bcc49c8587a1743720712e9ee514f35e512ec8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_86643f223b4b523f9a2a075f1d844e4347cbb4f6aeeda121991c838e75609ac1->leave($__internal_86643f223b4b523f9a2a075f1d844e4347cbb4f6aeeda121991c838e75609ac1_prof);

        
        $__internal_44797cda45549bce820af762bcc49c8587a1743720712e9ee514f35e512ec8cf->leave($__internal_44797cda45549bce820af762bcc49c8587a1743720712e9ee514f35e512ec8cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
