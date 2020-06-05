<?php

 session_start();
date_default_timezone_set('America/Bogota');

//	if(isset($_SESSION["estado"])){
        
//header('Location: ref.php');
//	}

	$aa=0;
	$eee=$_REQUEST['select'];
	$eee;


	if (isset($_REQUEST['select'])){
		$_SESSION['counter']=$_REQUEST['select'];
		setcookie("counter", $_SESSION['counter']);
		echo "Counter:".$_SESSION['counter'];

if(isset($_COOKIE['counter'])){


}else{
  header('Location: botonera2.php');
}      



	}




		$par =simplexml_load_file("sinfonia.xml");
     
        foreach ($par as $key) {
        	

        	 	if($key["ca"]==$_COOKIE["counter"]){
if($key["estado"]==2){
        	echo "no pasa";
	
		header('Location: login.php?boo=3');

        }else{

        	  $MAC = exec ( 'getmac' ); 
  $MAC = strtok ( $MAC , ' ' ); 
               $key["mac"]=$MAC;

              $key["estado"]=2;
              $key["ip"]=$_SERVER['REMOTE_ADDR'];
              $key["fecha"]=date('D, d M Y H:i:s' );
              $_SESSION['estado'] = '2';
               
              $e=$key["ca"];

$par->asXML("sinfonia.xml");
		
		header('Location: ref.php');
        }	
        }

        }
        


?>