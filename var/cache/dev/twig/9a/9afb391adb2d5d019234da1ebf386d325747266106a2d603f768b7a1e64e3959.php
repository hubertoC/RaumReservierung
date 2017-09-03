<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4172787ee9b0292af8be48e9ef6f4e1e163ffc9d66aa7785c5e34d0e9e096195 extends Twig_Template
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
        $__internal_4b4258787e41a27f2d931d842ac444cfa7469b4ba47aa662d4a1fa702cf07a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4258787e41a27f2d931d842ac444cfa7469b4ba47aa662d4a1fa702cf07a9e->enter($__internal_4b4258787e41a27f2d931d842ac444cfa7469b4ba47aa662d4a1fa702cf07a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e338fe305560bbc15557ce4d7656ceff56e00ca8886bf700a2db7940a778c8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e338fe305560bbc15557ce4d7656ceff56e00ca8886bf700a2db7940a778c8d7->enter($__internal_e338fe305560bbc15557ce4d7656ceff56e00ca8886bf700a2db7940a778c8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4b4258787e41a27f2d931d842ac444cfa7469b4ba47aa662d4a1fa702cf07a9e->leave($__internal_4b4258787e41a27f2d931d842ac444cfa7469b4ba47aa662d4a1fa702cf07a9e_prof);

        
        $__internal_e338fe305560bbc15557ce4d7656ceff56e00ca8886bf700a2db7940a778c8d7->leave($__internal_e338fe305560bbc15557ce4d7656ceff56e00ca8886bf700a2db7940a778c8d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
