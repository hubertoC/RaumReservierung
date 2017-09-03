<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_40bc516a5fa62333c44f5a9b218b6061a194371a9380388db3d5503a836cd349 extends Twig_Template
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
        $__internal_94ce08dbfb3788d104f9ca35c1d58a2e6caee9fdbad50e38cab0fdcb079133f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ce08dbfb3788d104f9ca35c1d58a2e6caee9fdbad50e38cab0fdcb079133f7->enter($__internal_94ce08dbfb3788d104f9ca35c1d58a2e6caee9fdbad50e38cab0fdcb079133f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_16706710fb61fbb42bbda4b3b4ba1d2219f28c404ff9122cbe2e65d6371e852f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16706710fb61fbb42bbda4b3b4ba1d2219f28c404ff9122cbe2e65d6371e852f->enter($__internal_16706710fb61fbb42bbda4b3b4ba1d2219f28c404ff9122cbe2e65d6371e852f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_94ce08dbfb3788d104f9ca35c1d58a2e6caee9fdbad50e38cab0fdcb079133f7->leave($__internal_94ce08dbfb3788d104f9ca35c1d58a2e6caee9fdbad50e38cab0fdcb079133f7_prof);

        
        $__internal_16706710fb61fbb42bbda4b3b4ba1d2219f28c404ff9122cbe2e65d6371e852f->leave($__internal_16706710fb61fbb42bbda4b3b4ba1d2219f28c404ff9122cbe2e65d6371e852f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
