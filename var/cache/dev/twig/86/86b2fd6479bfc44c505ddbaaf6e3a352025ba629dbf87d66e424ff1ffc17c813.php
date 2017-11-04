<?php

/* :reservierungadmin:edit.html.twig */
class __TwigTemplate_20cd6ca5657b3eaa94dd776947918c3e2738589f05aa05897bcb892774ab3420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", ":reservierungadmin:edit.html.twig", 1);
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
        $__internal_dfecb219a56d39a77d0e62400a34239fdff0d349e03276c12956d12e740c4147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfecb219a56d39a77d0e62400a34239fdff0d349e03276c12956d12e740c4147->enter($__internal_dfecb219a56d39a77d0e62400a34239fdff0d349e03276c12956d12e740c4147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierungadmin:edit.html.twig"));

        $__internal_e2b9675e5b785757a1f40a3cc32e4c9b248fc1b93bcb77af6c515ffde2694b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b9675e5b785757a1f40a3cc32e4c9b248fc1b93bcb77af6c515ffde2694b47->enter($__internal_e2b9675e5b785757a1f40a3cc32e4c9b248fc1b93bcb77af6c515ffde2694b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservierungadmin:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfecb219a56d39a77d0e62400a34239fdff0d349e03276c12956d12e740c4147->leave($__internal_dfecb219a56d39a77d0e62400a34239fdff0d349e03276c12956d12e740c4147_prof);

        
        $__internal_e2b9675e5b785757a1f40a3cc32e4c9b248fc1b93bcb77af6c515ffde2694b47->leave($__internal_e2b9675e5b785757a1f40a3cc32e4c9b248fc1b93bcb77af6c515ffde2694b47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71d3c6b2e3023d007ad14c1aec0027c77f41a955b213bb48f95d0cebb9424e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d3c6b2e3023d007ad14c1aec0027c77f41a955b213bb48f95d0cebb9424e42->enter($__internal_71d3c6b2e3023d007ad14c1aec0027c77f41a955b213bb48f95d0cebb9424e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2241c6e8a52d33c283f886a54f0c79784f76192fc6cc6923b2f954f8c6c67446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2241c6e8a52d33c283f886a54f0c79784f76192fc6cc6923b2f954f8c6c67446->enter($__internal_2241c6e8a52d33c283f886a54f0c79784f76192fc6cc6923b2f954f8c6c67446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1>Reservierungadmin edit</h1>
  <div class=\"cration_artiste\">
    <div class=\"cration mdl-shadow--2dp\">
      <div class=\"form_creation\">
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "start", array()), 'row');
        echo "
        <br>
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "end", array()), 'row');
        echo "
        <br>
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "<br>
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "url", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "<br>
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "className", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "<br>
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "raum", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "<br>

        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <div class=\"button_p_edit\">
          <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\"/>
          ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

          <ul>
            <li>

              <div class=\"retour\">
                <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservierungadmin_index");
        echo "\">Back to the list</a>
              </div>
            </li>
            <li>
              ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
              <div class=\"modifier\">
                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
              </div>

              ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

";
        
        $__internal_2241c6e8a52d33c283f886a54f0c79784f76192fc6cc6923b2f954f8c6c67446->leave($__internal_2241c6e8a52d33c283f886a54f0c79784f76192fc6cc6923b2f954f8c6c67446_prof);

        
        $__internal_71d3c6b2e3023d007ad14c1aec0027c77f41a955b213bb48f95d0cebb9424e42->leave($__internal_71d3c6b2e3023d007ad14c1aec0027c77f41a955b213bb48f95d0cebb9424e42_prof);

    }

    public function getTemplateName()
    {
        return ":reservierungadmin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  109 => 32,  102 => 28,  93 => 22,  87 => 19,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  65 => 12,  60 => 10,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
  <h1>Reservierungadmin edit</h1>
  <div class=\"cration_artiste\">
    <div class=\"cration mdl-shadow--2dp\">
      <div class=\"form_creation\">
        {{ form_start(edit_form) }}

        {{ form_row(edit_form.start)}}
        <br>
        {{ form_row(edit_form.end)}}
        <br>
        {{ form_row(edit_form.title, {'attr':{'class':'form-control'}})}}<br>
        {{ form_row(edit_form.url, {'attr':{'class':'form-control'}})}}<br>
        {{ form_row(edit_form.className, {'attr':{'class':'form-control'}})}}<br>
        {{ form_row(edit_form.raum, {'attr':{'class':'form-control'}})}}<br>

        {{ form_widget(edit_form) }}
        <div class=\"button_p_edit\">
          <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Edit\"/>
          {{ form_end(edit_form) }}

          <ul>
            <li>

              <div class=\"retour\">
                <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('admin_reservierungadmin_index') }}\">Back to the list</a>
              </div>
            </li>
            <li>
              {{ form_start(delete_form) }}
              <div class=\"modifier\">
                <input class=\"mdl-button mdl-js-button mdl-button--raised\" type=\"submit\" value=\"Delete\">
              </div>

              {{ form_end(delete_form) }}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

{% endblock %}
", ":reservierungadmin:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/reservierungadmin/edit.html.twig");
    }
}
