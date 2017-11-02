<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_38f9faa4e4993fdba8231b43a239e30d2d196573e1fafc75c94060dbbb4ef957 extends Twig_Template
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
        $__internal_c0cea76330d14d744896fbe1cfe0bb8bb2a176b1ce1bb8349ba4c8292d5b3d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0cea76330d14d744896fbe1cfe0bb8bb2a176b1ce1bb8349ba4c8292d5b3d8f->enter($__internal_c0cea76330d14d744896fbe1cfe0bb8bb2a176b1ce1bb8349ba4c8292d5b3d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_093f02ceb00b3ce9a927fab2aca715d10b152b40e2671a4b201389becc98d54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093f02ceb00b3ce9a927fab2aca715d10b152b40e2671a4b201389becc98d54c->enter($__internal_093f02ceb00b3ce9a927fab2aca715d10b152b40e2671a4b201389becc98d54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c0cea76330d14d744896fbe1cfe0bb8bb2a176b1ce1bb8349ba4c8292d5b3d8f->leave($__internal_c0cea76330d14d744896fbe1cfe0bb8bb2a176b1ce1bb8349ba4c8292d5b3d8f_prof);

        
        $__internal_093f02ceb00b3ce9a927fab2aca715d10b152b40e2671a4b201389becc98d54c->leave($__internal_093f02ceb00b3ce9a927fab2aca715d10b152b40e2671a4b201389becc98d54c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
