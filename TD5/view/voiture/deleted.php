<!DOCTYPE html>
<html>
    
    <body>
        <?php
        echo "<p>La voiture d'immatriculation " . htmlspecialchars($imma) . " a bien été supprimée. <br>"
                . "Elle disparaitra de la liste de véhicules dans les prochaines minutes.</p>" ;
        require (File::build_path(array("view", "voiture", "list.php")));
        
        ?>
    </body>
</html>

