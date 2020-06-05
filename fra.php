<?php 
session_start();


$ascensor = simplexml_load_file("canciones2.xml");
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$b="";
$c="";
foreach ($ascensor as $key ) {
	if($key["numero"]==$id && $key->nombre==$nombre){
   $b=$key->url;
$c=$b;
}

}
 $rest = substr($b, 0, 6); 
 $rest2 = substr($b, 8, 15); 
 $rest3 = substr($b, 24, 5); 
 $rest4 = substr($b, 30, 12); 

$data["id"]=$id;
	 $data["nombre"]=$b;
	 $data["h1"]=$rest;
	 $data["h2"]=$rest2;
	 $data["h3"]=$rest3;
	 $data["h4"]=$rest4;
 echo json_encode($data);
 $ascensor->asXML("canciones2.xml");



   	
?>