<?php


$arg= simplexml_load_file('sinfonia.xml');
$o=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="refresh" content="5">
<title>Dashboard</title>
<link href="estilo2.css" rel="stylesheet" type="text/css" />
</head>

<body scroll="no">
<p>
<table border='1' class='counters'>
  <tr>
<?php foreach($arg as $key):?>
<?php  $o++?>
<?php if($key["estado"]==1):?>
<td bgcolor='#00FF00'>Mesa <?php echo $o?><br><br>
<img src='img/good.png' width='125' height='170' align='middle'>
</td>
<?php elseif($key["estado"]==2):?>
 <td bgcolor='#FF0000'>Mesa <?php echo $o?><br><br>
  <img src='img/bad.png' width='125' height='170' align='middle'>
</td>
<?php elseif($key["estado"]==3):?>
<td bgcolor='#CCCCCC'>Mesa <?php echo $o?><br><br>
   <img src='img/offline.png' width='125' height='170' align='middle'>
</td>
<?php endif?>
<?php endforeach?>
</tr>
</table>
</p>
</body>
</html>
