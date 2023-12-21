



<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Qui sommes-nous ?</title>
    <link rel="stylesheet" type="text/css" href="members.css">
</head>



<header>

</header>



<body>
    
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



      <main>
    <?php foreach ($students as $aStudent=> $eleve) : ?>
        <div class="fiche">
        <a href="fiche.html">
        <?php
           if (isset($eleve['photo'])) {
                $photo = 'groupe' . $eleve['group'] . '/big/' . $eleve['photo'];
           } else {
                $photo = 'defaut.png';
           }
          ?>
            </div>
            <div class="detail">
                <p class="nom"><?= $eleve ['firstname'] ?> <span><?= $eleve ['lastname'] ?></span></p>
                <p class="ddn"><?= $eleve ['birthname'] ?> </p>
                <p class="groupe">Groupe<span><?= $eleve ['group'] ?></span></p>
                <p>
                    Je suis un brillant élève de l'IUT Sénart Fontainebleau. Je suis passionné par le WEB et la création
                    numérique.
                </p>
            </div>
        </div>
          <?php endforeach ?>

    </main>


</body>



</html>