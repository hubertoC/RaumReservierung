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
        $__internal_ab19a5d4e11c60e80442106bdc218b958c446b0e02f6676a4c51d162416f372a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab19a5d4e11c60e80442106bdc218b958c446b0e02f6676a4c51d162416f372a->enter($__internal_ab19a5d4e11c60e80442106bdc218b958c446b0e02f6676a4c51d162416f372a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_6d6436be106e6180af42bb2b4cd5cdc49f238fed2b6249023fb36c3e530b9c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6436be106e6180af42bb2b4cd5cdc49f238fed2b6249023fb36c3e530b9c71->enter($__internal_6d6436be106e6180af42bb2b4cd5cdc49f238fed2b6249023fb36c3e530b9c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ab19a5d4e11c60e80442106bdc218b958c446b0e02f6676a4c51d162416f372a->leave($__internal_ab19a5d4e11c60e80442106bdc218b958c446b0e02f6676a4c51d162416f372a_prof);

        
        $__internal_6d6436be106e6180af42bb2b4cd5cdc49f238fed2b6249023fb36c3e530b9c71->leave($__internal_6d6436be106e6180af42bb2b4cd5cdc49f238fed2b6249023fb36c3e530b9c71_prof);

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
