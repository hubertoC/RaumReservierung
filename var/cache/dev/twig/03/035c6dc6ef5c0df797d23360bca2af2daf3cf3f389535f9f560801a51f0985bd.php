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
        $__internal_fd5ad5757ba9e11885a294dc31bf43c4ef263f47faea4438a56794bc577fa960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd5ad5757ba9e11885a294dc31bf43c4ef263f47faea4438a56794bc577fa960->enter($__internal_fd5ad5757ba9e11885a294dc31bf43c4ef263f47faea4438a56794bc577fa960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_1f77d7fdb1f8288577d5ddd5dd4232a74e0e78bb271d99fa852f27998b0c3e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f77d7fdb1f8288577d5ddd5dd4232a74e0e78bb271d99fa852f27998b0c3e9b->enter($__internal_1f77d7fdb1f8288577d5ddd5dd4232a74e0e78bb271d99fa852f27998b0c3e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fd5ad5757ba9e11885a294dc31bf43c4ef263f47faea4438a56794bc577fa960->leave($__internal_fd5ad5757ba9e11885a294dc31bf43c4ef263f47faea4438a56794bc577fa960_prof);

        
        $__internal_1f77d7fdb1f8288577d5ddd5dd4232a74e0e78bb271d99fa852f27998b0c3e9b->leave($__internal_1f77d7fdb1f8288577d5ddd5dd4232a74e0e78bb271d99fa852f27998b0c3e9b_prof);

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
