<?php

/* :dozent:edit.html.twig */
class __TwigTemplate_ac238709e57cf63af729986f8fb1ea244627354c8efcae08f8772726fe01c032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dozent:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78bdb101ca18f89b6dc9c563ebca582629cbb8a55d2b43b26bfd24863a97f965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78bdb101ca18f89b6dc9c563ebca582629cbb8a55d2b43b26bfd24863a97f965->enter($__internal_78bdb101ca18f89b6dc9c563ebca582629cbb8a55d2b43b26bfd24863a97f965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dozent:edit.html.twig"));

        $__internal_53b3915a790a8251b1fac8cb1d05d28655a3b16d3860a72fc718612e55958aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b3915a790a8251b1fac8cb1d05d28655a3b16d3860a72fc718612e55958aac->enter($__internal_53b3915a790a8251b1fac8cb1d05d28655a3b16d3860a72fc718612e55958aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dozent:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78bdb101ca18f89b6dc9c563ebca582629cbb8a55d2b43b26bfd24863a97f965->leave($__internal_78bdb101ca18f89b6dc9c563ebca582629cbb8a55d2b43b26bfd24863a97f965_prof);

        
        $__internal_53b3915a790a8251b1fac8cb1d05d28655a3b16d3860a72fc718612e55958aac->leave($__internal_53b3915a790a8251b1fac8cb1d05d28655a3b16d3860a72fc718612e55958aac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e1cb2309a0856448b04834d396afafed10b104c83fc8a66d9154370001d1356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1cb2309a0856448b04834d396afafed10b104c83fc8a66d9154370001d1356->enter($__internal_2e1cb2309a0856448b04834d396afafed10b104c83fc8a66d9154370001d1356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fb242f5c466c0168b2d578600eadda256f3494f201a5236301813b7bc579a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb242f5c466c0168b2d578600eadda256f3494f201a5236301813b7bc579a61->enter($__internal_4fb242f5c466c0168b2d578600eadda256f3494f201a5236301813b7bc579a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dozent edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminDozent_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4fb242f5c466c0168b2d578600eadda256f3494f201a5236301813b7bc579a61->leave($__internal_4fb242f5c466c0168b2d578600eadda256f3494f201a5236301813b7bc579a61_prof);

        
        $__internal_2e1cb2309a0856448b04834d396afafed10b104c83fc8a66d9154370001d1356->leave($__internal_2e1cb2309a0856448b04834d396afafed10b104c83fc8a66d9154370001d1356_prof);

    }

    public function getTemplateName()
    {
        return ":dozent:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Dozent edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('adminDozent_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":dozent:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/dozent/edit.html.twig");
    }
}
