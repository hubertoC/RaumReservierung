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
        $__internal_980493c231ae772da81f248af6c4719643ce1274f2e4b5aab9a813fe0fcfd8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980493c231ae772da81f248af6c4719643ce1274f2e4b5aab9a813fe0fcfd8b3->enter($__internal_980493c231ae772da81f248af6c4719643ce1274f2e4b5aab9a813fe0fcfd8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_2c2a6b6c0cdd5c77778465584131f7b1613e6a214f3581493abfb506d934fe31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2a6b6c0cdd5c77778465584131f7b1613e6a214f3581493abfb506d934fe31->enter($__internal_2c2a6b6c0cdd5c77778465584131f7b1613e6a214f3581493abfb506d934fe31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_980493c231ae772da81f248af6c4719643ce1274f2e4b5aab9a813fe0fcfd8b3->leave($__internal_980493c231ae772da81f248af6c4719643ce1274f2e4b5aab9a813fe0fcfd8b3_prof);

        
        $__internal_2c2a6b6c0cdd5c77778465584131f7b1613e6a214f3581493abfb506d934fe31->leave($__internal_2c2a6b6c0cdd5c77778465584131f7b1613e6a214f3581493abfb506d934fe31_prof);

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
