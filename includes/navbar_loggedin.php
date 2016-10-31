<div class="nav">
	<div class="wrapper">
		<a href="index">
			<img class="header_logo" src="assets/images/sg_logo_white.png">
		</a>

		<ul>
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
				<a href="contact">
					Contact
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
				<span class="clickable" onclick="window.location.href = './controllers/logout.php';">
					Uitloggen
				</span>
			</li>
			<li>
				<i class="fa fa-search search_btn" aria-hidden="true"></i>
			</li>
		</ul>

		<div class="menu_container" onclick="myFunction(this)">
			<div class="bar1"></div>
		 	<div class="bar2"></div>
		 	<div class="bar3"></div>
		</div>
	</div>
</div>