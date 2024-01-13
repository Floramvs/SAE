<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubulles</title>
    <link rel="stylesheet" href="public/css/bulles.css">
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
</body>
</html>