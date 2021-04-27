<?php

class Velo
{
    private $categorie;

    private $couleur;

    private $prix;

    public function __construct($categorie,$couleur,$prix)
    {
        $this->categorie = $categorie;
        $this->couleur = $couleur;
        $this->prix = $prix;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
}