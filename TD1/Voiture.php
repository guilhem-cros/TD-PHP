<?php
class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }
     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }
      
  // un constructeur
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } 
           
  // une methode d'affichage.
  public function afficher() {
    return " Marque : " . $this->marque .
    "</br> Couleur : " . $this->couleur .
    "</br> Immatriculation : " . $this->immatriculation;
  }

  public function getImma(){
    return $this->immatriculation;
  }

  public function getCouleur(){
    return $this->couleur;
  }

  public function setImma($imma2){
    if (strlen($imma2) > 8){
      echo "Nombre de caractère supérieur à la limite (8).";
    }
    else{
      $this->immatriculation = $imma2;
    }
    
  }

  public function setCouleur($couleur2){
    $this->couleur = $couleur2;
  }

}
?>

