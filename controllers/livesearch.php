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
	if(strlen($in) > 0 and strlen($in) < 20 ){  
		$sql = "SELECT * FROM matches WHERE home_squad OR away_squad LIKE '%$in%'"; 

		// variabele $mysqli is het object uit de connecti.php 
		$result = $mysqli->query($sql); 

		// alle resultaten uitvoeren en ophalen.  
		while($row = mysqli_fetch_array($result)) {
			//$id = $row['id'];      
			$home_squad = $row['home_squad'];  
			$away_squad = $row['away_squad'];  
			$id = $row['id'];  

			echo "<a href=info.php?id=$id>$home_squad - $away_squad</a></br>";  
		}  
	}  
?>