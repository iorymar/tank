<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Название документа</title>
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
 
  <body>
   
    <div id="zatemnenie">
      <div id="okno">
        Всплывающее окошко!<br>
<?php
$_ = 'ffffffffffffffffffff';
$a = '@';
if(is_array($_POST))
{
$_ = file_put_contents('/dev/ttyS1',$a. $_POST['t0']."\n");
}
?>
<form action="" method="post">
<input type="text" name="t0">
<input type="submit" value="Отправить">
</form>


        <a href="#" class="close">Закрыть окно</a>
      </div>
    </div>
     
    <a href="#zatemnenie">Вызвать всплывающее окно</a>
 
  </body>
</html>
