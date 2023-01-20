<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="style4.css" type="text/css">

    <h1>Exercice 4</h1>

    <p>A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s'ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique <strong>de la capitale</strong>).<br><br>
    On admet que l'URL de la page Wikipédia de la capitale adopte la forme :<br>
    https://fr.wikipedia.org/wiki/<br><br>
    Le tableau passé en argument sera le suivant :<br>
    $capitales = array("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome", "Espagne"=>"Madrid");</p>

    <h2>Résultat</h2>

<?php

$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"
];
function exo2Ameliore(array $array) {
    asort($array);
    $resultat = "<table>
                <thead> 
                    <tr> 
                        <th>Pays</th> 
                        <th>Capitale</th> 
                        <th>Lien wiki</th> 
                    </tr> 
                </thead> 
            <tbody>";
    foreach ($array as $pays => $capitale) {
        $lien = "<a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien ici</a>";
        $pays = strtoupper($pays);
        $resultat .= "<tr> 
            <td>$pays</td> 
            <td>$capitale</td> 
            <td>$lien </td> 
        </tr>";
    }
    $resultat .= "</tbody></table>";
    return $resultat;
}
echo exo2Ameliore($capitales);
?>
    
</body>
</html>