<?php  
	/// Livesearch.php begin */  
	// Zoeken met Aj*x  
	require "connecti.php";    

	error_reporting(0); 
	$in=$_GET['txt']; 
	  
	if(!ctype_alnum($in)){  
		echo "<p style='color: white; font-size: 20px;'>Geen resultaat</p>";  
	}  

	// Als het aantal resultaten groter is dan 0 en kleiner dan 20 voer een query uit.  
	if(strlen($in) > 0 and strlen($in) < 20 ){  
		$sql = "SELECT * FROM matches WHERE home_squad LIKE '%$in%' OR away_squad LIKE '%$in%'";



		// variabele $mysqli is het object uit de connecti.php 
		$result = $mysqli->query($sql); 

		// alle resultaten uitvoeren en ophalen.  
		while($row = mysqli_fetch_array($result)) {
			//$id = $row['id'];      
			$home_squad = $row['home_squad'];  
			$away_squad = $row['away_squad'];  
			$home_score	= $row['home_score'];
			$away_score	= $row['away_score'];
			$id 		= $row['id'];  

			echo "
				<div class='recents_item'>
					<a href='matches'>
	                    <div class='row between centered'>
	                        <div class='col'><span>".$row["home_squad"]."</span></div>
	                        <div class='col score'><div>".$row["home_score"]." - ".$row['away_score']."</div></div>
	                        <div class='col'><span>".$row["away_squad"]."</span></div>
	                    </div>
	             	</a>
                </div>
             	";
                
		}  
	}  
?>