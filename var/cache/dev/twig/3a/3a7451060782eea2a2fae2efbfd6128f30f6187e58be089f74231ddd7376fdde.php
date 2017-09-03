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
        $__internal_4f0b62a38350a815f2a45d7d244d4100be6f9b33c3fc0cdd452cb23c11ed0e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0b62a38350a815f2a45d7d244d4100be6f9b33c3fc0cdd452cb23c11ed0e0b->enter($__internal_4f0b62a38350a815f2a45d7d244d4100be6f9b33c3fc0cdd452cb23c11ed0e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9a080fff9788e57ae5019d84a0a549487a83840841ff8de001412594bd6f0a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a080fff9788e57ae5019d84a0a549487a83840841ff8de001412594bd6f0a08->enter($__internal_9a080fff9788e57ae5019d84a0a549487a83840841ff8de001412594bd6f0a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4f0b62a38350a815f2a45d7d244d4100be6f9b33c3fc0cdd452cb23c11ed0e0b->leave($__internal_4f0b62a38350a815f2a45d7d244d4100be6f9b33c3fc0cdd452cb23c11ed0e0b_prof);

        
        $__internal_9a080fff9788e57ae5019d84a0a549487a83840841ff8de001412594bd6f0a08->leave($__internal_9a080fff9788e57ae5019d84a0a549487a83840841ff8de001412594bd6f0a08_prof);

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
