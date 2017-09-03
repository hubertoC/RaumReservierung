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
        $__internal_dd4966b5fe9500cf1c09ac31b616658e1b4b2c422648148d1512b175e2b8eefa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4966b5fe9500cf1c09ac31b616658e1b4b2c422648148d1512b175e2b8eefa->enter($__internal_dd4966b5fe9500cf1c09ac31b616658e1b4b2c422648148d1512b175e2b8eefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_3ba98ed204e3a58678ceccdf64cbf5a821d5307ca6b945844fb5a3f56a20f1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba98ed204e3a58678ceccdf64cbf5a821d5307ca6b945844fb5a3f56a20f1e9->enter($__internal_3ba98ed204e3a58678ceccdf64cbf5a821d5307ca6b945844fb5a3f56a20f1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_dd4966b5fe9500cf1c09ac31b616658e1b4b2c422648148d1512b175e2b8eefa->leave($__internal_dd4966b5fe9500cf1c09ac31b616658e1b4b2c422648148d1512b175e2b8eefa_prof);

        
        $__internal_3ba98ed204e3a58678ceccdf64cbf5a821d5307ca6b945844fb5a3f56a20f1e9->leave($__internal_3ba98ed204e3a58678ceccdf64cbf5a821d5307ca6b945844fb5a3f56a20f1e9_prof);

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
