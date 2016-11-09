<?php 
	$title = "Samenvatting";
	include('includes/header.php'); 
?>

	<div class="page_content">
		<div class="wrapper summary">
			<fieldset>
				<legend>Wedstrijd samenvatting</legend>
				<?php include('controllers/match_summary_controller.php'); ?>
			</fieldset>

			<a href="matches">Terug naar alle wedstrijden</a>
		</div>
	</div>

<?php include('includes/footer.php'); ?>