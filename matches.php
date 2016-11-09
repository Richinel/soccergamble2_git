<?php 
	$title = "Wedstrijden";
	include('includes/header.php'); 
?>

	<div class="page_content content">
		<div class="title_box">
			<h1>Wedstrijden</h1>	
		</div>

		<div class="wrapper">
			<fieldset>
				<legend>Gespeelde wedstrijden</legend>
				<div class="recents">
					<?php include('controllers/matches_db.php'); ?>
				</div>
			</fieldset>
		</div>
	</div>

<?php include('includes/footer.php'); ?>