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
        $__internal_49ab15413d81b28e4b9fc1a67aee383fda52f11f9e76d573525dee81eada6c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ab15413d81b28e4b9fc1a67aee383fda52f11f9e76d573525dee81eada6c6b->enter($__internal_49ab15413d81b28e4b9fc1a67aee383fda52f11f9e76d573525dee81eada6c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_89d24634e8e9509eb0205c3991dfb9040abb86417fc9bc5c5546bd565b6413dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d24634e8e9509eb0205c3991dfb9040abb86417fc9bc5c5546bd565b6413dc->enter($__internal_89d24634e8e9509eb0205c3991dfb9040abb86417fc9bc5c5546bd565b6413dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_49ab15413d81b28e4b9fc1a67aee383fda52f11f9e76d573525dee81eada6c6b->leave($__internal_49ab15413d81b28e4b9fc1a67aee383fda52f11f9e76d573525dee81eada6c6b_prof);

        
        $__internal_89d24634e8e9509eb0205c3991dfb9040abb86417fc9bc5c5546bd565b6413dc->leave($__internal_89d24634e8e9509eb0205c3991dfb9040abb86417fc9bc5c5546bd565b6413dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_356eee5c14a628398696dafdd59df5036e963c1f95eedc3fab993e341380353f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356eee5c14a628398696dafdd59df5036e963c1f95eedc3fab993e341380353f->enter($__internal_356eee5c14a628398696dafdd59df5036e963c1f95eedc3fab993e341380353f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f35a3cb2008cc0c28aad6c6a319fa45343eb51e57f173ea83f1ad56d949ad8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35a3cb2008cc0c28aad6c6a319fa45343eb51e57f173ea83f1ad56d949ad8e2->enter($__internal_f35a3cb2008cc0c28aad6c6a319fa45343eb51e57f173ea83f1ad56d949ad8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f35a3cb2008cc0c28aad6c6a319fa45343eb51e57f173ea83f1ad56d949ad8e2->leave($__internal_f35a3cb2008cc0c28aad6c6a319fa45343eb51e57f173ea83f1ad56d949ad8e2_prof);

        
        $__internal_356eee5c14a628398696dafdd59df5036e963c1f95eedc3fab993e341380353f->leave($__internal_356eee5c14a628398696dafdd59df5036e963c1f95eedc3fab993e341380353f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18e25b1a9cb1cc8226d43df6e4efd31f749dcca05a9c26b7cf574288b05665e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e25b1a9cb1cc8226d43df6e4efd31f749dcca05a9c26b7cf574288b05665e1->enter($__internal_18e25b1a9cb1cc8226d43df6e4efd31f749dcca05a9c26b7cf574288b05665e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_556365e0cbce14c13a3a88e3f319456fa2b4155573682b767cc982aef86a9e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556365e0cbce14c13a3a88e3f319456fa2b4155573682b767cc982aef86a9e06->enter($__internal_556365e0cbce14c13a3a88e3f319456fa2b4155573682b767cc982aef86a9e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_556365e0cbce14c13a3a88e3f319456fa2b4155573682b767cc982aef86a9e06->leave($__internal_556365e0cbce14c13a3a88e3f319456fa2b4155573682b767cc982aef86a9e06_prof);

        
        $__internal_18e25b1a9cb1cc8226d43df6e4efd31f749dcca05a9c26b7cf574288b05665e1->leave($__internal_18e25b1a9cb1cc8226d43df6e4efd31f749dcca05a9c26b7cf574288b05665e1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a602f33f5f6d198f6e881fc48a3db24e93aca239d309ad3b2918202980c59a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a602f33f5f6d198f6e881fc48a3db24e93aca239d309ad3b2918202980c59a80->enter($__internal_a602f33f5f6d198f6e881fc48a3db24e93aca239d309ad3b2918202980c59a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32d6da96a7f786e0ebea9f27f7ce99733134d9320a9b8133b51fcc5eacb44b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d6da96a7f786e0ebea9f27f7ce99733134d9320a9b8133b51fcc5eacb44b2f->enter($__internal_32d6da96a7f786e0ebea9f27f7ce99733134d9320a9b8133b51fcc5eacb44b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_32d6da96a7f786e0ebea9f27f7ce99733134d9320a9b8133b51fcc5eacb44b2f->leave($__internal_32d6da96a7f786e0ebea9f27f7ce99733134d9320a9b8133b51fcc5eacb44b2f_prof);

        
        $__internal_a602f33f5f6d198f6e881fc48a3db24e93aca239d309ad3b2918202980c59a80->leave($__internal_a602f33f5f6d198f6e881fc48a3db24e93aca239d309ad3b2918202980c59a80_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1aede20eca921ea4669de3b06cdf4231fe83abd974b961701fb2829bc00a7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1aede20eca921ea4669de3b06cdf4231fe83abd974b961701fb2829bc00a7d8->enter($__internal_d1aede20eca921ea4669de3b06cdf4231fe83abd974b961701fb2829bc00a7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_17635f8469aba68f6e90898c2dd94cf34745b73c380e803df9880eba08d0d0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17635f8469aba68f6e90898c2dd94cf34745b73c380e803df9880eba08d0d0b2->enter($__internal_17635f8469aba68f6e90898c2dd94cf34745b73c380e803df9880eba08d0d0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_17635f8469aba68f6e90898c2dd94cf34745b73c380e803df9880eba08d0d0b2->leave($__internal_17635f8469aba68f6e90898c2dd94cf34745b73c380e803df9880eba08d0d0b2_prof);

        
        $__internal_d1aede20eca921ea4669de3b06cdf4231fe83abd974b961701fb2829bc00a7d8->leave($__internal_d1aede20eca921ea4669de3b06cdf4231fe83abd974b961701fb2829bc00a7d8_prof);

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
