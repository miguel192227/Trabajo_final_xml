
<?php


echo "<p>lista de canciones</p>";
 $canciones3 = simplexml_load_file('canciones2.xml');

  	echo "<table style='border:1px solid black;background-color:red;'>";
  	echo "<tbody>";
foreach ($canciones3 as $key) {
   echo "<tr style='border:1px solid black;'>";
   echo "<th style='border:1px solid black;'><li style='text-align:center;list-style:none;' id=".$key["numero"]." onclick=aqui(id,innerHTML)>".$key->nombre."</li></th>";
   echo "</tr>";
}
  echo "</tbody>";
  echo "</table>";
  
?>