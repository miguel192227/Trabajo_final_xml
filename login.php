 <?php 


 
require "prueba.php";

  if(isset($_SESSION["estado"])){
header('Location: ref.php');
  }?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login FreeCounter</title>
<link href="estilo1.css" rel="stylesheet" type="text/css" />
</head>
<body scroll="no">

 <div id="contenedor">


 <form action="botonera2.php" method="post" class="formulario">

   <br />
   Seleccione el counter 
     <br />
   <br>
     <?php if(isset($_GET["boo"])):?>
   <?php if($_GET["boo"]==1):?>
   <div class="que">Se cerro la sesión</div>
<?php elseif($_GET["boo"]==2):?>
   <div class="que">Se cerro la sesión por falta de actividad</div>
   <?php elseif($_GET["boo"]==3):?>
   <div class="que">Error, la mesa que seleccionaste esta ocupada</div>
<?php endif?>

 
 <?php endif?>
  <label>Counter:<br />
   


  <select name="select" class="select">

  <?php for($i=1;$i<=10;$i++):?>
  <?php if($i==1):?>
  	<option value="<?php echo $i?>" selected="1"><?php echo $i?></option>
 <?php else:?> 
  <option value="<?php echo $i?>"><?php echo $i?></option>
 <?php endif?>
  <?php endfor?>
  </select>



   </label>
  <p><br>
    <script src="jquery-3.4.1.js" type="text/javascript"></script>  
    <input type="submit" value="Confirmar" class="botonConf">
    <br /><br />
  </p>
</form>


</div> 
<script type="text/javascript">
setTimeout("mueveReloj()",6000);
function mueveReloj(){
$iz=232;


$.ajax({
        type: "POST",
        dataType: 'json',
        url: "prueba.php",
        data: "iz="+$iz,
        success: function(data){    
location.reload();
        }
      });
}
</script>
</body>
</html>
