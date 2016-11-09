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
            <h3>".$row['date']."</h3>
            <div class='row centered between'>
                <div class='col'>
                    <h2>".$row['home_squad']."</h2>

                    <p>
                        <strong>Notatie:</strong><br>
                        ".$row['home_notation']."
                    </p>
                </div>

                <div class='col'>
                    <h2 class='score2'>".$row['home_score']." - ".$row['away_score']."</h2>
                </div>

                <div class='col'>
                    <h2>".$row['away_squad']."</h2>

                    <p>
                        <strong>Notatie:</strong><br>
                        ".$row['away_notation']."
                    </p>
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