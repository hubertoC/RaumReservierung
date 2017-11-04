<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0a1f574d4b207247d65f2495edf8514d14c7571fe733f7318937ef0bb547a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a1f574d4b207247d65f2495edf8514d14c7571fe733f7318937ef0bb547a16->enter($__internal_b0a1f574d4b207247d65f2495edf8514d14c7571fe733f7318937ef0bb547a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6744f4af9f0d72bfcd3f1cec82a33e3aa869270bab9d7ee254702dfff1a37364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6744f4af9f0d72bfcd3f1cec82a33e3aa869270bab9d7ee254702dfff1a37364->enter($__internal_6744f4af9f0d72bfcd3f1cec82a33e3aa869270bab9d7ee254702dfff1a37364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b0a1f574d4b207247d65f2495edf8514d14c7571fe733f7318937ef0bb547a16->leave($__internal_b0a1f574d4b207247d65f2495edf8514d14c7571fe733f7318937ef0bb547a16_prof);

        
        $__internal_6744f4af9f0d72bfcd3f1cec82a33e3aa869270bab9d7ee254702dfff1a37364->leave($__internal_6744f4af9f0d72bfcd3f1cec82a33e3aa869270bab9d7ee254702dfff1a37364_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_99508273d6024427a775dcc1caa18b92aad3d8c054735b5a5499e4ff7a0ea59c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99508273d6024427a775dcc1caa18b92aad3d8c054735b5a5499e4ff7a0ea59c->enter($__internal_99508273d6024427a775dcc1caa18b92aad3d8c054735b5a5499e4ff7a0ea59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e83bbcde3a0ad5b4f7f4b94b9837e2277fccb74af684b174e36c1bee9ad8ac15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83bbcde3a0ad5b4f7f4b94b9837e2277fccb74af684b174e36c1bee9ad8ac15->enter($__internal_e83bbcde3a0ad5b4f7f4b94b9837e2277fccb74af684b174e36c1bee9ad8ac15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e83bbcde3a0ad5b4f7f4b94b9837e2277fccb74af684b174e36c1bee9ad8ac15->leave($__internal_e83bbcde3a0ad5b4f7f4b94b9837e2277fccb74af684b174e36c1bee9ad8ac15_prof);

        
        $__internal_99508273d6024427a775dcc1caa18b92aad3d8c054735b5a5499e4ff7a0ea59c->leave($__internal_99508273d6024427a775dcc1caa18b92aad3d8c054735b5a5499e4ff7a0ea59c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa2293a24a6550cf26d6054a3ef78d2464eb17d17366eb06bb62a7749e6cfc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa2293a24a6550cf26d6054a3ef78d2464eb17d17366eb06bb62a7749e6cfc75->enter($__internal_fa2293a24a6550cf26d6054a3ef78d2464eb17d17366eb06bb62a7749e6cfc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a164197fef0ff96e0bcb8a0175a461d0575aa8a286d69ddd36e5ebbcc1080f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a164197fef0ff96e0bcb8a0175a461d0575aa8a286d69ddd36e5ebbcc1080f20->enter($__internal_a164197fef0ff96e0bcb8a0175a461d0575aa8a286d69ddd36e5ebbcc1080f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a164197fef0ff96e0bcb8a0175a461d0575aa8a286d69ddd36e5ebbcc1080f20->leave($__internal_a164197fef0ff96e0bcb8a0175a461d0575aa8a286d69ddd36e5ebbcc1080f20_prof);

        
        $__internal_fa2293a24a6550cf26d6054a3ef78d2464eb17d17366eb06bb62a7749e6cfc75->leave($__internal_fa2293a24a6550cf26d6054a3ef78d2464eb17d17366eb06bb62a7749e6cfc75_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a527a8e7486fe7e17958f59c74051e2ab319a343e459efb157292f893e322af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a527a8e7486fe7e17958f59c74051e2ab319a343e459efb157292f893e322af->enter($__internal_8a527a8e7486fe7e17958f59c74051e2ab319a343e459efb157292f893e322af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42c27951fda4f81361dd4b111d74ca691bf798f4455905db6f6235e965c996e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c27951fda4f81361dd4b111d74ca691bf798f4455905db6f6235e965c996e1->enter($__internal_42c27951fda4f81361dd4b111d74ca691bf798f4455905db6f6235e965c996e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_42c27951fda4f81361dd4b111d74ca691bf798f4455905db6f6235e965c996e1->leave($__internal_42c27951fda4f81361dd4b111d74ca691bf798f4455905db6f6235e965c996e1_prof);

        
        $__internal_8a527a8e7486fe7e17958f59c74051e2ab319a343e459efb157292f893e322af->leave($__internal_8a527a8e7486fe7e17958f59c74051e2ab319a343e459efb157292f893e322af_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c6982207ed38fe148c61a3aca43e273397dedec155dfd138f9c1e3d20a62829d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6982207ed38fe148c61a3aca43e273397dedec155dfd138f9c1e3d20a62829d->enter($__internal_c6982207ed38fe148c61a3aca43e273397dedec155dfd138f9c1e3d20a62829d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a95abdd535e42f48fbe8c44cb8411e361d3987e9d3b8a8c0ec34411cd7d15cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95abdd535e42f48fbe8c44cb8411e361d3987e9d3b8a8c0ec34411cd7d15cbc->enter($__internal_a95abdd535e42f48fbe8c44cb8411e361d3987e9d3b8a8c0ec34411cd7d15cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a95abdd535e42f48fbe8c44cb8411e361d3987e9d3b8a8c0ec34411cd7d15cbc->leave($__internal_a95abdd535e42f48fbe8c44cb8411e361d3987e9d3b8a8c0ec34411cd7d15cbc_prof);

        
        $__internal_c6982207ed38fe148c61a3aca43e273397dedec155dfd138f9c1e3d20a62829d->leave($__internal_c6982207ed38fe148c61a3aca43e273397dedec155dfd138f9c1e3d20a62829d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/base.html.twig");
    }
}
