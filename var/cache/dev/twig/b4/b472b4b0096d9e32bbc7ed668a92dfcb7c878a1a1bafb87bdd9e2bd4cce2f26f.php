<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c575f7fb2255663e23e6e1816d182c5971957fe224247c11a41924491fc0fc66 extends Twig_Template
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
        $__internal_97bd0e4ee7e32409c7b3b92852297d35a15a6d191de52b984473b32c8740b5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97bd0e4ee7e32409c7b3b92852297d35a15a6d191de52b984473b32c8740b5a6->enter($__internal_97bd0e4ee7e32409c7b3b92852297d35a15a6d191de52b984473b32c8740b5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_71f09f81fc6c360ea9401e57486ef38fc4df6f26d1b0f4406b3937d60e15b6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f09f81fc6c360ea9401e57486ef38fc4df6f26d1b0f4406b3937d60e15b6c6->enter($__internal_71f09f81fc6c360ea9401e57486ef38fc4df6f26d1b0f4406b3937d60e15b6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_97bd0e4ee7e32409c7b3b92852297d35a15a6d191de52b984473b32c8740b5a6->leave($__internal_97bd0e4ee7e32409c7b3b92852297d35a15a6d191de52b984473b32c8740b5a6_prof);

        
        $__internal_71f09f81fc6c360ea9401e57486ef38fc4df6f26d1b0f4406b3937d60e15b6c6->leave($__internal_71f09f81fc6c360ea9401e57486ef38fc4df6f26d1b0f4406b3937d60e15b6c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
