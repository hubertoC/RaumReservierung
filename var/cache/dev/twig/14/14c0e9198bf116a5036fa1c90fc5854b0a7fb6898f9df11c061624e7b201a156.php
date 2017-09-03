<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9e8a53a8f3573c2d38fd49424dca2e1b2edc4036dd887b1721d2fe5a9fb4938f extends Twig_Template
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
        $__internal_df83a2879bec49a4d15822bd0ec11b067ee52e00d8a5cf0a5ad4138625a06a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df83a2879bec49a4d15822bd0ec11b067ee52e00d8a5cf0a5ad4138625a06a6e->enter($__internal_df83a2879bec49a4d15822bd0ec11b067ee52e00d8a5cf0a5ad4138625a06a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a497ab436db3fc4fc66619dc4ff0867f52a863e8dd380101be546d4614e9dae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a497ab436db3fc4fc66619dc4ff0867f52a863e8dd380101be546d4614e9dae3->enter($__internal_a497ab436db3fc4fc66619dc4ff0867f52a863e8dd380101be546d4614e9dae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_df83a2879bec49a4d15822bd0ec11b067ee52e00d8a5cf0a5ad4138625a06a6e->leave($__internal_df83a2879bec49a4d15822bd0ec11b067ee52e00d8a5cf0a5ad4138625a06a6e_prof);

        
        $__internal_a497ab436db3fc4fc66619dc4ff0867f52a863e8dd380101be546d4614e9dae3->leave($__internal_a497ab436db3fc4fc66619dc4ff0867f52a863e8dd380101be546d4614e9dae3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
