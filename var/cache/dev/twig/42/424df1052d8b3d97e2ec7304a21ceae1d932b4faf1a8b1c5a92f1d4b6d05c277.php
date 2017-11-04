<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8adbbb672375a5b9b13f4211de61ea5aba7a844d41552c826a190920e0966e56 extends Twig_Template
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
        $__internal_0336502b8883f857fa55490868facda62df49d0a1edbe5cfd973f6954eba476e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0336502b8883f857fa55490868facda62df49d0a1edbe5cfd973f6954eba476e->enter($__internal_0336502b8883f857fa55490868facda62df49d0a1edbe5cfd973f6954eba476e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_7bd036cd128a9932b2e3d91067cf447f546a105b1085005d350f538fb611fdd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd036cd128a9932b2e3d91067cf447f546a105b1085005d350f538fb611fdd3->enter($__internal_7bd036cd128a9932b2e3d91067cf447f546a105b1085005d350f538fb611fdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0336502b8883f857fa55490868facda62df49d0a1edbe5cfd973f6954eba476e->leave($__internal_0336502b8883f857fa55490868facda62df49d0a1edbe5cfd973f6954eba476e_prof);

        
        $__internal_7bd036cd128a9932b2e3d91067cf447f546a105b1085005d350f538fb611fdd3->leave($__internal_7bd036cd128a9932b2e3d91067cf447f546a105b1085005d350f538fb611fdd3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
