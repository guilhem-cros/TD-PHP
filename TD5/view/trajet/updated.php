<!DOCTYPE html>
<html>
    
    <body>
        <?php
        
        echo "<p>Les modifications apportées au trajet numéro " .  htmlspecialchars($id) . " ont été enregistrées</p>" ;
        require (File::build_path(array("view", "trajet", "list.php")));
        ?>
    </body>
</html>