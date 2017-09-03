<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_24a37b672924dc81e8ec3deaa819ff63d6098425765879650caa073f54a28a3a extends Twig_Template
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
        $__internal_6511cf62df88bacfe3708ed8c779197d695e54675e74dcd9aad7566cf84d0359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6511cf62df88bacfe3708ed8c779197d695e54675e74dcd9aad7566cf84d0359->enter($__internal_6511cf62df88bacfe3708ed8c779197d695e54675e74dcd9aad7566cf84d0359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a6deb6a3a17a87cabafd4765d7a4be1e96cd269549af48c6548c3175f851c217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6deb6a3a17a87cabafd4765d7a4be1e96cd269549af48c6548c3175f851c217->enter($__internal_a6deb6a3a17a87cabafd4765d7a4be1e96cd269549af48c6548c3175f851c217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6511cf62df88bacfe3708ed8c779197d695e54675e74dcd9aad7566cf84d0359->leave($__internal_6511cf62df88bacfe3708ed8c779197d695e54675e74dcd9aad7566cf84d0359_prof);

        
        $__internal_a6deb6a3a17a87cabafd4765d7a4be1e96cd269549af48c6548c3175f851c217->leave($__internal_a6deb6a3a17a87cabafd4765d7a4be1e96cd269549af48c6548c3175f851c217_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
