<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transcendant</title>
    <link rel="stylesheet" href="public/css/evenements.css"> 
</head>
<body>
<header>
        <a href="http://localhost/SAE/SAE.php"><img id="logo" src="public/images/logo transcendant.png" alt="logo transcendant"></a>
        <nav>
            <ul>
                <li><a id="accueil" href="accueil.php">Accueil</a></li>
                <li><a id="membre" href="membres.php">Qui sommes-nous ?</a></li>
                <li><a id="informer" href="informer.php">S'informer</a></li>
                <li><a id="evenement" href="evenements.php">Evènements</a></li>
                <li><a id="contact" href="contact.php">Contact</a></li>
            </ul>
        </nav>  
    </header>
  <main>
      <H1>Nos évènements</H1>
      <section>
      <?php 

$nos_evenements = [
    1 => [
      "intitulé"=>"Transcendant en visite dans le lycée de la Mare Carré",
      "date"=>"le samedi 20 janvier 2024",
    "programme"=>["atelier"=>"atelier","jeux"=>"jeux : échange tes stéréotypes","présentation sur la transidentité"=>"présentation sur la transidentité"],
    "cadeaux"=>"des t-shirts transcendants",],
    //...Pour mettre d'autres évènements
  ];
    ?>
      <?php
foreach ($nos_evenements as $evenement) : ?>
    <div class="carte">
    <figure><img class="affiche" src="public/images/Sensibilise.png" alt="affiche sensibilise"></figure>
    <div class="infos">
      <p><?=$evenement['intitulé'] ?></p><br>
      <p><?= $evenement['date'] ?></p><br>
      <p><?= $evenement['programme']['atelier'] ?></p><br>
      <p><?= $evenement['programme']['jeux'] ?></p><br>
      <p><?= $evenement['programme']['présentation sur la transidentité'] ?></p><br>
      <p><?= $evenement['cadeaux'] ?></p>
      <p><a href="#merch">(voir plus)</a></p></div>
    </div>
  <?php endforeach ?>
    </section>


    <section id="à_venir">
      <p>D'autres évènements seront bientôt disponibles...</p>
    </section>


    <section>
      <div id="merch">
        <p>Merch offerte:</p>
        <figure><img class="shirt" src="public/images/t-shirt_transcendant.png" alt="T-shirt Transcendant"></figure>
      </div>
    </section>


    <section class="sticky">
        <div class="bubbles">
            <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div> 
        </div>
      </section>