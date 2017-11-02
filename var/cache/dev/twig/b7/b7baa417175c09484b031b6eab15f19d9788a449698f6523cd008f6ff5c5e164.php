<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a5f4964b8dd2411fb4b93db10fd09e972e9a4fc40c61ab201c92f8f0befe5dec extends Twig_Template
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
        $__internal_bf91ba45f640d93bdd4f76bbe61c0316ce3f1e09aed5e3cbd7511382c1202df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf91ba45f640d93bdd4f76bbe61c0316ce3f1e09aed5e3cbd7511382c1202df2->enter($__internal_bf91ba45f640d93bdd4f76bbe61c0316ce3f1e09aed5e3cbd7511382c1202df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6a442510c4fe8c105347407d8bcb7155d84eb72386e673e8c5b44c985318e4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a442510c4fe8c105347407d8bcb7155d84eb72386e673e8c5b44c985318e4bf->enter($__internal_6a442510c4fe8c105347407d8bcb7155d84eb72386e673e8c5b44c985318e4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bf91ba45f640d93bdd4f76bbe61c0316ce3f1e09aed5e3cbd7511382c1202df2->leave($__internal_bf91ba45f640d93bdd4f76bbe61c0316ce3f1e09aed5e3cbd7511382c1202df2_prof);

        
        $__internal_6a442510c4fe8c105347407d8bcb7155d84eb72386e673e8c5b44c985318e4bf->leave($__internal_6a442510c4fe8c105347407d8bcb7155d84eb72386e673e8c5b44c985318e4bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
