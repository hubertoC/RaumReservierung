<?php

/* raum/index.html.twig */
class __TwigTemplate_965bd0719f8c8c3a2170fd4cd219716d55b15d185afefc7f33e438d321956aad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutAdmin.html.twig", "raum/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc1cf0bace2fc91f774fbf2d31c1b9bd6286a6f985f49835d4eb61a19dddadc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1cf0bace2fc91f774fbf2d31c1b9bd6286a6f985f49835d4eb61a19dddadc9->enter($__internal_fc1cf0bace2fc91f774fbf2d31c1b9bd6286a6f985f49835d4eb61a19dddadc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/index.html.twig"));

        $__internal_3d23d490355094efad7f88339b096e9ee67063412ac208e233faa7d582637f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d23d490355094efad7f88339b096e9ee67063412ac208e233faa7d582637f4f->enter($__internal_3d23d490355094efad7f88339b096e9ee67063412ac208e233faa7d582637f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "raum/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc1cf0bace2fc91f774fbf2d31c1b9bd6286a6f985f49835d4eb61a19dddadc9->leave($__internal_fc1cf0bace2fc91f774fbf2d31c1b9bd6286a6f985f49835d4eb61a19dddadc9_prof);

        
        $__internal_3d23d490355094efad7f88339b096e9ee67063412ac208e233faa7d582637f4f->leave($__internal_3d23d490355094efad7f88339b096e9ee67063412ac208e233faa7d582637f4f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed69b8ff0deae191c1c7c34e929bab9d8fe80801695c5e57c9626ae29e9f0cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed69b8ff0deae191c1c7c34e929bab9d8fe80801695c5e57c9626ae29e9f0cea->enter($__internal_ed69b8ff0deae191c1c7c34e929bab9d8fe80801695c5e57c9626ae29e9f0cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d735213efa4229cdcc5f6a7c220985a79aa17cf11a518d044947f6138de3b9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d735213efa4229cdcc5f6a7c220985a79aa17cf11a518d044947f6138de3b9fc->enter($__internal_d735213efa4229cdcc5f6a7c220985a79aa17cf11a518d044947f6138de3b9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Raums list</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Profile</th>
                <th>Nummer</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["raums"]) ? $context["raums"] : $this->getContext($context, "raums")));
        foreach ($context['_seq'] as $context["_key"] => $context["raum"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_show", array("id" => $this->getAttribute($context["raum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["raum"], "id", array()), "html", null, true);
            echo "</a></td>
                <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["raum"], "image", array()), "webPath", array())), "html", null, true);
            echo "\" height=\"52\" width=\"52\" ></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["raum"], "nummer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["raum"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_show", array("id" => $this->getAttribute($context["raum"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_edit", array("id" => $this->getAttribute($context["raum"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
          <div class= \"cration_artiste\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adminRaum_new");
        echo "\">Create a new raum<i class=\"glyphicon glyphicon-plus\"></i></a>
          </div>
</li>
    </ul>
";
        
        $__internal_d735213efa4229cdcc5f6a7c220985a79aa17cf11a518d044947f6138de3b9fc->leave($__internal_d735213efa4229cdcc5f6a7c220985a79aa17cf11a518d044947f6138de3b9fc_prof);

        
        $__internal_ed69b8ff0deae191c1c7c34e929bab9d8fe80801695c5e57c9626ae29e9f0cea->leave($__internal_ed69b8ff0deae191c1c7c34e929bab9d8fe80801695c5e57c9626ae29e9f0cea_prof);

    }

    public function getTemplateName()
    {
        return "raum/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layoutAdmin.html.twig' %}

{% block body %}
    <h1>Raums list</h1>

    <table class=\"mdl-data-table mdl-js-data-table mdl-shadow--2dp\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Profile</th>
                <th>Nummer</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for raum in raums %}
            <tr>
                <td><a href=\"{{ path('adminRaum_show', { 'id': raum.id }) }}\">{{ raum.id }}</a></td>
                <td><img src=\"{{ asset(raum.image.webPath)}}\" height=\"52\" width=\"52\" ></td>
                <td>{{ raum.nummer }}</td>
                <td>{{ raum.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('adminRaum_show', { 'id': raum.id }) }}\"><i class=\"glyphicon glyphicon-info-sign\"></i></a>
                        </li>
                        <li>
                            <a href=\"{{ path('adminRaum_edit', { 'id': raum.id }) }}\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
          <div class= \"cration_artiste\">

            <a class=\"mdl-button mdl-js-button mdl-button--raised\" href=\"{{ path('adminRaum_new') }}\">Create a new raum<i class=\"glyphicon glyphicon-plus\"></i></a>
          </div>
</li>
    </ul>
{% endblock %}
", "raum/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/app/Resources/views/raum/index.html.twig");
    }
}
