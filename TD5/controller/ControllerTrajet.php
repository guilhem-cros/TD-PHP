<?php
require_once (File::build_path(array("model", "ModelTrajet.php")));
class ControllerTrajet {
    protected static $object = 'trajet';
    
    public static function readAll() {
        $tab_t = ModelTrajet::selectAll();     //appel au modèle pour gerer la BD
        $controller=('trajet');
        $view='list';
        $pagetitle='Liste des trajets';
        require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }
    
    public static function read() {
        $pagetitle='Affichage infos trajet';
        $id = $_GET["id"];
        $t = ModelTrajet::select($id);
        if ($t == null) {
            $controller=('voiture');
            $view='error';
            require (File::build_path(array("view", "view.php")));
        } else {
            $controller='trajet';
            $view='detail';
            require (File::build_path(array("view", "view.php")));
        }
    }
    
    public static function delete() {

        $tab_t = ModelTrajet::selectAll();     //appel au modèle pour gerer la BD
        $id = $_GET["id"];
        $t = ModelTrajet::select($id);
        if ($t == null) {
            $pagetitle = 'Trajet innexistant';
            $controller = ('voiture');
            $view = 'error';
            require (File::build_path(array("view", "view.php")));
        } else {
            ModelTrajet::delete($id);
            $controller = ('trajet');
            $view = 'delete';
            $pagetitle = 'Suppression de trajet';
            require (File::build_path(array("view", "view.php")));
        }
    }
    
    public static function update(){
        $act = "updated";
        $form = "readonly";
        $pagetitle='Mise à jour du trajet';
        $id = $_GET["id"];
        
        $t = ModelTrajet::select($id);
        $depart = $t->getDepart();
        $arrivee = $t->getArrivee();
        $date = $t->getDate();
        $nbPlaces = $t->getNbPlaces();
        $loginC = $t->getConducteur_login();
        if ($t == null) {
            $controller=('utilisateur');
            $view='error';
            require (File::build_path(array("view", "view.php")));
        } else {
            $controller='trajet';
            $view='update';
            require (File::build_path(array("view", "view.php")));
        }
    }
    
    public static function create(){
        $id = "";
        $depart = "";
        $arrivee ="";
        $date ="";
        $nbPlaces = "";
        $loginC = "";
        $form = "required";
        $act = "created";
        $pagetitle='Nouveau trajet';
        $controller='trajet';
        $view='update';
        require (File::build_path(array("view", "view.php")));
    }
    
    public static function updated(){
        $tab_t = ModelTrajet::selectAll();
        $pagetitle='Trajet mis à jour';
        $id = $_GET["id"];
        $data = array(
        "id" => $_GET["id"],
        "depart" => $_GET["depart"],
        "arrivee" => $_GET["arrivee"],
            "date" => $_GET["date"],
            "nbPlaces" => $_GET["nbPlaces"],
            "conducteur_login" => $_GET["loginC"],
        );
        $t = ModelTrajet::select($id);
        $t->update($data);
        $controller="trajet";
        $view = 'updated';
        require (File::build_path(array("view", "view.php")));
    }
    
    public static function created() {
        $data = array(
            "id" => $_GET["id"],
            "depart" => $_GET["depart"],
            "arrivee" => $_GET["arrivee"],
            "date" => $_GET["date"],
            "nbPlaces" => $_GET["nbPlaces"],
            "conducteur_login" => $_GET["loginC"],
        );
        $u = ModelUtilisateur::select($_GET["loginC"]);
        if ($u == null) {
            $controller = ('trajet');
            $view = 'errorConducteur';
            require (File::build_path(array("view", "view.php")));
        } else {
            $t = new ModelTrajet($_GET["id"], $_GET["depart"], $_GET["arrivee"], $_GET["date"], $_GET["nbPlaces"], $_GET["loginC"]);
            ModelTrajet::save($data);
            $tab_t = ModelTrajet::selectAll();
            $controller = ('trajet');
            $view = 'created';
            $pagetitle = 'Liste des trajets';
            require (File::build_path(array("view", "view.php")));
        }
    }
    /*
    public static function passagers(){
        $pagetitle='Liste des passagers';
        $tab_t = ModelTrajet::getPassagers();
        $controller=('trajet');
        $view='listPass';
        require (File::build_path(array("view", "view.php")));  
    }
    */
    public static function error(){
        $controller=('trajet');
        $view='error';
        $pagetitle='Erreur';
        require (File::build_path(array("view", "view.php")));         
    }
    

}
