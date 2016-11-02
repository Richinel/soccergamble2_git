<?php
	//Nieuw object MySQLi aanmaken voor de database gegevens

	$mysqli = new mysqli('localhost', 'root', '', 's_gamble');

	//Check uitvoeren
	if (mysqli_connect_errno()) {
		printf('Connect failed: %s\n', mysqli_connect_error());
		exit();
	}
?>