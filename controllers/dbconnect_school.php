<?php

$dbhost = "localhost";
$username = "deb43619_richi";
$password = "pwd4305";
$dbname = "deb43619_richi";

$conn = new mysqli($dbhost, $username, $password, $dbname);

if ($conn->connect_errno) {
	die("Connection failed: " . $conn->connect_errno);
}

?>