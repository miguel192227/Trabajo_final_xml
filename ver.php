<?php
  session_start();
date_default_timezone_set('America/Bogota');

$ascensor = simplexml_load_file("lista.xml");

$cancion=0;
$mesa=$_SESSION['counter'];
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







  $par =simplexml_load_file("sinfonia.xml");

        foreach ($par as $key) {
       	if($key["ca"]==$_SESSION['counter']){

              $key["estado"]=1;

              $key["ip"]=" ";

              $key["fecha"]=" ";
$key["mac"]=" ";
          }
}
$par->asXML("sinfonia.xml");
session_unset();

   setcookie("counter", '', time()-3600);
$par->asXML("sinfonia.xml");
  
  session_destroy();


  if(isset($_GET["opp"])){
  
 header('Location: login.php?boo=2');

}else{
	
 header('Location: login.php?boo=1');
}

?>