<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_cc1dc1b697ced378c3968c2336c4b3a5548f6c3a7871763acf4ca50bd3618b8a extends Twig_Template
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
        $__internal_d575e3d55a9ef2e567e8437ebedc0acfbf1d180a15e1ce797f419dd9a4e1cdff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d575e3d55a9ef2e567e8437ebedc0acfbf1d180a15e1ce797f419dd9a4e1cdff->enter($__internal_d575e3d55a9ef2e567e8437ebedc0acfbf1d180a15e1ce797f419dd9a4e1cdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_91fb92605d054441e06b7b9565a116868db649104802babf2d68d2be25c5175e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fb92605d054441e06b7b9565a116868db649104802babf2d68d2be25c5175e->enter($__internal_91fb92605d054441e06b7b9565a116868db649104802babf2d68d2be25c5175e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d575e3d55a9ef2e567e8437ebedc0acfbf1d180a15e1ce797f419dd9a4e1cdff->leave($__internal_d575e3d55a9ef2e567e8437ebedc0acfbf1d180a15e1ce797f419dd9a4e1cdff_prof);

        
        $__internal_91fb92605d054441e06b7b9565a116868db649104802babf2d68d2be25c5175e->leave($__internal_91fb92605d054441e06b7b9565a116868db649104802babf2d68d2be25c5175e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
