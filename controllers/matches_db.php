<?php
    include('dbconnect.php');

    $sql = "SELECT match_id, home_squad, away_squad, home_score, away_score FROM matches";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
            $id = $row['match_id'];
             echo "
                <div class='recents_item'>
                    <a href='./match_summary.php?id=$id'>
                        <div class='row between centered'>
                            <div class='col'><span>".$row["home_squad"]."</span></div>
                            <div class='col score'><div>".$row["home_score"]." - ".$row["away_score"]."</div></div>
                            <div class='col'><span>".$row["away_squad"]."</span></div>
                        </div>
                    </a>
                </div>
            ";
         }
    } else {
         echo "0 results";
    }

    $conn->close();
?>