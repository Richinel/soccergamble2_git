<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?> | SoccerGamble</title>
	
	<meta name="viewport" content="width=device-width, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/kube.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/component.css">
	<link rel="icon" type="image/png" href="./favicon.png" />

	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<script src="assets/js/visuals.js"></script>
	<script src="assets/js/modalEffects.js"></script>
	<script src="assets/js/search.js"></script>
</head>
<body>

<?php
session_start();

	if(ISSET($_SESSION['username'])) {
		include('includes/navbar_loggedin.php');
		include('includes/mobile_menu_loggedin.php');
		include('includes/profile_modal.php');
		include('models/profile.php');
	}
	else {
		include('includes/navbar.php');
		include('includes/mobile_menu.php');
	}

	include('includes/search_modal.php');
?>

	