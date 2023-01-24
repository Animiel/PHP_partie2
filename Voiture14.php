<?php
class Voiture {
    protected string $marque; //protected = publate --> mélange de public et private ==> variable accessible dans classe + enfants.
    protected string $modele;

    public function __construct(string $marque, string $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getMarque(): string {
        return $this->marque;
    }

    public function setMarque(string $marque) {
        $this->marque = $marque;
    }

    public function getModele(): string {
        return $this->modele;
    }

    public function setModele(string $modele) {
        $this->modele = $modele;
    }

    public function getInfos() {
        return "Le véhicule est une $this";
    }

    public function __toString(){                               //utilisée pour afficher élément le plus représentatif de la classe / le plus répétitif (ex: nom prénom, marque modèle, etc.)
        return $this->marque . " ". $this->modele;
    }
}
?>