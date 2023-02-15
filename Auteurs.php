<?php 
//FICHE Auteurs 

//Un auteur comporte un nom et un prénom.



class Auteurs {

    private string $_nom;
    private string $_prenom;
    private array $_allbooks;

    public function __construct($_nom, $_prenom) 
    {
        $this ->_nom =$_nom;
        $this ->_prenom =$_prenom;
        $this -> _allbooks = []; //à activer quand je vais devoir lier à la feuille Livre.php après. 
    }   

    //GETTERS 
    public function get_nom()
    {
        return $this->_nom;
    } 

    public function get_prenom ()
    {
        return $this->_prenom;
    } 

    // public function get_allBooks() //<----- A ACTIVER APRES AVOIR CRÉÉ LES FONCTIONS ET VARIABLES DE LA FEUILLE Livre.php pour lier les deux feuilles
    // {
    //     $this-> _allBooks;
    // }
    
    // SETTERS 

    public function set_nom($_nom)
    {
         $this->_nom=$_nom;
    } 

    public function set_prenom($_prenom)
    {
         $this->_prenom=$_prenom;
    }
    
    // public function set_allBooks($_allbooks)
    // {
    //     $this->_allBooks= $_allbooks ;// <----- IDEM QUE GETTER All Books
    //     return $this;
    // }

    //FONCTIONS AFFICHER NOM ET PRENOM 


    public function __toString()
    {
        return $this -> _prenom. " " . $this-> _nom. " ";
    } 

    //CREATION FONCTION POUR AFFICHER BIBILOGRAPHIE D'UN AUTEUR:

    public function Addbooks($Thebook){
        $this->_allbooks[] = $Thebook;
    }

    public function afficherBibliographie()
    {
        echo  "<br> <br> Bibliographie de ". $this -> _nom. " : ". $this -> _prenom ."<br>";

        foreach ($this->_allbooks as $Livres)
        {
           echo "<br> " . $Livres->getTitre() . " ";
           echo "(" .$Livres->getNombrePages() . ") : ";
           echo $Livres->getAnneeParu() . " pages ". " / ";
           echo $Livres->getPrix() . " €";
        }
        
    }
}   