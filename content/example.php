<?php
// Заботимся о файловой структуре...
header("Content-type: text/plain; charset=utf-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);

// Получаем и проверяем...)



if (isset($_REQUEST['y']))
{
  $y = stripslashes($_REQUEST['y']);
  if ($y == '')
  { unset($y);}

shell_exec("gpio mode 21 out");
shell_exec("gpio write 21 1");
echo "Вентилятор ВКЛ! (GPIO21)";
};

if (isset($_REQUEST['n']))
{
$n = stripslashes($_REQUEST['n']);
if ($n == '') { unset($n);}

shell_exec("gpio write 21 0");
echo "Вентилятор ВЫКЛ! (GPIO21)";
};

if (isset($_REQUEST['r']))
{
$n = stripslashes($_REQUEST['r']);
if ($r == '') { unset($r);}


shell_exec("sh restart.sh");
echo "Restart PC";
};



if (isset($_REQUEST['s']))
{
$n = stripslashes($_REQUEST['s']);
if ($s == '') { unset($s);}
shell_exec("sh  shutdown.sh");
echo "Power OFF";
};


if (isset($_REQUEST['l']))
{
  $l = stripslashes($_REQUEST['l']);
  if ($l == '')
  { unset($l);}

shell_exec("gpio mode 1 out");
shell_exec("gpio write 1 1");
echo "Лазер ВКЛ! (GPIO1)";
};

if (isset($_REQUEST['k']))
{
  $k = stripslashes($_REQUEST['k']);
  if ($k == '')
  { unset($k);}

shell_exec("gpio write 1 0");
echo "Лазер ВЫКЛ! (GPIO1)";
};





?>
