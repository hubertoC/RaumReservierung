<?php

/* :gebaeude:show.html.twig */
class __TwigTemplate_7afe820ac7ea24ee89d24042ff9c8f5c3632890b904fb4639d70af6594e2cb74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":gebaeude:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7e1c6c3b77b318f8ec0d8c48c7fd875ba35cc8a2a0c9f73fb23398eb52cecd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e1c6c3b77b318f8ec0d8c48c7fd875ba35cc8a2a0c9f73fb23398eb52cecd0->enter($__internal_e7e1c6c3b77b318f8ec0d8c48c7fd875ba35cc8a2a0c9f73fb23398eb52cecd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gebaeude:show.html.twig"));

        $__internal_7901bacf086b60de38f3a8c12e8c5166506a4676af999e268f411e7def3cb141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7901bacf086b60de38f3a8c12e8c5166506a4676af999e268f411e7def3cb141->enter($__internal_7901bacf086b60de38f3a8c12e8c5166506a4676af999e268f411e7def3cb141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":gebaeude:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7e1c6c3b77b318f8ec0d8c48c7fd875ba35cc8a2a0c9f73fb23398eb52cecd0->leave($__internal_e7e1c6c3b77b318f8ec0d8c48c7fd875ba35cc8a2a0c9f73fb23398eb52cecd0_prof);

        
        $__internal_7901bacf086b60de38f3a8c12e8c5166506a4676af999e268f411e7def3cb141->leave($__internal_7901bacf086b60de38f3a8c12e8c5166506a4676af999e268f411e7def3cb141_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36a2c9bb110b0b238548129851199fb62cb8729841784e388418c7c0900402c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a2c9bb110b0b238548129851199fb62cb8729841784e388418c7c0900402c2->enter($__internal_36a2c9bb110b0b238548129851199fb62cb8729841784e388418c7c0900402c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8f6db11155a27536261a18dde394259e99c6c30727c29ce5c5f4792ababf95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f6db11155a27536261a18dde394259e99c6c30727c29ce5c5f4792ababf95e->enter($__internal_b8f6db11155a27536261a18dde394259e99c6c30727c29ce5c5f4792ababf95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Gebaeude</h1>
    <div class=\"conte_show\">

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gebaeude"]) ? $context["gebaeude"] : $this->getContext($context, "gebaeude")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nummer</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gebaeude"]) ? $context["gebaeude"] : $this->getContext($context, "gebaeude")), "nummer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gebaeude"]) ? $context["gebaeude"] : $this->getContext($context, "gebaeude")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <li>
        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <div class=\"show_suprimer\">

            <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
      </div>
    </li>
    <ul>
        <li>
          <div class=\"show_modifier\">

          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_edit", array("id" => $this->getAttribute((isset($context["gebaeude"]) ? $context["gebaeude"] : $this->getContext($context, "gebaeude")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
</div>
        </li>
      </ul>
      <ul>
        <li>
          <div class=\"show_retour\">

          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminGebaeude_index");
        echo "\">Back to the list</a>
</div>
        </li>

    </ul>
  </div>
";
        
        $__internal_b8f6db11155a27536261a18dde394259e99c6c30727c29ce5c5f4792ababf95e->leave($__internal_b8f6db11155a27536261a18dde394259e99c6c30727c29ce5c5f4792ababf95e_prof);

        
        $__internal_36a2c9bb110b0b238548129851199fb62cb8729841784e388418c7c0900402c2->leave($__internal_36a2c9bb110b0b238548129851199fb62cb8729841784e388418c7c0900402c2_prof);

    }

    public function getTemplateName()
    {
        return ":gebaeude:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  98 => 36,  88 => 29,  81 => 25,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layoutAdmin.html.twig' %}

{% block body %}
    <h1>Gebaeude</h1>
    <div class=\"conte_show\">

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ gebaeude.id }}</td>
            </tr>
            <tr>
                <th>Nummer</th>
                <td>{{ gebaeude.nummer }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ gebaeude.name }}</td>
            </tr>
        </tbody>
    </table>

    <li>
        {{ form_start(delete_form) }}
        <div class=\"show_suprimer\">

            <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
        {{ form_end(delete_form) }}
      </div>
    </li>
    <ul>
        <li>
          <div class=\"show_modifier\">

          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminGebaeude_edit', { 'id': gebaeude.id }) }}\">Edit</a>
</div>
        </li>
      </ul>
      <ul>
        <li>
          <div class=\"show_retour\">

          <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminGebaeude_index') }}\">Back to the list</a>
</div>
        </li>

    </ul>
  </div>
{% endblock %}
", ":gebaeude:show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/gebaeude/show.html.twig");
    }
}
