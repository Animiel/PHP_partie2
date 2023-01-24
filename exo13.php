<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 13</h1>

    <p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer(), accelerer() et stopper() en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un véhicule.<br>
    <br>v1 --> "Peugeot", "408", 5<br>
    v2 --> "Citroën", "C4", 3<br>
    <br>Coder l'ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments suivants :<br>
    <table>
        <tr>
            <td>La Peugeot 408 démarre<br>Le véhicule Peugeot 408 accélère de 50 km/h<br>Le véhicule Citroën C4 démarre<br>Le véhicule Citroën C4 est stoppé<br>Le véhicule Citroën C4 veut accélerer de 20 km/h<br>Pour accélerer, il faut démarrer le véhicule Citroën C4 !<br>La vitesse du véhicule Peugeot 408 est de : 50 km/h<br>La vitesse du véhicule Citroën C4 est de : 0 km/h.</td>
            <td>Infos véhicule 1<br>Nom et modèle du véhicule : Peugeot 408<br>Nombre de portes : 5<br>Le véhicule Peugeot est démarré<br>Sa vitesse actuelle est de : 50 km/h</td>
            <td>Infos véhicule 2<br>Nom et modèle du véhicule : Citroën C4<br>Nombre de portes : 3<br>Le véhicule Citroën est à l'arrêt<br>Sa vitesse actuelle est de : 0 km/h</td>
        </tr>
    </table><br>
    <br><strong>Bonus :</strong> ajouter une méthode ralentir(vitesse) dans la classe Voiture.</p>

    <h2>Résultat</h2>

<?php
include 'Voiture.php';
$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

echo "<br>".$v1->Stats();

?>
    
</body>
</html>