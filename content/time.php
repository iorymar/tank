<?php
$output = shell_exec('uptime -p|cut -c 3-');
echo "<pre>$output</pre>";
?>

