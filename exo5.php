<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css" type="text">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 5</h1>
    
    <p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.<br>
    <br><strong>Exemple :</strong><br>
    $nomsInput = array("Nom", "Prénom", "Ville");<br>
    afficherInput ($nomsInput);</p>

    <h2>Résultat</h2>
<div>
<?php

$nomsInput = ["Nom", "Prénom", "Ville"];
function afficherInput(array $array) {
    $create = "";
    foreach ($array as $info) {
        $create .= "<label for='$info'>$info</label> <br>
        <input type='text' id='$info' name='$info'> <br>";
    }
    return $create;
}
echo afficherInput($nomsInput);
?>
</div>
    
</body>
</html>