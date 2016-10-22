<?php
    include('dbconnect.php');

    $home_squad     = $_POST['home_squad'];
    $away_squad     = $_POST['away_squad'];
    $score          = $_POST['score'];

    $conn->query("INSERT INTO matches(home_squad, away_squad, score VALUES('$home_squad', '$away_squad', '$score')");

    header('Location: ../matches');
?>