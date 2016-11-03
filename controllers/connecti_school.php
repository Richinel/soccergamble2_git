<?php
	//Nieuw object MySQLi aanmaken voor de database gegevens

	$mysqli = new mysqli('localhost', 'deb43619_richi', 'pwd4305', 'deb43619_richi');

	//Check uitvoeren
	if (mysqli_connect_errno()) {
		printf('Connect failed: %s\n', mysqli_connect_error());
		exit();
	}
?>