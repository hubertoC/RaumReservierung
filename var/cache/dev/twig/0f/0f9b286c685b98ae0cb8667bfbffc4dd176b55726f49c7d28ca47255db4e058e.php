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
        $__internal_3bfacdf3c7f97b44b5ad9d91fda2676f7e46db0ad5087d7e4905ead30ea675d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bfacdf3c7f97b44b5ad9d91fda2676f7e46db0ad5087d7e4905ead30ea675d3->enter($__internal_3bfacdf3c7f97b44b5ad9d91fda2676f7e46db0ad5087d7e4905ead30ea675d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_b6191aac6ee38aa3cb7db0a2c46a0d0f3aea971e8747f19a9085f89bacdc7766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6191aac6ee38aa3cb7db0a2c46a0d0f3aea971e8747f19a9085f89bacdc7766->enter($__internal_b6191aac6ee38aa3cb7db0a2c46a0d0f3aea971e8747f19a9085f89bacdc7766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_3bfacdf3c7f97b44b5ad9d91fda2676f7e46db0ad5087d7e4905ead30ea675d3->leave($__internal_3bfacdf3c7f97b44b5ad9d91fda2676f7e46db0ad5087d7e4905ead30ea675d3_prof);

        
        $__internal_b6191aac6ee38aa3cb7db0a2c46a0d0f3aea971e8747f19a9085f89bacdc7766->leave($__internal_b6191aac6ee38aa3cb7db0a2c46a0d0f3aea971e8747f19a9085f89bacdc7766_prof);

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
