<?php

//FICHE LIVRES : 

//Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. 



class Livres {

    private string $Titre;
    private int $NombrePages;
    private int $AnneeParu;
    private float $Prix; 
    private Auteurs $auteurs; // A utiliser après lorsqu'on liera l'auteur au livre. 

    public function __construct(string $Titre, int $NombrePages, int $AnneeParu, float $Prix, Auteurs $auteurs) 
    {

        $this -> Titre = $Titre;
        $this -> NombrePages = $NombrePages;
        $this -> AnneeParu = $AnneeParu;
        $this -> Prix = $Prix;
        $this -> auteurs = $auteurs;
        $this -> auteurs -> AddBooks($this); // Servira à ajouter un livre dans une liste qui se trouve dans le fichier Auteurs.php => à utiliser après 

    }
// GETTERS 

    public function getTitre() 
    {
        return $this -> Titre;
    }

    public function getNombrePages() 
    {
        return $this -> NombrePages;
    }

    public function getAnneeParu() 
    {
        return $this -> AnneeParu;
    }

    public function getPrix() 
    {
        return $this -> Prix;   
    }

    public function getAuteur() 
    {
        return $this -> auteur;
    }

// SETTERS

    public function setTitre(string $Titre) 
    {
        $this -> Titre = $Titre;
    }

    public function setNombrePages( $NombrePages) 
    {
        $this -> NombrePages = $NombrePages;
    }

    public function setAnneeParu( $AnneeParu)
    {
        $this -> AnneeParu = $AnneeParu;
    }

    public function setPrix( $Prix)
    {
        $this -> Prix = $Prix;
    }

    public function setAuteur($auteurs)
    {
        $this -> auteurs = $auteurs;
    }

    // TO STRING ICI POUR PERMETTRE DANS L'INDEX d'afficher les infos du livre. 

    public function __toString() 
    {
        return $this -> Titre. " (".$this-> AnneeParu.") : ".$this-> NombrePages. " pages / ".$this -> Prix. " € <br>";
    }

}