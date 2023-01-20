<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Document</title>
</head>
<body>

<h1>Exercice 2</h1>

<p>Soit le tableau suivant :<br>
$capitales = array<br>
("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome");<br><br>
Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays s'affichera en majuscules et que le tableau est trié par ordre alphabétique <strong>du nom du pays</strong>) grâce à une fonction personnalisée.<br><br>
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<h2>Résultat</h2>


<?php

$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
];
function afficherTableHTML(array $array) {
    ksort($array);
    $resultat = "
    <table>
        <thead>
            <tr>
                <th>Pays</th>
                <th>Capitales</th>
            </tr>
        </thead>
        <tbody>";
    foreach ($array as $pays => $capitale) {
        $pays = strtoupper($pays);
        $resultat .= "<tr><td>$pays</td>";
        $resultat .=  "<td>$capitale</td></tr>";
    }
    $resultat .= "</tbody></table>";
    return $resultat;
}
echo afficherTableHTML($capitales);
?>
        
</body>
</html>