<?php

require_once File::build_path(array("controller", "ControllerVoiture.php"));
// On recupère l'action passée dans l'URL


if (!isset($_GET["action"])){
    $action = "readAll";
}
else if(!in_array($_GET["action"], get_class_methods('ControllerVoiture'))){
    $action = "error";
}
else{
    $action = $_GET["action"];
}





// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action(); 
?>


