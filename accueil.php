<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>Transcendant-Accueil</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link rel="stylesheet" href="public/css/accueil.css">
	</head>
	<body>
	<?php
			$page_courante = 'Accueil';
			$menus = [
				'menu_haut' => [
					'Accueil' => 'accueil.php',
					'A propos'=> 'équipe.php',
					'S\'informer' => 'informer.php',
					'Évènements' => 'evenements.php',
					'Contact' => 'contact.php',
				],
			];
		?>
		<header id="haut">
            <a href="accueil.php"><img id="logo" src="public/images/bulle2.png"></a>
			<img id="texte" src="public/images/Texte.png">
			<ul>
				<?php foreach ($menus['menu_haut'] as $label => $url): ?>
					<li><a href="<?php echo $url; ?>"><?php echo $label; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</header>
		<main>
		
		<div class="content">
			<img id="bulle" src="public/images/bulle2.png">
			<br>
			<img id="transcendant" src="public/images/Texte.png">
			<h1 id="trs">Transcendons les préjugés</h1>
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
			<h2><u>Actualités</u></h2>
			<a href="evenements.php"><p>Nouvel événement disponible.</p>
			<img id="affiche" src="public/images/affiches/sensibilise.png" alt="événement"></a>	
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
		<video controls src="public/video/Transcendant_Spot_GroupeB.mp4">Le texte à afficher si la vidéo ne se charge pas</video>	
		</main>
		

		<?php include "app/view/common/bulles.php" ?>
		<?php include "app/view/common/footer.php" ?>
	</body>
</html>
