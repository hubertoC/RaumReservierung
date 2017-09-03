<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bb4249dc71239c0410b8b8cee29b4ca713f1cd099a70b93709c74f909653baf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e0bb502ecba7e9c7608dca065987d2aca363555762c585db55acad2ea58a9ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0bb502ecba7e9c7608dca065987d2aca363555762c585db55acad2ea58a9ea->enter($__internal_6e0bb502ecba7e9c7608dca065987d2aca363555762c585db55acad2ea58a9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b35b89acb465babe88b4baee566c1e50d7b9945e091ce2b8a9d928900b8256b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35b89acb465babe88b4baee566c1e50d7b9945e091ce2b8a9d928900b8256b7->enter($__internal_b35b89acb465babe88b4baee566c1e50d7b9945e091ce2b8a9d928900b8256b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6e0bb502ecba7e9c7608dca065987d2aca363555762c585db55acad2ea58a9ea->leave($__internal_6e0bb502ecba7e9c7608dca065987d2aca363555762c585db55acad2ea58a9ea_prof);

        
        $__internal_b35b89acb465babe88b4baee566c1e50d7b9945e091ce2b8a9d928900b8256b7->leave($__internal_b35b89acb465babe88b4baee566c1e50d7b9945e091ce2b8a9d928900b8256b7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc9dfecb2429f34e6d9c78e9efee6754eff289446e8afee8f47aef1b057e50b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9dfecb2429f34e6d9c78e9efee6754eff289446e8afee8f47aef1b057e50b7->enter($__internal_bc9dfecb2429f34e6d9c78e9efee6754eff289446e8afee8f47aef1b057e50b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e05ee9b6f4c718d2b2501dae313318c89a25afd77233ea06c19df2b4f5448fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05ee9b6f4c718d2b2501dae313318c89a25afd77233ea06c19df2b4f5448fab->enter($__internal_e05ee9b6f4c718d2b2501dae313318c89a25afd77233ea06c19df2b4f5448fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e05ee9b6f4c718d2b2501dae313318c89a25afd77233ea06c19df2b4f5448fab->leave($__internal_e05ee9b6f4c718d2b2501dae313318c89a25afd77233ea06c19df2b4f5448fab_prof);

        
        $__internal_bc9dfecb2429f34e6d9c78e9efee6754eff289446e8afee8f47aef1b057e50b7->leave($__internal_bc9dfecb2429f34e6d9c78e9efee6754eff289446e8afee8f47aef1b057e50b7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
