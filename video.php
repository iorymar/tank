<head>
<title>Zero</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <style>
      #zatemnenie {
        background: rgba(102, 102, 102, 0.5);
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        display: none;
      }
      #okno {
        width: 300px;
        height: 50px;
        text-align: center;
        padding: 15px;
        border: 3px solid #0000cc;
        border-radius: 10px;
        color: #0000cc;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        background: #fff;
      }
      #zatemnenie:target {display: block;}
      .close {
        display: inline-block;
        border: 1px solid #0000cc;
        color: #0000cc;
        padding: 0 12px;
        margin: 10px;
        text-decoration: none;
        background: #f2f2f2;
        font-size: 14pt;
        cursor:pointer;
      }
      .close:hover {background: #e6e6ff;}
    </style>

</head>

<script type="text/javascript" src="/content/jquery.min.js"></script>

<script type="text/javascript">
function mode() {
    $.ajax({
        url: 'content/time.php',
        success: function(data) {
            $('#display').html(data);
        }
    });
}

var timeInterval = 2500;
setInterval(mode, timeInterval);
</script>
<script type="text/javascript">
function mode() {
    $.ajax({
        url: 'content/cpu.php',
        success: function(data) {
            $('#display1').html(data);
        }
    });
}

var timeInterval = 2500;
setInterval(mode, timeInterval);
</script>
<script type="text/javascript">
function mode() {
    $.ajax({
        url: 'content/ram.php',
        success: function(data) {
            $('#display2').html(data);
        }
    });
}

var timeInterval = 2500;
setInterval(mode, timeInterval);
</script>
<script type="text/javascript">
function mode() {
    $.ajax({
        url: 'content/temp.php',
        success: function(data) {
            $('#display3').html(data);
        }
    });
}
var timeInterval = 2500;
setInterval(mode, timeInterval);
</script>



<script type="text/javascript">
function mode() {
    $.ajax({
        url: 'content/statusvent.php',
        success: function(data) {
            $('#statusvent').html(data);
        }
    });
}
var timeInterval = 2500;
setInterval(mode, timeInterval);
</script>

<script type="text/javascript">
function mode() {
    $.ajax({
        url: 'content/voltage.php',
        success: function(data) {
            $('#voltage').html(data);
        }
    });
}
var timeInterval = 2000;
setInterval(mode, timeInterval);
</script>
<script type="text/javascript">
function mode() {
    $.ajax({
        url: 'content/wlan.php',
        success: function(data) {
            $('#wlan').html(data);
        }
    });
}
var timeInterval = 2000;
setInterval(mode, timeInterval);
</script>



<table width="1024" height="25px" border="0" align="center" bgcolor="#FBF0DB"
     cellpadding="2" cellspacing="0">
    <tr>
     <td rowspan="2"  bgcolor="#FBF0DB"><a href="index.html"><img src="content/footer.png"></a>
        <div id="display"></div>   </td>
        <td width="100" align="center" style="border: 1px solid orange">Voltage/Distance:</td>
        <td width="100" align="center" style="border: 1px solid orange">CPU Load:</td>
        <td width="100" align="center" style="border: 1px solid orange">MEMfree:</td>
        <td width="100" align="center" style="border: 1px solid orange">CPU Temp:</td>
        <td width="100" align="center"><img src="content/vent.png" width="40%"><div id="statusvent"></div></td>

                                        </tr>
        <tr>
        <td width="100" height="50px" bgcolor="#FBF0AB" align="center" style="border: 1px solid yellow"><div id="voltage"></td>
        <td width="100" height="50px" bgcolor="#FBF0AB" align="center" style="border: 1px solid yellow"><div id="display1"></td>
        <td width="100" height="50px" bgcolor="#FBF0AB" align="center" style="border: 1px solid yellow"><div id="display2"></td>
        <td width="100" height="50px" bgcolor="#FBF0AB" align="center" style="border: 1px solid yellow"><div id="display3"></div></td>
        <td width="100" height="50px" align="center"> <input id="send" type="button" value="ON"/><input id="send1" type="button" value="OFF"/></td>
 
   </tr>

        <tr>
        <td colspan="5" height="50px" bgcolor="#FFFFFF" style="border: 1px solid black">



<div id="dave" class="saver" style="display: none">
<center><img src="content/help1.jpg"><center>
<br>
Q-башня влево, E - Башня вправо
</div>




<script type="text/javascript" src="/content/jquery.min.js"></script>
<script>
var
i = 0;
<script type="text/javascript" src="/content/jquery.min.js"></script>
<script>
var
i = 0;

$(document).ready(function()   {

//клавиша F
$(document).keyup(function(e){
if (e.which == 70) {
$("#dave").slideToggle("slow");
i = 0;
}  });
$(document).keydown(function(e){
if ((e.which == 70) && (i == 0))    {
$("#dave").slideToggle("slow");
i = 1;
}  });

//клавиша W
$(document).keyup(function(e){
if (e.which == 87) {
$("#status").load("/content/motor.php","wn");
i = 0;
}  });

$(document).keydown(function(e){
if ((e.which == 87) && (i == 0))    {
$("#status").load("/content/motor.php","wy");
i = 1;
}  });
//клавиша S
$(document).keyup(function(e){
if (e.which == 83) {
$("#status").load("/content/motor.php","sn");
i = 0;
}  });

$(document).keydown(function(e){
if ((e.which == 83) && (i == 0))    {
$("#status").load("/content/motor.php","sy");
i = 1;
}  });
//клавиша A
$(document).keyup(function(e){
if (e.which == 65) {
$("#status").load("/content/motor.php","an");
i = 0;
}  });

$(document).keydown(function(e){
if ((e.which == 65) && (i == 0))    {
$("#status").load("/content/motor.php","ay");
i = 1;
}  });

//клавиша D
$(document).keyup(function(e){
if (e.which == 68) {
$("#status").load("/content/motor.php","dn");
i = 0;
}  });

$(document).keydown(function(e){
if ((e.which == 68) && (i == 0))    {
$("#status").load("/content/motor.php","dy");
i = 1;
}  });


//клавиша Q
$(document).keyup(function(e){
if (e.which == 81) {
$("#status").load("/content/motor.php","qn");
i = 0;
}  });

$(document).keydown(function(e){
if ((e.which == 81) && (i == 0))    {
$("#status").load("/content/motor.php","qy");
i = 1;
}  });

//клавиша E
$(document).keyup(function(e){
if (e.which == 69) {
$("#status").load("/content/motor.php","en");
i = 0;
}  });

$(document).keydown(function(e){
if ((e.which == 69) && (i == 0))    {
$("#status").load("/content/motor.php","ey");
i = 1;
}  });





//клавиша ПРОБЕЛ
$(document).keyup(function(e){
if (e.which == 32) {
$("#status").load("/content/motor.php","prn");
i = 0;
}  });

$(document).keydown(function(e){
if ((e.which == 32) && (i == 0))    {
$("#status").load("/content/motor.php","pry");
i = 1;
}  });



});
        </script>




</div>
</div>

<style>
.saver { padding: 7px; border-radius: 4px; border: 1px solid #181818; margin-bottom: 13px;  font-size: 20px;}
</style>

<div id="page" role="main">
<span style="font-size:medium;">
<strong>Для справки нажмите клавишу F</strong><br>
</span>
        </td>
<td> <a href="#zatemnenie">Send to LCD</a></td>
        </tr>
        <tr>
 <td colspan="5"  bgcolor="#FFFFFF"  height="650px" style="border: 1px solid black"><center>
<?php
$output = shell_exec('ifconfig wlan0 | grep inet | grep -v inet6 | grep -v 127.0.0.1 | cut  -c 21-33');
echo "<br>";
echo "<img src='http://".str_replace(" ","",$output).":4444/webcam.flv' />";
echo "<img src='http://".str_replace(" ","",$output).":4444/webcam1.flv' />";

?>
</center>

 <div id="zatemnenie">
      <div id="okno">
        <br>
<?php
$_ = 'ffffffffffffffffffff';
$a = '@';
if(is_array($_POST))
{
$_ = file_put_contents('/dev/ttyS1',$a. $_POST['t0'].'\n');
}
?>
<form action="" method="post">
<input type="text" name="t0">
<input type="submit" value="Отправить">
</form>


        <a href="#" class="close">Закрыть окно</a>
      </div>
    </div>
<br>
<br>


</td>
<td valign="top">
<p>Power:</p>
<input  id="send2" type="button" value="Restart"/>
<br>
<input  id="send3" type="button" value="Shutdown"/>
<br>
<p>Laser:</p>
<input  id="send4" type="button" value="on"/> <input  id="send5" type="button" value="off"/>

<p>Light:</p>
<input  id="send6" type="button" value="on"/> <input  id="send7" type="button" value="off"/>

<p>Right Cam:</p>
<input  id="send9" type="button" value="Up"/> <input  id="send8" type="button" value="Down"/>
<p>Uart Reset:</p>
 <input  id="send10" type="button" value="Reset"/>


</td>
        </tr>

        <tr>
        <td colspan="5"><center><p id="status">log</p></center></td>
        </tr>
<tr>
<td  colspan="6"  bgcolor="#FFFFFF"  height="25px"> <b>Connection Status:</b> <span style="color: #ff6600;"><div id="wlan"></div></span></td></tr>


   </table>
<br>
<br>

<script type="text/javascript">
$(document).ready(function(){
   $("#send").click(function(){
      $("#status").load("/content/example.php","y=Yes");
   })

});
</script>
<script type="text/javascript">
$(document).ready(function(){

   $("#send1").click(function(){
      $("#status").load("/content/example.php","n=No");
   })

});
</script>
<script type="text/javascript">
$(document).ready(function(){

   $("#send2").click(function(){
      $("#status").load("/content/example.php","r=Ro");
   })

});
</script>

<script type="text/javascript">
$(document).ready(function(){

   $("#send3").click(function(){
      $("#status").load("/content/example.php","s=So");
   })

});
</script>

<script type="text/javascript">
$(document).ready(function(){

   $("#send4").click(function(){
      $("#status").load("/content/example.php","l=Lo");
   })

});
</script>





<script type="text/javascript">
$(document).ready(function(){

   $("#send5").click(function(){
      $("#status").load("/content/example.php","k=Ko");
   })

});
</script>


<script type="text/javascript">
$(document).ready(function(){

   $("#send6").click(function(){
      $("#status").load("/content/example1.php","l=Lo");
   })

});
</script>





<script type="text/javascript">
$(document).ready(function(){

   $("#send7").click(function(){
      $("#status").load("/content/example1.php","k=Ko");
   })

});
</script>


<script type="text/javascript">
$(document).ready(function(){
   $("#send8").click(function(){
      $("#status").load("/content/example1.php","y=Yes");
   })

});
</script>
<script type="text/javascript">
$(document).ready(function(){

   $("#send9").click(function(){
      $("#status").load("/content/example1.php","n=No");
   })

});
</script>


<script type="text/javascript">
$(document).ready(function(){

   $("#send10").click(function(){
      $("#status").load("/content/example1.php","r=Ro");
   })

});
</script>

