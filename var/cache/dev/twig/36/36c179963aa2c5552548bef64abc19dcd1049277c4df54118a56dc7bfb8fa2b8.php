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
        $__internal_fec917777ce8e5dd4245ed277e3c04145a134ecc4f46d5e6753036728ce75a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec917777ce8e5dd4245ed277e3c04145a134ecc4f46d5e6753036728ce75a3f->enter($__internal_fec917777ce8e5dd4245ed277e3c04145a134ecc4f46d5e6753036728ce75a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_3150ae271c868fa9aff9833284ae79fd956178ad47bd6cb8ef889ba586de82f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3150ae271c868fa9aff9833284ae79fd956178ad47bd6cb8ef889ba586de82f1->enter($__internal_3150ae271c868fa9aff9833284ae79fd956178ad47bd6cb8ef889ba586de82f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fec917777ce8e5dd4245ed277e3c04145a134ecc4f46d5e6753036728ce75a3f->leave($__internal_fec917777ce8e5dd4245ed277e3c04145a134ecc4f46d5e6753036728ce75a3f_prof);

        
        $__internal_3150ae271c868fa9aff9833284ae79fd956178ad47bd6cb8ef889ba586de82f1->leave($__internal_3150ae271c868fa9aff9833284ae79fd956178ad47bd6cb8ef889ba586de82f1_prof);

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
