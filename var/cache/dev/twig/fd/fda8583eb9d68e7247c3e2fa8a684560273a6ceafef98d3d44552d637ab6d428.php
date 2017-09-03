<?php

/* HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig */
class __TwigTemplate_cb1254da5ab25c994c3a6d8a76ba526f074bc68d50bdcb6b2db1e61233d4a114 extends Twig_Template
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
        $__internal_259987edf8d9e5397d8e182726194055e60c1a79c4e703540729fe6af6f8ee6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259987edf8d9e5397d8e182726194055e60c1a79c4e703540729fe6af6f8ee6e->enter($__internal_259987edf8d9e5397d8e182726194055e60c1a79c4e703540729fe6af6f8ee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig"));

        $__internal_affe1eb557cf8fdb89ce3702ad66a948bd04c4e41667e19d31f26cec8fd1f40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affe1eb557cf8fdb89ce3702ad66a948bd04c4e41667e19d31f26cec8fd1f40a->enter($__internal_affe1eb557cf8fdb89ce3702ad66a948bd04c4e41667e19d31f26cec8fd1f40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Raum Pro Gebaeude</title>
  </head>
  <body>
    liste des Raeme de se Gebaeude:
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["raeume"]) ? $context["raeume"] : $this->getContext($context, "raeume")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("h_zraum_reservierung_raumInfos", array("raum" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">
";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </body>
</html>
";
        
        $__internal_259987edf8d9e5397d8e182726194055e60c1a79c4e703540729fe6af6f8ee6e->leave($__internal_259987edf8d9e5397d8e182726194055e60c1a79c4e703540729fe6af6f8ee6e_prof);

        
        $__internal_affe1eb557cf8fdb89ce3702ad66a948bd04c4e41667e19d31f26cec8fd1f40a->leave($__internal_affe1eb557cf8fdb89ce3702ad66a948bd04c4e41667e19d31f26cec8fd1f40a_prof);

    }

    public function getTemplateName()
    {
        return "HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  44 => 11,  39 => 10,  35 => 9,  25 => 1,);
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
    <title>Raum Pro Gebaeude</title>
  </head>
  <body>
    liste des Raeme de se Gebaeude:
    {% for item in raeume %}
    <a href=\"{{ path('h_zraum_reservierung_raumInfos', {'raum': item.id}) }}\">
{{item.name}}
    {% endfor %}
  </body>
</html>
", "HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/src/HZ/raumReservierungBundle/Resources/views/RaumHtml/gebauedeRaum.html.twig");
    }
}
