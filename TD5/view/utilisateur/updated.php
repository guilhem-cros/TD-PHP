<!DOCTYPE html>
<html>
    
    <body>
        <?php
        
        echo "<p>Les modifications apportées à l'utilisateur " .  htmlspecialchars($login) . " ont été enregistrées</p>" ;
        require (File::build_path(array("view", "utilisateur", "list.php")));
        ?>
    </body>
</html>
