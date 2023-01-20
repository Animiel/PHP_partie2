<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style9.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 9</h1>

    <p>Créer une fonction personnalisée permettant d'afficher des boutons de radio avec un tableau de valeurs en paramètre ("Monsieur", "Madame", "Mademoiselle").<br>
    <br><strong>Exemple :</strong><br>
    afficherRadio($nomsRadio);</p>

    <h2>Résultat</h2>
<div>
<?php

$nomsRadio = ["Monsieur", "Madame", "Mademoiselle"];

function afficherRadio($array) {
    $radio = "";
    foreach ($array as $nom) {
        $radio .= "<input type='radio' id='radiogaga' name='civilite' value='$nom'>
        <label for='radiogaga'>$nom</label><br>";
    }
    return $radio;
}
echo afficherRadio($nomsRadio);
?>
</div>
    
</body>
</html>