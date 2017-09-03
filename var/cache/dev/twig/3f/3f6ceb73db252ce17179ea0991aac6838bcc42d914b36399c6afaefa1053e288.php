<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e4355484f57b3dee029e3bad8e495b78644825105a5cf98ea3a4a261fb105bc1 extends Twig_Template
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
        $__internal_f1ad77d96cb2ec34a0e12ce57922196e45e5b1d012f34a83bdb217cd0fc62fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ad77d96cb2ec34a0e12ce57922196e45e5b1d012f34a83bdb217cd0fc62fd0->enter($__internal_f1ad77d96cb2ec34a0e12ce57922196e45e5b1d012f34a83bdb217cd0fc62fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d95fb4268f2abd01ba36600ad03b36a025947a8510ad08a9aeb2a374d7490029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95fb4268f2abd01ba36600ad03b36a025947a8510ad08a9aeb2a374d7490029->enter($__internal_d95fb4268f2abd01ba36600ad03b36a025947a8510ad08a9aeb2a374d7490029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f1ad77d96cb2ec34a0e12ce57922196e45e5b1d012f34a83bdb217cd0fc62fd0->leave($__internal_f1ad77d96cb2ec34a0e12ce57922196e45e5b1d012f34a83bdb217cd0fc62fd0_prof);

        
        $__internal_d95fb4268f2abd01ba36600ad03b36a025947a8510ad08a9aeb2a374d7490029->leave($__internal_d95fb4268f2abd01ba36600ad03b36a025947a8510ad08a9aeb2a374d7490029_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
