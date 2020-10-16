<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>
    <nav>
        <ul>
            <li><?php<a href =File::build_path(array("index")?action=readAll> Liste complète des véhicules</a></li>
            
            
        </ul>
    </nav>
    </head>
    <body>
<?php
// Si $controleur='voiture' et $view='list',
// alors $filepath="/chemin_du_site/view/voiture/list.php"

$filepath = File::build_path(array("view", $controller, "$view.php"));
require $filepath;
?>
    </body>
</html>


