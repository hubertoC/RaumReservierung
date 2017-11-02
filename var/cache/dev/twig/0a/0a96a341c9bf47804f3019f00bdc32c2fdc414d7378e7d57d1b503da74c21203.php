<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3d89c4191ac98f411cc2970513796e0df2d7487183baa7b27441312b77d02ec2 extends Twig_Template
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
        $__internal_b0bc24704c0f15afa6c53e71bf7f19f1c961bda7234610dcabb0e8eed3600ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0bc24704c0f15afa6c53e71bf7f19f1c961bda7234610dcabb0e8eed3600ffc->enter($__internal_b0bc24704c0f15afa6c53e71bf7f19f1c961bda7234610dcabb0e8eed3600ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a7129ca2876677c362caa728f5085d9e4ea98128ade620b7a8dc8a2a847fbb30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7129ca2876677c362caa728f5085d9e4ea98128ade620b7a8dc8a2a847fbb30->enter($__internal_a7129ca2876677c362caa728f5085d9e4ea98128ade620b7a8dc8a2a847fbb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b0bc24704c0f15afa6c53e71bf7f19f1c961bda7234610dcabb0e8eed3600ffc->leave($__internal_b0bc24704c0f15afa6c53e71bf7f19f1c961bda7234610dcabb0e8eed3600ffc_prof);

        
        $__internal_a7129ca2876677c362caa728f5085d9e4ea98128ade620b7a8dc8a2a847fbb30->leave($__internal_a7129ca2876677c362caa728f5085d9e4ea98128ade620b7a8dc8a2a847fbb30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
