
<?php

//para que se cierre solo cuando no se esta haciendo nada en el karaoke
session_start();
date_default_timezone_set('America/Bogota');






//esto es para cerrar la sesion sola
 $par999 =simplexml_load_file("sinfonia.xml");
$i=0;
foreach ($par999 as $key ) {
$i++;
if($key["fecha"]==" "){
$key["estado"]=1;
        
              $key["ip"]=" ";
              $key["mac"]=" ";



}


 $_SERVER['REMOTE_ADDR'];


//$_SESSION["sa"]=2;
//$_SESSION["reloj"]=
//echo $_SESSION["reloj"];



 

$fechaInicial = $key["fecha"];
$fechaActual= date('D, d M Y H:i:s' );
//$fechaActual = date('Y-m-d H:i:s'); // la fecha del ordenador

  $fechaActual;

//echo "<p>Diferencia entre la fecha ".$fechaInicial." la fecha ".$fechaActual."</p>";

 

// Obtenemos la diferencia en milisegundos

$diff = abs(strtotime($fechaActual) - strtotime($fechaInicial));

 

// "</br> Años ";

 $years = (int)((int)$diff / (int)(365*60*60*24));

// "</br> Meses ";

 $months = (int)(($diff - $years * 365*60*60*24) / (30*60*60*24));

//echo "</br> Días ";

 $days = (int)(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
//echo "</br> minutos ";
 $minutos = (int)($diff - $years * 365*60*60*24 - $months*30*60*60*24)/60;
//echo "</br> horas ";
$horas = (int)($diff - $years * 365*60*60*24 - $months*30*60*60*24)/(60*60);

 $horas;
$u=intval($horas);

//echo "</br> horas ";
//echo $u;
//echo "</br> minutoa ";
$u2=(int)($minutos-($u*60));

$u4=intval($u2);
//echo $u4;
//echo "</br> segundo ";

 $segundo=floor($diff - $years * 365*60*60*24 - $months*30*60*60*24)-($u4*60)-($u*60*60);

//pruebade fecha;
//echo "la hora ".$horas." dia ".$days." meses ".$months." years";
//valida cambiar los estado en sinfonia
if($u4>=10 || $days>1 || $horas>1 || $months>0 || $years>0){
 //echo "errorrrrrrrrrrrrrrrrrrrrr";



if($key["ca"]==$i){
              $key["estado"]=1;
              $key["fecha"]=" ";
              $key["ip"]=" ";
              $key["mac"]=" ";

halo($i);
              
}          




}else{
   // echo "aqui estamos";
}}
$par999->asXML("sinfonia.xml");












function halo($fdf){
$ascensor = simplexml_load_file("lista.xml");

$cancion=0;
$mesa=$fdf;
$o=0;
foreach ($ascensor as $key7 ) {
  if($key7["numero"]==$mesa){
    foreach ($key7 as $key44) {
      $o++;
    }

  }
}

for ($i=0; $i <$o; $i++) { 


foreach ($ascensor as $key) {
  if($key["numero"]==$mesa){

 foreach ($key as $key2 ) {

  $cancion=$key2["num"];
    $cancion2=(int)$cancion;
  if($key2["num"]==$cancion2){
  
 $dom=dom_import_simplexml($key2);
$dom->parentNode->removeChild($dom);
$ascensor->asXML("lista.xml");

 }
 }
}

  }

}

}

?>

