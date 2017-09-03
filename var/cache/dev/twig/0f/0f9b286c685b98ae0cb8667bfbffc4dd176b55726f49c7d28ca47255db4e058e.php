<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_015caeaf3123cd3977c6cb991b209e3ac2869deaa4203756168003a4d29820c1 extends Twig_Template
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
        $__internal_b7a8ea6c621e4c0c5b06b7a941fdc245b424059e4da57a4a2c7e87fdc5ff3592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a8ea6c621e4c0c5b06b7a941fdc245b424059e4da57a4a2c7e87fdc5ff3592->enter($__internal_b7a8ea6c621e4c0c5b06b7a941fdc245b424059e4da57a4a2c7e87fdc5ff3592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_7a94a6865a81d0c3cd15f186fde8ffece11e05e3069eb73b72ea63ba4629018e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a94a6865a81d0c3cd15f186fde8ffece11e05e3069eb73b72ea63ba4629018e->enter($__internal_7a94a6865a81d0c3cd15f186fde8ffece11e05e3069eb73b72ea63ba4629018e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_b7a8ea6c621e4c0c5b06b7a941fdc245b424059e4da57a4a2c7e87fdc5ff3592->leave($__internal_b7a8ea6c621e4c0c5b06b7a941fdc245b424059e4da57a4a2c7e87fdc5ff3592_prof);

        
        $__internal_7a94a6865a81d0c3cd15f186fde8ffece11e05e3069eb73b72ea63ba4629018e->leave($__internal_7a94a6865a81d0c3cd15f186fde8ffece11e05e3069eb73b72ea63ba4629018e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
