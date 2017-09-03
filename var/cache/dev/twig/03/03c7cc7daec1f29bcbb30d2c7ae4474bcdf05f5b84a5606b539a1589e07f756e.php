<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_c8a3caf5e971399959454d823fa86e38a7dc393014704b8580cbf1b7c515b2c4 extends Twig_Template
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
        $__internal_28de2c6ee1842ee5b1b952894823d818d571775e7fcee3a14990709e7c69ad7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28de2c6ee1842ee5b1b952894823d818d571775e7fcee3a14990709e7c69ad7d->enter($__internal_28de2c6ee1842ee5b1b952894823d818d571775e7fcee3a14990709e7c69ad7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_1451ab53106cf2e30727d34deb687b3fcbcd32bc6d29097f4ffb32c8ba9778aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1451ab53106cf2e30727d34deb687b3fcbcd32bc6d29097f4ffb32c8ba9778aa->enter($__internal_1451ab53106cf2e30727d34deb687b3fcbcd32bc6d29097f4ffb32c8ba9778aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_28de2c6ee1842ee5b1b952894823d818d571775e7fcee3a14990709e7c69ad7d->leave($__internal_28de2c6ee1842ee5b1b952894823d818d571775e7fcee3a14990709e7c69ad7d_prof);

        
        $__internal_1451ab53106cf2e30727d34deb687b3fcbcd32bc6d29097f4ffb32c8ba9778aa->leave($__internal_1451ab53106cf2e30727d34deb687b3fcbcd32bc6d29097f4ffb32c8ba9778aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
