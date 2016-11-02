<div class="search_modal" id="search_modal">
	<i class="fa fa-times" id="close_search" aria-hidden="true"></i>
	<form name="form">
		<h2>Zoeken</h2>
		<div class="row">
			<div class="col col-10">
				<input type="text" name="naam" onkeyup="ZoekFunctie(this.value);" required="Vul dit veld in">
			</div>
			<div class="col col-2">
				<button type="submit">
					<i class="fa fa-search" id="search_i" aria-hidden="true"></i>
				</button>
			</div>
		</div>

		<p>
			<div id="DataDiv"></div> 
		</p>
	</form>
</div>	