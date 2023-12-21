<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evènements</title>
    <link rel="stylesheet" href="public/css/evenements.css"> 
</head>
<body>
    <main>
      <H1>Nos évènements</H1>
      <section>
        <div class="carte">
      <img class="affiche" src="public/images/Sensibilise.png" alt="affiche sensibilise">
      <?php
      $evenements =[
         "intitulé"=>"Transcendance en visite dans le lycée de la Mare Carré",
         "date"=>"samedi 20 janvier 2024",
         "programme"=>["atelier","jeux : échange tes stéréotypes","présentation sur la transidentité"],
         "cadeaux"=>"des t-shirts transcendants",
         "url"=>"",
      
        // ... pour mettre d'autres évènements.
      ]; ?>
      <p><?=$evenements['intitulé'] ?></p>
      <p><?= $evenements['date'] ?></p>
      <p><?= $evenements['date'] ?></p>
      <p><?= $evenements['programme']['atelier'] ?></p>
      <p><?= $evenements['programme']['jeux : échange tes stéréotypes'] ?></p>
      <p><?= $evenements['programme']['présentation sur la transidentité'] ?></p>
      <p><?= $evenements['cadeaux'] ?></p>
      <p><?= $evenements['url'] ?></p>
      </div>
    </section>
    <section>
      <p>D'autres évènements seront bientôt disponibles...</p>
    </section>
    <section>
      <p>Merch offerte:</p>
      <img src="" alt="T-shirt Transcendant">
    </section>
</main>
</body>
</html>