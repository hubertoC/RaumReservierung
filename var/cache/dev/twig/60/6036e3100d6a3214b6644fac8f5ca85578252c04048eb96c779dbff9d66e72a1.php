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
        $__internal_ae769ad44db6676f816118836300b426aa1c85eb5f445d09710723fd5231adc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae769ad44db6676f816118836300b426aa1c85eb5f445d09710723fd5231adc1->enter($__internal_ae769ad44db6676f816118836300b426aa1c85eb5f445d09710723fd5231adc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2597dbb43c668d3473aa0232ecea6353fee5dd40bfaa77e2848a9501a60161c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2597dbb43c668d3473aa0232ecea6353fee5dd40bfaa77e2848a9501a60161c2->enter($__internal_2597dbb43c668d3473aa0232ecea6353fee5dd40bfaa77e2848a9501a60161c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ae769ad44db6676f816118836300b426aa1c85eb5f445d09710723fd5231adc1->leave($__internal_ae769ad44db6676f816118836300b426aa1c85eb5f445d09710723fd5231adc1_prof);

        
        $__internal_2597dbb43c668d3473aa0232ecea6353fee5dd40bfaa77e2848a9501a60161c2->leave($__internal_2597dbb43c668d3473aa0232ecea6353fee5dd40bfaa77e2848a9501a60161c2_prof);

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
