<?php
	session_start();
	session_destroy();
	header('Location: /soccergamble2_git/index.php');
?>