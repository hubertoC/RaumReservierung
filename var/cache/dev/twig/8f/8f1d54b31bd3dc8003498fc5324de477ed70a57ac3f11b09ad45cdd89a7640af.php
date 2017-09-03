<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_1c7f2f9e0ead445c50662a935a923e0dbec4afebc3937d2910b7782cfe913323 extends Twig_Template
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
        $__internal_50c19595da30b26f9c1d762ed2ac47e68a500c70caf2f82295a4080b79c78543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c19595da30b26f9c1d762ed2ac47e68a500c70caf2f82295a4080b79c78543->enter($__internal_50c19595da30b26f9c1d762ed2ac47e68a500c70caf2f82295a4080b79c78543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_b15f15a1b337b745e524fb9bc5d3164f3ab42d46c2d2a937278c84b51075613c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15f15a1b337b745e524fb9bc5d3164f3ab42d46c2d2a937278c84b51075613c->enter($__internal_b15f15a1b337b745e524fb9bc5d3164f3ab42d46c2d2a937278c84b51075613c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_50c19595da30b26f9c1d762ed2ac47e68a500c70caf2f82295a4080b79c78543->leave($__internal_50c19595da30b26f9c1d762ed2ac47e68a500c70caf2f82295a4080b79c78543_prof);

        
        $__internal_b15f15a1b337b745e524fb9bc5d3164f3ab42d46c2d2a937278c84b51075613c->leave($__internal_b15f15a1b337b745e524fb9bc5d3164f3ab42d46c2d2a937278c84b51075613c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
