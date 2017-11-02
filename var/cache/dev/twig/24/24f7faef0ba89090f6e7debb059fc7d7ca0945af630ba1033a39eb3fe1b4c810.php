<?php

/* HZraumReservierungBundle:RaumHtml:calendarOption.html.twig */
class __TwigTemplate_911ada2d15c9349653cae487f9d5387053df14299a0602513c6776f558a5219a extends Twig_Template
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
        $__internal_e183988b7bea3df6ea89868aa0403713363d49f0ce76f0b5016b2c88a7e87720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e183988b7bea3df6ea89868aa0403713363d49f0ce76f0b5016b2c88a7e87720->enter($__internal_e183988b7bea3df6ea89868aa0403713363d49f0ce76f0b5016b2c88a7e87720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:calendarOption.html.twig"));

        $__internal_48343899b4423cfc2110f5211c5f2dd9474d928e3a0aaecb60396774148f6034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48343899b4423cfc2110f5211c5f2dd9474d928e3a0aaecb60396774148f6034->enter($__internal_48343899b4423cfc2110f5211c5f2dd9474d928e3a0aaecb60396774148f6034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HZraumReservierungBundle:RaumHtml:calendarOption.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

\t<head>

\t\t<title>Add Event</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui-custom-1.11.2.min.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/DateTimePicker.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/calenstyle.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/CalJsonGenerator.js"), "html", null, true);
        echo "\" ></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>



    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/jquery-ui-custom-1.11.2.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/DateTimePicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/calenstyle.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/calenstyle-jquery-ui-override.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("persocss/calenstyle-iconfont.css"), "html", null, true);
        echo "\">





\t\t<style type=\"text/css\">

\t\t\t.calendarContOuterParent
\t\t\t{
\t\t\t\twidth: 1024px;
\t\t\t\theight: 768px;
\t\t\t\tmargin: 0px auto;
\t\t\t}

\t\t\t.calendarContOuter
\t\t\t{
\t\t\t\twidth: 1000px;
\t\t\t\theight: 500px;
\t\t\t\tmargin: 0px auto;

            \tfont-size: 14px;
\t\t\t}

\t\t\t#ipAlertStartEnd, #ipAlertTitle
\t\t\t{
\t\t\t\tdisplay:none;
\t\t\t}

\t\t</style>

\t\t<script type=\"text/javascript\">

\t\t\tvar oCal1, sInputTZOffset = \"-00:00\";

\t\t\t\$(document).ready(function()
\t\t\t{

\t\t\t\t\$(\".calendarContOuter\").CalenStyle(
\t\t\t\t{
\t\t\t\t\tinitialize: function()
\t\t\t\t\t{
\t\t\t\t\t\toCal1 = this;
\t\t\t\t\t},

\t\t\t\t\t//selectedDate: new Date(2014, 05, 12, 0, 0, 0, 0),

\t\t\t\t\tdisplayWeekNumInMonthView: true,

\t\t\t\t\tcalculateDetailedMonthViewRowMinHeight: false,

\t\t\t\t\t//fixedHeightOfDetailedMonthView: true,

\t\t\t\t\tchangeColorBasedOn: \"Event\",

\t\t\t\t\thideEventIcon: {Default: true},

\t\t\t\t\tformatDates:
\t\t\t\t\t{
\t\t\t\t\t\t\"hh:mm\": function(iDate)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tif(iDate.H < 5)
\t\t\t\t\t\t\t\treturn \"Night \" + oCal1.getNumberStringInFormat(iDate.h, 2, true) + \":\" + oCal1.getNumberStringInFormat(iDate.m, 2, true);
\t\t\t\t\t\t\telse if(iDate.H < 10)
\t\t\t\t\t\t\t\treturn \"Morning \" + oCal1.getNumberStringInFormat(iDate.h, 2, true) + \":\" + oCal1.getNumberStringInFormat(iDate.m, 2, true);
\t\t\t\t\t\t\telse if(iDate.H < 14)
\t\t\t\t\t\t\t\treturn \"Afternoon \" + oCal1.getNumberStringInFormat(iDate.h, 2, true) + \":\" + oCal1.getNumberStringInFormat(iDate.m, 2, true);
\t\t\t\t\t\t\telse if(iDate.H < 19)
\t\t\t\t\t\t\t\treturn \"Evening \" + oCal1.getNumberStringInFormat(iDate.h, 2, true) + \":\" + oCal1.getNumberStringInFormat(iDate.m, 2, true);
\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\treturn \"Night \" + oCal1.getNumberStringInFormat(iDate.h, 2, true) + \":\" + oCal1.getNumberStringInFormat(iDate.m, 2, true);
\t\t\t\t\t\t}
\t\t\t\t\t},

\t\t\t\t\tcalDataSource:
\t\t\t\t\t[
\t\t\t\t\t\t{
\t\t\t\t\t\t\tsourceId: \"s1\",
\t\t\t\t\t\t\tsourceFetchType: \"DateRange\",
\t\t\t\t\t\t\tsourceType: \"FUNCTION\",
\t\t\t\t\t\t\tconfig:
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tinputTZOffset: sInputTZOffset,
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsource: function(fetchStartDate, fetchEndDate, durationStartDate, durationEndDate, oConfig, loadViewCallback)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tvar calObj1 = this;
\t\t\t\t\t\t\t\tcalObj1.incrementDataLoadingCount(1);

\t\t\t\t\t\t\t\tvar oEventResponse = generateJsonEvents(fetchStartDate, fetchEndDate);
\t\t\t\t\t\t\t\tif(oEventResponse != undefined)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tif(oEventResponse[0])
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tcalObj1.parseDataSource(\"EventSource\", oEventResponse[1], durationStartDate, durationEndDate, loadViewCallback, oConfig, false);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t],

\t\t\t\t\tsaveChangesOnEventDrop: function(oDraggedEvent, startDateBeforeDrop, endDateBeforeDrop, startDateAfterDrop, endDateAfterDrop)
\t\t\t\t\t{
\t\t\t\t\t\tvar calObj1 = this;

\t\t\t\t\t\tconsole.log(oDraggedEvent);
\t\t\t\t\t\tconsole.log(startDateAfterDrop);
\t\t\t\t\t\tconsole.log(endDateAfterDrop);

\t\t\t\t\t\t//calObj1.revertToOriginalEvent(oDraggedEvent, startDateBeforeDrop, endDateBeforeDrop);
\t\t\t\t\t},

\t\t\t\t\tcellClicked: function(sView, dSelectedDate, bIsAllDay, pClickedAt)
\t\t\t\t\t{
\t\t\t\t\t\tconsole.log(\"Cell Clicked 1 : \" + dSelectedDate);
\t\t\t\t\t\tshowModal(true, dSelectedDate);
\t\t\t\t\t},

\t\t\t\t\teventsAddedInView: function(visibleView, eventClass)
\t\t\t\t\t{
\t\t\t\t\t\tvar thisObj = this;

\t\t\t\t\t\t\$(thisObj.elem).find(eventClass).popover(
\t\t\t\t\t\t{

\t\t\t\t\t\t\tplacement: \"top\",

\t\t\t\t\t\t\ttrigger: \"hover\",

\t\t\t\t\t\t\thtml: true,

\t\t\t\t\t\t\tcontainer: \"body\",

\t\t\t\t\t\t\tcontent: function()
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tvar oTooltipContent = \$(this).data(\"tooltipcontent\"),
\t\t\t\t\t\t\t\tsTooltipText = \"<div class='cTooltipTitle'>\" + oTooltipContent.title + \"</div><div class='cTooltipTime'>\" + oTooltipContent.startDateTime + \"<br/>\" + oTooltipContent.endDateTime + \"</div>\";
\t\t\t\t\t\t\t\treturn sTooltipText;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t});

\t\t\t\t\$('input[type=\"checkbox\"]').bind('click',function()
\t\t\t\t{
\t\t\t\t\tvalidateAllDayChecked();
\t\t\t\t});

\t\t\t\t\$('#modal-form').on('show.bs.modal', function (e)
\t\t\t\t{
\t\t\t\t\tvalidateAllDayChecked();
\t\t\t\t});

\t\t\t\tcustomizeInputs();
\t\t\t\tdefineFormEvents();

\t\t\t});

\t\t\tfunction showModal(bIsAllDay, dStartDateTime)
\t\t\t{
\t\t\t\tconsole.log(\"showModal : \" + bIsAllDay + \" \" + dStartDateTime);
\t\t\t\t\$(\"#modal-form\").modal('show');
\t\t\t\t\$(\"#ipTitle, #ipDesc\").val(\"\");
\t\t\t\t\$(\"#ipAllDay\").prop(\"checked\", bIsAllDay);

\t\t\t\tvar dEndDateTime, sStartDateTime, sEndDateTime;
\t\t\t\tif(bIsAllDay)
\t\t\t\t{
\t\t\t\t\tdEndDateTime = new Date(dStartDateTime);
\t\t\t\t\tdEndDateTime.setDate(dStartDateTime.getDate() + (oCal1.setting.allDayEventDuration - 1));

\t\t\t\t\tsStartDateTime = oCal1.getDateInFormat({\"date\": dStartDateTime}, \"dd-MM-yyyy\", false, false);
\t\t\t\t\tsEndDateTime = oCal1.getDateInFormat({\"date\": dEndDateTime}, \"dd-MM-yyyy\", false, false);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tdEndDateTime = new Date(dStartDateTime.getTime() + (oCal1.setting.eventDuration * 6E4));

\t\t\t\t\tsStartDateTime = oCal1.getDateInFormat({\"date\": dStartDateTime}, \"dd-MM-yyyy HH:mm\", oCal1.setting.is24Hour, false);
\t\t\t\t\tsEndDateTime = oCal1.getDateInFormat({\"date\": dEndDateTime}, \"dd-MM-yyyy HH:mm\", oCal1.setting.is24Hour, false);
\t\t\t\t}

\t\t\t\tconsole.log(sEndDateTime + \"  \" + sEndDateTime);
\t\t\t\t\$(\"#ipStart\").val(sStartDateTime);
\t\t\t\t\$(\"#ipEnd\").val(sEndDateTime);
\t\t\t\tvalidateAllDayChecked();
\t\t\t}

\t\t\tfunction customizeInputs()
\t\t\t{
\t\t\t\tconsole.log(\"DateTimePicker : \");
\t\t\t\tconsole.log(\$(\".modal-dtpicker\"));
\t\t\t\t\$(\".modal-dtpicker\").DateTimePicker(
\t\t\t\t{

\t\t\t\t\tdateSeparator: oCal1.setting.formatSeparatorDate,

\t\t\t\t\ttimeSeparator: oCal1.setting.formatSeparatorTime,

\t\t\t\t\tdateTimeSeparator: oCal1.setting.formatSeparatorDateTime,

\t\t\t\t\tdateFormat: \"dd-MM-yyyy\",

\t\t\t\t\tdateTimeFormat: \"dd-MM-yyyy HH:mm:ss\"

\t\t\t\t});
\t\t\t}

\t\t\tfunction validateDateTimes(bIsAllDay, dStartDateTime, dEndDateTime)
\t\t\t{
\t\t\t\tif(bIsAllDay)
\t\t\t\t{
\t\t\t\t\tconsole.log(\"Date Comparison : \" + oCal1.compareDates(dStartDateTime, dEndDateTime));
\t\t\t\t\tif(oCal1.compareDates(dStartDateTime, dEndDateTime)  > 0)
\t\t\t\t\t{
\t\t\t\t\t\t\$(\"#ipAlertStartEnd\").show();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tconsole.log(\"DateTime Comparison : \" + oCal1.compareDateTimes(dStartDateTime, dEndDateTime));
\t\t\t\t\tif(oCal1.compareDateTimes(dStartDateTime, dEndDateTime)  > 0)
\t\t\t\t\t{
\t\t\t\t\t\t\$(\"#ipAlertStartEnd\").show();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\$(\"#ipAlertStartEnd\").hide();
\t\t\t\treturn true;
\t\t\t}

\t\t\tfunction validateAllDayChecked()
\t\t\t{
\t\t\t\tconsole.log(\"validateAllDayChecked \" + (\$(\"#ipAllDay\").is(':checked')));
\t\t\t\tif(\$(\"#ipAllDay\").is(':checked'))
\t\t\t\t{
\t\t\t\t\t\$(\"#ipStart-group label\").html(\"Start Date : \");
\t\t\t\t\t\$(\"#ipEnd-group label\").html(\"End Date : \");

\t\t\t\t\t\$(\"#ipStart, #ipEnd\").data(\"field\", \"date\");

\t\t\t\t\tvar sDateTimeRegex = /^([0-3]{1}[0-9]{1})(-([0-1]{1}[0-9]{1}))(-([0-9]{4}))(\\s)([0-2]{1}[0-9]{1}):([0-6]{1}[0-9]{1})/;
\t\t\t\t\tvar sDateTimeStart = \$(\"#ipStart\").val(),
\t\t\t\t\tsArrDateTimeStart = sDateTimeStart.match(sDateTimeRegex),
\t\t\t\t\tsDateTimeEnd = \$(\"#ipEnd\").val(),
\t\t\t\t\tsArrDateTimeEnd = sDateTimeEnd.match(sDateTimeRegex);
\t\t\t\t\tif(sArrDateTimeStart != null)
\t\t\t\t\t\t\$(\"#ipStart\").val(sDateTimeStart.split(\" \")[0]);
\t\t\t\t\tif(sArrDateTimeEnd != null)
\t\t\t\t\t\t\$(\"#ipEnd\").val(sDateTimeEnd.split(\" \")[0]);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$(\"#ipStart-group label\").html(\"Start Date Time : \");
\t\t\t\t\t\$(\"#ipEnd-group label\").html(\"End Date Time : \");

\t\t\t\t\t\$(\"#ipStart, #ipEnd\").data(\"field\", \"datetime\");

\t\t\t\t\tvar sDateTimeRegex = /^([0-3]{1}[0-9]{1})(-([0-1]{1}[0-9]{1}))(-([0-9]{4}))(\\s)([0-2]{1}[0-9]{1}):([0-6]{1}[0-9]{1})/;
\t\t\t\t\tvar sDateTimeStart = \$(\"#ipStart\").val(),
\t\t\t\t\tsArrDateTimeStart = sDateTimeStart.match(sDateTimeRegex),
\t\t\t\t\tsDateTimeEnd = \$(\"#ipEnd\").val(),
\t\t\t\t\tsArrDateTimeEnd = sDateTimeEnd.match(sDateTimeRegex);
\t\t\t\t\tconsole.log(\"Arrays : \" + sDateTimeStart + \" \" + sDateTimeEnd);
\t\t\t\t\tconsole.log(sArrDateTimeStart);
\t\t\t\t\tconsole.log(sArrDateTimeEnd);
\t\t\t\t\tif(sArrDateTimeStart == null)
\t\t\t\t\t\t\$(\"#ipStart\").val(sDateTimeStart + \" 00:00\");
\t\t\t\t\tif(sArrDateTimeEnd == null)
\t\t\t\t\t\t\$(\"#ipEnd\").val(sDateTimeEnd + \" 00:00\");
\t\t\t\t}
\t\t\t}

\t\t\tfunction parseDateInFormat(bIsAllDay, sDateTime)
\t\t\t{
\t\t\t\tvar dDateTime;
\t\t\t\tif(bIsAllDay)
\t\t\t\t{
\t\t\t\t\tvar sArrDateTime = sDateTime.match(/^([0-3]{1}[0-9]{1})(-([0-1]{1}[0-9]{1}))(-([0-9]{4}))/);
\t\t\t\t\tconsole.log(sArrDateTime);
\t\t\t\t\tdDateTime = new Date(sArrDateTime[5], sArrDateTime[3] - 1, sArrDateTime[1], 0, 1, 0, 0);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tvar sArrDateTime = sDateTime.match(/^([0-3]{1}[0-9]{1})(-([0-1]{1}[0-9]{1}))(-([0-9]{4}))(\\s)([0-2]{1}[0-9]{1}):([0-6]{1}[0-9]{1})/);
\t\t\t\t\tconsole.log(sArrDateTime);
\t\t\t\t\tdDateTime = new Date(sArrDateTime[5], sArrDateTime[3] - 1, sArrDateTime[1], sArrDateTime[7], sArrDateTime[8], 0, 0);
\t\t\t\t}
\t\t\t\treturn dDateTime;
\t\t\t}

\t\t\tfunction defineFormEvents()
\t\t\t{

\t\t\t\t\$(\"#ipStart, #ipEnd\").change(function()
\t\t\t\t{
\t\t\t\t\tvar bIsAllDay = \$(\"#ipAllDay\").is(':checked'),
\t\t\t\t\tdStartDateTime = parseDateInFormat(bIsAllDay, \$(\"#ipStart\").val()),
\t\t\t\t\tdEndDateTime = parseDateInFormat(bIsAllDay, \$(\"#ipEnd\").val());
\t\t\t\t\tvalidateDateTimes(bIsAllDay, dStartDateTime, dEndDateTime);
\t\t\t\t});

\t\t\t\t\$(\"#submit\").click(function()
\t\t\t\t{
\t\t\t\t\tvar bIsAllDay = \$(\"#ipAllDay\").is(':checked'),
\t\t\t\t\tdStartDateTime = parseDateInFormat(bIsAllDay, \$(\"#ipStart\").val()),
\t\t\t\t\tdEndDateTime = parseDateInFormat(bIsAllDay, \$(\"#ipEnd\").val()),
\t\t\t\t\tsTitle = \$(\"#ipTitle\").val(),
\t\t\t\t\tsDesc= \$(\"#ipDesc\").val();

\t\t\t\t\tif(sTitle != \"\")
\t\t\t\t\t\t\$(\"#ipAlertTitle\").hide();
\t\t\t\t\telse
\t\t\t\t\t\t\$(\"#ipAlertTitle\").show();

\t\t\t\t\tif(sTitle != \"\" && validateDateTimes(bIsAllDay, dStartDateTime, dEndDateTime))
\t\t\t\t\t{
\t\t\t\t\t\tif(!bIsAllDay)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tdStartDateTime = oCal1.normalizeDateTimeWithOffset(dStartDateTime, oCal1.setting.outputTZOffset, sInputTZOffset);
\t\t\t\t\t\t\tdEndDateTime = oCal1.normalizeDateTimeWithOffset(dEndDateTime, oCal1.setting.outputTZOffset, sInputTZOffset);
\t\t\t\t\t\t}

\t\t\t\t\t\tvar oEvent = new CalEvent(\"AddedOnUI\", bIsAllDay, dStartDateTime, dEndDateTime, \"Dynamic\", sTitle, sDesc, \"https://www.google.com\");
\t\t\t\t\t\tvar oArrEvent = new Array();
\t\t\t\t\t\toArrEvent.push(oEvent);
\t\t\t\t\t\tconsole.log(oEvent);
\t\t\t\t\t\tconsole.log(oArrEvent);
\t\t\t\t\t\toCal1.addEventsForSource(oArrEvent, \"s1\");
\t\t\t\t\t\toCal1.refreshView();

\t\t\t\t\t\t\$(\"#modal-form\").modal(\"hide\");
\t\t\t\t\t}
\t\t\t\t});

\t\t\t}


\t\t</script>

\t</head>

\t<body>


\t\t<div class=\"calendarContOuterParent\">
\t\t\t<div class=\"calendarContOuter\"></div>
\t\t</div>

\t\t<div id=\"modal-form\" class=\"modal fade\">

\t\t\t<div class=\"modal-dtpicker\"></div>

\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">

\t\t\t\t\t<form>

\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\tAdd Event
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t<div id=\"ipAlertTitle\" class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\tTitle should not be Empty
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"ipTitle-group\" class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"ipTitle\">Title : </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"ipTitle\" placeholder=\"Title\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"ipAllDay-group\" class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input id=\"ipAllDay\" type=\"checkbox\" checked> All Day
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"ipAlertStartEnd\" class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\tStart DateTime should be earlier than End DateTime
\t\t\t\t\t\t\t</div>

 \t\t\t\t\t\t\t<div id=\"ipStart-group\" class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"ipStart\">Start Date : </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"ipStart\" data-field=\"date\" placeholder=\"Start\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"ipEnd-group\" class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"ipStart\">End Date : </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"ipEnd\" data-field=\"date\" placeholder=\"End\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"ipDesc-group\" class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"ipDesc\">Description : </label>
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" id=\"ipDesc\" placeholder=\"Description\"></textarea>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default form-btn\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t<button id=\"submit\" type=\"button\" class=\"btn btn-default form-btn\">Submit</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t</form>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>

</html>
";
        
        $__internal_e183988b7bea3df6ea89868aa0403713363d49f0ce76f0b5016b2c88a7e87720->leave($__internal_e183988b7bea3df6ea89868aa0403713363d49f0ce76f0b5016b2c88a7e87720_prof);

        
        $__internal_48343899b4423cfc2110f5211c5f2dd9474d928e3a0aaecb60396774148f6034->leave($__internal_48343899b4423cfc2110f5211c5f2dd9474d928e3a0aaecb60396774148f6034_prof);

    }

    public function getTemplateName()
    {
        return "HZraumReservierungBundle:RaumHtml:calendarOption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  25 => 1,);
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

\t<head>

\t\t<title>Add Event</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery-1.11.1.min.js') }}\" ></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/jquery-ui-custom-1.11.2.min.js') }}\" ></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/DateTimePicker.js') }}\" ></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/calenstyle.js') }}\" ></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/CalJsonGenerator.js') }}\" ></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/bootstrap.min.js') }}\" ></script>



    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/jquery-ui-custom-1.11.2.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/DateTimePicker.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/calenstyle.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/calenstyle-jquery-ui-override.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('persocss/calenstyle-iconfont.css') }}\">





\t\t<style type=\"text/css\">

\t\t\t.calendarContOuterParent
\t\t\t{
\t\t\t\twidth: 1024px;
\t\t\t\theight: 768px;
\t\t\t\tmargin: 0px auto;
\t\t\t}

\t\t\t.calendarContOuter
\t\t\t{
\t\t\t\twidth: 1000px;
\t\t\t\theight: 500px;
\t\t\t\tmargin: 0px auto;

            \tfont-size: 14px;
\t\t\t}

\t\t\t#ipAlertStartEnd, #ipAlertTitle
\t\t\t{
\t\t\t\tdisplay:none;
\t\t\t}

\t\t</style>

\t\t<script type=\"text/javascript\">

\t\t\tvar oCal1, sInputTZOffset = \"-00:00\";

\t\t\t\$(document).ready(function()
\t\t\t{

\t\t\t\t\$(\".calendarContOuter\").CalenStyle(
\t\t\t\t{
\t\t\t\t\tinitialize: function()
\t\t\t\t\t{
\t\t\t\t\t\toCal1 = this;
\t\t\t\t\t},

\t\t\t\t\t//selectedDate: new Date(2014, 05, 12, 0, 0, 0, 0),

\t\t\t\t\tdisplayWeekNumInMonthView: true,

\t\t\t\t\tcalculateDetailedMonthViewRowMinHeight: false,

\t\t\t\t\t//fixedHeightOfDetailedMonthView: true,

\t\t\t\t\tchangeColorBasedOn: \"Event\",

\t\t\t\t\thideEventIcon: {Default: true},

\t\t\t\t\tformatDates:
\t\t\t\t\t{
\t\t\t\t\t\t\"hh:mm\": function(iDate)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tif(iDate.H < 5)
\t\t\t\t\t\t\t\treturn \"Night \" + oCal1.getNumberStringInFormat(iDate.h, 2, true) + \":\" + oCal1.getNumberStringInFormat(iDate.m, 2, true);
\t\t\t\t\t\t\telse if(iDate.H < 10)
\t\t\t\t\t\t\t\treturn \"Morning \" + oCal1.getNumberStringInFormat(iDate.h, 2, true) + \":\" + oCal1.getNumberStringInFormat(iDate.m, 2, true);
\t\t\t\t\t\t\telse if(iDate.H < 14)
\t\t\t\t\t\t\t\treturn \"Afternoon \" + oCal1.getNumberStringInFormat(iDate.h, 2, true) + \":\" + oCal1.getNumberStringInFormat(iDate.m, 2, true);
\t\t\t\t\t\t\telse if(iDate.H < 19)
\t\t\t\t\t\t\t\treturn \"Evening \" + oCal1.getNumberStringInFormat(iDate.h, 2, true) + \":\" + oCal1.getNumberStringInFormat(iDate.m, 2, true);
\t\t\t\t\t\t\telse
\t\t\t\t\t\t\t\treturn \"Night \" + oCal1.getNumberStringInFormat(iDate.h, 2, true) + \":\" + oCal1.getNumberStringInFormat(iDate.m, 2, true);
\t\t\t\t\t\t}
\t\t\t\t\t},

\t\t\t\t\tcalDataSource:
\t\t\t\t\t[
\t\t\t\t\t\t{
\t\t\t\t\t\t\tsourceId: \"s1\",
\t\t\t\t\t\t\tsourceFetchType: \"DateRange\",
\t\t\t\t\t\t\tsourceType: \"FUNCTION\",
\t\t\t\t\t\t\tconfig:
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tinputTZOffset: sInputTZOffset,
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsource: function(fetchStartDate, fetchEndDate, durationStartDate, durationEndDate, oConfig, loadViewCallback)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tvar calObj1 = this;
\t\t\t\t\t\t\t\tcalObj1.incrementDataLoadingCount(1);

\t\t\t\t\t\t\t\tvar oEventResponse = generateJsonEvents(fetchStartDate, fetchEndDate);
\t\t\t\t\t\t\t\tif(oEventResponse != undefined)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tif(oEventResponse[0])
\t\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\t\tcalObj1.parseDataSource(\"EventSource\", oEventResponse[1], durationStartDate, durationEndDate, loadViewCallback, oConfig, false);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t],

\t\t\t\t\tsaveChangesOnEventDrop: function(oDraggedEvent, startDateBeforeDrop, endDateBeforeDrop, startDateAfterDrop, endDateAfterDrop)
\t\t\t\t\t{
\t\t\t\t\t\tvar calObj1 = this;

\t\t\t\t\t\tconsole.log(oDraggedEvent);
\t\t\t\t\t\tconsole.log(startDateAfterDrop);
\t\t\t\t\t\tconsole.log(endDateAfterDrop);

\t\t\t\t\t\t//calObj1.revertToOriginalEvent(oDraggedEvent, startDateBeforeDrop, endDateBeforeDrop);
\t\t\t\t\t},

\t\t\t\t\tcellClicked: function(sView, dSelectedDate, bIsAllDay, pClickedAt)
\t\t\t\t\t{
\t\t\t\t\t\tconsole.log(\"Cell Clicked 1 : \" + dSelectedDate);
\t\t\t\t\t\tshowModal(true, dSelectedDate);
\t\t\t\t\t},

\t\t\t\t\teventsAddedInView: function(visibleView, eventClass)
\t\t\t\t\t{
\t\t\t\t\t\tvar thisObj = this;

\t\t\t\t\t\t\$(thisObj.elem).find(eventClass).popover(
\t\t\t\t\t\t{

\t\t\t\t\t\t\tplacement: \"top\",

\t\t\t\t\t\t\ttrigger: \"hover\",

\t\t\t\t\t\t\thtml: true,

\t\t\t\t\t\t\tcontainer: \"body\",

\t\t\t\t\t\t\tcontent: function()
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tvar oTooltipContent = \$(this).data(\"tooltipcontent\"),
\t\t\t\t\t\t\t\tsTooltipText = \"<div class='cTooltipTitle'>\" + oTooltipContent.title + \"</div><div class='cTooltipTime'>\" + oTooltipContent.startDateTime + \"<br/>\" + oTooltipContent.endDateTime + \"</div>\";
\t\t\t\t\t\t\t\treturn sTooltipText;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t});
\t\t\t\t\t}

\t\t\t\t});

\t\t\t\t\$('input[type=\"checkbox\"]').bind('click',function()
\t\t\t\t{
\t\t\t\t\tvalidateAllDayChecked();
\t\t\t\t});

\t\t\t\t\$('#modal-form').on('show.bs.modal', function (e)
\t\t\t\t{
\t\t\t\t\tvalidateAllDayChecked();
\t\t\t\t});

\t\t\t\tcustomizeInputs();
\t\t\t\tdefineFormEvents();

\t\t\t});

\t\t\tfunction showModal(bIsAllDay, dStartDateTime)
\t\t\t{
\t\t\t\tconsole.log(\"showModal : \" + bIsAllDay + \" \" + dStartDateTime);
\t\t\t\t\$(\"#modal-form\").modal('show');
\t\t\t\t\$(\"#ipTitle, #ipDesc\").val(\"\");
\t\t\t\t\$(\"#ipAllDay\").prop(\"checked\", bIsAllDay);

\t\t\t\tvar dEndDateTime, sStartDateTime, sEndDateTime;
\t\t\t\tif(bIsAllDay)
\t\t\t\t{
\t\t\t\t\tdEndDateTime = new Date(dStartDateTime);
\t\t\t\t\tdEndDateTime.setDate(dStartDateTime.getDate() + (oCal1.setting.allDayEventDuration - 1));

\t\t\t\t\tsStartDateTime = oCal1.getDateInFormat({\"date\": dStartDateTime}, \"dd-MM-yyyy\", false, false);
\t\t\t\t\tsEndDateTime = oCal1.getDateInFormat({\"date\": dEndDateTime}, \"dd-MM-yyyy\", false, false);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tdEndDateTime = new Date(dStartDateTime.getTime() + (oCal1.setting.eventDuration * 6E4));

\t\t\t\t\tsStartDateTime = oCal1.getDateInFormat({\"date\": dStartDateTime}, \"dd-MM-yyyy HH:mm\", oCal1.setting.is24Hour, false);
\t\t\t\t\tsEndDateTime = oCal1.getDateInFormat({\"date\": dEndDateTime}, \"dd-MM-yyyy HH:mm\", oCal1.setting.is24Hour, false);
\t\t\t\t}

\t\t\t\tconsole.log(sEndDateTime + \"  \" + sEndDateTime);
\t\t\t\t\$(\"#ipStart\").val(sStartDateTime);
\t\t\t\t\$(\"#ipEnd\").val(sEndDateTime);
\t\t\t\tvalidateAllDayChecked();
\t\t\t}

\t\t\tfunction customizeInputs()
\t\t\t{
\t\t\t\tconsole.log(\"DateTimePicker : \");
\t\t\t\tconsole.log(\$(\".modal-dtpicker\"));
\t\t\t\t\$(\".modal-dtpicker\").DateTimePicker(
\t\t\t\t{

\t\t\t\t\tdateSeparator: oCal1.setting.formatSeparatorDate,

\t\t\t\t\ttimeSeparator: oCal1.setting.formatSeparatorTime,

\t\t\t\t\tdateTimeSeparator: oCal1.setting.formatSeparatorDateTime,

\t\t\t\t\tdateFormat: \"dd-MM-yyyy\",

\t\t\t\t\tdateTimeFormat: \"dd-MM-yyyy HH:mm:ss\"

\t\t\t\t});
\t\t\t}

\t\t\tfunction validateDateTimes(bIsAllDay, dStartDateTime, dEndDateTime)
\t\t\t{
\t\t\t\tif(bIsAllDay)
\t\t\t\t{
\t\t\t\t\tconsole.log(\"Date Comparison : \" + oCal1.compareDates(dStartDateTime, dEndDateTime));
\t\t\t\t\tif(oCal1.compareDates(dStartDateTime, dEndDateTime)  > 0)
\t\t\t\t\t{
\t\t\t\t\t\t\$(\"#ipAlertStartEnd\").show();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tconsole.log(\"DateTime Comparison : \" + oCal1.compareDateTimes(dStartDateTime, dEndDateTime));
\t\t\t\t\tif(oCal1.compareDateTimes(dStartDateTime, dEndDateTime)  > 0)
\t\t\t\t\t{
\t\t\t\t\t\t\$(\"#ipAlertStartEnd\").show();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\$(\"#ipAlertStartEnd\").hide();
\t\t\t\treturn true;
\t\t\t}

\t\t\tfunction validateAllDayChecked()
\t\t\t{
\t\t\t\tconsole.log(\"validateAllDayChecked \" + (\$(\"#ipAllDay\").is(':checked')));
\t\t\t\tif(\$(\"#ipAllDay\").is(':checked'))
\t\t\t\t{
\t\t\t\t\t\$(\"#ipStart-group label\").html(\"Start Date : \");
\t\t\t\t\t\$(\"#ipEnd-group label\").html(\"End Date : \");

\t\t\t\t\t\$(\"#ipStart, #ipEnd\").data(\"field\", \"date\");

\t\t\t\t\tvar sDateTimeRegex = /^([0-3]{1}[0-9]{1})(-([0-1]{1}[0-9]{1}))(-([0-9]{4}))(\\s)([0-2]{1}[0-9]{1}):([0-6]{1}[0-9]{1})/;
\t\t\t\t\tvar sDateTimeStart = \$(\"#ipStart\").val(),
\t\t\t\t\tsArrDateTimeStart = sDateTimeStart.match(sDateTimeRegex),
\t\t\t\t\tsDateTimeEnd = \$(\"#ipEnd\").val(),
\t\t\t\t\tsArrDateTimeEnd = sDateTimeEnd.match(sDateTimeRegex);
\t\t\t\t\tif(sArrDateTimeStart != null)
\t\t\t\t\t\t\$(\"#ipStart\").val(sDateTimeStart.split(\" \")[0]);
\t\t\t\t\tif(sArrDateTimeEnd != null)
\t\t\t\t\t\t\$(\"#ipEnd\").val(sDateTimeEnd.split(\" \")[0]);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$(\"#ipStart-group label\").html(\"Start Date Time : \");
\t\t\t\t\t\$(\"#ipEnd-group label\").html(\"End Date Time : \");

\t\t\t\t\t\$(\"#ipStart, #ipEnd\").data(\"field\", \"datetime\");

\t\t\t\t\tvar sDateTimeRegex = /^([0-3]{1}[0-9]{1})(-([0-1]{1}[0-9]{1}))(-([0-9]{4}))(\\s)([0-2]{1}[0-9]{1}):([0-6]{1}[0-9]{1})/;
\t\t\t\t\tvar sDateTimeStart = \$(\"#ipStart\").val(),
\t\t\t\t\tsArrDateTimeStart = sDateTimeStart.match(sDateTimeRegex),
\t\t\t\t\tsDateTimeEnd = \$(\"#ipEnd\").val(),
\t\t\t\t\tsArrDateTimeEnd = sDateTimeEnd.match(sDateTimeRegex);
\t\t\t\t\tconsole.log(\"Arrays : \" + sDateTimeStart + \" \" + sDateTimeEnd);
\t\t\t\t\tconsole.log(sArrDateTimeStart);
\t\t\t\t\tconsole.log(sArrDateTimeEnd);
\t\t\t\t\tif(sArrDateTimeStart == null)
\t\t\t\t\t\t\$(\"#ipStart\").val(sDateTimeStart + \" 00:00\");
\t\t\t\t\tif(sArrDateTimeEnd == null)
\t\t\t\t\t\t\$(\"#ipEnd\").val(sDateTimeEnd + \" 00:00\");
\t\t\t\t}
\t\t\t}

\t\t\tfunction parseDateInFormat(bIsAllDay, sDateTime)
\t\t\t{
\t\t\t\tvar dDateTime;
\t\t\t\tif(bIsAllDay)
\t\t\t\t{
\t\t\t\t\tvar sArrDateTime = sDateTime.match(/^([0-3]{1}[0-9]{1})(-([0-1]{1}[0-9]{1}))(-([0-9]{4}))/);
\t\t\t\t\tconsole.log(sArrDateTime);
\t\t\t\t\tdDateTime = new Date(sArrDateTime[5], sArrDateTime[3] - 1, sArrDateTime[1], 0, 1, 0, 0);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tvar sArrDateTime = sDateTime.match(/^([0-3]{1}[0-9]{1})(-([0-1]{1}[0-9]{1}))(-([0-9]{4}))(\\s)([0-2]{1}[0-9]{1}):([0-6]{1}[0-9]{1})/);
\t\t\t\t\tconsole.log(sArrDateTime);
\t\t\t\t\tdDateTime = new Date(sArrDateTime[5], sArrDateTime[3] - 1, sArrDateTime[1], sArrDateTime[7], sArrDateTime[8], 0, 0);
\t\t\t\t}
\t\t\t\treturn dDateTime;
\t\t\t}

\t\t\tfunction defineFormEvents()
\t\t\t{

\t\t\t\t\$(\"#ipStart, #ipEnd\").change(function()
\t\t\t\t{
\t\t\t\t\tvar bIsAllDay = \$(\"#ipAllDay\").is(':checked'),
\t\t\t\t\tdStartDateTime = parseDateInFormat(bIsAllDay, \$(\"#ipStart\").val()),
\t\t\t\t\tdEndDateTime = parseDateInFormat(bIsAllDay, \$(\"#ipEnd\").val());
\t\t\t\t\tvalidateDateTimes(bIsAllDay, dStartDateTime, dEndDateTime);
\t\t\t\t});

\t\t\t\t\$(\"#submit\").click(function()
\t\t\t\t{
\t\t\t\t\tvar bIsAllDay = \$(\"#ipAllDay\").is(':checked'),
\t\t\t\t\tdStartDateTime = parseDateInFormat(bIsAllDay, \$(\"#ipStart\").val()),
\t\t\t\t\tdEndDateTime = parseDateInFormat(bIsAllDay, \$(\"#ipEnd\").val()),
\t\t\t\t\tsTitle = \$(\"#ipTitle\").val(),
\t\t\t\t\tsDesc= \$(\"#ipDesc\").val();

\t\t\t\t\tif(sTitle != \"\")
\t\t\t\t\t\t\$(\"#ipAlertTitle\").hide();
\t\t\t\t\telse
\t\t\t\t\t\t\$(\"#ipAlertTitle\").show();

\t\t\t\t\tif(sTitle != \"\" && validateDateTimes(bIsAllDay, dStartDateTime, dEndDateTime))
\t\t\t\t\t{
\t\t\t\t\t\tif(!bIsAllDay)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tdStartDateTime = oCal1.normalizeDateTimeWithOffset(dStartDateTime, oCal1.setting.outputTZOffset, sInputTZOffset);
\t\t\t\t\t\t\tdEndDateTime = oCal1.normalizeDateTimeWithOffset(dEndDateTime, oCal1.setting.outputTZOffset, sInputTZOffset);
\t\t\t\t\t\t}

\t\t\t\t\t\tvar oEvent = new CalEvent(\"AddedOnUI\", bIsAllDay, dStartDateTime, dEndDateTime, \"Dynamic\", sTitle, sDesc, \"https://www.google.com\");
\t\t\t\t\t\tvar oArrEvent = new Array();
\t\t\t\t\t\toArrEvent.push(oEvent);
\t\t\t\t\t\tconsole.log(oEvent);
\t\t\t\t\t\tconsole.log(oArrEvent);
\t\t\t\t\t\toCal1.addEventsForSource(oArrEvent, \"s1\");
\t\t\t\t\t\toCal1.refreshView();

\t\t\t\t\t\t\$(\"#modal-form\").modal(\"hide\");
\t\t\t\t\t}
\t\t\t\t});

\t\t\t}


\t\t</script>

\t</head>

\t<body>


\t\t<div class=\"calendarContOuterParent\">
\t\t\t<div class=\"calendarContOuter\"></div>
\t\t</div>

\t\t<div id=\"modal-form\" class=\"modal fade\">

\t\t\t<div class=\"modal-dtpicker\"></div>

\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">

\t\t\t\t\t<form>

\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\tAdd Event
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t\t<div id=\"ipAlertTitle\" class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\tTitle should not be Empty
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"ipTitle-group\" class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"ipTitle\">Title : </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"ipTitle\" placeholder=\"Title\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"ipAllDay-group\" class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input id=\"ipAllDay\" type=\"checkbox\" checked> All Day
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"ipAlertStartEnd\" class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\tStart DateTime should be earlier than End DateTime
\t\t\t\t\t\t\t</div>

 \t\t\t\t\t\t\t<div id=\"ipStart-group\" class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"ipStart\">Start Date : </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"ipStart\" data-field=\"date\" placeholder=\"Start\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"ipEnd-group\" class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"ipStart\">End Date : </label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"ipEnd\" data-field=\"date\" placeholder=\"End\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"ipDesc-group\" class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"ipDesc\">Description : </label>
\t\t\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" id=\"ipDesc\" placeholder=\"Description\"></textarea>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default form-btn\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t<button id=\"submit\" type=\"button\" class=\"btn btn-default form-btn\">Submit</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t</form>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>

</html>
", "HZraumReservierungBundle:RaumHtml:calendarOption.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/RaumReservierung/src/HZ/raumReservierungBundle/Resources/views/RaumHtml/calendarOption.html.twig");
    }
}
