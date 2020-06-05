<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" type="text/css" href="css/css1.css">
</head>
<body>
 
<?php

require 'prueba.php';


$fariable=0;
if($_SESSION['estado']==0){
header('Location: login.php');

}

echo $ee=$_SESSION["counter"];




  $canciones = simplexml_load_file('canciones2.xml');
    $canciones3 = simplexml_load_file('lista.xml');

foreach ($canciones3 as $key ) {
  if($key["numero"]==$ee){
 echo $key["numero"];
    foreach ($key as $key36) {
      $fariable=$key36["num"];
    }


}
}
?>



	<script src="jquery-3.4.1.js" type="text/javascript"></script>  
<script>
	$(document).ready(function(){
function ff(){
$.ajax({
      url: "pelicula.php",
      method: "POST",
      success: function(data){
       $("#result").html(data)
      }
});
}
ff();
	});

	$(document).ready(function(){
function ff(){
$.ajax({
      url: "pelicula2.php",
      method: "POST",
      success: function(data){
       $("#result2").html(data)
      }
});
}
ff();
	});
</script>

	<center><button onclick="cerrar()">cerrar sesión</button><br><br>
  <label>Nombre de la cancion:<input type="text" id="te2" name="nombre"></label><br>  
<label>Url de la cancion:<input class="move" type="text" id="te1" name="nombre"></label><br>

<br>
 <button class="cron2" onclick="thor()">Agregar musica</button>
<div id="container">
	<div id="result"></div>
</div>
<div id="container">
		<div id="result2"></div>

</div>

<script>

function vhs($id,$nombre){

$h1="";
$h2="";
$h3="";
$h4="";
$.ajax({
        type: "POST",
        dataType: 'json',
        url: "fra.php",
        data: "id="+$id+"&nombre="+$nombre+"&h1="+$h1+"&h2="+$h2+"&h3="+$h3+"&h4="+$h4,
        success: function(data){
        
var zz=data.h1+"//"+data.h2+"/"+data.h3+"/"+data.h4;

location.href=zz;

        }
      });


}




function cerrar(){
location.href="ver.php";
}








function aqui($id,$fisico){

//alert("aqui funciona "+$id+" heroe "+$fisico+" result"+$result);
$.ajax({
        type: "POST",
        dataType: 'json',
        url: "crud.php",
        data: "id="+$id+"&fisico="+$fisico,
        success: function(data){
          alert("entro");
location.reload();
        }
      });

}

function exlad2($id){


$muuu=3;



$.ajax({
        type: "POST",
        dataType: 'json',
        url: "borrar.php",
        data: "id="+$id+"&muuu="+$muuu,
        success: function(data){    
location.reload();
        }
      });
 


}



function thor(){

var t1234567890=0;
var t9876543210=0;
  var eee=document.getElementById("te2").value;
  var eee1=document.getElementById("te1").value;
alert(eee);
$id=eee;
$url2=eee1;



if(eee=="" || eee1==""){alert("no puede dejar campos sin llenar ");}else{
if(eee1.indexOf(" ") > -1 ){alert("no puede ingresar una url con espacios en blanco");}else{

//aqui tranforma la url deyoutube a formato embed
cccccc=eee1;

$aa=cccccc;
$b="";
$c=$aa.length
$cc=$aa.slice(0,24);
$dd="https://www.youtube.com/";
$rr="watch?v=";
$ww="embed/";

if($cc==$dd){
$dd2=$aa.slice(24,32);
if($rr==$dd2){
$wq=$dd+$ww+$aa.slice(32,43);
if($c>=43){
$url2=$wq;
t1234567890=1;
}
}
}



zz=cccccc;
zzq=zz.length;
zzd="https://youtu.be/";

q=zz.slice(0,17); 
if(zzd==q){
if(zzq==28){
alert(2);
q2=zz.slice(17,zzq);
t9876543210=1;
q3=$dd+""+$ww+"/"+q2;
$url2=q3;
}else{
  
}
}

//aqui termina embed

//candado de video
if(t1234567890==1 || t9876543210==1){

$.ajax({
        type: "POST",
        dataType: 'json',
        url: "agregarmusic.php",
        data: "id="+$id+"&url2="+$url2,
        success: function(data){
          
location.reload();
        }
      });

}else{
alert("solo se permite videos de youtube");
}


}

}
}


	</script>
</center>
</body>
</html>


