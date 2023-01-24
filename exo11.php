<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 11</h1>

    <p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une chaîne de caractères représentant une date.<br>
    <br><strong>Exemple :</strong><br>
    formaterDateFr("2018-02-23");</p>

    <h2>Résultat</h2>

<?php

    function formaterDateFr($date) {
        $form = new IntlDateFormatter(
            'fr_FR', 
            IntlDateFormatter::FULL, IntlDateFormatter::NONE, 
            'Europe/Paris', IntlDateFormatter::GREGORIAN,
            'EEEE d LLLL Y');
        return $form->format($date);
    }

$test = new DateTime ("2018-02-23");
echo formaterDateFr($test);

?>
    
</body>
</html>