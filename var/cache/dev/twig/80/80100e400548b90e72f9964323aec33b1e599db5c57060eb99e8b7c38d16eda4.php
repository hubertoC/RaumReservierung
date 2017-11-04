<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_beaa49550627de995102d7b5c0c0a2f2b57966196781d26ee98060e55c58229d extends Twig_Template
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
        $__internal_0cfd8399988a472881af6364164027055498612ebeb49fa56cec46bf83943ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cfd8399988a472881af6364164027055498612ebeb49fa56cec46bf83943ccd->enter($__internal_0cfd8399988a472881af6364164027055498612ebeb49fa56cec46bf83943ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_9a1046adc0705510603e8a52f95766134c16c95063a7b9f33c50f0bd0e5a0592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1046adc0705510603e8a52f95766134c16c95063a7b9f33c50f0bd0e5a0592->enter($__internal_9a1046adc0705510603e8a52f95766134c16c95063a7b9f33c50f0bd0e5a0592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0cfd8399988a472881af6364164027055498612ebeb49fa56cec46bf83943ccd->leave($__internal_0cfd8399988a472881af6364164027055498612ebeb49fa56cec46bf83943ccd_prof);

        
        $__internal_9a1046adc0705510603e8a52f95766134c16c95063a7b9f33c50f0bd0e5a0592->leave($__internal_9a1046adc0705510603e8a52f95766134c16c95063a7b9f33c50f0bd0e5a0592_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
