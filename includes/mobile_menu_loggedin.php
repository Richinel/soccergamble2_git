<div class="mobile_menu">
	<ul>
		<li>
			<?php echo "Welkom, ", $_SESSION['username']; ?>
		</li>
		<li>
			<a href="index">
				Home
			</a>
		</li>
		<li>
			<a href="matches">
				Wedstrijden
			</a>
		</li>
		<li>
			<span class="profile_btn clickable">
				Profiel
			</span>
		</li>
		<?php if($_SESSION['rights'] == 3) : ?>
			<li>
				Admin Panel
			</li>
		<?php endif; ?>
		<li>
			<a href="register">
				Uitloggen
			</a>
		</li>
		<li>
			<a href="#" id="mobile_search">
				Zoeken
			</a>
		</li>
	</ul>
</div>
