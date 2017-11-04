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
        $__internal_2bdfa4900e24be2d439c31d469342c03b586908e3bfdf29390c1abc97a0f6995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bdfa4900e24be2d439c31d469342c03b586908e3bfdf29390c1abc97a0f6995->enter($__internal_2bdfa4900e24be2d439c31d469342c03b586908e3bfdf29390c1abc97a0f6995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3ce909a4498877b194912e047843b99b9fe225848d53d17704dddf3e4688904d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce909a4498877b194912e047843b99b9fe225848d53d17704dddf3e4688904d->enter($__internal_3ce909a4498877b194912e047843b99b9fe225848d53d17704dddf3e4688904d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2bdfa4900e24be2d439c31d469342c03b586908e3bfdf29390c1abc97a0f6995->leave($__internal_2bdfa4900e24be2d439c31d469342c03b586908e3bfdf29390c1abc97a0f6995_prof);

        
        $__internal_3ce909a4498877b194912e047843b99b9fe225848d53d17704dddf3e4688904d->leave($__internal_3ce909a4498877b194912e047843b99b9fe225848d53d17704dddf3e4688904d_prof);

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
