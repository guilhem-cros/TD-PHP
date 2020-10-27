<?php

require_once (File::build_path(array("model", "ModelVoiture.php"))); // chargement du modèle

class ControllerVoiture {
    
    protected static $object = 'voiture';
    

    public static function readAll() {
        $tab_v = ModelVoiture::selectAll();     //appel au modèle pour gerer la BD
        $controller=('voiture');
        $view='list';
        $pagetitle='Liste des voitures';
        require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }

    public static function read() {
        $pagetitle='Affichage info véhicule unique';
        $imma = $_GET["imma"];
        $v = ModelVoiture::select($imma);
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
        $imma = "";
        $color = "";
        $marque = "";
        $form = "required";
        $act = "created";
        $pagetitle='Création véhicule';
        $controller='voiture';
        $view='update';
        require (File::build_path(array("view", "view.php")));
    }
    
    public static function created(){
        $data = array(
        "immatriculation" => $_GET["immatriculation"],
        "marque" => $_GET["Marque"],
        "couleur" => $_GET["Couleur"],
        );
        $v = new ModelVoiture($_GET["Marque"], $_GET["Couleur"], $_GET["immatriculation"]);
        ModelVoiture::save($data);
        $tab_v = ModelVoiture::selectAll();
        $controller=('voiture');
        $view='created';
        $pagetitle='Liste des voitures';
        require (File::build_path(array("view", "view.php")));
    }
    
    public static function error(){
        $controller=('voiture');
        $view='error';
        $pagetitle='Erreur';
        require (File::build_path(array("view", "view.php")));         
    }
    
    public static function delete(){
       
        $tab_v = ModelVoiture::selectAll();     //appel au modèle pour gerer la BD
        $imma = $_GET["imma"];
        $v = ModelVoiture::select($imma);
        if ($v == null) {
            $pagetitle = 'Immatriculation innexistante';
            $controller=('voiture');
            $view='error';
            require (File::build_path(array("view", "view.php")));
        }
        else{
            ModelVoiture::delete($imma);
        $controller=('voiture');
        $view='deleted';
        $pagetitle='Suppression de véhicule';
        require (File::build_path(array("view", "view.php")));
        }
        
    }
    
    public static function update(){
        $act = "updated";
        $form = "readonly";
        $pagetitle='Mise à jour infos véhicule';
        $imma = $_GET["imma"];
        $v = ModelVoiture::select($imma);
        $color = $v->getCouleur();
        $marque = $v->getMarque();
        if ($v == null) {
            $controller=('voiture');
            $view='error';
            require (File::build_path(array("view", "view.php")));
        } else {
            $controller='voiture';
            $view='update';
            require (File::build_path(array("view", "view.php")));
        }
    }
    
    public static function updated(){
        $tab_v = ModelVoiture::selectAll();
        $pagetitle='Véhicule mis à jour';
        $imma = $_GET["immatriculation"];
        $data = array(
        "immatriculation" => $_GET["immatriculation"],
        "marque" => $_GET["Marque"],
        "couleur" => $_GET["Couleur"],
        );
        $v = ModelVoiture::select($imma);
        $v->update($data);
        $controller="voiture";
        $view = 'updated';
        require (File::build_path(array("view", "view.php")));
    }
}
?>



