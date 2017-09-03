<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_e7585e4030d6b92c0cf713762675ff9f7339ec3954b1462b507eb3acec31d2df extends Twig_Template
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
        $__internal_baedbfdbd2f1c3b8d7b7db2b637a1d6c4e1c966b208cd034dc19e32dc5bab59a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baedbfdbd2f1c3b8d7b7db2b637a1d6c4e1c966b208cd034dc19e32dc5bab59a->enter($__internal_baedbfdbd2f1c3b8d7b7db2b637a1d6c4e1c966b208cd034dc19e32dc5bab59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_ed84dc1079d1d546fa10cdc2982fd6b844a6fe7a3417d509dcf04b1a5616f48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed84dc1079d1d546fa10cdc2982fd6b844a6fe7a3417d509dcf04b1a5616f48c->enter($__internal_ed84dc1079d1d546fa10cdc2982fd6b844a6fe7a3417d509dcf04b1a5616f48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_baedbfdbd2f1c3b8d7b7db2b637a1d6c4e1c966b208cd034dc19e32dc5bab59a->leave($__internal_baedbfdbd2f1c3b8d7b7db2b637a1d6c4e1c966b208cd034dc19e32dc5bab59a_prof);

        
        $__internal_ed84dc1079d1d546fa10cdc2982fd6b844a6fe7a3417d509dcf04b1a5616f48c->leave($__internal_ed84dc1079d1d546fa10cdc2982fd6b844a6fe7a3417d509dcf04b1a5616f48c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
