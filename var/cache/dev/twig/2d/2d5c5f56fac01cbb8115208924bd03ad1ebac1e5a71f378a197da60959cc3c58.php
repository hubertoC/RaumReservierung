<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6b38662d66d1ce4c34acea89e6af9ad6f67f97b7be7103dee6eabbe5dcb97a49 extends Twig_Template
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
        $__internal_6d5b2bbd44cd5e4e509527d558580b624467cbc3b40c9e70b15a5c4e85cf191d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5b2bbd44cd5e4e509527d558580b624467cbc3b40c9e70b15a5c4e85cf191d->enter($__internal_6d5b2bbd44cd5e4e509527d558580b624467cbc3b40c9e70b15a5c4e85cf191d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c2ebaa2a94c4a6d5caff3811310c123ec96a2fac8203d5941e6b22c7f2b53339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ebaa2a94c4a6d5caff3811310c123ec96a2fac8203d5941e6b22c7f2b53339->enter($__internal_c2ebaa2a94c4a6d5caff3811310c123ec96a2fac8203d5941e6b22c7f2b53339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6d5b2bbd44cd5e4e509527d558580b624467cbc3b40c9e70b15a5c4e85cf191d->leave($__internal_6d5b2bbd44cd5e4e509527d558580b624467cbc3b40c9e70b15a5c4e85cf191d_prof);

        
        $__internal_c2ebaa2a94c4a6d5caff3811310c123ec96a2fac8203d5941e6b22c7f2b53339->leave($__internal_c2ebaa2a94c4a6d5caff3811310c123ec96a2fac8203d5941e6b22c7f2b53339_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
