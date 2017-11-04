<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f6531d2dff64266a12d627c7be99e50a0325a9145ef217bf934c05342ae34817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a8ef1f26bfff0613444124cf669462c9d03f1e1c67139be16b9224f964e9c835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ef1f26bfff0613444124cf669462c9d03f1e1c67139be16b9224f964e9c835->enter($__internal_a8ef1f26bfff0613444124cf669462c9d03f1e1c67139be16b9224f964e9c835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_be4d88209899ec4e947ad1fd6bf6b0712437bdc5bcd70f6aea8cd469d2cabf8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4d88209899ec4e947ad1fd6bf6b0712437bdc5bcd70f6aea8cd469d2cabf8b->enter($__internal_be4d88209899ec4e947ad1fd6bf6b0712437bdc5bcd70f6aea8cd469d2cabf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8ef1f26bfff0613444124cf669462c9d03f1e1c67139be16b9224f964e9c835->leave($__internal_a8ef1f26bfff0613444124cf669462c9d03f1e1c67139be16b9224f964e9c835_prof);

        
        $__internal_be4d88209899ec4e947ad1fd6bf6b0712437bdc5bcd70f6aea8cd469d2cabf8b->leave($__internal_be4d88209899ec4e947ad1fd6bf6b0712437bdc5bcd70f6aea8cd469d2cabf8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2cbcc359ea29c7886578c200b347ac2ad202cbb6217e76d92ba73e81a137dafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cbcc359ea29c7886578c200b347ac2ad202cbb6217e76d92ba73e81a137dafa->enter($__internal_2cbcc359ea29c7886578c200b347ac2ad202cbb6217e76d92ba73e81a137dafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_17918aa4d20b686469eb535089886502c1f605d36b08b703eed4a4c13ec38fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17918aa4d20b686469eb535089886502c1f605d36b08b703eed4a4c13ec38fee->enter($__internal_17918aa4d20b686469eb535089886502c1f605d36b08b703eed4a4c13ec38fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_17918aa4d20b686469eb535089886502c1f605d36b08b703eed4a4c13ec38fee->leave($__internal_17918aa4d20b686469eb535089886502c1f605d36b08b703eed4a4c13ec38fee_prof);

        
        $__internal_2cbcc359ea29c7886578c200b347ac2ad202cbb6217e76d92ba73e81a137dafa->leave($__internal_2cbcc359ea29c7886578c200b347ac2ad202cbb6217e76d92ba73e81a137dafa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
