FICHE Auteurs 



<?php 

class Auteurs {

    private string $_nom;
    private string $_prenom;
    private array $Allbooks;

    public function __construct($_nom, $_prenom) 
    {
        $this ->_nom =$_nom;
        $this ->_prenom =$_prenom;
        // $this -> $Allbooks = []; / à activer quand je vais devoir lier à la feuille Livre.php après. 
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

    // public function getAllBooks() //!<----- A ACTIVER APRES AVOIR CRÉÉ LES FONCTIONS ET VARIABLES DE LA FEUILLE Livre.php pour lier les deux feuilles
    // {
    //     $this-> AllBooks;
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
    
    // public function setAllBooks()
    // {
    //     $this-> AllBooks;  //! <----- IDEM QUE GETTER All Books
    // }
}