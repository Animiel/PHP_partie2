<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu'une classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br>
<br>Instancier une voiture "classique" et une voiture "électrique" ayant les caractéristiques suivantes :<br>
<ul>
    <li>Peugeot 408 : $v1 = new Voiture("Peugeot", "408");<br></li>
    <li>BMW i3 150 : $ve1 = new VoitureElec ("BMW", "I3", 100);<br></li>
</ul>
<br>Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :<br>
echo $v1->getInfos();<br>
echo $ve1->getInfos();</p>

<h2>Résultat</h2>

<?php
require_once 'Voiture14.php';
require_once 'VoitureElec.php';

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 100);

echo $v1->getInfos()."<br>";
echo $ve1->getInfos()."<br>";

// echo $v1; --> affiche marque modèle grâce au __toString()
?>
    
</body>
</html>