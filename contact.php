<?php include('includes/header.php'); ?>

	<div class="content contact">
		<div class="title_box">
			<h1 class="drop_shadow">Contact</h1>	
		</div>

		<div class="wrapper">
			<p>
				Via deze pagina kunt u contact met ons opnemen als u vragen en/of opmerkingen heeft!
			</p>

			<div class="row contact_row">
				<div class="col">
					<form id="contact_form">
						<p>
							<input type="text" name="name" placeholder="Naam">
						</p>
						<p>
							<input type="text" name="email" placeholder="E-mailadres">
						</p>
						<p>
							<input type="text" name="subject" placeholder="Onderwerp">
						</p>
						<p>
							<textarea placeholder="Typ hier uw bericht..."></textarea>
						</p>

						<button type="submit" name="submit">Versturen</button>
					</form>
				</div>
				<div class="col">
					<iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:Ei5TdG9sd2lqa3N0cmFhdCA4LCAzMDc5IEROIFJvdHRlcmRhbSwgTmVkZXJsYW5k&key=AIzaSyCgEtR9sabAay2aLccBt4c5WeWCoEHFpbk" allowfullscreen></iframe>
				</div>
			</div>

			<hr>

			<div class="row between equal centered contact_options">
				<div class="col-3">
					<div class="co_item">
						<h3><i class="fa fa-phone" aria-hidden="true"></i></h3>
						<hr>
						010 292 9029
					</div>
				</div>				
				<div class="col-3">
					<div class="co_item">
						<h3><i class="fa fa-envelope-o" aria-hidden="true"></i></h3>
						<hr>
						info@soccergamble.nl
					</div>
				</div>
				<div class="col-3">
					<div class="co_item">
						<h3><i class="fa fa-map-marker" aria-hidden="true"></i></h3>
						<hr>
						Stolwijkstraat 8
					</div>
				</div>				
			</div>
		</div>
	</div>

<?php include('includes/footer.php'); ?>