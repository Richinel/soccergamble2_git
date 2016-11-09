<?php
    include('dbconnect.php');

    $sql = "SELECT * FROM matches";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
            $id = $row['match_id'];
             echo "
                <span class='label label_style primary outline'>".$row['date']."</span>
                    <div class='row centered between summary'>
                        <div class='col'>
                            <img class='clublogo' src='assets/images/".$row['home_logo']."'>

                            <p>
                                <button>".$row['home_notation']."</button>
                            </p>
                        </div>

                        <div class='col'>
                            <h2 class='score2'>".$row['home_score']." - ".$row['away_score']."</h2>
                        </div>

                        <div class='col'>
                            <img class='clublogo' src='assets/images/".$row['away_logo']."'>

                            <p>
                                <button>".$row['away_notation']."</button>
                            </p>
                        </div>
                    </div>
                <hr>
            ";
         }
    } else {
         echo "0 results";
    }

    $conn->close();
?>