<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_608d077a45db74815e9cfe15a07f61cee5cc96ff34105f8115b0417467fdebad extends Twig_Template
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
        $__internal_bf0378dcc35eeed08a2147f4bf4f7945886b75b8357a156660bb16df263b10ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0378dcc35eeed08a2147f4bf4f7945886b75b8357a156660bb16df263b10ec->enter($__internal_bf0378dcc35eeed08a2147f4bf4f7945886b75b8357a156660bb16df263b10ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_8a9adb2e4cf4d4350ba46f3ce5d98405bfb3c7c9a5184edc67b98df2e5c3d07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9adb2e4cf4d4350ba46f3ce5d98405bfb3c7c9a5184edc67b98df2e5c3d07d->enter($__internal_8a9adb2e4cf4d4350ba46f3ce5d98405bfb3c7c9a5184edc67b98df2e5c3d07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_bf0378dcc35eeed08a2147f4bf4f7945886b75b8357a156660bb16df263b10ec->leave($__internal_bf0378dcc35eeed08a2147f4bf4f7945886b75b8357a156660bb16df263b10ec_prof);

        
        $__internal_8a9adb2e4cf4d4350ba46f3ce5d98405bfb3c7c9a5184edc67b98df2e5c3d07d->leave($__internal_8a9adb2e4cf4d4350ba46f3ce5d98405bfb3c7c9a5184edc67b98df2e5c3d07d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
