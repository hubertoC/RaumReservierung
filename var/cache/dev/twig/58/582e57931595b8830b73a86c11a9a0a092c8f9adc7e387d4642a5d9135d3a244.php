<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c0b1c1b8c10dad40735e6f7e8835b65eb58da0d6470524758f7347e2f239c443 extends Twig_Template
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
        $__internal_f4db0fdc030dce326be97404718e56a8e9bb7054a6241e2181b73b662cef16c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4db0fdc030dce326be97404718e56a8e9bb7054a6241e2181b73b662cef16c2->enter($__internal_f4db0fdc030dce326be97404718e56a8e9bb7054a6241e2181b73b662cef16c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c7df5dc97588c1009608d031aac33e82eb96ab79a417a3423a740f79d13e41c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7df5dc97588c1009608d031aac33e82eb96ab79a417a3423a740f79d13e41c0->enter($__internal_c7df5dc97588c1009608d031aac33e82eb96ab79a417a3423a740f79d13e41c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f4db0fdc030dce326be97404718e56a8e9bb7054a6241e2181b73b662cef16c2->leave($__internal_f4db0fdc030dce326be97404718e56a8e9bb7054a6241e2181b73b662cef16c2_prof);

        
        $__internal_c7df5dc97588c1009608d031aac33e82eb96ab79a417a3423a740f79d13e41c0->leave($__internal_c7df5dc97588c1009608d031aac33e82eb96ab79a417a3423a740f79d13e41c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
