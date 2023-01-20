<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style6.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 6</h1>

    <p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.<br>
    <br><strong>Exemple :<strong><br>
    $elements = array("Monsieur", "Madame", "Mademoiselle");<br>
    alimenterListeDeroulante ($element);</p>

    <h2>Résultat</h2>
<div>
<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];

function alimenterListeDeroulante($array) {
    echo "<label for='genre'>Civilité</label><br>"."<select name='genre' id='genre'>";
    $list = "";
    foreach ($array as $element) {
        $list .= "<option value='$element'>$element</option>";
    }
    return $list;
}
echo alimenterListeDeroulante($elements);

?>
</div>
    
</body>
</html>