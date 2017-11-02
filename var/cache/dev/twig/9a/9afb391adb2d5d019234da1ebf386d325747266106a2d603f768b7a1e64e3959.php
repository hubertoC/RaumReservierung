<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4172787ee9b0292af8be48e9ef6f4e1e163ffc9d66aa7785c5e34d0e9e096195 extends Twig_Template
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
        $__internal_67453f7b84b75c1befcde61f186e1091ecc19f20001abdf5c6ba29419d4dcd4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67453f7b84b75c1befcde61f186e1091ecc19f20001abdf5c6ba29419d4dcd4d->enter($__internal_67453f7b84b75c1befcde61f186e1091ecc19f20001abdf5c6ba29419d4dcd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3c80273c3905ecd909072d6342800a50c5d22853c322d73385d0c6f2bc2b3551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c80273c3905ecd909072d6342800a50c5d22853c322d73385d0c6f2bc2b3551->enter($__internal_3c80273c3905ecd909072d6342800a50c5d22853c322d73385d0c6f2bc2b3551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_67453f7b84b75c1befcde61f186e1091ecc19f20001abdf5c6ba29419d4dcd4d->leave($__internal_67453f7b84b75c1befcde61f186e1091ecc19f20001abdf5c6ba29419d4dcd4d_prof);

        
        $__internal_3c80273c3905ecd909072d6342800a50c5d22853c322d73385d0c6f2bc2b3551->leave($__internal_3c80273c3905ecd909072d6342800a50c5d22853c322d73385d0c6f2bc2b3551_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
