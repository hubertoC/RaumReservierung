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
        $__internal_eafdfbecec0eb79b0a4fcf2ae49d12a86aee2b3b81a91bfa665aacfd0dad527a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eafdfbecec0eb79b0a4fcf2ae49d12a86aee2b3b81a91bfa665aacfd0dad527a->enter($__internal_eafdfbecec0eb79b0a4fcf2ae49d12a86aee2b3b81a91bfa665aacfd0dad527a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_92e5c577ce8ef2beab52659fd16525ae0a012c4596b0bd63d16d60382ed73a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e5c577ce8ef2beab52659fd16525ae0a012c4596b0bd63d16d60382ed73a45->enter($__internal_92e5c577ce8ef2beab52659fd16525ae0a012c4596b0bd63d16d60382ed73a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_eafdfbecec0eb79b0a4fcf2ae49d12a86aee2b3b81a91bfa665aacfd0dad527a->leave($__internal_eafdfbecec0eb79b0a4fcf2ae49d12a86aee2b3b81a91bfa665aacfd0dad527a_prof);

        
        $__internal_92e5c577ce8ef2beab52659fd16525ae0a012c4596b0bd63d16d60382ed73a45->leave($__internal_92e5c577ce8ef2beab52659fd16525ae0a012c4596b0bd63d16d60382ed73a45_prof);

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
