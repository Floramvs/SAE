<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'informer</title>
    <link rel="stylesheet" href="public/css/informer.css">
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
        <h1>Lexique</h1>
        <h2>Pas mal de termes sont en anglais, certains de ces termes ont été traduit (si c'est le cas, nous
             mettrons la traduction à côté), mais sont moins utilisés que leurs homologues en anglais.</h2>
        <section>
            <div class="deroulant">
                <button class="menubutton">Menus</button>
                <div class="menu_lexique">
                <a href="">Genres et pronoms</a>
            </div>
        </section>
            <?php 
            $lexique_genres_pronoms =[
                'menus' => [
                    'genres et pronoms' => '',
                    'termes trans' => '',
                    'termes féministes' => '',],
                'terme'=> [
                    'Genre'=>'Genre',
                    'Sexe'=>'Sexe',
                 'Identité de Genre'=>'Identité <br>de genre',
                 'Expression de genre'=>'Expression <br>de genre',
                 'LGBTQIA+'=>'LGBTQIA+',]
                ];
            ?>
            <?php 
            foreach ($lexique_genres_pronoms['terme'] as $definition) : ?>
                <div class="mot" ><a href=""><p><?= $definition ?></p></a></div>
            <?php endforeach ?>

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
    </main>
</body>
</html>