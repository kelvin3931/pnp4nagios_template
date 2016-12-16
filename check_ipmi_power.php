<?php

$opt[1] = "--vertical-label degreeC --title \"$hostname / $servicedesc\" ";
$ds_name[1] = "$NAGIOS_AUTH_SERVICEDESC";
$colors = array(
       'red'=> '#FF0000',
       'green' => '#00e500',
       'blue' => '#7f7fff',
       'yellow' => '#FFFF00',
       'black' => '#000000',
       'deepred' => '#330000',
        );

$def[1] =  "DEF:var1=$rrdfile:$DS[1]:AVERAGE " ;
$def[1] .= "HRULE:$WARN[1]#FFFF00 ";
$def[1] .= "HRULE:$CRIT[1]#FF0000 ";
$def[1] .= "LINE2:var1$colors[green]:\"PSU_Output \" " ;
$def[1] .= "GPRINT:var1:LAST:\"%6.lf Watts last\" " ;
$def[1] .= "GPRINT:var1:AVERAGE:\"%6.lf Watts avg\" " ;
$def[1] .= "GPRINT:var1:MAX:\"%6.lf Watts max\\n\" ";

?>
