<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 12</h1>

    <p>La fonction var_dump($variable) permet d'afficher les informations d'une variable.<br>
    <br>Soit le tableau suivant :<br>
    $tableauValeurs = [true, "texte", 10, 25.369, ["valeur1", "valeur2"]];<br>
    A l'aide d'une boucle, afficher les informations des variables contenues dans le tableau.</p>

    <h2>Résultat</h2>

<?php
$tableauValeurs = [true, "texte", 10, 25.369, ["valeur1", "valeur2"]];
foreach ($tableauValeurs as $info) {
    echo var_dump($info)."<br>";
}
?>
    
</body>
</html>