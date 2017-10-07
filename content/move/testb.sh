#!/bin/bash
	ret=$(ps aux | grep [b]b.sh | wc -l)
	if [ "$ret" -eq 0 ]
then {
	sh /var/www/html/content/move/bb.sh
	read r < /tmp/123
	echo $r
exit 1
}
else 
{
	echo "EXIT"
	exit 1
}
fi;
