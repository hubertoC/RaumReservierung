<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a2db3986fb2a1e436fb6cacff4fa5fc6e0fad0f57c649a09d4f7e25bcf00f313 extends Twig_Template
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
        $__internal_8c363ef61283004770548ce9fedaf5bda766c5ef0596469d0ab9a196f80b527e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c363ef61283004770548ce9fedaf5bda766c5ef0596469d0ab9a196f80b527e->enter($__internal_8c363ef61283004770548ce9fedaf5bda766c5ef0596469d0ab9a196f80b527e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5e36e2c3cd06bfb8e680513d6f29aaad0cbaf588b4a066d53c8218992f41cb83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e36e2c3cd06bfb8e680513d6f29aaad0cbaf588b4a066d53c8218992f41cb83->enter($__internal_5e36e2c3cd06bfb8e680513d6f29aaad0cbaf588b4a066d53c8218992f41cb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8c363ef61283004770548ce9fedaf5bda766c5ef0596469d0ab9a196f80b527e->leave($__internal_8c363ef61283004770548ce9fedaf5bda766c5ef0596469d0ab9a196f80b527e_prof);

        
        $__internal_5e36e2c3cd06bfb8e680513d6f29aaad0cbaf588b4a066d53c8218992f41cb83->leave($__internal_5e36e2c3cd06bfb8e680513d6f29aaad0cbaf588b4a066d53c8218992f41cb83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
