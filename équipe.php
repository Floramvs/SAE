<?php
include 'liste.php';?>



<!DOCTYPE html>
<html lang="fr">





<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Membres</title>
  <link rel="stylesheet" href="public/css/membres.css">
</head>





<body>
<?php include "app/view/common/header.php" ?>

<?php include "app/view/common/bulles.php" ?>

        <main>

    <h1 id="titre">Qui sommes-nous ?</h1>

    <p class="description">Bonjour, Nous sommes un collectif ayant pour but d'éduquer et aider autrui vis à vis des stéréotypes de genres et la transphobie, qui affectent tout le monde d'une manière ou d'une autre au quotidien.</br><span>Comment ?</span>A travers nos visites dans les collèges, lycées et universités et notre lexique varié, ayez accès facilement et rapidement à des renseignements sur l'identité de genre dans un cadre d'écoute et de bienveillance.</p>

    <p class="titre">Signification du nom</p>

    <p class="description">Le nom de notre collectif "Transcendant" reprend le fait que l'on "transcende" les préjugés sur les identités de genre tout en reprenant l'abréviation "trans" dans sa première syllabe. Ce qui fait un super jeu de mot :)</p>

    <p class="titre">Signification du logo</p>

    <p class="description">La forme est une bulle entrain de s'éclater, représentant le fait de briser des codes et sortir des cases des stéréotypes de genre. Les "vagues" crée par l'explosion représente une fluidité dans les identités de genre. Et les couleurs proviennent de celles du drapeau trans. Le violet représente l'entre les deux et est en rapport avec la fluidité et la non-binarité.</p>

    <section id="equipe">

    <p class="titre">Notre équipe</p>


     <?php foreach ($groupe as $eleve) : ?>

      <div class="carte">


        <?php
        if (isset($eleve['photo'])) {
          $photo =  $eleve['photo'];
        } else {
          $photo = 'defaut.png';
        }
        ?>

        
        <div class="infos">
        <a href="<?= $eleve['page_perso'] ?>"><figure class="photo"><img src="./public/images/membersimages/<?= $photo ?>" alt="photo"></figure>
          <p class="nom"><?= $eleve['prenom'] ?> <span><?= $eleve['nom'] ?></span></p></a>
        </div>
</div>
      <?php endforeach ?> 
    </section>

    
  </main>





  <footer>

  <?php include "app/view/common/footer.php" ?>

  </footer>

</body>



</html>