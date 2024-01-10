<?php
include 'liste.php';
?>





<!DOCTYPE html>
<html lang="fr">





<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Membres</title>
  <link rel="stylesheet" href="membres.css">
</head>





<body>

<section class="sticky">
    <?php
$nbBubbles = 27;

echo '<div class="bubbles">';
for ($i = 0; $i < $nbBubbles; $i++) {
    echo '<div class="bubble"></div>';
}
echo '</div>';
?>
        </section>





  <header>

    <div id="menu">
      <nav>
        <ul>
          <li><a href="#">ACCUEIL</a></li>
          <li><a href="#">S'INFORMER</a></li>
          <li><a href="#">NOS EVENEMENTS</a></li>
          <li><a href="#">CONTACT</a></li>
          <li><a href="#">QUI SOMMES-NOUS ?</a></li>
        </ul>
      </nav>
    </div>

    <div id="title">
      </br>
      <h1>Qui sommes-nous ?</h1>
      <p></p>
      </br>
    </div>

  </header>




  <main>

    <?php foreach ($groupe as $eleve) : ?>

      <div class="carte">


        <?php
        if (isset($eleve['photo'])) {
          $photo =  $eleve['photo'];
        } else {
          $photo = 'defaut.png';
        }
        ?>

        <figure class="photo"><img src="./membersimages/<?= $photo ?>" alt="photo">
        </figure>
        <div class="infos">
          <p class="nom"><?= $eleve['prenom'] ?> <span><?= $eleve['nom'] ?></span></p>
          <a href="<?= $eleve['page_perso'] ?>">Page perso</a>
          <!-- </br>
            <p></p>
            </br>
            <p></p> -->
        </div>
</div>
      <?php endforeach ?>
      
      <p></p>
      </br>
      <p></p>

  </main>





  <footer>

    <h3>Ce site a été produit par des élèves de MMI (IUT Sénart-Fontainbleau)</h3>
    <h3>2023, Tout droits réservés</h3>

  </footer>

</body>



</html>