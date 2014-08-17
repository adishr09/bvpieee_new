<?php echo'
		
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="Nav_Bar/css/default.css" />
		<link rel="stylesheet" type="text/css" href="Nav_Bar/css/component.css" />
		<script src="Nav_Bar/js/modernizr.custom.js"></script>
		<div class="nav" style="background:rgba(236, 236, 236, 1);">
			<ul id="cbp-tm-menu" class="cbp-tm-menu">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="#">IEEE</a>
				</li>
				<li>
					<a href="#">IEEE-HKN</a>
				</li>			
				<li>
					<a href="wie.php">WIE</a>
				</li>
				<li>
					<a href="#">Events</a>
					<ul class="cbp-tm-submenu">
						<li><a href="fervour.php" class="cbp-tm-icon-archive">Fervour</a></li>
						<li><a href="GAMMA.php" class="cbp-tm-icon-cog">GAMMA Orientation</a></li>
						<li><a href="Green_IT.php" class="cbp-tm-icon-location">Lecture on Green IT</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Publications</a>
					<ul class="cbp-tm-submenu">
						<li><a href="http://pratibimb.bvpieee.org" class="cbp-tm-icon-archive">Pratibimb</a></li>
						<li><a href="#" class="cbp-tm-icon-cog">Cognizance</a></li>
						<li><a href="#" class="cbp-tm-icon-location">Reports</a></li>
					</ul>
				</li>
				<li>
					<a href="team.php">Executive Community</a>
				</li>	
				<li>
					<a href="#">SIGs</a>
					<ul class="cbp-tm-submenu">
						<li><a href="#" class="cbp-tm-icon-archive">Drishti</a></li>
						<li><a href="#" class="cbp-tm-icon-cog">Code-X</a></li>
						<li><a href="#" class="cbp-tm-icon-location">Robotix-United</a></li>
						<li><a href="#" class="cbp-tm-icon-archive">GAMMA</a></li>
						<li><a href="#" class="cbp-tm-icon-cog">E-Cell</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Gallery</a>
				</li>
				<li>
					<a href="contact_us.php">Contact Us</a>
				</li>
			</ul>
		</div>
		<script src="Nav_Bar/js/cbpTooltipMenu.min.js"></script>
		<script>
			var menu = new cbpTooltipMenu( document.getElementById( "cbp-tm-menu" ) );
		</script>
	'	;?>