<div class="modal2" id="admin_panel">
	<div class="modal_content">
		<div class="modal_header">
			Admin
			<i class="fa fa-times-circle close2" aria-hidden="true"></i>
		</div>
		<div class="modal_body">
			<p>
				Hier kunt u gebruikers wijzigen of verwijderen.
			</p>

			<div class='admin_table'>
                <table>
                    <tr>
                        <td>
                            ID
                        </td>
                        <td>
                         	Gebruikersnaam
                        </td>
                        <td>
                         	Voornaam
                        </td>
                        <td>
                         	Achternaam
                        </td>
                        <td>
                         	E-mailadres
                        </td>
                        <td>
                         	Credits
                        </td>
                    </tr>
					<?php include('./controllers/admin_controller.php'); ?>
				</table>
			</div>
        </div>
	</div>
</div>
