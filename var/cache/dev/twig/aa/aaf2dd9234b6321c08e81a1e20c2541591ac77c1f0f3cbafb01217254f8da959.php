<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a1d264c351596849d6761ebfa1b0363bd8a548da0f70fd593f321874c5770a81 extends Twig_Template
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
        $__internal_4a93b362a5de0efe1614f40d6379e091e8fb724f68f6300feda40ce48a882be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a93b362a5de0efe1614f40d6379e091e8fb724f68f6300feda40ce48a882be3->enter($__internal_4a93b362a5de0efe1614f40d6379e091e8fb724f68f6300feda40ce48a882be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_018a1d3e9f2753d2ad7e05c83220e3ef76a2288fc6c5b8e87ae2ba099ffa97cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018a1d3e9f2753d2ad7e05c83220e3ef76a2288fc6c5b8e87ae2ba099ffa97cc->enter($__internal_018a1d3e9f2753d2ad7e05c83220e3ef76a2288fc6c5b8e87ae2ba099ffa97cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4a93b362a5de0efe1614f40d6379e091e8fb724f68f6300feda40ce48a882be3->leave($__internal_4a93b362a5de0efe1614f40d6379e091e8fb724f68f6300feda40ce48a882be3_prof);

        
        $__internal_018a1d3e9f2753d2ad7e05c83220e3ef76a2288fc6c5b8e87ae2ba099ffa97cc->leave($__internal_018a1d3e9f2753d2ad7e05c83220e3ef76a2288fc6c5b8e87ae2ba099ffa97cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
