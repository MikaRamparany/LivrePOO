<h1> Exercice Livre POO </h1>

<h2>Résultat </h2>

<br>Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. Un auteur comporte un nom et un prénom.<br>
<br>Une méthode toString() sera appréciée dans chacune de vos classes.<br>
<br>Vous implémenterez une méthode afficherBibliographie() qui permettra d'afficher la bibliographie complète d'un auteur :<br>
<br> <br> 
<?php

spl_autoload_register(function ($class_name) 
{
    require_once $class_name . '.php';
});

$A1 = new Auteurs ("Stephen", "King");
$L1A1 = new Livres ( "Ca",1138,1986,"20",$A1);
$L2A1= new Livres ( "Simetierre",374,1983,15,$A1);
$L3A1= new Livres ( "Le Fléau", 1978, 823, 14, $A1);
$L4A1 = new Livres ( "Shining",1977, 447, 16, $A1);

$A1 -> afficherBibliographie();
