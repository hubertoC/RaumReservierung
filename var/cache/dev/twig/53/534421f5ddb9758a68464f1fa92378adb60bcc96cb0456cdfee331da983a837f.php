<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9da11d6220d24485f559c5af8e9ac7f0efd88c63c83dac4dee9820379c40a776 extends Twig_Template
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
        $__internal_b3ac9a63b19e32c1731a17d48a24e9a5cfb17623a8b27c3e9f3339345cc87dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ac9a63b19e32c1731a17d48a24e9a5cfb17623a8b27c3e9f3339345cc87dea->enter($__internal_b3ac9a63b19e32c1731a17d48a24e9a5cfb17623a8b27c3e9f3339345cc87dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_cd5f2b3668e5f917abf3cbdfbadf4a77e0278c34090102fa8f985e73bad0720d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5f2b3668e5f917abf3cbdfbadf4a77e0278c34090102fa8f985e73bad0720d->enter($__internal_cd5f2b3668e5f917abf3cbdfbadf4a77e0278c34090102fa8f985e73bad0720d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b3ac9a63b19e32c1731a17d48a24e9a5cfb17623a8b27c3e9f3339345cc87dea->leave($__internal_b3ac9a63b19e32c1731a17d48a24e9a5cfb17623a8b27c3e9f3339345cc87dea_prof);

        
        $__internal_cd5f2b3668e5f917abf3cbdfbadf4a77e0278c34090102fa8f985e73bad0720d->leave($__internal_cd5f2b3668e5f917abf3cbdfbadf4a77e0278c34090102fa8f985e73bad0720d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
