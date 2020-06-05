<?php
session_start();
$mesa=$_SESSION["counter"];;
$cancion=$_POST["id"];

$ascensor = simplexml_load_file("lista.xml");
$id=$cancion;
$data["id"]=$id;
echo json_encode($data);

foreach ($ascensor as $key) {
	if($key["numero"]==$mesa){

 foreach ($key as $key2 ) {
 	if($key2["num"]==$cancion){
 	
 $dom=dom_import_simplexml($key2);
$dom->parentNode->removeChild($dom);
 }
 }


	}
//	if($key["num"]==$id){
  //    echo "nadad";
    //  ; 
	//}
}
 
 $ascensor->asXML("lista.xml");

//foreach($doc->seg as $seg) { if($seg['id'] == 'A12') { $dom=dom_import_simplexml($seg); $dom->parentNode->removeChild($dom); } } echo $doc->asXml();

?>