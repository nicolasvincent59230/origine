<?php
require_once('Velo.php');

class VeloDeRoute extends Velo
{

    private $taille;

    private $materiaux;

    private $equipement;

    public function __construct($categorie, $couleur, $prix ,$taille ,$materiaux ,$equipement)
    {
        parent::__construct($categorie, $couleur, $prix);
        $this->taille = $taille;
        $this->materiaux = $materiaux;
        $this->equipement = $equipement;
    }

    public function getTaille()
    {
        return $this->taille;
    }

    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    public function getMateriaux()
    {
        return $this->materiaux;
    }

    public function getEquipement()
    {
        return $this->equipement;
    }

    public function setEquipement($equipement)
    {
        $this->equipement = $equipement;
    }

}