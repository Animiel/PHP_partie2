<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style8.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 8</h1>

    <p>Soit l'URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
    Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.<br>
    <br><strong>Exemple :</strong><br>
    repeterImage($url, 4);</p>

    <h2>Résultat</h2>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

function repeterImage($img, $N) {
    if ($N < 0 || $N != is_int($N)) {
        echo "N n'est pas correct.";
    }
    else {
        for ($i = 0; $i < $N; $i++) {
            echo "<img src='$img'>";
        }
    }
    return;
}
echo repeterImage($url, 3);
?>
    
</body>
</html>