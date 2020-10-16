<?php

require_once (File::build_path(array("model", "ModelVoiture.php"))); // chargement du modèle

class ControllerVoiture {
    

    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        $controller=('voiture');
        $view='list';
        $pagetitle='Liste des voitures';
        require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function read() {
        $pagetitle='Affichage info véhicule unique';
        $imma = $_GET["imma"];
        $v = ModelVoiture::getVoitureByImmat($imma);
        if ($v == null) {
            $controller=('voiture');
            $view='error';
            require (File::build_path(array("view", "view.php")));
        } else {
            $controller='voiture';
            $view='detail';
            require (File::build_path(array("view", "view.php")));
        }
    }
    public static function create(){
        $pagetitle='Création véhicule';
        $controller='voiture';
        $view='create';
        require (File::build_path(array("view", "view.php")));
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



