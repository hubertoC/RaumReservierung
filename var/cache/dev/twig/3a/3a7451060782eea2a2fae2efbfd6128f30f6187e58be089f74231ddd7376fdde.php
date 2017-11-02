<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_31120c1833cf7490632a8a8ee3fde613ecc3e866a0da60c93ff2f05340a45e73 extends Twig_Template
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
        $__internal_86250f39f95861cb7196419eb815f75fc61bf51ad61317075d33a02f29d9c392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86250f39f95861cb7196419eb815f75fc61bf51ad61317075d33a02f29d9c392->enter($__internal_86250f39f95861cb7196419eb815f75fc61bf51ad61317075d33a02f29d9c392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_898d61a0a4d13963b8c7dd84196c817e2a15c74bb706d760d79ec5927f7860a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898d61a0a4d13963b8c7dd84196c817e2a15c74bb706d760d79ec5927f7860a4->enter($__internal_898d61a0a4d13963b8c7dd84196c817e2a15c74bb706d760d79ec5927f7860a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_86250f39f95861cb7196419eb815f75fc61bf51ad61317075d33a02f29d9c392->leave($__internal_86250f39f95861cb7196419eb815f75fc61bf51ad61317075d33a02f29d9c392_prof);

        
        $__internal_898d61a0a4d13963b8c7dd84196c817e2a15c74bb706d760d79ec5927f7860a4->leave($__internal_898d61a0a4d13963b8c7dd84196c817e2a15c74bb706d760d79ec5927f7860a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
