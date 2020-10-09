<?php

require_once ('../model/ModelVoiture.php'); // chargement du modèle

class ControllerVoiture {

    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }

    public static function read() {
        $imma = $_GET["imma"];
        $v = ModelVoiture::getVoitureByImmat($imma);
        if ($v == null) {
            require ('../view/voiture/error.php');
        } else {
            require ('../view/voiture/detail.php');
        }
    }
    public static function create(){
        require ('../view/voiture/create.php');
    }
    
    public static function created(){
        $imma = $_GET["immatriculation"];
        $couleur = $_GET["Couleur"];
        $marque = $_GET["Marque"];
        $v = new ModelVoiture($marque, $couleur, $imma);
        $v->save();
        ControllerVoiture::readAll();
    }
}
?>



