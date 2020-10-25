<!DOCTYPE html>
<html>
    
    <body>
        <?php
        echo "<p>Les modifications apportées sur la voiture immatriculée " .  htmlspecialchars($imma) . " ont été enregistrées</p>" ;
        require (File::build_path(array("view", "voiture", "list.php")));
        ?>
    </body>
</html>
