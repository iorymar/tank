<?php
$output = shell_exec("iwconfig wlan0 | grep Qual");
echo "$output &deg;";
?>

