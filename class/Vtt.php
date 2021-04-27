<?php
require_once('Velo.php');

class Vtt extends Velo
{

    private $roue;

    private $derailleur;

    private $rayon;

    public function __construct($categorie, $couleur, $prix ,$roue ,$derailleur ,$rayon)
    {
        parent::__construct($categorie, $couleur, $prix);
        $this->roue = $roue;
        $this->derailleur = $derailleur;
        $this->rayon = $rayon;
    }

    public function getRoue()
    {
        return $this->roue;
    }

    public function setRoue($roue)
    {
        $this->roue = $roue;
    }

    public function getDerailleur()
    {
        return $this->derailleur;
    }

    public function setDerailleur($derailleur)
    {
        $this->derailleur = $derailleur;
    }

    public function getRayon()
    {
        return $this->rayon;
    }

    public function setRayon($rayon)
    {
        $this->rayon = $rayon;
    }
}