<!DOCTYPE html>
<html>
    
    <body>
        <?php
        echo "<p>Le trajet d'id " . htmlspecialchars($id) . " a bien été supprimée. <br>"
                . "Il disparaitra de la liste dans les prochaines minutes.</p>" ;
        require (File::build_path(array("view", "trajet", "list.php")));
        
        ?>
    </body>
</html>

