<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7345a543e2618dd3685addce25efebce68706a3a530f1cb6a88b6204d7d55158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7345a543e2618dd3685addce25efebce68706a3a530f1cb6a88b6204d7d55158->enter($__internal_7345a543e2618dd3685addce25efebce68706a3a530f1cb6a88b6204d7d55158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d9f231dc07cd2864cc3c39f765dc02d8af6bd7e070bea03d4992b6d2185d91e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f231dc07cd2864cc3c39f765dc02d8af6bd7e070bea03d4992b6d2185d91e4->enter($__internal_d9f231dc07cd2864cc3c39f765dc02d8af6bd7e070bea03d4992b6d2185d91e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7345a543e2618dd3685addce25efebce68706a3a530f1cb6a88b6204d7d55158->leave($__internal_7345a543e2618dd3685addce25efebce68706a3a530f1cb6a88b6204d7d55158_prof);

        
        $__internal_d9f231dc07cd2864cc3c39f765dc02d8af6bd7e070bea03d4992b6d2185d91e4->leave($__internal_d9f231dc07cd2864cc3c39f765dc02d8af6bd7e070bea03d4992b6d2185d91e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d13923c4b7efaa248e5ed16eb20f7c74d709816f2dd11d72fdd1938addba9729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13923c4b7efaa248e5ed16eb20f7c74d709816f2dd11d72fdd1938addba9729->enter($__internal_d13923c4b7efaa248e5ed16eb20f7c74d709816f2dd11d72fdd1938addba9729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2a065bfcd3b74441d3ac9ae7f136cd89d19fa3107667bab1d7035149a8206ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a065bfcd3b74441d3ac9ae7f136cd89d19fa3107667bab1d7035149a8206ed->enter($__internal_e2a065bfcd3b74441d3ac9ae7f136cd89d19fa3107667bab1d7035149a8206ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e2a065bfcd3b74441d3ac9ae7f136cd89d19fa3107667bab1d7035149a8206ed->leave($__internal_e2a065bfcd3b74441d3ac9ae7f136cd89d19fa3107667bab1d7035149a8206ed_prof);

        
        $__internal_d13923c4b7efaa248e5ed16eb20f7c74d709816f2dd11d72fdd1938addba9729->leave($__internal_d13923c4b7efaa248e5ed16eb20f7c74d709816f2dd11d72fdd1938addba9729_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d376c1382e92f42315fe76ffbfefb9fc014ad401d18dea191418439b3a66337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d376c1382e92f42315fe76ffbfefb9fc014ad401d18dea191418439b3a66337->enter($__internal_3d376c1382e92f42315fe76ffbfefb9fc014ad401d18dea191418439b3a66337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b91e9cab6c76d0485466d7703453509b29f468e36bf4d7ed28e27bfa71ed00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b91e9cab6c76d0485466d7703453509b29f468e36bf4d7ed28e27bfa71ed00f->enter($__internal_9b91e9cab6c76d0485466d7703453509b29f468e36bf4d7ed28e27bfa71ed00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9b91e9cab6c76d0485466d7703453509b29f468e36bf4d7ed28e27bfa71ed00f->leave($__internal_9b91e9cab6c76d0485466d7703453509b29f468e36bf4d7ed28e27bfa71ed00f_prof);

        
        $__internal_3d376c1382e92f42315fe76ffbfefb9fc014ad401d18dea191418439b3a66337->leave($__internal_3d376c1382e92f42315fe76ffbfefb9fc014ad401d18dea191418439b3a66337_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_aecc939783c4a85433eac3e4d85718bf04a4c0dbefa9145e46a464781a36e41b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aecc939783c4a85433eac3e4d85718bf04a4c0dbefa9145e46a464781a36e41b->enter($__internal_aecc939783c4a85433eac3e4d85718bf04a4c0dbefa9145e46a464781a36e41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d824b132c13efac892c98cc0db7c0e2ae658cd6a357a19740c25ad11530735f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d824b132c13efac892c98cc0db7c0e2ae658cd6a357a19740c25ad11530735f4->enter($__internal_d824b132c13efac892c98cc0db7c0e2ae658cd6a357a19740c25ad11530735f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d824b132c13efac892c98cc0db7c0e2ae658cd6a357a19740c25ad11530735f4->leave($__internal_d824b132c13efac892c98cc0db7c0e2ae658cd6a357a19740c25ad11530735f4_prof);

        
        $__internal_aecc939783c4a85433eac3e4d85718bf04a4c0dbefa9145e46a464781a36e41b->leave($__internal_aecc939783c4a85433eac3e4d85718bf04a4c0dbefa9145e46a464781a36e41b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
