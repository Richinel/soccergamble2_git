<?php
    include('dbconnect.php');

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "                
                    <tr>
                        <td>
                            ".$row["id"]."
                        </td>
                        <td>
                            ".$row["username"]."
                        </td>
                        <td>
                            ".$row["email"]."
                        </td>
                        <td>
                            ".$row["credits"]."
                        </td>
                        <td>
                            <button class='outline'>Verwijder</button>
                        </td>
                    </tr>                   
            ";
         }
    } else {
         echo "0 results";
    }

    $conn->close();
?>