<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_090a497550a3d612f9916fc406230fcf0d812ebee7cdbc3338ec3eefb3137a41 extends Twig_Template
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
        $__internal_65332d2ba5515fe55047b6ddf27bc07ae8c4c66de7f44ce41fff46a029acc660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65332d2ba5515fe55047b6ddf27bc07ae8c4c66de7f44ce41fff46a029acc660->enter($__internal_65332d2ba5515fe55047b6ddf27bc07ae8c4c66de7f44ce41fff46a029acc660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c28d222217ca1bb05f40ea11f675e08b3bbdfd98e70accbfebcd6686733e827d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28d222217ca1bb05f40ea11f675e08b3bbdfd98e70accbfebcd6686733e827d->enter($__internal_c28d222217ca1bb05f40ea11f675e08b3bbdfd98e70accbfebcd6686733e827d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_65332d2ba5515fe55047b6ddf27bc07ae8c4c66de7f44ce41fff46a029acc660->leave($__internal_65332d2ba5515fe55047b6ddf27bc07ae8c4c66de7f44ce41fff46a029acc660_prof);

        
        $__internal_c28d222217ca1bb05f40ea11f675e08b3bbdfd98e70accbfebcd6686733e827d->leave($__internal_c28d222217ca1bb05f40ea11f675e08b3bbdfd98e70accbfebcd6686733e827d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
