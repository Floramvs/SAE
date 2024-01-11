<?php
include 'liste.php';?>



<!DOCTYPE html>
<html lang="fr">





<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Membres</title>
  <link rel="stylesheet" href="membres.css">
</head>





<body>
<?php include "app/view/common/header.php" ?>

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

    <<header>
            <a href="#" class="logo">  </a>

            <ul>
                <li><a href="accueil.html" class="active">Accueil</a></li>
                <li><a href="qsn.html">Qui sommes-nous?</a></li>
                <li><a href="informer.html">S'informer</a></li>
                <li><a href="event.html">Evenements</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </header>

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

        <figure class="photo"><img src="./images/<?= $photo ?>" alt="photo">
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


  <?php include "app/view/common/footer.php" ?>


  <footer>

    <h3>Ce site a été produit par des élèves de MMI (IUT Sénart-Fontainbleau)</h3>
    <h3>2023, Tout droits réservés</h3>

  </footer>

</body>



</html>