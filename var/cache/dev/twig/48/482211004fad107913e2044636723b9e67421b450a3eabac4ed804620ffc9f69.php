<?php

/* ::base.html.twig */
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
        $__internal_3815c4e7677565db46a8e5c1608ceb9330b6919aa6ce7a584137cec3eac119d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3815c4e7677565db46a8e5c1608ceb9330b6919aa6ce7a584137cec3eac119d9->enter($__internal_3815c4e7677565db46a8e5c1608ceb9330b6919aa6ce7a584137cec3eac119d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4a41f19cc2906298ea4ca2821ae4854beea5c18159469676b82d6d8bce3a514d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a41f19cc2906298ea4ca2821ae4854beea5c18159469676b82d6d8bce3a514d->enter($__internal_4a41f19cc2906298ea4ca2821ae4854beea5c18159469676b82d6d8bce3a514d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3815c4e7677565db46a8e5c1608ceb9330b6919aa6ce7a584137cec3eac119d9->leave($__internal_3815c4e7677565db46a8e5c1608ceb9330b6919aa6ce7a584137cec3eac119d9_prof);

        
        $__internal_4a41f19cc2906298ea4ca2821ae4854beea5c18159469676b82d6d8bce3a514d->leave($__internal_4a41f19cc2906298ea4ca2821ae4854beea5c18159469676b82d6d8bce3a514d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a87f973b62c8361b3282a591b1c68af05665a84d641751a1245413feb492d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a87f973b62c8361b3282a591b1c68af05665a84d641751a1245413feb492d30->enter($__internal_2a87f973b62c8361b3282a591b1c68af05665a84d641751a1245413feb492d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3c9e8f67a95fbedb63cfe869615323445cccc0cf518a6731ca6b9ef229fabfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c9e8f67a95fbedb63cfe869615323445cccc0cf518a6731ca6b9ef229fabfb->enter($__internal_b3c9e8f67a95fbedb63cfe869615323445cccc0cf518a6731ca6b9ef229fabfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b3c9e8f67a95fbedb63cfe869615323445cccc0cf518a6731ca6b9ef229fabfb->leave($__internal_b3c9e8f67a95fbedb63cfe869615323445cccc0cf518a6731ca6b9ef229fabfb_prof);

        
        $__internal_2a87f973b62c8361b3282a591b1c68af05665a84d641751a1245413feb492d30->leave($__internal_2a87f973b62c8361b3282a591b1c68af05665a84d641751a1245413feb492d30_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61e99a9903a17a55b8d6c43d791e92a8c37e8cc4a86d1bdd55ddb0514a521887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e99a9903a17a55b8d6c43d791e92a8c37e8cc4a86d1bdd55ddb0514a521887->enter($__internal_61e99a9903a17a55b8d6c43d791e92a8c37e8cc4a86d1bdd55ddb0514a521887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4f3b7d6ccfe0680de617ad935c88684d6cd2d485c39033d8e40858b46edfce03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3b7d6ccfe0680de617ad935c88684d6cd2d485c39033d8e40858b46edfce03->enter($__internal_4f3b7d6ccfe0680de617ad935c88684d6cd2d485c39033d8e40858b46edfce03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4f3b7d6ccfe0680de617ad935c88684d6cd2d485c39033d8e40858b46edfce03->leave($__internal_4f3b7d6ccfe0680de617ad935c88684d6cd2d485c39033d8e40858b46edfce03_prof);

        
        $__internal_61e99a9903a17a55b8d6c43d791e92a8c37e8cc4a86d1bdd55ddb0514a521887->leave($__internal_61e99a9903a17a55b8d6c43d791e92a8c37e8cc4a86d1bdd55ddb0514a521887_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_25f82f4743df0069c4e3196dc74183c8dfe7b84616a62e8685b2762d184daa85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f82f4743df0069c4e3196dc74183c8dfe7b84616a62e8685b2762d184daa85->enter($__internal_25f82f4743df0069c4e3196dc74183c8dfe7b84616a62e8685b2762d184daa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52591311615c3cdfc52777f11070affa988e41f98d71f5f9031026ae47c96983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52591311615c3cdfc52777f11070affa988e41f98d71f5f9031026ae47c96983->enter($__internal_52591311615c3cdfc52777f11070affa988e41f98d71f5f9031026ae47c96983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_52591311615c3cdfc52777f11070affa988e41f98d71f5f9031026ae47c96983->leave($__internal_52591311615c3cdfc52777f11070affa988e41f98d71f5f9031026ae47c96983_prof);

        
        $__internal_25f82f4743df0069c4e3196dc74183c8dfe7b84616a62e8685b2762d184daa85->leave($__internal_25f82f4743df0069c4e3196dc74183c8dfe7b84616a62e8685b2762d184daa85_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb5f407b00f1a883c939dfa93748e066a3fa92010663690543007802894cf589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5f407b00f1a883c939dfa93748e066a3fa92010663690543007802894cf589->enter($__internal_eb5f407b00f1a883c939dfa93748e066a3fa92010663690543007802894cf589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e92cd3ffa85facf73b8c77073f85472890eaeb4dc5cfbca8a9caaaaf7d440f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92cd3ffa85facf73b8c77073f85472890eaeb4dc5cfbca8a9caaaaf7d440f80->enter($__internal_e92cd3ffa85facf73b8c77073f85472890eaeb4dc5cfbca8a9caaaaf7d440f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e92cd3ffa85facf73b8c77073f85472890eaeb4dc5cfbca8a9caaaaf7d440f80->leave($__internal_e92cd3ffa85facf73b8c77073f85472890eaeb4dc5cfbca8a9caaaaf7d440f80_prof);

        
        $__internal_eb5f407b00f1a883c939dfa93748e066a3fa92010663690543007802894cf589->leave($__internal_eb5f407b00f1a883c939dfa93748e066a3fa92010663690543007802894cf589_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/base.html.twig");
    }
}
