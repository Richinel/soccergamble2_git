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
				<legend>Recente wedstrijden</legend>
				<div class="recents">
					<div class="recents_item">
						<div class="row between centered">
							<div class="col"><span>Feyenoord</span></div>

							<div class="col score">4 - 0</div>

							<div class="col"><span>Ajax</span></div>
						</div>
					</div>

					<div class="recents_item">
						<div class="row between centered">
							<div class="col"><span>Roda JC</span></div>

							<div class="col score">2 - 3</div>

							<div class="col"><span>Willem II</span></div>
						</div>
					</div>
				</div>
			</fieldset>

			<fieldset>
				<legend>Alle wedstrijden</legend>
				<div class="recents">
					<?php include('controllers/matches_db.php'); ?>
				</div>

				<!-- <?php
					if($_SESSION['rights'] == 3) {
						include('controllers/add_match.php');
						include('includes/add_match_modal.php');
						include('controllers/add_match_btn.php');
					}	
				?> -->
			</fieldset>
		</div>
	</div>

<?php include('includes/footer.php'); ?>