<!DOCTYPE html>
<html>
    
    <body>
        <?php
        
        echo "<li> Marque : " . htmlspecialchars($v->getMarque()) . "</li>" .
                "<li> Couleur : " . htmlspecialchars($v->getCouleur()) . "</li>" .
                "<li> Immatriculation : " . htmlspecialchars($v->getImma()) . "</li>" .
                "<br><a href = https://webinfo.iutmontp.univ-montp2.fr/~crosg/PHP/TD-PHP/TD5/index.php?action=update&imma=" . rawurlencode($v->getImma()) . "> Mettre à jour véhicule </a>" .
                "<br><a href = https://webinfo.iutmontp.univ-montp2.fr/~crosg/PHP/TD-PHP/TD5/index.php?action=delete&imma=" . rawurlencode($v->getImma()) . "> Supprimer véhicule </a>"
        ?>
        
    </body>
</html>