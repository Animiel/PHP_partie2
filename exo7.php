<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style7.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 7</h1>

    <p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.<br>
    <br><strong>Exemple :</strong><br>
    genererCheckbox($elements);<br>
    //où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

    <h2>Résultat</h2>
<div>
<?php

$elements = ["Choix 1", "Choix 2", "Choix 3"];

function generCheckbox($array) {
    $create = "";
    foreach ($array as $element) {
        $create .= "<input type='checkbox' id='choix' name='$element' value='$element'>
        <label for='choix'>$element</label><br>";
    }
    return $create;
}
echo generCheckbox($elements);
?>
</div>
    
</body>
</html>