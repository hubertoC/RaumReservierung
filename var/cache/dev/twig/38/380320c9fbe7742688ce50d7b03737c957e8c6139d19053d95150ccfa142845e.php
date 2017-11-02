<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a024dafbc5674a8ba25deb5c4217d1e2ec04411af345cbad092b266948505bbd extends Twig_Template
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
        $__internal_1cd45bf7eac37b9fa2debd0b60285f47023173c875e3a6132c58ca37da0de183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd45bf7eac37b9fa2debd0b60285f47023173c875e3a6132c58ca37da0de183->enter($__internal_1cd45bf7eac37b9fa2debd0b60285f47023173c875e3a6132c58ca37da0de183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_53513fdeae1350c8cc7d93c15fdedca8aa10b0bf063ecba4ead67cbae64fb96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53513fdeae1350c8cc7d93c15fdedca8aa10b0bf063ecba4ead67cbae64fb96c->enter($__internal_53513fdeae1350c8cc7d93c15fdedca8aa10b0bf063ecba4ead67cbae64fb96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1cd45bf7eac37b9fa2debd0b60285f47023173c875e3a6132c58ca37da0de183->leave($__internal_1cd45bf7eac37b9fa2debd0b60285f47023173c875e3a6132c58ca37da0de183_prof);

        
        $__internal_53513fdeae1350c8cc7d93c15fdedca8aa10b0bf063ecba4ead67cbae64fb96c->leave($__internal_53513fdeae1350c8cc7d93c15fdedca8aa10b0bf063ecba4ead67cbae64fb96c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
