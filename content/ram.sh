cat /proc/meminfo | sed -n '/MemFree:/s/^.* \([0-9]*\) .*$/\1/p'
