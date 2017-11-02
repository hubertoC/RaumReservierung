<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1eec25b079a05787991f241f9ec132524debb47d43bae92c9371ea37a41cd434 extends Twig_Template
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
        $__internal_25fc385856d52969a9a7d85301a203ff75706f697048c99e604bebc3d68c2b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25fc385856d52969a9a7d85301a203ff75706f697048c99e604bebc3d68c2b12->enter($__internal_25fc385856d52969a9a7d85301a203ff75706f697048c99e604bebc3d68c2b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_840c746df6869532b3bac88e602a20a153b7402fe32a77677d8591a3819a7b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_840c746df6869532b3bac88e602a20a153b7402fe32a77677d8591a3819a7b19->enter($__internal_840c746df6869532b3bac88e602a20a153b7402fe32a77677d8591a3819a7b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_25fc385856d52969a9a7d85301a203ff75706f697048c99e604bebc3d68c2b12->leave($__internal_25fc385856d52969a9a7d85301a203ff75706f697048c99e604bebc3d68c2b12_prof);

        
        $__internal_840c746df6869532b3bac88e602a20a153b7402fe32a77677d8591a3819a7b19->leave($__internal_840c746df6869532b3bac88e602a20a153b7402fe32a77677d8591a3819a7b19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
