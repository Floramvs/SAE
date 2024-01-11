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
            <section>
            <div class="deroulant">
                <button class="menubutton">Menus</button>
                <?php 
            foreach ($lexique_genres_pronoms['menus'] as $menu) : ?>
                <div class="menu_lexique" ><a href=""><p><?= $menu ?></p></a></div>
            <?php endforeach ?>
            </div>
        </section>
            <?php 
            foreach ($lexique_genres_pronoms['terme'] as $definition) : ?>
                <div class="mot" ><a href=""><p><?= $definition ?></p></a></div>
            <?php endforeach ?>

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
    </main>
    <?php include "app/view/common/footer.php" ?>
</body>
</html>