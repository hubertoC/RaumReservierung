<?php

/* HZraumReservierungBundle:RaumHtml:calender.html.twig */
class __TwigTemplate_52fdb6442142806165d8fafce659bc281e05afa4aa978a83d319bf631ff588d5 extends Twig_Template
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
        $__internal_89eef8e1f4a358672102271390ac3cce892030b32563c9f0dc4c3c3a37d53372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89eef8e1f4a358672102271390ac3cce892030b32563c9f0dc4c3c3a37d53372->enter($__internal_89eef8e1f4a358672102271390ac3cce892030b32563c9f0dc4c3c3a37d53372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:calender.html.twig"));

        $__internal_a05471ada9aa4f53730a60b8ff028533ddeedc6d2dba1ff821156d057e611e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05471ada9aa4f53730a60b8ff028533ddeedc6d2dba1ff821156d057e611e6d->enter($__internal_a05471ada9aa4f53730a60b8ff028533ddeedc6d2dba1ff821156d057e611e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:calender.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Calendar jQuery Plugin</title>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/easycal.css"), "html", null, true);
        echo "\">

\t<style>
\t\tbody{ width: 960px; margin: 0 auto; font-size: 12px; font-family: Arial; box-sizing: border-box;}

\t</style>
</head>
<body>

\t<div class=\"mycal\" style=\"width:100%;\"></div>





  <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>

  <script src=\"//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js\"></script>

  <script src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js\"></script>


  <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easycal.js"), "html", null, true);
        echo "\" ></script>
  <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataset.js"), "html", null, true);
        echo "\" ></script>

\t<script>
\t\t\$('.mycal').easycal({
\t\t\tstartDate : '31-10-2014', // OR 31/10/2104
\t\t\ttimeFormat : 'HH:mm',
\t\t\tcolumnDateFormat : 'dddd, DD MMM',
\t\t\tminTime : '08:00:00',
\t\t\tmaxTime : '21:00:00',
\t\t\tslotDuration : 60,
\t\t\ttimeGranularity : 60,

\t\t\tdayClick : function(el, startTime){
\t\t\t\tconsole.log('Slot selected: ' + startTime);
\t\t\t},
\t\t\teventClick : function(eventId){
\t\t\t\tconsole.log('Event was clicked with id: ' + eventId);
\t\t\t},

\t\t\tevents : getEvents(),

\t\t\toverlapColor : '#FF0',
\t\t\toverlapTextColor : '#000',
\t\t\toverlapTitle : 'Multiple'
\t\t});


\t</script>
</body>
</html>
";
        
        $__internal_89eef8e1f4a358672102271390ac3cce892030b32563c9f0dc4c3c3a37d53372->leave($__internal_89eef8e1f4a358672102271390ac3cce892030b32563c9f0dc4c3c3a37d53372_prof);

        
        $__internal_a05471ada9aa4f53730a60b8ff028533ddeedc6d2dba1ff821156d057e611e6d->leave($__internal_a05471ada9aa4f53730a60b8ff028533ddeedc6d2dba1ff821156d057e611e6d_prof);

    }

    public function getTemplateName()
    {
        return "HZraumReservierungBundle:RaumHtml:calender.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 28,  56 => 27,  31 => 5,  25 => 1,);
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
\t<title>Calendar jQuery Plugin</title>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/easycal.css') }}\">

\t<style>
\t\tbody{ width: 960px; margin: 0 auto; font-size: 12px; font-family: Arial; box-sizing: border-box;}

\t</style>
</head>
<body>

\t<div class=\"mycal\" style=\"width:100%;\"></div>





  <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>

  <script src=\"//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js\"></script>

  <script src=\"//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js\"></script>


  <script type=\"text/javascript\" src=\"{{ asset('js/easycal.js') }}\" ></script>
  <script type=\"text/javascript\" src=\"{{ asset('js/dataset.js') }}\" ></script>

\t<script>
\t\t\$('.mycal').easycal({
\t\t\tstartDate : '31-10-2014', // OR 31/10/2104
\t\t\ttimeFormat : 'HH:mm',
\t\t\tcolumnDateFormat : 'dddd, DD MMM',
\t\t\tminTime : '08:00:00',
\t\t\tmaxTime : '21:00:00',
\t\t\tslotDuration : 60,
\t\t\ttimeGranularity : 60,

\t\t\tdayClick : function(el, startTime){
\t\t\t\tconsole.log('Slot selected: ' + startTime);
\t\t\t},
\t\t\teventClick : function(eventId){
\t\t\t\tconsole.log('Event was clicked with id: ' + eventId);
\t\t\t},

\t\t\tevents : getEvents(),

\t\t\toverlapColor : '#FF0',
\t\t\toverlapTextColor : '#000',
\t\t\toverlapTitle : 'Multiple'
\t\t});


\t</script>
</body>
</html>
", "HZraumReservierungBundle:RaumHtml:calender.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/src/HZ/raumReservierungBundle/Resources/views/RaumHtml/calender.html.twig");
    }
}
