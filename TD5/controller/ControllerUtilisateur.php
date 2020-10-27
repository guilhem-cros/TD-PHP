<?php
require_once (File::build_path(array("model", "ModelUtilisateur.php")));

class ControllerUtilisateur {
    
    protected static $object = 'utilisateur';
    
     public static function readAll() {
        $tab_u = ModelUtilisateur::selectAll();     //appel au modèle pour gerer la BD
        $controller=('utilisateur');
        $view='list';
        $pagetitle='Liste des utilisateurs';
        require (File::build_path(array("view", "view.php")));  //"redirige" vers la vue
    }
    
    public static function read() {
        $pagetitle='Affichage info utilisateur';
        $login = $_GET["login"];
        $u = ModelUtilisateur::select($login);
        if ($u == null) {
            $controller=('utilisateur');
            $view='error';
            require (File::build_path(array("view", "view.php")));
        } else {
            $controller='utilisateur';
            $view='detail';
            require (File::build_path(array("view", "view.php")));
        }
    }
    
    public static function error(){
        $controller=('utilisateur');
        $view='error';
        $pagetitle='Erreur';
        require (File::build_path(array("view", "view.php")));         
    }
    
    public static function delete() {

        $tab_u = ModelUtilisateur::selectAll();     //appel au modèle pour gerer la BD
        $login = $_GET["login"];
        $u = ModelUtilisateur::select($login);
        if ($u == null) {
            $pagetitle = 'Utilisateur innexistante';
            $controller = ('utilisateur');
            $view = 'error';
            require (File::build_path(array("view", "view.php")));
        } else {
            ModelUtilisateur::delete($login);
            $controller = ('utilisateur');
            $view = 'delete';
            $pagetitle = 'Suppression de véhicule';
            require (File::build_path(array("view", "view.php")));
        }
    }
    
    public static function update(){
        $act = "updated";
        $form = "readonly";
        $pagetitle='Mise à jour infos utilisateur';
        $login = $_GET["login"];
        
        $u = ModelUtilisateur::select($login);
        $nom = $u->getNom();
        $prenom = $u->getPrenom();
        if ($u == null) {
            $controller=('utilisateur');
            $view='error';
            require (File::build_path(array("view", "view.php")));
        } else {
            $controller='utilisateur';
            $view='update';
            require (File::build_path(array("view", "view.php")));
        }
    }
    
    public static function create(){
        $login = "";
        $nom = "";
        $prenom = "";
        $form = "required";
        $act = "created";
        $pagetitle='Nouvel utilisateur';
        $controller='utilisateur';
        $view='update';
        require (File::build_path(array("view", "view.php")));
    }
    
    public static function updated(){
        $tab_u = ModelUtilisateur::selectAll();
        $pagetitle='Utilisateur mis à jour';
        $login = $_GET["login"];
        $data = array(
        "login" => $_GET["login"],
        "nom" => $_GET["nom"],
        "prenom" => $_GET["prenom"],
        );
        $u = ModelUtilisateur::select($login);
        $u->update($data);
        $controller="utilisateur";
        $view = 'updated';
        require (File::build_path(array("view", "view.php")));
    }
    
    public static function created(){
        $data = array(
        "login" => $_GET["login"],
        "nom" => $_GET["nom"],
        "prenom" => $_GET["prenom"],
        );
        $u = new ModelUtilisateur($_GET["nom"], $_GET["prenom"], $_GET["login"]);
        ModelUtilisateur::save($data);
        $tab_u = ModelUtilisateur::selectAll();
        $controller=('utilisateur');
        $view='created';
        $pagetitle='Liste des utilisateurs';
        require (File::build_path(array("view", "view.php")));
    }
    


}
