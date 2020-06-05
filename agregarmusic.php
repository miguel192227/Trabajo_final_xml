<?php
$rid="";
$id="";
$id2=$_POST["id"];
$url2=$_POST["url2"];




$ascensor = simplexml_load_file("canciones2.xml");
foreach ($ascensor as $key) {
	$id=$key["numero"];

}

if ($id=="") {
	$id=0;
}
$id=$id+1;

$ww= $ascensor->addchild("cancion");
	 $ww->addchild("nombre",$id2);
     $ww->addAttribute("numero",$id);
        $ww->addchild("url",$url2);
    
 $data["id"]=$id;
	 $data["url2"]=$url2;

 echo json_encode($data);

   	 $ascensor->asXML("canciones2.xml");


?>