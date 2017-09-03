<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6c044566affe5f83db0708fd87ebed333f2c428ea9b96f9aaba808547d413e31 extends Twig_Template
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
        $__internal_81703a8a5b37e834e7ee62512ecda99c8b8d80ab7958a41b6183d98bb825f6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81703a8a5b37e834e7ee62512ecda99c8b8d80ab7958a41b6183d98bb825f6fd->enter($__internal_81703a8a5b37e834e7ee62512ecda99c8b8d80ab7958a41b6183d98bb825f6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4fb2ff3d2963bfd82ef8cace7a2fb73c2f77f73816fbb2ec9398acc38554df09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb2ff3d2963bfd82ef8cace7a2fb73c2f77f73816fbb2ec9398acc38554df09->enter($__internal_4fb2ff3d2963bfd82ef8cace7a2fb73c2f77f73816fbb2ec9398acc38554df09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_81703a8a5b37e834e7ee62512ecda99c8b8d80ab7958a41b6183d98bb825f6fd->leave($__internal_81703a8a5b37e834e7ee62512ecda99c8b8d80ab7958a41b6183d98bb825f6fd_prof);

        
        $__internal_4fb2ff3d2963bfd82ef8cace7a2fb73c2f77f73816fbb2ec9398acc38554df09->leave($__internal_4fb2ff3d2963bfd82ef8cace7a2fb73c2f77f73816fbb2ec9398acc38554df09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
