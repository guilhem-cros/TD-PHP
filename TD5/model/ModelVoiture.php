<?php

require_once File::build_path(array("model", "Model.php"));

class ModelVoiture extends Model {

    private $marque;
    private $couleur;
    private $immatriculation;
    protected static $object = "voiture";
    protected static $primary='immatriculation';

// un getter      
    public function getMarque() {
        return $this->marque;
    }

// un setter 
    public function setMarque($marque2) {
        $this->marque = $marque2;
    }

    /*
      // un constructeur
      public function __construct($m, $c, $i)  {
      $this->marque = $m;
      $this->couleur = $c;
      $this->immatriculation = $i;
      }
     */

    public function __construct($m = NULL, $c = NULL, $i = NULL) {
        if (!is_null($m) && !is_null($c) && !is_null($i)) {
// Si aucun de $m, $c et $i sont nuls,
// c'est forcement qu'on les a fournis
// donc on retombe sur le constructeur à 3 arguments
            $this->marque = $m;
            $this->couleur = $c;
            $this->immatriculation = $i;
        }
    }

// une methode d'affichage.
    /*
      public function afficher() {
      return "<li> Marque : " . $this->marque . "</li>" .
      "<li> Couleur : " . $this->couleur . "</li>" .
      "<li> Immatriculation : " . $this->immatriculation . "</li>";
      }
     */

    public function getImma() {
        return $this->immatriculation;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setImma($imma2) {
        if (strlen($imma2) > 8) {
            echo "Nombre de caractère supérieur à la limite (8).";
        } else {
            $this->immatriculation = $imma2;
        }
    }

    public function setCouleur($couleur2) {
        $this->couleur = $couleur2;
    }

    /*
    public static function getAllVoitures() {
        $rep = (Model::$pdo)->query("Select * From Voiture");
        $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
        $tab_voit = $rep->fetchAll();
        return $tab_voit;
    }
    */
    
    /*
    public static function getVoitureByImmat($immat) {
        $sql = "SELECT * from Voiture WHERE immatriculation=:nom_tag";
// Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            "nom_tag" => $immat,
                //nomdutag => valeur, ...
        );
// On donne les valeurs et on exécute la requête	 
        $req_prep->execute($values);

// On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
        $tab_voit = $req_prep->fetchAll();
// Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_voit))
            return false;
        return $tab_voit[0];
    }
    
     

    public function save() {
        try {
            $sql = "INSERT INTO Voiture(marque, couleur, immatriculation) VALUES(:marque, :couleur, :immat)";
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
                "immat" => $this->getImma(),
                "marque" => $this->getMarque(),
                "couleur" => $this->getCouleur(),
            );
            $req_prep->execute($values);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public static function deleteByImmat($immat) {
        try {
            $sql = "DELETE FROM Voiture WHERE immatriculation=:nom_tag";
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
                "nom_tag" => $immat,
            );
            $req_prep->execute($values);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    public function update($data) {
        try {
            $sql = "UPDATE Voiture
SET couleur=:tag_couleur,
marque=:tag_marque
WHERE immatriculation=:imma_tag";
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
                "imma_tag" => $data['immat'],
                "tag_marque" => $data['marque'],
                "tag_couleur" => $data['couleur'],
            );
            $req_prep->execute($values);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
     * 
     * */
     

}
?>

