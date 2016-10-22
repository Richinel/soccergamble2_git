<?php include('includes/header.php'); ?>

	<div class="content register">
		<div class="wrapper">
				<div class="row centered row-800 row_divided">
					<div class="col divided">
						<fieldset>
							<h3>Inloggen</h3>
							<p>
								Hier kunt u inloggen
							</p>

							<form action="controllers/loginprocess.php" method="post">
								Gebruikersnaam:<br>
								<input type="text" name="username"><br><br>

								Wachtwoord:<br>
								<input type="password" name="password"><br><br>

								<button type="submit">Inloggen</button>
							</form>
						</fieldset>
					</div>

					<div class="col">
						<fieldset>
							<h3>Registreren</h3>
							<p>
								Om te kunnen wedden moet u een account hebben.
							</p>
							<form action="controllers/registerprocess.php" method="post">
								Gebruikersnaam:<br>
								<input type="text" name="username" required="Vul dit veld in">
								<br><br>

								Voornaam:<br>
								<input type="text" name="firstname" required="Vul dit veld in">
								<br><br>

								Achternaam:<br>
								<input type="text" name="lastname" required="Vul dit veld in">
								<br><br>

								E-mailadres:<br>
								<input type="text" name="email" required="Vul dit veld in">
								<br><br>

								Wachtwoord:<br>
								<input type="password" name="password" required="Vul dit veld in">
								<br><br>

								Wachtwoord herhalen:<br>
								<input type="password" required="Vul dit veld in">
								<br><br>

								<button type="submit">Registreren</button>
							</form>
						</fieldset>
					</div>
				</div>


			</p>
		</div>
	</div>

<?php include('includes/footer.php'); ?>

