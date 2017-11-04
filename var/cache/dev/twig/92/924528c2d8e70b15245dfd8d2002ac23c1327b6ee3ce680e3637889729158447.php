<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_4c0b7587427e8f7589cdf6f751c78ca7f63aa49ca9575ced81d7d03a44e8f85e extends Twig_Template
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
        $__internal_a759c66fb1af94728530221eeb3cf4c4577a11c2bc2bbc0a419e963d7848ef76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a759c66fb1af94728530221eeb3cf4c4577a11c2bc2bbc0a419e963d7848ef76->enter($__internal_a759c66fb1af94728530221eeb3cf4c4577a11c2bc2bbc0a419e963d7848ef76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_d0855c0d9f439e0457691b0ee3303360cda41e6ed941d5cab0f381172fc65026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0855c0d9f439e0457691b0ee3303360cda41e6ed941d5cab0f381172fc65026->enter($__internal_d0855c0d9f439e0457691b0ee3303360cda41e6ed941d5cab0f381172fc65026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_a759c66fb1af94728530221eeb3cf4c4577a11c2bc2bbc0a419e963d7848ef76->leave($__internal_a759c66fb1af94728530221eeb3cf4c4577a11c2bc2bbc0a419e963d7848ef76_prof);

        
        $__internal_d0855c0d9f439e0457691b0ee3303360cda41e6ed941d5cab0f381172fc65026->leave($__internal_d0855c0d9f439e0457691b0ee3303360cda41e6ed941d5cab0f381172fc65026_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
