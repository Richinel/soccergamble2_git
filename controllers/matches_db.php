<?php
    include('dbconnect.php');

    $sql = "SELECT home_squad, away_squad, score FROM matches";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "
                <div class='recents_item'>
                    <div class='row between centered'>
                        <div class='col'><span>".$row["home_squad"]."</span></div>
                        <div class='col score'><div>".$row["score"]."</div></div>
                        <div class='col'><span>".$row["away_squad"]."</span></div>
                    </div>
                </div>
            ";
         }
    } else {
         echo "0 results";
    }

    $conn->close();
?>