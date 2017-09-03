<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a979395d400e22d50ef680b2077d70795445f94a943fb6e9fe6d9c90d6d797ab extends Twig_Template
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
        $__internal_72e45237bb56c01340727db8fd076025399beb3d7c141cf58be76023e9a28a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e45237bb56c01340727db8fd076025399beb3d7c141cf58be76023e9a28a3b->enter($__internal_72e45237bb56c01340727db8fd076025399beb3d7c141cf58be76023e9a28a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4344f296b5d0cb7200ec6c261a102462af8f564c797b1e181dcdc97bbf25c934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4344f296b5d0cb7200ec6c261a102462af8f564c797b1e181dcdc97bbf25c934->enter($__internal_4344f296b5d0cb7200ec6c261a102462af8f564c797b1e181dcdc97bbf25c934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_72e45237bb56c01340727db8fd076025399beb3d7c141cf58be76023e9a28a3b->leave($__internal_72e45237bb56c01340727db8fd076025399beb3d7c141cf58be76023e9a28a3b_prof);

        
        $__internal_4344f296b5d0cb7200ec6c261a102462af8f564c797b1e181dcdc97bbf25c934->leave($__internal_4344f296b5d0cb7200ec6c261a102462af8f564c797b1e181dcdc97bbf25c934_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
