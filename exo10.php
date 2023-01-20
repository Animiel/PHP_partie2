<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 10</h1>

    <p>En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les information suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : "Développeur Logiciel", "Designer Web", "Intégrateur" ou "Chef de projet".<br>
    <br>Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>

    <h2>Résultat</h2>

<?php
$infos = ["Nom", "Prénom", "E-Mail", "Ville"];
$listFormation = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];
$genre = ["Homme", "Femme"];

echo "Veuillez remplir ce formulaire avec les informations correspondantes.<br><br>";


function infoUser($array) {
    $createText = "";
    foreach ($array as $info) {
        if ($info == "E_Mail") {
            $createText .= "<label for='$info'>$info</label><br>
            <input type='email' name='$info' value='$info><br>";
        }
        else {
            $createText .= "<label for='$info'>$info</label><br>
            <input type='text' name='$info'><br>";
        }
    }
    return $createText;
}

function sexe($array) {
    $sexePersonne = "";
    foreach ($array as $info) {
        $sexePersonne .= "<input type='radio' name='sexe' id='sexe' value='Sexe'>
        <label for='sexe'>$info</label><br>";
    }
    return $sexePersonne;
}

function choixFormation($array) {
    $list = "<label for='formation'>Votre formation :</label><br>"."<select name='formation' id='formation'>";
    foreach ($array as $formation) {
        $list .= "<option value='$formation'>$formation</option>";
    }
    $list .= "</select>";
    return $list;
}

function afficherFormulaire($array1, $array2, $array3) {
    $result = "<form>";
    $result .= infoUser($array1);
    $result .= "Sexe<br>".sexe($array2);
    $result .= "<br>".choixFormation($array3);
    $result .= "<br><br><label for='fin'>Veuillez, après avoir vérifier vos informations, valider le formulaire en cliquant sur le bouton ci-dessous :</label><br>
    <input type='button' value='Valider' id='fin'>";
    $result .= "</form>";
    return $result;
}
echo afficherFormulaire($infos, $genre, $listFormation);
?>

</body>
</html>