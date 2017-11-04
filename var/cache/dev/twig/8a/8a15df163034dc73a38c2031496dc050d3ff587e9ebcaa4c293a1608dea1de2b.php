<?php

/* reservierungadmin/index.html.twig */
class __TwigTemplate_64760e53ceeb51bfaf2adaacb9d7d09486f0cae3df5dd9a688ab62d886f38753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "reservierungadmin/index.html.twig", 1);
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
        $__internal_f6740daae396af7218280462832bf895c13b20c534e9cfb3ef4a7033639812c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6740daae396af7218280462832bf895c13b20c534e9cfb3ef4a7033639812c4->enter($__internal_f6740daae396af7218280462832bf895c13b20c534e9cfb3ef4a7033639812c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierungadmin/index.html.twig"));

        $__internal_f82e86d26fef8ca60f8e2365d33f092de292ee912505786261fe1521a19164f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82e86d26fef8ca60f8e2365d33f092de292ee912505786261fe1521a19164f0->enter($__internal_f82e86d26fef8ca60f8e2365d33f092de292ee912505786261fe1521a19164f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservierungadmin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6740daae396af7218280462832bf895c13b20c534e9cfb3ef4a7033639812c4->leave($__internal_f6740daae396af7218280462832bf895c13b20c534e9cfb3ef4a7033639812c4_prof);

        
        $__internal_f82e86d26fef8ca60f8e2365d33f092de292ee912505786261fe1521a19164f0->leave($__internal_f82e86d26fef8ca60f8e2365d33f092de292ee912505786261fe1521a19164f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_381845c4f5f014cb14afdf86b58cfb62b807b7fb0fb75e33cd2c8a5cc12a903a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381845c4f5f014cb14afdf86b58cfb62b807b7fb0fb75e33cd2c8a5cc12a903a->enter($__internal_381845c4f5f014cb14afdf86b58cfb62b807b7fb0fb75e33cd2c8a5cc12a903a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b85c930171ec45d49e403fe2bc4fcead3c585d4794da9f5cdfea64ff48350c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b85c930171ec45d49e403fe2bc4fcead3c585d4794da9f5cdfea64ff48350c2->enter($__internal_3b85c930171ec45d49e403fe2bc4fcead3c585d4794da9f5cdfea64ff48350c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1>Reservierungadmins list</h1>

  <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
    <thead>
      <tr>
        <th>Id</th>
        <th>Start</th>
        <th>End</th>
        <th>Title</th>
        <th>Url</th>
        <th>Classname</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservierungAdmins"]) ? $context["reservierungAdmins"] : $this->getContext($context, "reservierungAdmins")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservierungAdmin"]) {
            // line 20
            echo "        <tr>
          <td>
            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservierungadmin_show", array("id" => $this->getAttribute($context["reservierungAdmin"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservierungAdmin"], "id", array()), "html", null, true);
            echo "</a>
          </td>
          <td>
            ";
            // line 25
            if ($this->getAttribute($context["reservierungAdmin"], "start", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservierungAdmin"], "start", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            // line 26
            echo "          </td>
          <td>
            ";
            // line 28
            if ($this->getAttribute($context["reservierungAdmin"], "end", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reservierungAdmin"], "end", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            // line 29
            echo "          </td>
          <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservierungAdmin"], "title", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservierungAdmin"], "url", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservierungAdmin"], "className", array()), "html", null, true);
            echo "</td>
          <td>
            <ul>
              <li>
                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservierungadmin_show", array("id" => $this->getAttribute($context["reservierungAdmin"], "id", array()))), "html", null, true);
            echo "\">
                  <i class=\"glyphicon glyphicon-info-sign\"></i>
                </a>
              </li>
              <li>
                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservierungadmin_edit", array("id" => $this->getAttribute($context["reservierungAdmin"], "id", array()))), "html", null, true);
            echo "\">
                  <i class=\"glyphicon glyphicon-pencil\"></i>
                </a>
              </li>
            </ul>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservierungAdmin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </tbody>
  </table>

  <ul>
    <div class=\"cration_artiste\">
      <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservierungadmin_new");
        echo "\">Neue Reservierung erfassen<i class=\"glyphicon glyphicon-plus\"></i>
      </a>
    </div>
  </li>
</ul>

";
        
        $__internal_3b85c930171ec45d49e403fe2bc4fcead3c585d4794da9f5cdfea64ff48350c2->leave($__internal_3b85c930171ec45d49e403fe2bc4fcead3c585d4794da9f5cdfea64ff48350c2_prof);

        
        $__internal_381845c4f5f014cb14afdf86b58cfb62b807b7fb0fb75e33cd2c8a5cc12a903a->leave($__internal_381845c4f5f014cb14afdf86b58cfb62b807b7fb0fb75e33cd2c8a5cc12a903a_prof);

    }

    public function getTemplateName()
    {
        return "reservierungadmin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 54,  134 => 49,  120 => 41,  112 => 36,  105 => 32,  101 => 31,  97 => 30,  94 => 29,  90 => 28,  86 => 26,  82 => 25,  74 => 22,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
  <h1>Reservierungadmins list</h1>

  <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
    <thead>
      <tr>
        <th>Id</th>
        <th>Start</th>
        <th>End</th>
        <th>Title</th>
        <th>Url</th>
        <th>Classname</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      {% for reservierungAdmin in reservierungAdmins %}
        <tr>
          <td>
            <a href=\"{{ path('admin_reservierungadmin_show', { 'id': reservierungAdmin.id }) }}\">{{ reservierungAdmin.id }}</a>
          </td>
          <td>
            {% if reservierungAdmin.start %}{{ reservierungAdmin.start|date('Y-m-d H:i:s') }}{% endif %}
          </td>
          <td>
            {% if reservierungAdmin.end %}{{ reservierungAdmin.end|date('Y-m-d H:i:s') }}{% endif %}
          </td>
          <td>{{ reservierungAdmin.title }}</td>
          <td>{{ reservierungAdmin.url }}</td>
          <td>{{ reservierungAdmin.className }}</td>
          <td>
            <ul>
              <li>
                <a href=\"{{ path('admin_reservierungadmin_show', { 'id': reservierungAdmin.id }) }}\">
                  <i class=\"glyphicon glyphicon-info-sign\"></i>
                </a>
              </li>
              <li>
                <a href=\"{{ path('admin_reservierungadmin_edit', { 'id': reservierungAdmin.id }) }}\">
                  <i class=\"glyphicon glyphicon-pencil\"></i>
                </a>
              </li>
            </ul>
          </td>
        </tr>
      {% endfor %}
    </tbody>
  </table>

  <ul>
    <div class=\"cration_artiste\">
      <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('admin_reservierungadmin_new') }}\">Neue Reservierung erfassen<i class=\"glyphicon glyphicon-plus\"></i>
      </a>
    </div>
  </li>
</ul>

{% endblock %}
", "reservierungadmin/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierungadmin/index.html.twig");
    }
}
