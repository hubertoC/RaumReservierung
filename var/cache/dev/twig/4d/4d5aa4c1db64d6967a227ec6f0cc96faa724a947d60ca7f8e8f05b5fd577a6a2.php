<?php

/* layoutPublic.html.twig */
class __TwigTemplate_9ff770f7431287f30e3a03a4ae413ead3253a6a9331a1e0d52ead403bee83897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27f4ece9994fa71cfa14ed108f4b57e968795d3aeaacaba4c774653c29a46f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f4ece9994fa71cfa14ed108f4b57e968795d3aeaacaba4c774653c29a46f56->enter($__internal_27f4ece9994fa71cfa14ed108f4b57e968795d3aeaacaba4c774653c29a46f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutPublic.html.twig"));

        $__internal_89db4c4033377a2e29b07a685aa5176bae50c24941e729fbbde158f895e88345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89db4c4033377a2e29b07a685aa5176bae50c24941e729fbbde158f895e88345->enter($__internal_89db4c4033377a2e29b07a685aa5176bae50c24941e729fbbde158f895e88345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layoutPublic.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

    <title>  </title>
  </head>
  <body>
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "  </body>
</html>
";
        
        $__internal_27f4ece9994fa71cfa14ed108f4b57e968795d3aeaacaba4c774653c29a46f56->leave($__internal_27f4ece9994fa71cfa14ed108f4b57e968795d3aeaacaba4c774653c29a46f56_prof);

        
        $__internal_89db4c4033377a2e29b07a685aa5176bae50c24941e729fbbde158f895e88345->leave($__internal_89db4c4033377a2e29b07a685aa5176bae50c24941e729fbbde158f895e88345_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c11aa140e0d01a9bbaf9f69c0f8934dd770ecb1e10266ffb593e0edbc8eb71c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c11aa140e0d01a9bbaf9f69c0f8934dd770ecb1e10266ffb593e0edbc8eb71c->enter($__internal_7c11aa140e0d01a9bbaf9f69c0f8934dd770ecb1e10266ffb593e0edbc8eb71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_246d51235a22ccb39dfaa95399f7ae7c34f059b3e6f90b519e463a5777924626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246d51235a22ccb39dfaa95399f7ae7c34f059b3e6f90b519e463a5777924626->enter($__internal_246d51235a22ccb39dfaa95399f7ae7c34f059b3e6f90b519e463a5777924626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_246d51235a22ccb39dfaa95399f7ae7c34f059b3e6f90b519e463a5777924626->leave($__internal_246d51235a22ccb39dfaa95399f7ae7c34f059b3e6f90b519e463a5777924626_prof);

        
        $__internal_7c11aa140e0d01a9bbaf9f69c0f8934dd770ecb1e10266ffb593e0edbc8eb71c->leave($__internal_7c11aa140e0d01a9bbaf9f69c0f8934dd770ecb1e10266ffb593e0edbc8eb71c_prof);

    }

    public function getTemplateName()
    {
        return "layoutPublic.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  39 => 11,  37 => 10,  26 => 1,);
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
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\" integrity=\"sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M\" crossorigin=\"anonymous\">

    <title>  </title>
  </head>
  <body>
{% block body %}{% endblock %}
  </body>
</html>
", "layoutPublic.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/layoutPublic.html.twig");
    }
}
