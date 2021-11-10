<header>
	<div id="header">
		<img id="img_logo_entreprise" src="img/LOGO-WERECY copie.png"/>
		<nav>
			<ul>
				<li><a href="index.php">CONSOM'ACTEUR</a></li>
				<li><a href="commerce.php">COMMERCES</a></li>
				<li><a href="defi.php">DÉFI</a></li>
				<li><a href="transformation.php">TRANSFORMATION</a></li>
			</ul>
		</nav>
	</div>
	
	<div id="header_mobile">
		<div id="logo_mobile">
			<img id="img_logo_entreprise" src="img/LOGO-WERECY copie.png"/>
		</div>
		<div id="myLinks">
			<a href="index.php">CONSOM'ACTEUR</a>
			<a href="commerce.php">COMMERCES</a>
			<a href="defi.php">DÉFI</a>
			<a href="transformation.php">TRANSFORMATION</a>
		</div>
		<a href="javascript:void(0);" class="icon" onclick="menu_mobile()">
			<i class="fa fa-bars"></i>
			<img id="logo_menu_mobile" src="img/344013-200.png" />
		</a>
	</div>
</header>
<script>
	function menu_mobile() {
		var x = document.getElementById("myLinks");
		if (x.style.display === "flex") {
			x.style.display = "none";
		} else {
			x.style.display = "flex";
		}
		
		var x = document.getElementById("header_mobile");
		if (x.style.position === "fixed") {
			x.style.position = "relative"
		} else {
			x.style.position = "fixed"
			x.style.width = "100vw"
		}
	}
</script>