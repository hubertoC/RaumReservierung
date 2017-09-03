<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_dc857ce0eb360e6badbc1c69e03716cfbc58bdbd2bd38a4e3a2f0541a83e84f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b080ce749ba5cb52972eadf5d52f54d82029261e7c758b0469ec648c37a4689c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b080ce749ba5cb52972eadf5d52f54d82029261e7c758b0469ec648c37a4689c->enter($__internal_b080ce749ba5cb52972eadf5d52f54d82029261e7c758b0469ec648c37a4689c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_ac73a2e47e548458e22431ef422e26dcde84702a125c522a225cb41b0272cdaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac73a2e47e548458e22431ef422e26dcde84702a125c522a225cb41b0272cdaa->enter($__internal_ac73a2e47e548458e22431ef422e26dcde84702a125c522a225cb41b0272cdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b080ce749ba5cb52972eadf5d52f54d82029261e7c758b0469ec648c37a4689c->leave($__internal_b080ce749ba5cb52972eadf5d52f54d82029261e7c758b0469ec648c37a4689c_prof);

        
        $__internal_ac73a2e47e548458e22431ef422e26dcde84702a125c522a225cb41b0272cdaa->leave($__internal_ac73a2e47e548458e22431ef422e26dcde84702a125c522a225cb41b0272cdaa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_553a642e504f26c75c8b2d138dc0c7f6749d45d67f732318f632951abcd0b016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553a642e504f26c75c8b2d138dc0c7f6749d45d67f732318f632951abcd0b016->enter($__internal_553a642e504f26c75c8b2d138dc0c7f6749d45d67f732318f632951abcd0b016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2f649bb61a7aead14d0ce527fdd515a718280d0b4012731c88c1f1fc96405daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f649bb61a7aead14d0ce527fdd515a718280d0b4012731c88c1f1fc96405daf->enter($__internal_2f649bb61a7aead14d0ce527fdd515a718280d0b4012731c88c1f1fc96405daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_2f649bb61a7aead14d0ce527fdd515a718280d0b4012731c88c1f1fc96405daf->leave($__internal_2f649bb61a7aead14d0ce527fdd515a718280d0b4012731c88c1f1fc96405daf_prof);

        
        $__internal_553a642e504f26c75c8b2d138dc0c7f6749d45d67f732318f632951abcd0b016->leave($__internal_553a642e504f26c75c8b2d138dc0c7f6749d45d67f732318f632951abcd0b016_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
