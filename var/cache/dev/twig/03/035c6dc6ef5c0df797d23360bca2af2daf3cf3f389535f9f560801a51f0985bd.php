<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8696d5ff766125ecb6b04905857e879bd5fb61eb5a5b7eb95f4a39b457a6ffd3 extends Twig_Template
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
        $__internal_2c6d1e357e8aa3b91466e5eae67cad00ad4ca5e06c6d997a110a89f9f6fda015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6d1e357e8aa3b91466e5eae67cad00ad4ca5e06c6d997a110a89f9f6fda015->enter($__internal_2c6d1e357e8aa3b91466e5eae67cad00ad4ca5e06c6d997a110a89f9f6fda015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_8e259f8ff5d1e32504264bb4eea0690c1a8aee1af0edec2f045fb56abcba6899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e259f8ff5d1e32504264bb4eea0690c1a8aee1af0edec2f045fb56abcba6899->enter($__internal_8e259f8ff5d1e32504264bb4eea0690c1a8aee1af0edec2f045fb56abcba6899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2c6d1e357e8aa3b91466e5eae67cad00ad4ca5e06c6d997a110a89f9f6fda015->leave($__internal_2c6d1e357e8aa3b91466e5eae67cad00ad4ca5e06c6d997a110a89f9f6fda015_prof);

        
        $__internal_8e259f8ff5d1e32504264bb4eea0690c1a8aee1af0edec2f045fb56abcba6899->leave($__internal_8e259f8ff5d1e32504264bb4eea0690c1a8aee1af0edec2f045fb56abcba6899_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
