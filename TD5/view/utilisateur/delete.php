<!DOCTYPE html>
<html>
    
    <body>
        <?php
        echo "<p>L'utilisateur de login " . htmlspecialchars($login) . " a bien été supprimée. <br>"
                . "Il disparaitra de la liste d'utilisateurs dans les prochaines minutes.</p>" ;
        require (File::build_path(array("view", "utilisateur", "list.php")));
        
        ?>
    </body>
</html>
