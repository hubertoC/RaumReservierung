<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_2cf8fb6f4491bc96b3be4fd693de0f19ff88564ad26b8854a5cd3b7b1d0ea76f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5e4597f847c920fee44a2dfab18528a89cef8a1ad082b8520132b2767504620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e4597f847c920fee44a2dfab18528a89cef8a1ad082b8520132b2767504620->enter($__internal_e5e4597f847c920fee44a2dfab18528a89cef8a1ad082b8520132b2767504620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_dfaf203c3ecd94cdad5d799f0d3ed7d958730bf838cba50031eb055b028f07b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfaf203c3ecd94cdad5d799f0d3ed7d958730bf838cba50031eb055b028f07b5->enter($__internal_dfaf203c3ecd94cdad5d799f0d3ed7d958730bf838cba50031eb055b028f07b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
      

        ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 11
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 12
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 13
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        // line 18
        echo "
        <div>
            ";
        // line 20
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 22
        echo "        </div>
    </body>
</html>
";
        
        $__internal_e5e4597f847c920fee44a2dfab18528a89cef8a1ad082b8520132b2767504620->leave($__internal_e5e4597f847c920fee44a2dfab18528a89cef8a1ad082b8520132b2767504620_prof);

        
        $__internal_dfaf203c3ecd94cdad5d799f0d3ed7d958730bf838cba50031eb055b028f07b5->leave($__internal_dfaf203c3ecd94cdad5d799f0d3ed7d958730bf838cba50031eb055b028f07b5_prof);

    }

    // line 20
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd9100f202942c04ceb96336be01a8aafc0ada23d1cd46d67e7342e3fa7c6931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9100f202942c04ceb96336be01a8aafc0ada23d1cd46d67e7342e3fa7c6931->enter($__internal_dd9100f202942c04ceb96336be01a8aafc0ada23d1cd46d67e7342e3fa7c6931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_94a3fcab25104ce2c0a864d018651b9dd9b52a487e0d6c3bdcde23cf2d3e3808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a3fcab25104ce2c0a864d018651b9dd9b52a487e0d6c3bdcde23cf2d3e3808->enter($__internal_94a3fcab25104ce2c0a864d018651b9dd9b52a487e0d6c3bdcde23cf2d3e3808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 21
        echo "            ";
        
        $__internal_94a3fcab25104ce2c0a864d018651b9dd9b52a487e0d6c3bdcde23cf2d3e3808->leave($__internal_94a3fcab25104ce2c0a864d018651b9dd9b52a487e0d6c3bdcde23cf2d3e3808_prof);

        
        $__internal_dd9100f202942c04ceb96336be01a8aafc0ada23d1cd46d67e7342e3fa7c6931->leave($__internal_dd9100f202942c04ceb96336be01a8aafc0ada23d1cd46d67e7342e3fa7c6931_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  90 => 20,  77 => 22,  75 => 20,  71 => 18,  68 => 17,  62 => 16,  53 => 13,  48 => 12,  43 => 11,  38 => 10,  36 => 9,  26 => 1,);
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
    </head>
    <body>
      

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "@FOSUser/layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/layout.html.twig");
    }
}
