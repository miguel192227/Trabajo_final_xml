<?php
session_start();
$ascensor2 = simplexml_load_file("lista.xml");

$fisico=$_POST["fisico"];
$result=$_SESSION["counter"];
$id=$_POST["id"];
$t=0;
$t2=0;

foreach ($ascensor2 as $key ) {
	if($key["numero"]==$result){
     foreach ($key as $key2 ) {
     $t2=$key2["num"];	
     }
	}
}

$t2=$t2+1;


foreach ($ascensor2 as $key) {
	if($key["numero"]==$result){
	foreach ($key as $key2 ) {
		if($key2==$id){
			
         $t=1;
		}
	}
}

}
if($t==0){
 $data["id"]=$id;
	 $data["result"]=$result;
 $data["fisico"]=$fisico;
echo json_encode($data);

foreach ($ascensor2 as $ka) {
if($ka["numero"]==$result){
$ww= $ka->addchild("cancion",$id);
	$ww->addAttribute("num",$t2);
		$ww->addAttribute("nombre",$fisico);


}
   




}

 }


 $ascensor2->asXML("lista.xml");


?>