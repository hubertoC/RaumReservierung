<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_608d077a45db74815e9cfe15a07f61cee5cc96ff34105f8115b0417467fdebad extends Twig_Template
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
        $__internal_301018bb1ed165ca9c53675d524127925e3e4fff4fee25e3b4befb49f7d394a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301018bb1ed165ca9c53675d524127925e3e4fff4fee25e3b4befb49f7d394a4->enter($__internal_301018bb1ed165ca9c53675d524127925e3e4fff4fee25e3b4befb49f7d394a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_268eb8f9e2b5d93a136f63949b97ee5c35fc8ca89302e98136117e680869e1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268eb8f9e2b5d93a136f63949b97ee5c35fc8ca89302e98136117e680869e1be->enter($__internal_268eb8f9e2b5d93a136f63949b97ee5c35fc8ca89302e98136117e680869e1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_301018bb1ed165ca9c53675d524127925e3e4fff4fee25e3b4befb49f7d394a4->leave($__internal_301018bb1ed165ca9c53675d524127925e3e4fff4fee25e3b4befb49f7d394a4_prof);

        
        $__internal_268eb8f9e2b5d93a136f63949b97ee5c35fc8ca89302e98136117e680869e1be->leave($__internal_268eb8f9e2b5d93a136f63949b97ee5c35fc8ca89302e98136117e680869e1be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
