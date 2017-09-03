<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_5a9aed02b93250ded06bc5e9e0cdadf24e1c2e0dd054b82b300c2afdd1bc5186 extends Twig_Template
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
        $__internal_72c9607fa54494ff508afc8bc1fe0f24af13a90374266b63caf1009973860172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c9607fa54494ff508afc8bc1fe0f24af13a90374266b63caf1009973860172->enter($__internal_72c9607fa54494ff508afc8bc1fe0f24af13a90374266b63caf1009973860172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0ad3dbac038d987e532e92bef7742cdf3162fc32c053900bfd93ab40ee3a61ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad3dbac038d987e532e92bef7742cdf3162fc32c053900bfd93ab40ee3a61ad->enter($__internal_0ad3dbac038d987e532e92bef7742cdf3162fc32c053900bfd93ab40ee3a61ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_72c9607fa54494ff508afc8bc1fe0f24af13a90374266b63caf1009973860172->leave($__internal_72c9607fa54494ff508afc8bc1fe0f24af13a90374266b63caf1009973860172_prof);

        
        $__internal_0ad3dbac038d987e532e92bef7742cdf3162fc32c053900bfd93ab40ee3a61ad->leave($__internal_0ad3dbac038d987e532e92bef7742cdf3162fc32c053900bfd93ab40ee3a61ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
