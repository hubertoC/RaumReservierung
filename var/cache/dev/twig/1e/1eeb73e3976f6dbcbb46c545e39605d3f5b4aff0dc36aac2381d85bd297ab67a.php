<?php

/* raum/show.html.twig */
class __TwigTemplate_6fa570f58635ccf352a67b5011cc0077283399bd59d55dc12f07965c49d91000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "raum/show.html.twig", 1);
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
        $__internal_221a51c8716759acc0dde227f87757a58b96e4abf64f22fcac186002f7b6322e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221a51c8716759acc0dde227f87757a58b96e4abf64f22fcac186002f7b6322e->enter($__internal_221a51c8716759acc0dde227f87757a58b96e4abf64f22fcac186002f7b6322e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/show.html.twig"));

        $__internal_62b300f4ac608b12aaacda8b5632f95fa7062600b1b727ac1a01c4929303fce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b300f4ac608b12aaacda8b5632f95fa7062600b1b727ac1a01c4929303fce3->enter($__internal_62b300f4ac608b12aaacda8b5632f95fa7062600b1b727ac1a01c4929303fce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_221a51c8716759acc0dde227f87757a58b96e4abf64f22fcac186002f7b6322e->leave($__internal_221a51c8716759acc0dde227f87757a58b96e4abf64f22fcac186002f7b6322e_prof);

        
        $__internal_62b300f4ac608b12aaacda8b5632f95fa7062600b1b727ac1a01c4929303fce3->leave($__internal_62b300f4ac608b12aaacda8b5632f95fa7062600b1b727ac1a01c4929303fce3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_081dddcb2c6ad822fa6447bb1a5fabd3b3099e332f63b7646290cc0f837f5fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081dddcb2c6ad822fa6447bb1a5fabd3b3099e332f63b7646290cc0f837f5fe4->enter($__internal_081dddcb2c6ad822fa6447bb1a5fabd3b3099e332f63b7646290cc0f837f5fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71009f2ebd793af0c11150ad46c6e07fbf05c89e9ae3a9329c0aa61d5fa7a2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71009f2ebd793af0c11150ad46c6e07fbf05c89e9ae3a9329c0aa61d5fa7a2a5->enter($__internal_71009f2ebd793af0c11150ad46c6e07fbf05c89e9ae3a9329c0aa61d5fa7a2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Raum</h1>
    <div class=\"conte_show\">

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["raum"]) ? $context["raum"] : $this->getContext($context, "raum")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nummer</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["raum"]) ? $context["raum"] : $this->getContext($context, "raum")), "nummer", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["raum"]) ? $context["raum"] : $this->getContext($context, "raum")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <li>
        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <div class=\"show_suprimer\">

            <input  class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
          </div>
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </li>

    <ul>
      <div class=\"show_modifier\">
        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_edit", array("id" => $this->getAttribute((isset($context["raum"]) ? $context["raum"] : $this->getContext($context, "raum")), "id", array()))), "html", null, true);
        echo "\">Edit<i class=\"glyphicon glyphicon-pencil\"></i></a>
        </li>
      </div>

      </ul>
    </ul>
    <div class=\"show_retour\">

        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_index");
        echo "\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Back to the list</a>
        </li>
      </div>


    </ul>
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_71009f2ebd793af0c11150ad46c6e07fbf05c89e9ae3a9329c0aa61d5fa7a2a5->leave($__internal_71009f2ebd793af0c11150ad46c6e07fbf05c89e9ae3a9329c0aa61d5fa7a2a5_prof);

        
        $__internal_081dddcb2c6ad822fa6447bb1a5fabd3b3099e332f63b7646290cc0f837f5fe4->leave($__internal_081dddcb2c6ad822fa6447bb1a5fabd3b3099e332f63b7646290cc0f837f5fe4_prof);

    }

    public function getTemplateName()
    {
        return "raum/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  97 => 35,  88 => 29,  80 => 24,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Raum</h1>
    <div class=\"conte_show\">

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ raum.id }}</td>
            </tr>
            <tr>
                <th>Nummer</th>
                <td>{{ raum.nummer }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ raum.name }}</td>
            </tr>
        </tbody>
    </table>
    <li>
        {{ form_start(delete_form) }}
        <div class=\"show_suprimer\">

            <input  class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
          </div>
{{ form_end(delete_form) }}
    </li>

    <ul>
      <div class=\"show_modifier\">
        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminRaum_edit', { 'id': raum.id }) }}\">Edit<i class=\"glyphicon glyphicon-pencil\"></i></a>
        </li>
      </div>

      </ul>
    </ul>
    <div class=\"show_retour\">

        <li>
            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminRaum_index') }}\"><i class=\"glyphicon glyphicon-chevron-left\"></i>Back to the list</a>
        </li>
      </div>


    </ul>
    </div>
    </div>
    </div>
    </div>
{% endblock %}
", "raum/show.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/show.html.twig");
    }
}
