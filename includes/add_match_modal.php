<div class="modal2 add_match">
	<div class="modal_content">
		<div class="modal_header">
			Wedstrijd toevoegen
			<i class="fa fa-times-circle close2" aria-hidden="true"></i>
		</div>
		<div class="modal_body">
			<form action='./controllers/add_match.php' method='POST'>
				<p>
					<input type="text" name="home_squad" placeholder="Thuisploeg" required>
				</p>
				<p>
					<input type="text" name="away_squad" placeholder="Uitploeg" required>
				</p>
				<p>
					<input type="text" name="score" placeholder="Score" required>
				</p>

				<input type='submit' value='Toevoegen' class="btn_blue">
			</form>
		</div>
	</div>
</div>	