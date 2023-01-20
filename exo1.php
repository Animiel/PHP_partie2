<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractères, passée en argument, en majuscule et en rouge.<br>
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte).</p>

<h2>Résultat</h2>

<link rel="stylesheet" type="text/css" href="style1.css">

<?php

$phrase = "Mon texte est rouge, et j'ai réussi.";
function convertirMajRouge($texte) {
    $texte = mb_strtoupper($texte);
    echo "<p id=phrase>$texte</p>";
}
convertirMajRouge($phrase);