<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f341398b81a6f42d959041e03d09c0052bd35ef64ee33df207c5d995d3036f76 extends Twig_Template
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
        $__internal_884614db97c28727cbd9f8abf377b1414e7eea665db306015142b652cdcf3f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884614db97c28727cbd9f8abf377b1414e7eea665db306015142b652cdcf3f03->enter($__internal_884614db97c28727cbd9f8abf377b1414e7eea665db306015142b652cdcf3f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_24549e59cef053c6d6c5d8c2857b7f611b097761efe248749b13d9e5a51d3676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24549e59cef053c6d6c5d8c2857b7f611b097761efe248749b13d9e5a51d3676->enter($__internal_24549e59cef053c6d6c5d8c2857b7f611b097761efe248749b13d9e5a51d3676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_884614db97c28727cbd9f8abf377b1414e7eea665db306015142b652cdcf3f03->leave($__internal_884614db97c28727cbd9f8abf377b1414e7eea665db306015142b652cdcf3f03_prof);

        
        $__internal_24549e59cef053c6d6c5d8c2857b7f611b097761efe248749b13d9e5a51d3676->leave($__internal_24549e59cef053c6d6c5d8c2857b7f611b097761efe248749b13d9e5a51d3676_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
