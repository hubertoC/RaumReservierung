<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5390b84b48348256ff891d4fbe3d59406dc5309f04a6400df6cb7f05609d507f extends Twig_Template
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
        $__internal_3e0711dd8942cfb628c8e8dcef4b553a40ffe0cc02653855bf48d01e56d55da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0711dd8942cfb628c8e8dcef4b553a40ffe0cc02653855bf48d01e56d55da0->enter($__internal_3e0711dd8942cfb628c8e8dcef4b553a40ffe0cc02653855bf48d01e56d55da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_dc66b22bcf5effc5c540438817391da7b9658c0b53da5e6a103ebed2f49c9495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc66b22bcf5effc5c540438817391da7b9658c0b53da5e6a103ebed2f49c9495->enter($__internal_dc66b22bcf5effc5c540438817391da7b9658c0b53da5e6a103ebed2f49c9495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_3e0711dd8942cfb628c8e8dcef4b553a40ffe0cc02653855bf48d01e56d55da0->leave($__internal_3e0711dd8942cfb628c8e8dcef4b553a40ffe0cc02653855bf48d01e56d55da0_prof);

        
        $__internal_dc66b22bcf5effc5c540438817391da7b9658c0b53da5e6a103ebed2f49c9495->leave($__internal_dc66b22bcf5effc5c540438817391da7b9658c0b53da5e6a103ebed2f49c9495_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
