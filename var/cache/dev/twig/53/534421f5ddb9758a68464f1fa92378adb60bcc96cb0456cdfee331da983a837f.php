<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9da11d6220d24485f559c5af8e9ac7f0efd88c63c83dac4dee9820379c40a776 extends Twig_Template
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
        $__internal_a099b3bddd1231084374436bc32165c03f1146798270bd8414cb2faf33ea83c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a099b3bddd1231084374436bc32165c03f1146798270bd8414cb2faf33ea83c5->enter($__internal_a099b3bddd1231084374436bc32165c03f1146798270bd8414cb2faf33ea83c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_d7f7e0be162000c424234811b37d57876f1e013122475542a70c8bb1c5dd1955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f7e0be162000c424234811b37d57876f1e013122475542a70c8bb1c5dd1955->enter($__internal_d7f7e0be162000c424234811b37d57876f1e013122475542a70c8bb1c5dd1955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a099b3bddd1231084374436bc32165c03f1146798270bd8414cb2faf33ea83c5->leave($__internal_a099b3bddd1231084374436bc32165c03f1146798270bd8414cb2faf33ea83c5_prof);

        
        $__internal_d7f7e0be162000c424234811b37d57876f1e013122475542a70c8bb1c5dd1955->leave($__internal_d7f7e0be162000c424234811b37d57876f1e013122475542a70c8bb1c5dd1955_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
