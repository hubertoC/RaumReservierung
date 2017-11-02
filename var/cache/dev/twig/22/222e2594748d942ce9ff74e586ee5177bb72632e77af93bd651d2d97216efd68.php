<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_24a37b672924dc81e8ec3deaa819ff63d6098425765879650caa073f54a28a3a extends Twig_Template
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
        $__internal_3173b6b4d0375de6b2762d8f6de6e2d2744886108d3d3a3923baaa83cc13781d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3173b6b4d0375de6b2762d8f6de6e2d2744886108d3d3a3923baaa83cc13781d->enter($__internal_3173b6b4d0375de6b2762d8f6de6e2d2744886108d3d3a3923baaa83cc13781d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2abb9eae430e5789106b639d9b9ce1f17337971252eac66073e3730df0a2807f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abb9eae430e5789106b639d9b9ce1f17337971252eac66073e3730df0a2807f->enter($__internal_2abb9eae430e5789106b639d9b9ce1f17337971252eac66073e3730df0a2807f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3173b6b4d0375de6b2762d8f6de6e2d2744886108d3d3a3923baaa83cc13781d->leave($__internal_3173b6b4d0375de6b2762d8f6de6e2d2744886108d3d3a3923baaa83cc13781d_prof);

        
        $__internal_2abb9eae430e5789106b639d9b9ce1f17337971252eac66073e3730df0a2807f->leave($__internal_2abb9eae430e5789106b639d9b9ce1f17337971252eac66073e3730df0a2807f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
