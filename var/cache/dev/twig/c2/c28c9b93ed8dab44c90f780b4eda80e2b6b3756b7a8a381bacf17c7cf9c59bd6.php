<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cb230b1740e3114965f610a23af3642fcaa04b81dc9b94643cf3debfc7f1d74f extends Twig_Template
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
        $__internal_971c38ca5765e355c06554a01e842fccaded0600a4e85604874c23af607296b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971c38ca5765e355c06554a01e842fccaded0600a4e85604874c23af607296b9->enter($__internal_971c38ca5765e355c06554a01e842fccaded0600a4e85604874c23af607296b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_108503284f429e785aaaf555022397e3a42ed29509f89874531e9e1c68b53126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108503284f429e785aaaf555022397e3a42ed29509f89874531e9e1c68b53126->enter($__internal_108503284f429e785aaaf555022397e3a42ed29509f89874531e9e1c68b53126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_971c38ca5765e355c06554a01e842fccaded0600a4e85604874c23af607296b9->leave($__internal_971c38ca5765e355c06554a01e842fccaded0600a4e85604874c23af607296b9_prof);

        
        $__internal_108503284f429e785aaaf555022397e3a42ed29509f89874531e9e1c68b53126->leave($__internal_108503284f429e785aaaf555022397e3a42ed29509f89874531e9e1c68b53126_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
