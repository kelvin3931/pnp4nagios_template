<?php
$ds_name[1] = "$NAGIOS_AUTH_SERVICEDESC";
$opt[1] = "--vertical-label \"$UNIT[1]\" --title \"$hostname / $servicedesc\" ";

$def[1]  = rrd::def("var1", $RRDFILE[1], $DS[1], "AVERAGE");
$def[1] .= rrd::def("var2", $RRDFILE[2], $DS[2], "AVERAGE");

if ($WARN[1] != "") {
    $def[1] .= rrd::hrule($WARN[1], "#FFFF00", "Warning  ".$WARN[1].$UNIT[1]."\\n");
}
if ($CRIT[1] != "") {
    $def[1] .= rrd::hrule($CRIT[1], "#FF0000", "Critical ".$CRIT[1].$UNIT[1]."\\n");
}

$def[1] .= rrd::area("var1", "#63d223", "Total") ;
$def[1] .= rrd::gprint("var1", array("LAST", "AVERAGE", "MAX"), "%6.2lf$UNIT[1]");
$def[1] .= rrd::line1("var2", "#ff0000", "Used") ;
$def[1] .= rrd::gprint("var2", array("LAST", "AVERAGE", "MAX"), "%6.2lf$UNIT[1]");
?>
