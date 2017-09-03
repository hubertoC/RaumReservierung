<?php

/* HZraumReservierungBundle:RaumHtml:raumInfos.html.twig */
class __TwigTemplate_8ab17b5daa5d1c597cfc61e7062b72107bcb8cb1c39c616a68a6e58182384b56 extends Twig_Template
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
        $__internal_d2bb5e110fe6a928117ccec89208eb899e2ad12189a2529a3aa419a01f30bd75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2bb5e110fe6a928117ccec89208eb899e2ad12189a2529a3aa419a01f30bd75->enter($__internal_d2bb5e110fe6a928117ccec89208eb899e2ad12189a2529a3aa419a01f30bd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:raumInfos.html.twig"));

        $__internal_4ddae561d0fa1d1e16a7db1c0d3e4cc3f69d0124c4923da0169de7baafaadfd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ddae561d0fa1d1e16a7db1c0d3e4cc3f69d0124c4923da0169de7baafaadfd3->enter($__internal_4ddae561d0fa1d1e16a7db1c0d3e4cc3f69d0124c4923da0169de7baafaadfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:raumInfos.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Raum Infos</title>
  </head>
  <body>
    Infos sur une seule salle!!!!:
    Nom: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["infos"]) ? $context["infos"] : $this->getContext($context, "infos")), "name", array()), "html", null, true);
        echo "

    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("h_zraum_reservierung_reservierung");
        echo "\">
<button type=\"button\" name=\"button\">Buchen</button>
  </body>
</html>
";
        
        $__internal_d2bb5e110fe6a928117ccec89208eb899e2ad12189a2529a3aa419a01f30bd75->leave($__internal_d2bb5e110fe6a928117ccec89208eb899e2ad12189a2529a3aa419a01f30bd75_prof);

        
        $__internal_4ddae561d0fa1d1e16a7db1c0d3e4cc3f69d0124c4923da0169de7baafaadfd3->leave($__internal_4ddae561d0fa1d1e16a7db1c0d3e4cc3f69d0124c4923da0169de7baafaadfd3_prof);

    }

    public function getTemplateName()
    {
        return "HZraumReservierungBundle:RaumHtml:raumInfos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Raum Infos</title>
  </head>
  <body>
    Infos sur une seule salle!!!!:
    Nom: {{infos.name}}

    <a href=\"{{ path('h_zraum_reservierung_reservierung') }}\">
<button type=\"button\" name=\"button\">Buchen</button>
  </body>
</html>
", "HZraumReservierungBundle:RaumHtml:raumInfos.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/src/HZ/raumReservierungBundle/Resources/views/RaumHtml/raumInfos.html.twig");
    }
}
