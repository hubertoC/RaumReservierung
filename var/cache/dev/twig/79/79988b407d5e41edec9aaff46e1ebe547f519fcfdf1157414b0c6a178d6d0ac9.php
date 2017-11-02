<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ae57863d1fe511f26bb53a7c057dc21cc9570263c7097c474aaa6b85973b3dc7 extends Twig_Template
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
        $__internal_99946a62d3b52728d494adacd7b0e00024d1dd9be69d2d7e0496699732ab1e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99946a62d3b52728d494adacd7b0e00024d1dd9be69d2d7e0496699732ab1e77->enter($__internal_99946a62d3b52728d494adacd7b0e00024d1dd9be69d2d7e0496699732ab1e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ea8c624d9fe047381906447e331fb478e784891fabf6537f270b205d9bc6b4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8c624d9fe047381906447e331fb478e784891fabf6537f270b205d9bc6b4a0->enter($__internal_ea8c624d9fe047381906447e331fb478e784891fabf6537f270b205d9bc6b4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_99946a62d3b52728d494adacd7b0e00024d1dd9be69d2d7e0496699732ab1e77->leave($__internal_99946a62d3b52728d494adacd7b0e00024d1dd9be69d2d7e0496699732ab1e77_prof);

        
        $__internal_ea8c624d9fe047381906447e331fb478e784891fabf6537f270b205d9bc6b4a0->leave($__internal_ea8c624d9fe047381906447e331fb478e784891fabf6537f270b205d9bc6b4a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
