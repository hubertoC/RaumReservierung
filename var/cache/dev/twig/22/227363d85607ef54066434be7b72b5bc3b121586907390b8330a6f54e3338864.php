<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_91aed4adf6a951bc483dd424056c191baf3e416cacbba8e82613c7d2704f25ba extends Twig_Template
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
        $__internal_1db98a638e49a1a2d63b19ab12fec4e670f5b6f96fc4b5fcd00b2200e426e8c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db98a638e49a1a2d63b19ab12fec4e670f5b6f96fc4b5fcd00b2200e426e8c7->enter($__internal_1db98a638e49a1a2d63b19ab12fec4e670f5b6f96fc4b5fcd00b2200e426e8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1b40b437bf44c1137d2d6aeed82a44a0ea760e7e63deffa9d32109a8a4be79b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b40b437bf44c1137d2d6aeed82a44a0ea760e7e63deffa9d32109a8a4be79b3->enter($__internal_1b40b437bf44c1137d2d6aeed82a44a0ea760e7e63deffa9d32109a8a4be79b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1db98a638e49a1a2d63b19ab12fec4e670f5b6f96fc4b5fcd00b2200e426e8c7->leave($__internal_1db98a638e49a1a2d63b19ab12fec4e670f5b6f96fc4b5fcd00b2200e426e8c7_prof);

        
        $__internal_1b40b437bf44c1137d2d6aeed82a44a0ea760e7e63deffa9d32109a8a4be79b3->leave($__internal_1b40b437bf44c1137d2d6aeed82a44a0ea760e7e63deffa9d32109a8a4be79b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
