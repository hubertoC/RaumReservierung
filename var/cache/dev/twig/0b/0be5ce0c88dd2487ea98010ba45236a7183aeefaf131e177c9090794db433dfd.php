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
        $__internal_65bf212906f9e34a77ad739f93fe095da108b13bd6b841aa030af6dc7271de6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bf212906f9e34a77ad739f93fe095da108b13bd6b841aa030af6dc7271de6e->enter($__internal_65bf212906f9e34a77ad739f93fe095da108b13bd6b841aa030af6dc7271de6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_f9434cef1cbad1eca30a8e6d7d33855aa6ac0ee0bd9cbded6a0a7551f705f625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9434cef1cbad1eca30a8e6d7d33855aa6ac0ee0bd9cbded6a0a7551f705f625->enter($__internal_f9434cef1cbad1eca30a8e6d7d33855aa6ac0ee0bd9cbded6a0a7551f705f625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_65bf212906f9e34a77ad739f93fe095da108b13bd6b841aa030af6dc7271de6e->leave($__internal_65bf212906f9e34a77ad739f93fe095da108b13bd6b841aa030af6dc7271de6e_prof);

        
        $__internal_f9434cef1cbad1eca30a8e6d7d33855aa6ac0ee0bd9cbded6a0a7551f705f625->leave($__internal_f9434cef1cbad1eca30a8e6d7d33855aa6ac0ee0bd9cbded6a0a7551f705f625_prof);

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
