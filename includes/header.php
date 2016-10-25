<!DOCTYPE html>
<html>
<head>
	<title>SoccerGamble</title>
	
	<meta name="viewport" content="width=device-width, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/kube.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/component.css">

	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<script src="assets/js/visuals.js"></script>
	<script src="assets/js/modalEffects.js"></script>
</head>
<body>

<?php
session_start();

	if(ISSET($_SESSION['username'])) {
		include('includes/navbar_loggedin.php');
		include('includes/mobile_menu_loggedin.php');
		include('includes/profile_modal.php');
	}
	else {
		include('includes/navbar.php');
		include('includes/mobile_menu.php');
	}

	include('includes/search_modal.php');

?>

	