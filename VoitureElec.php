<?php
class VoitureElec extends Voiture {
    private $autonomie;

    public function __construct(string $marque, string $modele, int $autonomie) {
        parent::__construct($marque, $modele);                  //parent --> utiliser méthode de la classe de base.
        $this->autonomie = $autonomie;
    }

    public function getAutonomie() {
        return $this->autonomie;
    }

    public function setAutonomie($autonomie) {
        $this->autonomie = $autonomie;
    }

    public function getInfos() {
        return parent::getInfos()." avec une autonomie de $this->autonomie.";
    }
}
?>