<?php  
/// Livesearch.php begin */  
// Zoeken met Aj*x  
require "connecti.php";    
error_reporting(0); 
$in=$_GET['txt']; 
  
if(!ctype_alnum($in)){  
echo "Geen resultaat";  
}  

// Als het aantal resultaten groter is dan 0 en kleiner dan 20 voer een query uit.  
if(strlen($in)>0 and strlen($in) <20 ){  
$sql = "SELECT * FROM student WHERE name like '%$in%'"; 

// variabele $mysqli is het object uit de connecti.php 
$result = $mysqli->query($sql); 

// alle resultaten uitvoeren en ophalen.  
while($row = mysqli_fetch_array($result))  
{  
//$id = $row['id'];      
$naam = $row['name'];  
$id = $row['id'];  



echo "<a href=info.php?id=$id>$naam</a></br>";  
}  
}  
/// Livesearch.php einde */  
show_source(__FILE__);  


?>