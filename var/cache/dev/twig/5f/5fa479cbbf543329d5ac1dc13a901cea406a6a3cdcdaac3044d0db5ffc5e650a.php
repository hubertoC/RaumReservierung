<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_38f9faa4e4993fdba8231b43a239e30d2d196573e1fafc75c94060dbbb4ef957 extends Twig_Template
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
        $__internal_8173fd99555e3f7d8596be37533f7c9b8c6a78dedf165a0a6b6b3933c57d5625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8173fd99555e3f7d8596be37533f7c9b8c6a78dedf165a0a6b6b3933c57d5625->enter($__internal_8173fd99555e3f7d8596be37533f7c9b8c6a78dedf165a0a6b6b3933c57d5625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_63336147eec4e3b10daad71da985a79e450a3dc7fa038866d510d6662984d476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63336147eec4e3b10daad71da985a79e450a3dc7fa038866d510d6662984d476->enter($__internal_63336147eec4e3b10daad71da985a79e450a3dc7fa038866d510d6662984d476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8173fd99555e3f7d8596be37533f7c9b8c6a78dedf165a0a6b6b3933c57d5625->leave($__internal_8173fd99555e3f7d8596be37533f7c9b8c6a78dedf165a0a6b6b3933c57d5625_prof);

        
        $__internal_63336147eec4e3b10daad71da985a79e450a3dc7fa038866d510d6662984d476->leave($__internal_63336147eec4e3b10daad71da985a79e450a3dc7fa038866d510d6662984d476_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
