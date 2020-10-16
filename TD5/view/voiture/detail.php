<!DOCTYPE html>
<html>
    
    <body>
        <?php
        
        echo "<li> Marque : " . htmlspecialchars($v->getMarque()) . "</li>" .
                "<li> Couleur : " . htmlspecialchars($v->getCouleur()) . "</li>" .
                "<li> Immatriculation : " . htmlspecialchars($v->getImma()) . "</li>";
        ?>
    </body>
</html>