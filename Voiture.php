<?php
class Voiture {
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle = 0;
    private $etat = "stoppé";

    public function __construct(string $marque, string $modele, int $nbPortes) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function setMarque(string $marque) {
        $this->marque = $marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function setModele(string $modele) {
        $this->modele = $modele;
    }

    public function getNbPortes() {
        return $this->nbPortes;
    }

    public function setNbPortes(int $nbPortes) {
        $this->nbPortes = $nbPortes;
    }

    public function getVitesseActuelle() {
        return $this->vitesseActuelle;
    }

    public function setVitesseActuelle(int $vitesseActuelle) {
        $this->vitesseActuelle = $vitesseActuelle;
    }

    public function getEtat() {
        return $this->etat;
    }

    public function setEtat(string $etat) {
        $this->etat = $etat;
    }

    public function demarrer() {
        if($this->etat == "démarré") {
            echo "La voiture est déjà démarrée.<br>" ;
        } else {
            $this->etat = "démarré";
            echo "Le véhicule $this->marque $this->modele démarre.<br>";
        }
    }

    public function accelerer(int $vitesse) {
        if ($this->etat == "démarré" && $vitesse > 0) {
            $this->vitesseActuelle += $vitesse;
            echo "Le véhicule $this->marque $this->modele accélère de $vitesse km/h.<br>";
        }
        else 
            echo "Pour accélerer, il faut démarrer le véhicule $this->marque $this->modele ou valeur invalide.<br>";
            if ($this->vitesseActuelle >= 200) {
                echo "/!\ Danger pour la voiture ET le conducteur, veuillez ralentir svp /!\ <br>";
            }
        return;
    }

    public function stopper() {
        if ($this->etat == "stoppé") {
            echo "La voiture est déjà stoppée.<br>";
        }
        else
            $this->etat = "stoppé";
            $this->vitesseActuelle = 0;
            echo "Le véhicule $this->marque $this->modele est stoppé.<br>";
        return;
    }

    public function ralentir(int $vitesse) {
        if ($this->etat == "démarré" && $vitesse > 0) {
            if ($this->vitesseActuelle - $vitesse < 0) {
                echo "Le véhicule $this->marque $this->modele ralentit de $this->vitesseActuelle km/h.<br>";
                $this->vitesseActuelle = 0;
            }
            else {
                $this->vitesseActuelle -= $vitesse;
                echo "Le véhicule $this->marque $this->modele ralentit de $vitesse km/h.<br>";
            }
        }
        else 
            echo "Pour ralentir, il faut que le véhicule $this->marque $this->modele soit démarré ou valeur invalide.<br>";
        return;
    }

    public function Stats() {
        $infos = "Infos<br>
        Nom et modèle du véhicule : $this->marque $this->modele<br>
        Nombre de portes : $this->nbPortes <br>
        Le véhicule $this->marque est $this->etat.<br>
        Sa vitesse actuelle est de : $this->vitesseActuelle km/h.<br>";
        return $infos;
    }
}
?>
