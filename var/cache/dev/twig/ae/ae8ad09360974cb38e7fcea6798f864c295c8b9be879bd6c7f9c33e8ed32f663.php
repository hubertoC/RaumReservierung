<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a06e7164368eb0d005de9b00500a9ec1bfbf0d81da7a7c27fe49e8a7b68cb158 extends Twig_Template
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
        $__internal_ef8d3539fa5861c591986267a1241a5b6d522076995e93c47794e9e3a93e290a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8d3539fa5861c591986267a1241a5b6d522076995e93c47794e9e3a93e290a->enter($__internal_ef8d3539fa5861c591986267a1241a5b6d522076995e93c47794e9e3a93e290a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_9e942cce6d572d35eedfe2120fe6f2a579b4eeee8f13cc58a27ef16cd0fdb57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e942cce6d572d35eedfe2120fe6f2a579b4eeee8f13cc58a27ef16cd0fdb57a->enter($__internal_9e942cce6d572d35eedfe2120fe6f2a579b4eeee8f13cc58a27ef16cd0fdb57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ef8d3539fa5861c591986267a1241a5b6d522076995e93c47794e9e3a93e290a->leave($__internal_ef8d3539fa5861c591986267a1241a5b6d522076995e93c47794e9e3a93e290a_prof);

        
        $__internal_9e942cce6d572d35eedfe2120fe6f2a579b4eeee8f13cc58a27ef16cd0fdb57a->leave($__internal_9e942cce6d572d35eedfe2120fe6f2a579b4eeee8f13cc58a27ef16cd0fdb57a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
