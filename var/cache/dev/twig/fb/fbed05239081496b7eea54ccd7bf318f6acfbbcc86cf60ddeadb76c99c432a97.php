<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_72b5c0496cef93f83e4457239af06c8c3cea5c1c85bab53f652334986c2f437c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1fc9f5b2b0a7daaf046976a5a27c78ea1660ca4e77d5367dcfed5065a5395d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1fc9f5b2b0a7daaf046976a5a27c78ea1660ca4e77d5367dcfed5065a5395d4->enter($__internal_e1fc9f5b2b0a7daaf046976a5a27c78ea1660ca4e77d5367dcfed5065a5395d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_c8233728a0aa68f18add52c8fd1e8c5bb1b8b378c3fb2c34b6d9d78956737567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8233728a0aa68f18add52c8fd1e8c5bb1b8b378c3fb2c34b6d9d78956737567->enter($__internal_c8233728a0aa68f18add52c8fd1e8c5bb1b8b378c3fb2c34b6d9d78956737567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/styleAdminSpace.css"), "html", null, true);
        echo "\">

";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<body>
   <div class=\"title-Login\"><h1>Admin Tool!</h1></div>
   <div class=\"container-login\">
       <div class=\"left\"></div>
       <div class=\"right\">
            <div class=\"formBox\">
              <form  action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" >
                ";
        // line 16
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 17
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                ";
        }
        // line 19
        echo "                    <p><label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label> </p>
                    <input type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Name eingeben \" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"  />
                    <p>    <label for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></p>
                    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"*************\" required=\"required\" />
                    <div class=\"checkbox\">

                    </div>

                    <div class=\"form-group\">
              <div class=\"col-sm-offset-2 col-sm-10\">
                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                  </label>
                </div>
              </div>
            </div>
                    <input  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </form>
            </div>
    </div>
   </div>
</body>
";
        
        $__internal_e1fc9f5b2b0a7daaf046976a5a27c78ea1660ca4e77d5367dcfed5065a5395d4->leave($__internal_e1fc9f5b2b0a7daaf046976a5a27c78ea1660ca4e77d5367dcfed5065a5395d4_prof);

        
        $__internal_c8233728a0aa68f18add52c8fd1e8c5bb1b8b378c3fb2c34b6d9d78956737567->leave($__internal_c8233728a0aa68f18add52c8fd1e8c5bb1b8b378c3fb2c34b6d9d78956737567_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  85 => 32,  71 => 21,  67 => 20,  62 => 19,  56 => 17,  54 => 16,  50 => 15,  41 => 8,  35 => 6,  33 => 5,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/styleAdminSpace.css') }}\">

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<body>
   <div class=\"title-Login\"><h1>Admin Tool!</h1></div>
   <div class=\"container-login\">
       <div class=\"left\"></div>
       <div class=\"right\">
            <div class=\"formBox\">
              <form  action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" >
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                {% endif %}
                    <p><label for=\"username\">{{ 'security.login.username'|trans }}</label> </p>
                    <input type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Name eingeben \" value=\"{{ last_username }}\" required=\"required\"  />
                    <p>    <label for=\"password\">{{ 'security.login.password'|trans }}</label></p>
                    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"*************\" required=\"required\" />
                    <div class=\"checkbox\">

                    </div>

                    <div class=\"form-group\">
              <div class=\"col-sm-offset-2 col-sm-10\">
                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

                  </label>
                </div>
              </div>
            </div>
                    <input  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                </form>
            </div>
    </div>
   </div>
</body>
", "@FOSUser/Security/login_content.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
