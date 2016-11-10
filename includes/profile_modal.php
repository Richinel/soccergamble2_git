<div class="modal2 md-effect-1" id="profile_modal">
	<div class="modal_content">
		<div class="modal_header">
			Profiel
			<i class="fa fa-times-circle close2" aria-hidden="true"></i>
		</div>
		<div class="modal_body">
			<div class="row">
				<div class="col">
					<p>
						<strong>Gebruikersnaam:</strong><br>
						<?php echo $_SESSION['username']; ?>
					</p>

					<p>
						<strong>Volledige naam:</strong><br>
						<?php echo $_SESSION['firstname']; ?>
						<?php echo $_SESSION['lastname']; ?>
					</p>

					<p>
						<strong>E-mailadres:</strong><br>
						<?php echo $_SESSION['email']; ?>
					</p>
				</div>

				<div class="col">
					<p>
						<strong>Credits:</strong><br>
						<?php echo $_SESSION['credits']; ?>
					</p>

					<p>
						<button>Credits toevoegen</button>
					</p>

					<p>
						<button>Wachtwoord veranderen</button>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>	