<?php
session_start();
$ee=$_SESSION["counter"];
echo "<p>Canciones</p>";
 $canciones3 = simplexml_load_file('lista.xml');

  	echo "<table style='border:1px solid black;background-color:green;'>";
  	echo "<tbody>";
foreach ($canciones3 as $key) {

	if($key["numero"]==$ee){
  foreach ($key as $key2){

echo "<tr>";
  	
  echo "<th ><li style='list-style:none;'>".$key2["num"]."</li> <div id=".$key2." onclick=vhs(id,innerHTML)>".$key2["nombre"]."</div></th>";
  echo "<td><button id=".$key2["num"]." onclick=exlad2(id)>Borrar</button> </td>";
  echo "</tr>";




  }
}
}
  echo "</tbody>";
  echo "</table>";

?>