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
        </section>

    <div id="title">
      </br>
      <h1>Qui sommes-nous ?</h1>
      <p></p>
      </br>
    </div>




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

        <figure class="photo"><img src="./public/images/membersimages/<?= $photo ?>" alt="photo">
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

  <?php include "app/view/common/footer.php" ?>

  </footer>

</body>



</html>