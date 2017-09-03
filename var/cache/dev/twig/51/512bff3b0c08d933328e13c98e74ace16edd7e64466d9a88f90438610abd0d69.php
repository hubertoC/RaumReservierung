<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3223e0f9522de4c37d9c7322f662d6ba3b2a2df77596e5c466ef565c34fcf0fc extends Twig_Template
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
        $__internal_b056bbc8ad54869c1b60f4ad3ac273c2f11af33b94ff4781a55d6b30825544c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b056bbc8ad54869c1b60f4ad3ac273c2f11af33b94ff4781a55d6b30825544c7->enter($__internal_b056bbc8ad54869c1b60f4ad3ac273c2f11af33b94ff4781a55d6b30825544c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_694cbce74012a845134e2d809589123147fe359e5b99cc4d3f8e30c7f78aa877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694cbce74012a845134e2d809589123147fe359e5b99cc4d3f8e30c7f78aa877->enter($__internal_694cbce74012a845134e2d809589123147fe359e5b99cc4d3f8e30c7f78aa877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b056bbc8ad54869c1b60f4ad3ac273c2f11af33b94ff4781a55d6b30825544c7->leave($__internal_b056bbc8ad54869c1b60f4ad3ac273c2f11af33b94ff4781a55d6b30825544c7_prof);

        
        $__internal_694cbce74012a845134e2d809589123147fe359e5b99cc4d3f8e30c7f78aa877->leave($__internal_694cbce74012a845134e2d809589123147fe359e5b99cc4d3f8e30c7f78aa877_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
