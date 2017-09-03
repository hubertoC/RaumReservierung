<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a06e7164368eb0d005de9b00500a9ec1bfbf0d81da7a7c27fe49e8a7b68cb158 extends Twig_Template
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
        $__internal_aa91e825983c69ca6823bac60dd15eac1015e8e7b18cd4c4f6de09e178e1c3e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa91e825983c69ca6823bac60dd15eac1015e8e7b18cd4c4f6de09e178e1c3e1->enter($__internal_aa91e825983c69ca6823bac60dd15eac1015e8e7b18cd4c4f6de09e178e1c3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_cdf7e1fb202383c8134fb26efe455cb3c7715cae81927eccaf6e41a97eee2559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf7e1fb202383c8134fb26efe455cb3c7715cae81927eccaf6e41a97eee2559->enter($__internal_cdf7e1fb202383c8134fb26efe455cb3c7715cae81927eccaf6e41a97eee2559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_aa91e825983c69ca6823bac60dd15eac1015e8e7b18cd4c4f6de09e178e1c3e1->leave($__internal_aa91e825983c69ca6823bac60dd15eac1015e8e7b18cd4c4f6de09e178e1c3e1_prof);

        
        $__internal_cdf7e1fb202383c8134fb26efe455cb3c7715cae81927eccaf6e41a97eee2559->leave($__internal_cdf7e1fb202383c8134fb26efe455cb3c7715cae81927eccaf6e41a97eee2559_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
