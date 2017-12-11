<?php
   $ip = shell_exec("/sbin/ifconfig  | grep 'inet'| grep -v inet6 | grep -v '127.0.0.1' | cut -d: -f2 | awk '{ print $1}'");
   echo $ip;
?>
