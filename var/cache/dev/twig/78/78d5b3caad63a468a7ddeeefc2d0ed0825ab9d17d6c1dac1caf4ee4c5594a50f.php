<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e4ea56bab3502f3da936ffd9a103a86239b82b19856d93c74d0c3c27071128c6 extends Twig_Template
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
        $__internal_c39986b453c15cdf86839c839585021090a574bb34747c1cec519bd8f6fc2c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39986b453c15cdf86839c839585021090a574bb34747c1cec519bd8f6fc2c25->enter($__internal_c39986b453c15cdf86839c839585021090a574bb34747c1cec519bd8f6fc2c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_ca4f6cc04c24e4ba613f631c120a5bbc88addb70c1196170c279dbee31d5edfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4f6cc04c24e4ba613f631c120a5bbc88addb70c1196170c279dbee31d5edfb->enter($__internal_ca4f6cc04c24e4ba613f631c120a5bbc88addb70c1196170c279dbee31d5edfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c39986b453c15cdf86839c839585021090a574bb34747c1cec519bd8f6fc2c25->leave($__internal_c39986b453c15cdf86839c839585021090a574bb34747c1cec519bd8f6fc2c25_prof);

        
        $__internal_ca4f6cc04c24e4ba613f631c120a5bbc88addb70c1196170c279dbee31d5edfb->leave($__internal_ca4f6cc04c24e4ba613f631c120a5bbc88addb70c1196170c279dbee31d5edfb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
