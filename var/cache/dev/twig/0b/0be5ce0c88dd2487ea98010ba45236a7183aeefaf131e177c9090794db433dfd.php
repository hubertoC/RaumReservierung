<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7871db9a5994c39a5e1f8fdd94727e77c1683ce6ff34cf013ec989ca94670e54 extends Twig_Template
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
        $__internal_c5b846e691cd582634e75213616600262461bbd1814d992fb9bd245b1edc1907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b846e691cd582634e75213616600262461bbd1814d992fb9bd245b1edc1907->enter($__internal_c5b846e691cd582634e75213616600262461bbd1814d992fb9bd245b1edc1907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a4963f56d60dba6dc52aaf8e9c449a68cf69b437fc0366a16a2e4e83dc3709d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4963f56d60dba6dc52aaf8e9c449a68cf69b437fc0366a16a2e4e83dc3709d7->enter($__internal_a4963f56d60dba6dc52aaf8e9c449a68cf69b437fc0366a16a2e4e83dc3709d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c5b846e691cd582634e75213616600262461bbd1814d992fb9bd245b1edc1907->leave($__internal_c5b846e691cd582634e75213616600262461bbd1814d992fb9bd245b1edc1907_prof);

        
        $__internal_a4963f56d60dba6dc52aaf8e9c449a68cf69b437fc0366a16a2e4e83dc3709d7->leave($__internal_a4963f56d60dba6dc52aaf8e9c449a68cf69b437fc0366a16a2e4e83dc3709d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
