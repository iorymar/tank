<?php
// Заботимся о файловой структуре...
header("Content-type: text/plain; charset=utf-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);

// Получаем и проверяем...)


if (isset($_REQUEST['l']))
{
  $l = stripslashes($_REQUEST['l']);
  if ($l == '')
  { unset($l);}

shell_exec("echo a > /dev/ttyS1");
echo "Фары ВКЛ!";
};

if (isset($_REQUEST['k']))
{
  $k = stripslashes($_REQUEST['k']);
  if ($k == '')
  { unset($k);}

shell_exec("echo b > /dev/ttyS1");
echo "Фары ВЫКЛ!";
};

if (isset($_REQUEST['y']))
{
  $y = stripslashes($_REQUEST['y']);
  if ($y == '')
  { unset($l);}

shell_exec("echo { > /dev/ttyS1");
echo "Наклон +";
};

if (isset($_REQUEST['n']))
{
  $n = stripslashes($_REQUEST['n']);
  if ($n == '')
  { unset($n);}

shell_exec("echo } > /dev/ttyS1");
echo "Наклон -";
};


if (isset($_REQUEST['r']))
{
  $r = stripslashes($_REQUEST['r']);
  if ($r == '')
  { unset($r);}

shell_exec("sudo /var/www/html/content/uartrest.sh");
echo "Reset Uart";
};



if (isset($_REQUEST['x']))
{
  $x = stripslashes($_REQUEST['x']);
  if ($x == '')
  { unset($x);}

shell_exec("echo x > /dev/ttyS1");
echo "Speed 2 ";
};


if (isset($_REQUEST['c']))
{
  $c = stripslashes($_REQUEST['c']);
  if ($c == '')
  { unset($c);}

shell_exec("echo c > /dev/ttyS1");
echo "Speed 3 ";
};



if (isset($_REQUEST['z']))
{
  $z = stripslashes($_REQUEST['z']);
  if ($z == '')
  { unset($z);}

shell_exec("echo z > /dev/ttyS1");
echo "Speed 1 ";
};



?>
