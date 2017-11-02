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
        $__internal_9b2f67a4be9f2627e2b4b591827811ec211cfdf0a08a3cf4a24b0e78ae79ba88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2f67a4be9f2627e2b4b591827811ec211cfdf0a08a3cf4a24b0e78ae79ba88->enter($__internal_9b2f67a4be9f2627e2b4b591827811ec211cfdf0a08a3cf4a24b0e78ae79ba88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b1d0b98861e878263514f0d0b3e7d2643671ad42d769b5979d3d4b8e0e45f62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d0b98861e878263514f0d0b3e7d2643671ad42d769b5979d3d4b8e0e45f62a->enter($__internal_b1d0b98861e878263514f0d0b3e7d2643671ad42d769b5979d3d4b8e0e45f62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9b2f67a4be9f2627e2b4b591827811ec211cfdf0a08a3cf4a24b0e78ae79ba88->leave($__internal_9b2f67a4be9f2627e2b4b591827811ec211cfdf0a08a3cf4a24b0e78ae79ba88_prof);

        
        $__internal_b1d0b98861e878263514f0d0b3e7d2643671ad42d769b5979d3d4b8e0e45f62a->leave($__internal_b1d0b98861e878263514f0d0b3e7d2643671ad42d769b5979d3d4b8e0e45f62a_prof);

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
