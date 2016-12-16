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
$def[1] .= "DEF:var2=$rrdfile:$DS[2]:AVERAGE " ;
$def[1] .= "HRULE:$WARN[1]#FFFF00 ";
$def[1] .= "HRULE:$CRIT[1]#FF0000 ";
$def[1] .= "LINE2:var1$colors[green]:\"CPU_Temp \" " ;
$def[1] .= "GPRINT:var1:LAST:\"%6.lf degreeC last\" " ;
$def[1] .= "GPRINT:var1:AVERAGE:\"%6.lf degreeC avg\" " ;
$def[1] .= "GPRINT:var1:MAX:\"%6.lf degreeC max\\n\" ";
$def[1] .= "LINE2:var2$colors[blue]:\"DIMM_Temp \" " ;
$def[1] .= "GPRINT:var2:LAST:\"%6.lf degreeC last\" " ;
$def[1] .= "GPRINT:var2:AVERAGE:\"%6.lf degreeC avg\" " ;
$def[1] .= "GPRINT:var2:MAX:\"%6.lf degreeC Total\\n\" " ;

?>
