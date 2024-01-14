<?php include "lexique.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'informer</title>
    <link rel="stylesheet" href="public/css/informer.css">
</head>
<body>
<?php include "app/view/common/header.php" ?>
    <main>
        <h1>Lexique</h1>
        <h2>Pas mal de termes sont en anglais, certains de ces termes ont été traduit (si c'est le cas, nous
             mettrons la traduction à côté), mais sont moins utilisés que leurs homologues en anglais.</h2>

    <section>
        <div class="deroulant">
        <button class="menubutton">Menus</button>
        <?php 
        foreach ($menus as $menu) : ?>
        <div class="menu_lexique" ><a href="<?= $menu['lien'] ?>"><?= $menu['catégorie'] ?></a></div>
        <?php endforeach ?>
        </div>
    </section>

        <p id="genres et pronoms">1.Genres et pronoms</p>
        <?php foreach ($lexique_genres_pronoms as $mot) : ?>
            <div class="mot"><a href="<?= $mot['lien'] ?>"><?= $mot['terme'] ?></a></div>
        <?php endforeach ?>

        <p id="termes trans">2.Termes trans</p>
        <?php foreach ($lexique_termes_trans as $mot) : ?>
            <div class="mot"><a href="<?= $mot['lien'] ?>"><?= $mot['terme'] ?></a></div>
        <?php endforeach ?>

        <p id="termes feministes">3.Termes féministes</p>
        <?php foreach ($lexique_termes_feministes as $mot) : ?>
            <div class="mot"><a href="<?= $mot['lien'] ?>"><?= $mot['terme'] ?></a></div>
        <?php endforeach ?>
    </main>
    
<?php include "app/view/common/bulles.php" ?>
<?php include "app/view/common/footer.php" ?>
</body>
</html>