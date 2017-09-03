<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_37954d791f212663cc8c9eb709d239e704c996105fc02b8db6cc8f4336933274 extends Twig_Template
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
        $__internal_62a762f27e797d6d6f7cacfac8071abe2e823d4b1c61edc7efbb6efa24fd25e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a762f27e797d6d6f7cacfac8071abe2e823d4b1c61edc7efbb6efa24fd25e0->enter($__internal_62a762f27e797d6d6f7cacfac8071abe2e823d4b1c61edc7efbb6efa24fd25e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_211296188ef379ae875487853105958279b97bea16e1c7d78cf4d1185f574b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211296188ef379ae875487853105958279b97bea16e1c7d78cf4d1185f574b93->enter($__internal_211296188ef379ae875487853105958279b97bea16e1c7d78cf4d1185f574b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_62a762f27e797d6d6f7cacfac8071abe2e823d4b1c61edc7efbb6efa24fd25e0->leave($__internal_62a762f27e797d6d6f7cacfac8071abe2e823d4b1c61edc7efbb6efa24fd25e0_prof);

        
        $__internal_211296188ef379ae875487853105958279b97bea16e1c7d78cf4d1185f574b93->leave($__internal_211296188ef379ae875487853105958279b97bea16e1c7d78cf4d1185f574b93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
