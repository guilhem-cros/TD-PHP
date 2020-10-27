<?php

require_once File::build_path(array("model", "Model.php"));

class ModelUtilisateur extends Model{
    private $login;
    private $nom;
    private $prenom;
    protected static $object = "utilisateur";
    protected static $primary='login';


    public function __construct($l = NULL, $n = NULL, $p = NULL) {
        if (!is_null($l) && !is_null($n) && !is_null($p)) {
// Si aucun de $m, $c et $i sont nuls,
// c'est forcement qu'on les a fournis
// donc on retombe sur le constructeur à 3 arguments
            $this->login = $l;
            $this->nom = $n;
            $this->prenom = $p;
        }
    }
    
    function getLogin() {
        return $this->login;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function setLogin($login): void {
        $this->login = $login;
    }

    function setNom($nom): void {
        $this->nom = $nom;
    }

    function setPrenom($prenom): void {
        $this->prenom = $prenom;
    }
    
    /*
    public static function getAllUtilisateurs() {
        $rep = (Model::$pdo)->query("Select * From Utilisateur");
        $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelUtilisateur');
        $tab_util = $rep->fetchAll();
        return $tab_util;
    }
    */
    
 
    
}
