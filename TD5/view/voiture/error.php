<!DOCTYPE html>
<html>
    
    <body>
        <?php
        $immaHtml = htmlspecialchars($imma);
        $immaUrl = rawurlencode($imma);
        echo "Aucune voiture immatriculée " . $immaHtml . " n'est repertoriée." ;
        ?>
    </body>
</html>