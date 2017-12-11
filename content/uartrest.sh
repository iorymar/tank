chmod 700 /dev/ttyS1
chmod 777 /dev/ttyS1
gpio mode 5 out
gpio write 5 1
sleep 2
gpio write 5 0

