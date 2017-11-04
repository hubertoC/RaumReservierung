<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_6eacc0aae9acfac5a48013bcc1b1b67ef20e84fbda1fe446bf5e155a5b07145d extends Twig_Template
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
        $__internal_53f46e491a3803b39cc5ee3c89c9306c041d5d89bdfb254bf247a110031ac847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f46e491a3803b39cc5ee3c89c9306c041d5d89bdfb254bf247a110031ac847->enter($__internal_53f46e491a3803b39cc5ee3c89c9306c041d5d89bdfb254bf247a110031ac847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6983ea83331888c7d93ada1a388f7e5af87619136654f2a4ad8aa84763bfe775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6983ea83331888c7d93ada1a388f7e5af87619136654f2a4ad8aa84763bfe775->enter($__internal_6983ea83331888c7d93ada1a388f7e5af87619136654f2a4ad8aa84763bfe775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_53f46e491a3803b39cc5ee3c89c9306c041d5d89bdfb254bf247a110031ac847->leave($__internal_53f46e491a3803b39cc5ee3c89c9306c041d5d89bdfb254bf247a110031ac847_prof);

        
        $__internal_6983ea83331888c7d93ada1a388f7e5af87619136654f2a4ad8aa84763bfe775->leave($__internal_6983ea83331888c7d93ada1a388f7e5af87619136654f2a4ad8aa84763bfe775_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
