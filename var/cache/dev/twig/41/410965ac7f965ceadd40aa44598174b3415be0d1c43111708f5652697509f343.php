<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_5a9aed02b93250ded06bc5e9e0cdadf24e1c2e0dd054b82b300c2afdd1bc5186 extends Twig_Template
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
        $__internal_93fca5ea3a71046666cd178b163c7c67b06ceeb192eb3f6fef2b5fcd4c4b231e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93fca5ea3a71046666cd178b163c7c67b06ceeb192eb3f6fef2b5fcd4c4b231e->enter($__internal_93fca5ea3a71046666cd178b163c7c67b06ceeb192eb3f6fef2b5fcd4c4b231e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_dbc437871fab33152df8e2efc9b7a5313e44ee7a6fe17766ba808720ca8198da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc437871fab33152df8e2efc9b7a5313e44ee7a6fe17766ba808720ca8198da->enter($__internal_dbc437871fab33152df8e2efc9b7a5313e44ee7a6fe17766ba808720ca8198da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_93fca5ea3a71046666cd178b163c7c67b06ceeb192eb3f6fef2b5fcd4c4b231e->leave($__internal_93fca5ea3a71046666cd178b163c7c67b06ceeb192eb3f6fef2b5fcd4c4b231e_prof);

        
        $__internal_dbc437871fab33152df8e2efc9b7a5313e44ee7a6fe17766ba808720ca8198da->leave($__internal_dbc437871fab33152df8e2efc9b7a5313e44ee7a6fe17766ba808720ca8198da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
