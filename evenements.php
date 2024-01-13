<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evènements</title>
    <link rel="stylesheet" href="public/css/evenements.css"> 
</head>
<body>
    <?php include "app/view/common/header.php" ?>
    
  <main>
      <H1>Nos évènements</H1>
      <section>
      <?php 

$nos_evenements = [
    1 => [
      "affiche"=> "sensibilise.png",
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
    <?php
           if (isset($evenement['affiche'])) {
           $affiche =  $evenement['affiche'];
          } else {
          $affiche = '';}
    ?>
    <figure><img class="affiche" src="./public/images/affiches/<?=$affiche ?>" alt="affiche sensibilise"></figure>
    <div class="infos">
      <p><?=$evenement['intitulé'] ?></p><br>
      <p><?= $evenement['date'] ?></p><br>
      <p><?= $evenement['programme']['atelier'] ?></p><br>
      <p><?= $evenement['programme']['jeux'] ?></p><br>
      <p><?= $evenement['programme']['présentation sur la transidentité'] ?></p><br>
      <p><?= $evenement['cadeaux'] ?></p>
      <a href="#merch">(voir plus)</a></div>
    </div>
  <?php endforeach ?>
    </section>


    <section id="à_venir">
      <p>D'autres évènements seront bientôt disponibles...</p>
    </section>


    <section>
      <div id="merch">
        <p>T-shirts offerts:</p>
        <figure><img class="shirt" src="public/images/t-shirt_transcendant.png" alt="T-shirt Transcendant"></figure>
      </div>
    </section>

    <?php include "app/view/common/bulles.php" ?>
      </main>

      <?php include "app/view/common/footer.php" ?>
</body>
</html>