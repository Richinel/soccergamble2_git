<?php 
// mysql connect importeren 
include "dbconnect.php"; 

error_reporting(1); 

$id = $_GET['id']; 

$sql = "SELECT * FROM matches WHERE match_id =$id"; 

$result = $conn->query($sql); 

if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc())  
    { 
        echo
        "
            <div class='row'>
                <div class='col'>
                    <span>".$row['home_squad']."</span>
                    <span>".$row['away_squad']."</span>
                </div>
            </div>
        ";
    } 
} 
else { 
    echo "0 resultaten"; 
} 

// verbinding sluiten 
$conn->close(); 

?> 