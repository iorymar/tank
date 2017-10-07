<?php
$output = shell_exec('gpio read 21');

	if ("$output" == 1) echo "<font color=\"#FF4500\">ВКЛ</font>";
	if ("$output" == 0) echo "<font color=\"#0000FF\">ВЫКЛ</font>";
?>
