<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_672ce66ce36bb0fec0d531aa70f4e572e23ff97d3b5706b3f5721e1fe4edaafb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96f3fd6fa623845cedcef0e3b22838063b3a49e660d5dc683c3f52a42a757d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f3fd6fa623845cedcef0e3b22838063b3a49e660d5dc683c3f52a42a757d92->enter($__internal_96f3fd6fa623845cedcef0e3b22838063b3a49e660d5dc683c3f52a42a757d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_73e9ce790f4b5ac6975aa2b1c2e9660f1b901490a93a8dbd894e6a6698e332d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e9ce790f4b5ac6975aa2b1c2e9660f1b901490a93a8dbd894e6a6698e332d9->enter($__internal_73e9ce790f4b5ac6975aa2b1c2e9660f1b901490a93a8dbd894e6a6698e332d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96f3fd6fa623845cedcef0e3b22838063b3a49e660d5dc683c3f52a42a757d92->leave($__internal_96f3fd6fa623845cedcef0e3b22838063b3a49e660d5dc683c3f52a42a757d92_prof);

        
        $__internal_73e9ce790f4b5ac6975aa2b1c2e9660f1b901490a93a8dbd894e6a6698e332d9->leave($__internal_73e9ce790f4b5ac6975aa2b1c2e9660f1b901490a93a8dbd894e6a6698e332d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c6f8419b7778a70ad530d76a2e1f04a0497c43afa0da04861aba4950589f2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6f8419b7778a70ad530d76a2e1f04a0497c43afa0da04861aba4950589f2ae->enter($__internal_6c6f8419b7778a70ad530d76a2e1f04a0497c43afa0da04861aba4950589f2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_272a8223dfa1ad63e39750dba00fd608995439140b01633e6c3e6400e8802179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272a8223dfa1ad63e39750dba00fd608995439140b01633e6c3e6400e8802179->enter($__internal_272a8223dfa1ad63e39750dba00fd608995439140b01633e6c3e6400e8802179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_272a8223dfa1ad63e39750dba00fd608995439140b01633e6c3e6400e8802179->leave($__internal_272a8223dfa1ad63e39750dba00fd608995439140b01633e6c3e6400e8802179_prof);

        
        $__internal_6c6f8419b7778a70ad530d76a2e1f04a0497c43afa0da04861aba4950589f2ae->leave($__internal_6c6f8419b7778a70ad530d76a2e1f04a0497c43afa0da04861aba4950589f2ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
