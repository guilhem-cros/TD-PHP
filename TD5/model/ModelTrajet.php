<?php

require_once File::build_path(array("model", "Model.php"));

class ModelTrajet extends Model{
    private $id;
    private $depart;
    private $arrivee;
    private $date;
    private $nbPlaces;
    private $prix;
    private $conducteur_login;
    protected static $object = "trajet";
    protected static $primary='id';
    
    function __construct($id = null, $depart = null, $arrivee = null, $date = null, $nbPlaces = null, $prix = null, $conducteur_login = null) {
        if (!is_null($id) && !is_null($depart) && !is_null($arrivee) && !is_null($nbPlaces) && !is_null($prix) && !is_null($date) && !is_null($conducteur_login)) {
            $this->id = $id;
            $this->depart = $depart;
            $this->arrivee = $arrivee;
            $this->date = $date;
            $this->nbPlaces = $nbPlaces;
            $this->prix = $prix;
            $this->conducteur_login = $conducteur_login;
        }
    }

    function getId() {
        return $this->id;
    }

    function getDepart() {
        return $this->depart;
    }

    function getArrivee() {
        return $this->arrivee;
    }

    function getDate() {
        return $this->date;
    }

    function getNbPlaces() {
        return $this->nbPlaces;
    }

    function getPrix() {
        return $this->prix;
    }

    function getConducteur_login() {
        return $this->conducteur_login;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setDepart($depart): void {
        $this->depart = $depart;
    }

    function setArrivee($arrivee): void {
        $this->arrivee = $arrivee;
    }

    function setDate($date): void {
        $this->date = $date;
    }

    function setNbPlaces($nbPlaces): void {
        $this->nbPlaces = $nbPlaces;
    }

    function setPrix($prix): void {
        $this->prix = $prix;
    }

    function setConducteur_login($conducteur_login): void {
        $this->conducteur_login = $conducteur_login;
    }

    public static function getPassagers() {

        $table_name = static::$object;
        $class_name = "Model" . ucfirst($table_name);
        $rep = (Model::$pdo)->query("SELECT utilisateur_login FROM Passager JOIN Trajet ON Passager.trajet_id = Trajet.id");
        $rep->setFetchMode(PDO::FETCH_CLASS, $class_name);
        $tab = $rep->fetchAll();
        return $tab;
    }

}
