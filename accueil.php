<!DOCTYPE html>

<html>
	<head>
	<meta charset="utf-8">
		<title>Transcendant-Accueil</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins" 
		rel="stylesheet">
		<link rel="stylesheet" href="public/css/accueil.css">
	
	</head>
	<body>
		<header id="haut">
            <a href="accueil.php"><img id="logo" src="public/images/bulle2.png"></a>
			<img id="texte" src="public/images/Texte.png">
			<ul>
				<li><a href="accueil.php">Accueil</a></li>
				<li><a href="équipe.php">A propos</a></li>
				<li><a href="informer.php">S'informer</a></li>
				<li><a href="evenements.php">Evenements</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</header>

			<div class="content">
				<img id="bulle" src="public/images/bulle2.png">
				<br>
				<img id="transcendant" src="public/images/Texte.png">
				<h1 id="trs">Transcendons les préjugés</h1>
				<p> 
					Bienvenue sur le site de Transcendant !<br>
				</p>
				<div>
					<a href="#bas"><button type="button"> <span></span>DÉCOUVRIR</button> </a>
				</div>
			</div>

		<section id="etoiles">
			<img src="public/images/stars.png" id="stars">
			<img src="public/images/2.png" id="stars2">
		</section>
		<div class="sec" id="sec">
			<a name="bas"></a>
			<h2><u>PARTIE 1</u></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<h2><u>PARTIE 2</u></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
			</p>	
			<br>
			<br>
			<div class="zoom"> 
			</div>
				<br><br><br>
				<div class="banner">
					<div class="content2">
						<div>
							<a href="#haut"><button type="button"> <span></span> RETOURNER EN HAUT </button> </a>
						</div>
					</div>
				</div>		
		</div>
        <video src="public/video/Transcendant_Spot_GroupeB.mp4" type="video/mp4"><p>Votre navigateur ne prend pas en compte cette vidéo.</p></video>
		<?php include "app/view/common/footer.php" ?>
	</body>
</html>