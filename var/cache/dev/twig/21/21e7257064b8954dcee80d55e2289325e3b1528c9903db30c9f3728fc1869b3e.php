<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_9dc4ab1c639887871af2fe9b769dd0e1233e18070e265322add2a00a1f9984c5 extends Twig_Template
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
        $__internal_288379eef71d4047cc30587d9d2899c47792a5d9d9d95a243a5ae1293c1aaa99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288379eef71d4047cc30587d9d2899c47792a5d9d9d95a243a5ae1293c1aaa99->enter($__internal_288379eef71d4047cc30587d9d2899c47792a5d9d9d95a243a5ae1293c1aaa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_fb13631afb1c79a64d6abb6ff79e5ef69f1e68d78f138e3b51d14574613a09a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb13631afb1c79a64d6abb6ff79e5ef69f1e68d78f138e3b51d14574613a09a5->enter($__internal_fb13631afb1c79a64d6abb6ff79e5ef69f1e68d78f138e3b51d14574613a09a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_288379eef71d4047cc30587d9d2899c47792a5d9d9d95a243a5ae1293c1aaa99->leave($__internal_288379eef71d4047cc30587d9d2899c47792a5d9d9d95a243a5ae1293c1aaa99_prof);

        
        $__internal_fb13631afb1c79a64d6abb6ff79e5ef69f1e68d78f138e3b51d14574613a09a5->leave($__internal_fb13631afb1c79a64d6abb6ff79e5ef69f1e68d78f138e3b51d14574613a09a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
