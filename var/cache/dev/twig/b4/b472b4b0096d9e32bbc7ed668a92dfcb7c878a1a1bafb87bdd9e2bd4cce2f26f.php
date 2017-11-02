<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c575f7fb2255663e23e6e1816d182c5971957fe224247c11a41924491fc0fc66 extends Twig_Template
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
        $__internal_3eccaea456585ba08217860073bec4d0363561a70617e14d6245217335cf6130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eccaea456585ba08217860073bec4d0363561a70617e14d6245217335cf6130->enter($__internal_3eccaea456585ba08217860073bec4d0363561a70617e14d6245217335cf6130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_336d6d6ee746aa619a100288b62758c75e35bbb3fc0e025a4f0bb8e132ae9482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336d6d6ee746aa619a100288b62758c75e35bbb3fc0e025a4f0bb8e132ae9482->enter($__internal_336d6d6ee746aa619a100288b62758c75e35bbb3fc0e025a4f0bb8e132ae9482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3eccaea456585ba08217860073bec4d0363561a70617e14d6245217335cf6130->leave($__internal_3eccaea456585ba08217860073bec4d0363561a70617e14d6245217335cf6130_prof);

        
        $__internal_336d6d6ee746aa619a100288b62758c75e35bbb3fc0e025a4f0bb8e132ae9482->leave($__internal_336d6d6ee746aa619a100288b62758c75e35bbb3fc0e025a4f0bb8e132ae9482_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
