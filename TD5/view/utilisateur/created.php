<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "<p>Nouvel utilisateur enregistré !</p>";
        require (File::build_path(array("view", "utilisateur", "list.php")));
            
        
        ?>
    </body>
    
    
</html>

