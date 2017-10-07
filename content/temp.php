<?php
$output = shell_exec('cat /sys/class/thermal/thermal_zone0/temp');
echo "$output &deg;";
?>
