<?php
// Заботимся о файловой структуре...
header("Content-type: text/plain; charset=utf-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);

// Получаем и проверяем...)


//клавиша W

if (isset($_REQUEST['wy']))
{
  $y = stripslashes($_REQUEST['y']);
  if ($y == '')
  { unset($y);}
shell_exec("sh /var/www/html/content/move/w.sh");
echo "Нажата W";
};

if (isset($_REQUEST['wn']))
{
$n = stripslashes($_REQUEST['n']);
if ($n == '') { unset($n);}
shell_exec("sh /var/www/html/content/move/stop.sh");
echo "Отжата W";
};

//клавиша S

if (isset($_REQUEST['sy']))
{
  $y = stripslashes($_REQUEST['y']);
  if ($y == '')
  { unset($y);}
shell_exec("sh /var/www/html/content/move/s.sh");
echo "Нажата S";
};

if (isset($_REQUEST['sn']))
{
$n = stripslashes($_REQUEST['n']);
if ($n == '') { unset($n);}
shell_exec("sh /var/www/html/content/move/stop.sh");
echo "Отжата S";
};

//клавиша A

if (isset($_REQUEST['ay']))
{
  $y = stripslashes($_REQUEST['y']);
  if ($y == '')
  { unset($y);}
shell_exec("sh /var/www/html/content/move/a.sh");
echo "Нажата A";
};

if (isset($_REQUEST['an']))
{
$n = stripslashes($_REQUEST['n']);
if ($n == '') { unset($n);}
shell_exec("sh /var/www/html/content/move/stop.sh");
echo "Отжата A";
};

//клавиша D

if (isset($_REQUEST['dy']))
{
  $y = stripslashes($_REQUEST['y']);
  if ($y == '')
  { unset($y);}
shell_exec("sh /var/www/html/content/move/d.sh");
echo "Нажата D";
};

if (isset($_REQUEST['dn']))
{
$n = stripslashes($_REQUEST['n']);
if ($n == '') { unset($n);}
shell_exec("sh /var/www/html/content/move/stop.sh");
echo "Отжата D";
};


//клавиша Q

if (isset($_REQUEST['qy']))
{
  $y = stripslashes($_REQUEST['y']);
  if ($y == '')
  { unset($y);}
shell_exec("echo 'Q' > /dev/ttyS1");
echo "Нажата Q";
};

if (isset($_REQUEST['qn']))
{
$n = stripslashes($_REQUEST['n']);
if ($n == '') { unset($n);}
shell_exec("echo 'T' > /dev/ttyS1");
echo "Отжата Q";
};

//клавиша E

if (isset($_REQUEST['ey']))
{
  $y = stripslashes($_REQUEST['y']);
  if ($y == '')
  { unset($y);}
shell_exec("echo 'E' > /dev/ttyS1");
echo "Нажата E";
};

if (isset($_REQUEST['en']))
{
$n = stripslashes($_REQUEST['n']);
if ($n == '') { unset($n);}
shell_exec("echo 'T' > /dev/ttyS1");
echo "Отжата E";
};




//клавиша ПРОБЕЛ

if (isset($_REQUEST['prn']))
{
  $y = stripslashes($_REQUEST['y']);
  if ($y == '')
  { unset($y);}
shell_exec("sh /var/www/html/content/move/stop.sh");
echo "Пробел отжат";
};

if (isset($_REQUEST['pry']))
{
$n = stripslashes($_REQUEST['n']);
if ($n == '') { unset($n);}
shell_exec("sh /var/www/html/content/move/stop.sh");
echo "Пробел нажат";
};








?>
